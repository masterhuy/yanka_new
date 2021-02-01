<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:13
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e1eb69b9_66441541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1611113717,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017d1e1eb69b9_66441541 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin F:\xampp\htdocs\yanka/themes/yanka/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><div class="email_subscription block block_newsletter">
	<div class="newsletter-desc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Be the first to learn about our latest trends and get exclusive offers.','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
</div>
	<div class="block-content">
	  	<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
	    	<div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-error<?php } else { ?>alert-success<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>
</div>
	  	<?php }?>
	  	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" method="post">
			<div class="input-group newsletter-input-group">
	    		<input type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" required class="form-control" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
" />
	    		<button type="submit" class="btn btn-popup newsletter-button align-items-center" name="submitNewsletter">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe!','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>

				</button>
				<button type="submit" class="btn btn-icon align-items-center" name="submitNewsletter">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
						<path fill="currentColor" d="M0,4v16h24V4H0z M21,5.6L12,12L3,5.6H21z M1.6,18.4V6.6L12,14l10.4-7.4v11.8H1.6z"></path>
					</svg>
				</button>
			</div>
	    	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

	    	<input type="hidden" name="action" value="0" />
	  	</form>
	</div>
</div>

<!-- end F:\xampp\htdocs\yanka/themes/yanka/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }
}
