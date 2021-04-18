<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-15 23:54:30
  from 'E:\xampp7327\htdocs\yanka\themes\yanka\modules\gdz_pagebuilder\views\templates\hook\addonpopup-newsletter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60790a76616174_07556129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe6fa54dcd85e90c3d2ac924f168237103d4d76f' => 
    array (
      0 => 'E:\\xampp7327\\htdocs\\yanka\\themes\\yanka\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addonpopup-newsletter.tpl',
      1 => 1618451491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60790a76616174_07556129 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-popup gdz-popup-overlay" style="display: none;">
	<div class="gdz-popup newsletter-popup-container animated fadeIn hidden">
		<div class="content">
			<a class="popup-close">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
					<polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
				</svg>
			</a>
			<div class="row d-flex w-100">
				<div class="gdz-popup-content col-lg-6 col-md-6 col-12 ml-auto">
					<?php if ($_smarty_tpl->tpl_vars['popup_title']->value) {?>
						<h3>
							<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['popup_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

						</h3>
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['popup_content']->value;?>


					<div class="dontshow">
						<input type="checkbox" name="dontshowagain" value="1" id="dontshowagain"/>
						<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Dont show this popup again",'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</label>
						<span class="checkmark"></span>
					</div>
					<input type="hidden" name="width_default" id="width-default" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['popup_width']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
					<input type="hidden" name="height_default" id="height-default" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['popup_height']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
					<input type="hidden" name="loadtime" id="loadtime" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['loadtime']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
				</div>
			</div>
		</div>
	</div>
</div>

<?php }
}
