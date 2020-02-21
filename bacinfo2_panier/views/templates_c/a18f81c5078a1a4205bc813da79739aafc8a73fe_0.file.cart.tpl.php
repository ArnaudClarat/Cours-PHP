<?php
/* Smarty version 3.1.33, created on 2020-02-21 09:41:46
  from 'C:\wamp64\www\bacinfo2_panier\views\templates\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4fa5da388257_60399816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a18f81c5078a1a4205bc813da79739aafc8a73fe' => 
    array (
      0 => 'C:\\wamp64\\www\\bacinfo2_panier\\views\\templates\\cart.tpl',
      1 => 1582232343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4fa5da388257_60399816 (Smarty_Internal_Template $_smarty_tpl) {
?>cart

<?php if ($_smarty_tpl->tpl_vars['newProduct']->value === 0) {?>
    <p>Veuillez vous connecter</p>
<?php } elseif ($_smarty_tpl->tpl_vars['newProduct']->value === 1) {?>
    <p>Voici votre panier</p>
<?php } else { ?>
    <p>Produit ajouté</p>
<?php }?>

<?php echo var_dump($_smarty_tpl->tpl_vars['newProduct']->value);
}
}
