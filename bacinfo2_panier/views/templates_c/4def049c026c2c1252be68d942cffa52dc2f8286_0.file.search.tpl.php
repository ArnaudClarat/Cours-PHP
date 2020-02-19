<?php
/* Smarty version 3.1.33, created on 2020-02-19 21:57:11
  from 'C:\wamp64\www\bacinfo2_panier\views\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4daf37097285_96516170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4def049c026c2c1252be68d942cffa52dc2f8286' => 
    array (
      0 => 'C:\\wamp64\\www\\bacinfo2_panier\\views\\templates\\search.tpl',
      1 => 1582149429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4daf37097285_96516170 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <br>
    <div class="row">
        <h2>Les résultats pour : "<?php echo $_smarty_tpl->tpl_vars['needle']->value;?>
"</h2>
    </div>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <div class="card col-md-4" style="width: 18rem;">
                <img src="./views/img/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
</h5>
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value->getShortDesc();?>
</p>
                    <a href="product?id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
">Plus d'info..</a>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
