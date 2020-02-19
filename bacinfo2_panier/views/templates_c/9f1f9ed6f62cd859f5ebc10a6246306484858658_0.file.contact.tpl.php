<?php
/* Smarty version 3.1.33, created on 2020-02-19 14:42:53
  from 'C:\wamp64\www\bacinfo2_panier\views\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4d496d34faf6_12066957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f1f9ed6f62cd859f5ebc10a6246306484858658' => 
    array (
      0 => 'C:\\wamp64\\www\\bacinfo2_panier\\views\\templates\\contact.tpl',
      1 => 1582123371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4d496d34faf6_12066957 (Smarty_Internal_Template $_smarty_tpl) {
?>contact



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" id="form" action="">
                <div>
                    <div>
                        <label>Name and forename</label>
                        <dt></dt>
                        <div>
                            <input type="text">
                            <input type="text">
                        </div>
                        <label></label>
                    </div>
                </div>
                <div>
                    <div>
                        <label>Email</label>
                        <dt></dt>
                        <div>
                            <input type="email">
                        </div>
                        <label></label>
                    </div>
                </div>
                <div>
                    <div>
                        <label>Phone</label>
                        <dt></dt>
                        <div>
                            <input>
                        </div>
                        <label></label>
                    </div>
                </div>
                <div>
                    <div>
                        <label>Message subject</label>
                        <dt></dt>
                        <div>
                            <div>
                                <select>
                                    <option value="Request" data-index="0">Request</option>
                                    <option value="Proposal" data-index="1">Proposal</option>
                                    <option value="Suggestion" data-index="2">Suggestion</option>
                                    <option value="Other" data-index="3">Other</option>
                                </select>
                            </div>
                        </div>
                        <label></label>
                    </div>
                </div>
                <div>
                    <div>
                        <label>Message</label>
                        <dt></dt>
                        <div>
                            <textarea rows="4"></textarea>
                        </div>
                        <div>
                        <label></label>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit">
                        <span>Send Message</span>
                    </button>
                </div>
                <div>
                    <div>
                            <span class="i123-empty-page"></span>
                    </div>
                </div>
                <div>
                    <div data-role="sensitive-information">
                        Never submit sensitive information, such as credit card numbers or passwords.
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
