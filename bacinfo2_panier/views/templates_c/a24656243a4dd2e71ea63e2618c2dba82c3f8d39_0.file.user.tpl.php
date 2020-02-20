<?php
/* Smarty version 3.1.33, created on 2020-02-20 14:36:35
  from 'C:\wamp64\www\bacinfo2_panier\views\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e9973b79da8_87926941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a24656243a4dd2e71ea63e2618c2dba82c3f8d39' => 
    array (
      0 => 'C:\\wamp64\\www\\bacinfo2_panier\\views\\templates\\user.tpl',
      1 => 1582209392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e9973b79da8_87926941 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row justify-content-center">
    <div class="col-md-4">
        <br><br>
        <form method="post" id="connect" action="user">
            <div class="form-row">
                <div class="col-md-6">
                    <fieldset class="form-group">
                        <label for="pseudo">Pseudo :</label>
                        <div>
                            <input class="form-control" type="text" id="pseudo" name="pseudo" required>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset class="form-group">
                        <label for="passwd">Password :</label>
                        <div>
                            <input class="form-control" type="text" id="passwd" name="passwd" required>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary" name="submit">
                    Connect
                </button>
            </div>
            <br>
            <div>
                Never submit sensitive information, such as credit card numbers or passwords.
            </div>
        </form>
    </div>
</div><?php }
}
