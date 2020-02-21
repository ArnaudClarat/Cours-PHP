<?php
/* Smarty version 3.1.33, created on 2020-02-21 10:41:10
  from 'C:\wamp64\www\bacinfo2_panier\views\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4fb3c69b8321_05514651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f1f9ed6f62cd859f5ebc10a6246306484858658' => 
    array (
      0 => 'C:\\wamp64\\www\\bacinfo2_panier\\views\\templates\\contact.tpl',
      1 => 1582281356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4fb3c69b8321_05514651 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <br>
            <?php if ($_smarty_tpl->tpl_vars['worked']->value === 0) {?>
                <form method="post" id="contact" action="">
                    <div class="form-row">
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
                    <div class="form-row">
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
                                    
                                        <input class="form-control" type="tel" pattern="[0-9]{10}" id="phoneNumber" name="phoneNumber" required>
                                    
                                    <small class="form-text text-muted">
                                        Format : 0123456789
                                    </small>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-row">
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
                    <div class="form-row">
                        <fieldset class="form-group">
                            <label for="message">Message :</label>
                            <div>
                                <textarea oninput="count()" id="message" name="message" minlength="10" maxlength="150" class="form-control" rows="4" required></textarea>
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
            <?php } elseif ($_smarty_tpl->tpl_vars['worked']->value === 1) {?>
                1
            <?php } elseif ($_smarty_tpl->tpl_vars['worked']->value === 2) {?>
                2
            <?php }?>
        </div>
    </div>
</div>
<?php }
}
