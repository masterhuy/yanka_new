<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-10 20:40:51
  from 'module:pssearchbarpssearchbar.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_604975238ca0a4_16158634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:pssearchbarpssearchbar.tp',
      1 => 1603856004,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604975238ca0a4_16158634 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin F:\xampp\htdocs\yanka/themes/yanka/modules/ps_searchbar/ps_searchbar.tpl --><div id="search_widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<form class="mobile-search" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="controller" value="search">
		<input class="form-control" type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="Search product ...">
		<button type="submit" class="btn btn-primary">
			<i class="icon-search"></i>
		</button>
	</form>
</div>
<!-- end F:\xampp\htdocs\yanka/themes/yanka/modules/ps_searchbar/ps_searchbar.tpl --><?php }
}
