<?php
/* Smarty version 3.1.33, created on 2019-12-12 20:20:39
  from 'E:\Programme\Wamp\www\PanierdAchat\views\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df2a117dc3937_78565955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d5e1d3b8548898d392b61e0069dc106bf5f2d85' => 
    array (
      0 => 'E:\\Programme\\Wamp\\www\\PanierdAchat\\views\\templates\\index.tpl',
      1 => 1576182037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df2a117dc3937_78565955 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <p style="background-color:
        <?php if (isset($_smarty_tpl->tpl_vars['sexe']->value) && $_smarty_tpl->tpl_vars['sexe']->value === 'F') {?>
            pink
        <?php } else { ?>
            blue
        <?php }?>" >

            <?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?>
                Hello <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

            <?php } else { ?>
                Hello Nobody
            <?php }?>
    </p>
</div>
<?php }
}
