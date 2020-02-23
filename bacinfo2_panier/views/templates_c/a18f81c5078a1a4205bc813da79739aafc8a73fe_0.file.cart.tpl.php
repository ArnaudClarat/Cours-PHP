<?php
/* Smarty version 3.1.33, created on 2020-02-23 16:47:14
  from 'C:\wamp64\www\bacinfo2_panier\views\templates\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e52ac926299a6_99911531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a18f81c5078a1a4205bc813da79739aafc8a73fe' => 
    array (
      0 => 'C:\\wamp64\\www\\bacinfo2_panier\\views\\templates\\cart.tpl',
      1 => 1582476433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e52ac926299a6_99911531 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['newProduct']->value === 0) {?>
            <br>
            <h2><a href="user">Connectez-vous</a></h2>
        <?php } elseif ($_smarty_tpl->tpl_vars['newProduct']->value === 1) {?>
            <h2 style="margin:1em 0">Voici votre panier</h2><br>
    </div>
    <div class="row">
            <div class="col-md-8">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Référence</th>
                            <th scope="col">Désignation</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Sous-total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $_smarty_tpl->_assignInScope('total', 0);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panier']->value->getArr(), 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                        <?php $_smarty_tpl->_assignInScope('sousTotal', $_smarty_tpl->tpl_vars['product']->value[0]->getPrice()*$_smarty_tpl->tpl_vars['product']->value[1][0]);?>
                        <?php $_smarty_tpl->_assignInScope('total', $_smarty_tpl->tpl_vars['total']->value+$_smarty_tpl->tpl_vars['sousTotal']->value);?>
                        <tr>
                            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getId();?>
</th>
                            <td><?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getName();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['product']->value[0]->getPrice();?>
€</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['product']->value[1][0];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['sousTotal']->value;?>
€</td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Total :</h4>
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
€</p>
                    </div>
                </div>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['newProduct']->value === 2) {?>
            <p>Produit ajouté</p>
            <a href="<?php echo $_SERVER['HTTP_REFERER'];?>
">Retour au produit</a>
        <?php } else { ?>
            <p>Une erreur est survenue.</p>
            <a href="">Retour à l'acceuil</a>
        <?php }?>
    </div>
</div><?php }
}
