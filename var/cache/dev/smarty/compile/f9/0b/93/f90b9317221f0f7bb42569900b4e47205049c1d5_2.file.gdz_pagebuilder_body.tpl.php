<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-15 23:54:32
  from 'E:\xampp7327\htdocs\yanka\modules\gdz_pagebuilder\views\templates\hook\gdz_pagebuilder_body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60790a784facf7_44616443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f90b9317221f0f7bb42569900b4e47205049c1d5' => 
    array (
      0 => 'E:\\xampp7327\\htdocs\\yanka\\modules\\gdz_pagebuilder\\views\\templates\\hook\\gdz_pagebuilder_body.tpl',
      1 => 1597980554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60790a784facf7_44616443 (Smarty_Internal_Template $_smarty_tpl) {
?><style id="pagebuilder-frontend-stylesheet" type="text/css">
<?php echo $_smarty_tpl->tpl_vars['pagebuilder_css']->value;?>

</style>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
	<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->id, ENT_QUOTES, 'UTF-8');?>
" class="gdz-row <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->class,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
		<div class="container<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->fluid) && $_smarty_tpl->tpl_vars['row']->value->settings->fluid == '1') {?>-fluid<?php }?>">
				<div class="row">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value->cols, 'column', false, 'cindex');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cindex']->value => $_smarty_tpl->tpl_vars['column']->value) {
?>
					<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column']->value->id, ENT_QUOTES, 'UTF-8');?>
" class="layout-column <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->class,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column']->value->addons, 'addon', false, 'aindex');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['aindex']->value => $_smarty_tpl->tpl_vars['addon']->value) {
?>
							<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value->id, ENT_QUOTES, 'UTF-8');?>
" class="addon-box">
								<?php if (isset($_smarty_tpl->tpl_vars['addon']->value->return_value) && $_smarty_tpl->tpl_vars['addon']->value->return_value) {
echo $_smarty_tpl->tpl_vars['addon']->value->return_value;
}?>
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
		</div>
	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
