/**
 * Author and copyright: Stefan Haack (https://shaack.com)
 * Repository: https://github.com/shaack/bootstrap-input-spinner
 * License: MIT, see file 'LICENSE'
 */

(function ($) {
    "use strict";

    let triggerKeyPressed = false;
    const originalVal = $.fn.val;
    $.fn.val = function (value) {
        if (arguments.length >= 1) {
            if (this[0] && this[0]["bootstrap-input-spinner"] && this[0].setValue) {
                const element = this[0];
                setTimeout(function () {
                    element.setValue(value)
                })
            }
        }
        return originalVal.apply(this, arguments)
    };

    $.fn.InputSpinner = $.fn.inputSpinner = function (options) {

        const config = {
            decrementButton: "<strong>-</strong>", // button text
            incrementButton: "<strong>+</strong>", // ..
            groupClass: "test quantity", // css class of the resulting input-group
            buttonsClass: "btn-primary",
            buttonsWidth: "2.5rem",
            textAlign: "center",
            autoDelay: 500, // ms holding before auto value change
            autoInterval: 100, // speed of auto value change
            boostThreshold: 10, // boost after these steps
            boostMultiplier: "auto" // you can also set a constant number as multiplier
        };
        for (let option in options) {
            config[option] = options[option]
        }

        const html = '<div class="input-group ' + config.groupClass + '" style="border: black solid 1px; border-radius: .25rem">' +

            '<div class="input-group-prepend">' +
            '<button onclick="sum()" style="min-width: ' + config.buttonsWidth + '" class="btn btn-decrement ' + config.buttonsClass + '" type="button">' + config.decrementButton + '</button>' +
            '</div>' +
            '<input oninput="sum()" type="text" inputmode="decimal" style="text-align: ' + config.textAlign + '" class="form-control"/>' +
            '<div class="input-group-append">' +
            '<button onclick="sum()" style="min-width: ' + config.buttonsWidth + '" class="btn btn-increment ' + config.buttonsClass + '" type="button">' + config.incrementButton + '</button>' +
            '</div>' +
            '</div>';

        const locale = navigator.language || "en-US";

        this.each(function () {

            const $original = $(this);
            $original[0]["bootstrap-input-spinner"] = true;
            $original.hide();

            let autoDelayHandler = null;
            let autoIntervalHandler = null;
            const autoMultiplier = config.boostMultiplier === "auto";
            let boostMultiplier = autoMultiplier ? 1 : config.boostMultiplier;

            const $inputGroup = $(html);
            const $buttonDecrement = $inputGroup.find(".btn-decrement");
            const $buttonIncrement = $inputGroup.find(".btn-increment");
            const $input = $inputGroup.find("input");

            let min = null;
            let max = null;
            let step = null;
            let stepMax = null;
            let decimals = null;
            let digitGrouping = null;
            let numberFormat = null;

            updateAttributes();

            let value = parseFloat($original[0].value);
            let boostStepsCount = 0;

            const prefix = $original.attr("data-prefix") || "";
            const suffix = $original.attr("data-suffix") || "";

            if (prefix) {
                const prefixElement = $('<span class="input-group-text">' + prefix + '</span>');
                $inputGroup.find(".input-group-prepend").append(prefixElement)
            }
            if (suffix) {
                const suffixElement = $('<span class="input-group-text">' + suffix + '</span>');
                $inputGroup.find(".input-group-append").prepend(suffixElement)
            }

            $original[0].setValue = function (newValue) {
                setValue(newValue)
            };

            const observer = new MutationObserver(function () {
                updateAttributes();
                setValue(value, true)
            });
            observer.observe($original[0], {attributes: true});

            $original.after($inputGroup);

            setValue(value);

            $input.on("paste input change focusout", function (event) {
                let newValue = $input[0].value;
                const focusOut = event.type === "focusout";
                newValue = parseLocaleNumber(newValue);
                setValue(newValue, focusOut);
                dispatchEvent($original, event.type)
            });

            onPointerDown($buttonDecrement[0], function () {
                stepHandling(-step)
            });
            onPointerDown($buttonIncrement[0], function () {
                stepHandling(step)
            });
            onPointerUp(document.body, function () {
                resetTimer()
            });

            function setValue(newValue, updateInput) {
                if (updateInput === undefined) {
                    updateInput = true
                }
                if (isNaN(newValue) || newValue === "") {
                    $original[0].value = "";
                    if (updateInput) {
                        $input[0].value = ""
                    }
                    value = NaN
                } else {
                    newValue = parseFloat(newValue);
                    newValue = Math.min(Math.max(newValue, min), max);
                    newValue = Math.round(newValue * Math.pow(10, decimals)) / Math.pow(10, decimals);
                    $original[0].value = newValue;
                    if (updateInput) {
                        $input[0].value = numberFormat.format(newValue)
                    }
                    value = newValue
                }
            }

            function dispatchEvent($element, type) {
                if (type) {
                    setTimeout(function () {
                        let event;
                        if (typeof (Event) === 'function') {
                            event = new Event(type, {bubbles: true})
                        } else { // IE
                            event = document.createEvent('Event');
                            event.initEvent(type, true, true)
                        }
                        $element[0].dispatchEvent(event)
                    })
                }
            }

            function stepHandling(step) {
                if (!$input[0].disabled && !$input[0].readOnly) {
                    calcStep(step);
                    resetTimer();
                    autoDelayHandler = setTimeout(function () {
                        autoIntervalHandler = setInterval(function () {
                            if (boostStepsCount > config.boostThreshold) {
                                if (autoMultiplier) {
                                    calcStep(step * parseInt(boostMultiplier, 10));
                                    if (boostMultiplier < 100000000) {
                                        boostMultiplier = boostMultiplier * 1.1
                                    }
                                    if (stepMax) {
                                        boostMultiplier = Math.min(stepMax, boostMultiplier)
                                    }
                                } else {
                                    calcStep(step * boostMultiplier)
                                }
                            } else {
                                calcStep(step)
                            }
                            boostStepsCount++
                        }, config.autoInterval)
                    }, config.autoDelay)
                }
            }

            function calcStep(step) {
                if (isNaN(value)) {
                    value = 0
                }
                setValue(Math.round(value / step) * step + step);
                dispatchEvent($original, "input");
                dispatchEvent($original, "change")
            }

            function resetTimer() {
                boostStepsCount = 0;
                boostMultiplier = boostMultiplier = autoMultiplier ? 1 : config.boostMultiplier;
                clearTimeout(autoDelayHandler);
                clearTimeout(autoIntervalHandler)
            }

            function updateAttributes() {
                // copy properties from original to the new input
                $input.prop("required", $original.prop("required"));
                $input.prop("placeholder", $original.prop("placeholder"));
                $input.attr("inputmode", $original.attr("inputmode") || "decimal");
                const disabled = $original.prop("disabled");
                const readonly = $original.prop("readonly");
                $input.prop("disabled", disabled);
                $input.prop("readonly", readonly);
                $buttonIncrement.prop("disabled", disabled || readonly);
                $buttonDecrement.prop("disabled", disabled || readonly);
                if (disabled || readonly) {
                    resetTimer()
                }
                const originalClass = $original.prop("class");
                let groupClass = "";
                // sizing
                if (/form-control-sm/g.test(originalClass)) {
                    groupClass = "input-group-sm"
                } else if (/form-control-lg/g.test(originalClass)) {
                    groupClass = "input-group-lg"
                }
                const inputClass = originalClass.replace(/form-control(-(sm|lg))?/g, "");
                $inputGroup.prop("class", "input-group " + groupClass + " " + config.groupClass);
                $input.prop("class", "form-control " + inputClass);

                // update the main attributes
                min = parseFloat($original.prop("min")) || 0;
                max = isNaN($original.prop("max")) || $original.prop("max") === "" ? Infinity : parseFloat($original.prop("max"));
                step = parseFloat($original.prop("step")) || 1;
                stepMax = parseInt($original.attr("data-step-max")) || 0;
                const newDecimals = parseInt($original.attr("data-decimals")) || 0;
                const newDigitGrouping = !($original.attr("data-digit-grouping") === "false");
                if (decimals !== newDecimals || digitGrouping !== newDigitGrouping) {
                    decimals = newDecimals;
                    digitGrouping = newDigitGrouping;
                    numberFormat = new Intl.NumberFormat(locale, {
                        minimumFractionDigits: decimals,
                        maximumFractionDigits: decimals,
                        useGrouping: digitGrouping
                    })
                }
            }

            function parseLocaleNumber(stringNumber) {
                const numberFormat = new Intl.NumberFormat(locale);
                const thousandSeparator = numberFormat.format(1111).replace(/1/g, '');
                const decimalSeparator = numberFormat.format(1.1).replace(/1/g, '');
                return parseFloat(stringNumber
                    .replace(new RegExp('\\' + thousandSeparator, 'g'), '')
                    .replace(new RegExp('\\' + decimalSeparator), '.')
                )
            }
        });

        return this
    };

    function onPointerUp(element, callback) {
        element.addEventListener("mouseup", function (e) {
            callback(e)
        });
        element.addEventListener("touchend", function (e) {
            callback(e)
        });
        element.addEventListener("keyup", function (e) {
            if ((e.keyCode === 32 || e.keyCode === 13)) {
                triggerKeyPressed = false;
                callback(e)
            }
        })
    }

    function onPointerDown(element, callback) {
        element.addEventListener("mousedown", function (e) {
            e.preventDefault();
            callback(e)
        });
        element.addEventListener("touchstart", function (e) {
            if (e.cancelable) {
                e.preventDefault()
            }
            callback(e)
        });
        element.addEventListener("keydown", function (e) {
            if ((e.keyCode === 32 || e.keyCode === 13) && !triggerKeyPressed) {
                triggerKeyPressed = true;
                callback(e)
            }
        })
    }

}(jQuery));
