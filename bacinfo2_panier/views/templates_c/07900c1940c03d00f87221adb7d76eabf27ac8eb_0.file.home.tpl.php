<?php
/* Smarty version 3.1.33, created on 2020-01-30 16:37:30
  from 'C:\wamp64\www\bacinfo2_panier\views\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e33064a5fd752_19808053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07900c1940c03d00f87221adb7d76eabf27ac8eb' => 
    array (
      0 => 'C:\\wamp64\\www\\bacinfo2_panier\\views\\templates\\home.tpl',
      1 => 1580402248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e33064a5fd752_19808053 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <br>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
            <div class="card mb-1" style="width: 18rem;">
                <img src="./views/img/products/<?php echo $_smarty_tpl->tpl_vars['data']->value['id_prod'];?>
" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['data']->value['name_prod'];?>
</h5>
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['data']->value['short-desc_prod'];?>
</p>
                    <a href="#" class="btn btn-primary">Add to basket</a>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
