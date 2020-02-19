<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <br>
            <form method="post" id="contact" action="">
                <div>
                    <fieldset class="form-group">
                        <label for="nom, prenom">Name and forename :</label>
                        <div>
                            <input type="text" id="nom" name="nom" required>
                            <input type="text" id="prenom" name="prenom" required>
                        </div>
                    </fieldset class="form-group">
                </div>
                <div>
                    <fieldset class="form-group">
                        <label for="email">Email :</label>
                        <div>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <label></label>
                    </fieldset class="form-group">
                </div>
                <div>
                    <fieldset class="form-group">
                        <label for="phoneNumber">Phone :</label>
                        <div>
                            {literal}
                                <input type="tel" pattern="[0-9]{10}" id="phoneNumber" name="phoneNumber" required>
                            {/literal}
                        </div>
                    </fieldset class="form-group">
                </div>
                <div>
                    <fieldset class="form-group">
                        <label for="subject">Message subject :</label>
                        <div>
                            <select id="subject" name="subject" required>
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
                            <textarea id="message" name="message" minlength="10" maxlength="150" class="form-control" rows="4" required></textarea>
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