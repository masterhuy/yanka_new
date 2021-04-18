<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-15 23:54:30
  from 'E:\xampp7327\htdocs\yanka\modules\gdz_pagebuilder\views\templates\hook\addonheading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60790a76da49a9_64544713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fdb0b283a9c9811d4f7d0ca18ad83a509449c22' => 
    array (
      0 => 'E:\\xampp7327\\htdocs\\yanka\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addonheading.tpl',
      1 => 1597980554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60790a76da49a9_64544713 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['heading']->value) {?>
<<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['heading_tag']->value, ENT_QUOTES, 'UTF-8');?>
 class="pb-heading<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
	<?php echo $_smarty_tpl->tpl_vars['heading']->value;?>

</<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['heading_tag']->value, ENT_QUOTES, 'UTF-8');?>
>
<?php }
}
}
