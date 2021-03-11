<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-10 20:40:50
  from 'F:\xampp\htdocs\yanka\modules\gdz_pagebuilder\views\templates\hook\addonheading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_604975229fea16_41253990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1fb5ad4070f5fad485d25f20e69171e0d60b647' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addonheading.tpl',
      1 => 1597980554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604975229fea16_41253990 (Smarty_Internal_Template $_smarty_tpl) {
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
