<?php
/* Smarty version 3.1.33, created on 2020-02-20 16:10:57
  from 'C:\wamp64\www\bacinfo2_panier\views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4eaf91209722_35028022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaf6640496e59d75f9f4f91f861a81213428e029' => 
    array (
      0 => 'C:\\wamp64\\www\\bacinfo2_panier\\views\\templates\\header.tpl',
      1 => 1582215055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4eaf91209722_35028022 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - MonSite</title>
    <meta charset="UTF-8">
    <?php if (isset($_smarty_tpl->tpl_vars['assets']->value) && is_array($_smarty_tpl->tpl_vars['assets']->value)) {?>
                <?php if (!empty($_smarty_tpl->tpl_vars['assets']->value['css'])) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assets']->value['css'], 'css');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
?>
            <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" media="screen">
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        
                <?php if (isset($_smarty_tpl->tpl_vars['bootstrap']->value) && $_smarty_tpl->tpl_vars['bootstrap']->value) {?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php }?>
        
                <?php if (!empty($_smarty_tpl->tpl_vars['assets']->value['js'])) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assets']->value['js'], 'js');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
?>
                <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo '</script'; ?>
>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
            <?php }?>
</head>
<div id="header">
        <nav class="navbar navbar-expand-sm navbar-secondary bg-secondary text-dark">
        <a class="navbar-brand btn" href="./">MonSite</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link btn" href="./">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catégories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
?>
                            <a class="dropdown-item btn" href="categorie?id=<?php echo $_smarty_tpl->tpl_vars['categorie']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['categorie']->value->getName();?>
</a>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn" href="contact">Contact</a>
                </li>
            </ul>

                        <form class="form-inline m-auto input-group" style="max-width: 25%" role="search" action="search?" method="get">
                <input class="form-control ds-input" name="stringSearch" type="search" placeholder="Search..." aria-label="Search...">
                <div class="input-group-append">
                     <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                </div>
            </form>

                        <div class="btn-group" role="group">
                <a class="btn border-dark" href="#">
                    <img src="./views/img/panier_logo.png" alt="panier" style="max-width: 24px">
                </a>
                <?php if (isset($_SESSION['pseudo'])) {?>
                    <a class="btn border-light text-light btn-secondary my-2 my-sm-0" href="deco">Déconnection</a>
                <?php } else { ?>
                    <a class="btn border-dark text-dark my-2 my-sm-0" href="user">Connection</a>
                    <a class="btn border-dark text-dark my-2 my-sm-0" href="#">Créer un compte</a>
                <?php }?>
            </div>
        </div>
    </nav>
    </div><?php }
}
