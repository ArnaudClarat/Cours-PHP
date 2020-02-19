<?php
/* Smarty version 3.1.33, created on 2020-02-19 15:19:14
  from 'C:\wamp64\www\bacinfo2_panier\views\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4d51f216a520_39633359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f1f9ed6f62cd859f5ebc10a6246306484858658' => 
    array (
      0 => 'C:\\wamp64\\www\\bacinfo2_panier\\views\\templates\\contact.tpl',
      1 => 1582125552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4d51f216a520_39633359 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <br>
            <form method="post" id="contact" action="">
                <div>
                    <fieldset class="form-group">
                        <label>Name and forename :</label>
                        <div>
                            <input type="text">
                            <input type="text">
                        </div>
                        <label></label>
                    </fieldset class="form-group">
                </div>
                <div>
                    <fieldset class="form-group">
                        <label>Email :</label>
                        <div>
                            <input type="email">
                        </div>
                        <label></label>
                    </fieldset class="form-group">
                </div>
                <div>
                    <fieldset class="form-group">
                        <label>Phone :</label>
                        <div>
                            <input>
                        </div>
                        <label></label>
                    </fieldset class="form-group">
                </div>
                <div>
                    <fieldset class="form-group">
                        <label>Message subject :</label>
                        <div>
                            <select>
                                <option value="Request" data-index="0">Request</option>
                                <option value="Proposal" data-index="1">Proposal</option>
                                <option value="Suggestion" data-index="2">Suggestion</option>
                                <option value="Other" data-index="3">Other</option>
                            </select>
                        </div>
                    </fieldset class="form-group">
                </div>
                <div>
                    <fieldset class="form-group">
                        <label>Message :</label>
                        <div>
                            <textarea rows="4"></textarea>
                        </div>
                    </fieldset class="form-group">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">
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
