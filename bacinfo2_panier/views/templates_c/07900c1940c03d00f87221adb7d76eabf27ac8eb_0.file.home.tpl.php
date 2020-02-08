<?php
/* Smarty version 3.1.33, created on 2020-02-08 09:35:38
  from 'C:\wamp64\www\bacinfo2_panier\views\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3e80ea45a701_36959356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07900c1940c03d00f87221adb7d76eabf27ac8eb' => 
    array (
      0 => 'C:\\wamp64\\www\\bacinfo2_panier\\views\\templates\\home.tpl',
      1 => 1581154122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3e80ea45a701_36959356 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <br>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <div class="card col-md-4" style="width: 18rem;">
                <img src="./views/img/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
</h5>
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value->getShortDesc();?>
</p>
                    <form action="./product" method="post">
                        <input type="submit" class="btn btn-primary" value="Add to basket">
                        <input type="hidden" name="id" id="bla" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
">
                    </form>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
