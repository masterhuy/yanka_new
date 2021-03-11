<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-10 20:40:50
  from 'F:\xampp\htdocs\yanka\themes\yanka\modules\gdz_pagebuilder\views\templates\hook\addonpopup-newsletter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60497522668a95_93584430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3130dc7bf738a729bda7460353a5cb8792d99e61' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addonpopup-newsletter.tpl',
      1 => 1610337278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60497522668a95_93584430 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-popup gdz-popup-overlay" style="display: none;">
	<div class="gdz-popup newsletter-popup-container animated fadeIn hidden">
		<div class="content">
			<a class="popup-close">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
					<polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
				</svg>
			</a>
			<div class="row d-flex w-100">
				<div class="gdz-popup-content col-lg-6 col-md-6 col-sm-6 col-xs-12 ml-auto">
					<?php if ($_smarty_tpl->tpl_vars['popup_title']->value) {?>
						<h3>
							<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['popup_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

						</h3>
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['popup_content']->value;?>


					<div class="dontshow">
						<input type="checkbox" name="dontshowagain" value="1" id="dontshowagain"/>
						<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"I accept teh",'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 <a href="index.php?id_cms=14&controller=cms"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Privacy policy.",'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></label>
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
