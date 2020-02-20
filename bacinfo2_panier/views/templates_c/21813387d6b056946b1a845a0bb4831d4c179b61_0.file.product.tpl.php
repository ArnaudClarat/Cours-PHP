<?php
/* Smarty version 3.1.33, created on 2020-02-20 19:05:41
  from 'C:\wamp64\www\bacinfo2_panier\views\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4ed88599b306_99284286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21813387d6b056946b1a845a0bb4831d4c179b61' => 
    array (
      0 => 'C:\\wamp64\\www\\bacinfo2_panier\\views\\templates\\product.tpl',
      1 => 1582225519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4ed88599b306_99284286 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <br>
    <div class="row">
        <div class="col-md-12">
            <h2 class="bd-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
</h2>
            <h6 class="bd-lead"><?php echo $_smarty_tpl->tpl_vars['product']->value->getShortDesc();?>
</h6>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <img src="./views/img/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
" class="img-prod">
        </div>
        <div class="col-md-5">
            <p>
                <?php echo $_smarty_tpl->tpl_vars['product']->value->getLongDesc();?>

            </p>
        </div>
        <div class="card col-md-3 bg-secondary" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice();?>
€</h5>
                <form class="form-group" action="cart" method="post">
                    <label for="quantity">Quantité :</label>
                    <input class="form-control-primary" type="number" value="1" min="1" max="100" step="1" id="quantity" name="quantity"/>
                    <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
">
                    <button type="submit" id="submit" name="submit" class="btn btn-primary mt-2" style="width: 213px">Ajouter au panier</button>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
