<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-10 20:40:51
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60497523115623_91633141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e33f5f2b53e0f46c2641ea68fc33385b6c99bd1c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1610075481,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60497523115623_91633141 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin F:\xampp\htdocs\yanka/themes/yanka/modules/ps_customersignin/ps_customersignin-dropdown.tpl --><div class="user-info position-relative">
	<a href="#login" class="login hover-tooltip" data-toggle="collapse" data-display="static">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
			<g>
				<path fill="currentColor" d="M12,13C6.4,13,2,17.8,2,24h20C22,17.8,17.6,13,12,13z M12,14.6c4.2,0,7.6,3.3,8.3,7.8H3.7
					C4.4,17.9,7.8,14.6,12,14.6z"></path>
				<path fill="currentColor" d="M12,12c3.3,0,6-2.7,6-6s-2.7-6-6-6S6,2.7,6,6S8.7,12,12,12z M12,1.6c2.4,0,4.4,2,4.4,4.4s-2,4.4-4.4,4.4
					c-2.4,0-4.4-2-4.4-4.4S9.6,1.6,12,1.6z"></path>
			</g>
		</svg>
		<span class="tooltip-wrap bottom">
			<span class="tooltip-text">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

			</span>
		</span>
	</a>
	<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
		<div id="login" class="header-collapse collapse user-info-content<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_type'] == 'sidebar') {?> user-info-sidebar<?php }
if ($_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_class'], ENT_QUOTES, 'UTF-8');
}?>">
			<ul>
				<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_logged_links'] && in_array('my-account',$_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_logged_links'])) {?>
					<li><a class="collapse-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_logged_links'] && in_array('my-orders',$_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_logged_links'])) {?>
					<li><a class="collapse-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['history'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Order','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_logged_links'] && in_array('checkout',$_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_logged_links'])) {?>
					<li><a class="collapse-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
 </a></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_logged_links'] && in_array('logout',$_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_logged_links'])) {?>
					<li><a class="collapse-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log out','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a></li>
				<?php }?>
			</ul>
		</div>
	<?php } else { ?>
		<div id="login" class="header-collapse collapse user-info-content<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_type'] == 'sidebar') {?> user-info-sidebar<?php }
if ($_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_class'], ENT_QUOTES, 'UTF-8');
}?>">
			<ul>
				<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_logged_links'] && in_array('register',$_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_notlogged_links'])) {?>
					<li><a class="collapse-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
 </a></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_logged_links'] && in_array('login',$_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_notlogged_links'])) {?>
					<li><a class="collapse-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign In','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
" rel="nofollow" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign In','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a></li>
				<?php }?>
			</ul>
		</div>
	<?php }?>
</div>
<!-- end F:\xampp\htdocs\yanka/themes/yanka/modules/ps_customersignin/ps_customersignin-dropdown.tpl --><?php }
}
