<?php
/* Smarty version 3.1.33, created on 2020-02-22 10:17:47
  from 'C:\wamp64\www\bacinfo2_panier\views\templates\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e50ffcb013dd8_93564368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a18f81c5078a1a4205bc813da79739aafc8a73fe' => 
    array (
      0 => 'C:\\wamp64\\www\\bacinfo2_panier\\views\\templates\\cart.tpl',
      1 => 1582366664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e50ffcb013dd8_93564368 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <?php if ($_smarty_tpl->tpl_vars['newProduct']->value === 0) {?>
        <br>
        <h2><a href="user">Connectez-vous</a></h2>
    <?php } elseif ($_smarty_tpl->tpl_vars['newProduct']->value === 1) {?>
        <br>
        <h2>Voici votre panier</h2><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Reference</th>
                    <th scope="col">Désignation</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Sous-total</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panier']->value->getArr(), 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <?php echo var_dump($_smarty_tpl->tpl_vars['product']->value);?>

                <tr>
                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getId();?>
</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getName();?>
</td>
                    <td class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getPrice();?>
€</td>
                    <td>
                        <input class="form-control-primary quantity" type="number" value="<?php echo $_smarty_tpl->tpl_vars['product']->value[1][0];?>
" min="1" max="100" step="1" name="quantity"/>
                    </td>
                    <td><span id="sum"></span>€</td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    <?php } elseif ($_smarty_tpl->tpl_vars['newProduct']->value === 2) {?>
        <p>Produit ajouté</p>
        <a href="<?php echo $_SERVER['HTTP_REFERER'];?>
">Retour au produit</a>
    <?php } else { ?>
        <p>Une erreur est survenue.</p>
        <a href="">Retour à l'acceuil</a>
    <?php }?>
</div><?php }
}
