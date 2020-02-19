<?php
/* Smarty version 3.1.33, created on 2020-02-19 16:01:37
  from 'C:\wamp64\www\bacinfo2_panier\views\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4d5be1439ca1_12362810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f1f9ed6f62cd859f5ebc10a6246306484858658' => 
    array (
      0 => 'C:\\wamp64\\www\\bacinfo2_panier\\views\\templates\\contact.tpl',
      1 => 1582128091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4d5be1439ca1_12362810 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
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
                            
                                <input type="tel" pattern="[0-9]{10}" id="phoneNumber" name="phoneNumber" required>
                            
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
</div><?php }
}
