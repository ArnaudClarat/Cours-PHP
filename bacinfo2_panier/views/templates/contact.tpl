<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <br>
            <form method="post" id="contact" action="">
                <div class="row">
                    <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="nom">Name :</label>
                            <div>
                                <input class="form-control" type="text" id="nom" name="nom" required>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="prenom">Forename :</label>
                            <div>
                                <input class="form-control" type="text" id="prenom" name="prenom" required>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <fieldset class="form-group">
                            <label for="email">Email :</label>
                            <div>
                                <input class="form-control" type="email" id="email" name="email" required>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-4">
                        <fieldset class="form-group">
                            <label for="phoneNumber">Phone :</label>
                            <div>
                                {literal}
                                    <input class="form-control" type="tel" pattern="[0-9]{10}" id="phoneNumber" name="phoneNumber" required>
                                {/literal}
                                <small class="form-text text-muted">
                                    Format : 0123456789
                                </small>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div>
                    <fieldset class="form-group">
                        <label for="subject">Message subject :</label>
                        <div>
                            <select class="form-control" id="subject" name="subject" required>
                                <option value="Request">Request</option>
                                <option value="Proposal">Proposal</option>
                                <option value="Suggestion">Suggestion</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </fieldset class="form-group">
                </div>
                <div>
                    <fieldset class="form-group">
                        <label for="message">Message :</label>
                        <div>
                            <textarea class="form-control" oninput="count()" id="message" name="message" minlength="10" maxlength="150" class="form-control" rows="4" required></textarea>
                            <div id="r"></div>
                        </div>
                    </fieldset class="form-group">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" name="submit">
                        <span>Send Message</span>
                    </button>
                </div>
                <br>
                <div>
                    Never submit sensitive information, such as credit card numbers or passwords.
                </div>
            </form>
        </div>
    </div>
</div>
