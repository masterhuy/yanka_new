<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-10 20:40:51
  from 'module:gdzajaxsearchviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_604975230b3ba4_25469951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21dc93547e5eb942158d657d78a9a3ff414f63f0' => 
    array (
      0 => 'module:gdzajaxsearchviewstemplat',
      1 => 1611626920,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604975230b3ba4_25469951 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin F:\xampp\htdocs\yanka/themes/yanka/modules/gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch.tpl --><div id="search-form" class="search-form default">
	<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="search-box">
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<div class="input-group">
			<input type="text" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search products...','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" class="gdz-search-input form-control search-input" />
			<button type="submit" name="submit_search" class="button-search">
				<i class="d-flex">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
						<path fill="currentColor" d="M23.6,22.4l-4.3-4.3C21,16.3,22,13.7,22,11c0-6.1-4.9-11-11-11S0,4.9,0,11s4.9,11,11,11c2.7,0,5.3-1,7.2-2.7
							l4.3,4.3L23.6,22.4z M1.6,11c0-5.2,4.2-9.4,9.4-9.4c5.2,0,9.4,4.2,9.4,9.4c0,5.2-4.2,9.4-9.4,9.4C5.8,20.4,1.6,16.2,1.6,11z"></path>
					</svg>
				</i>
			</button>
		</div>
	</form>
	<div class="search-result-area"></div>
</div>
<!-- end F:\xampp\htdocs\yanka/themes/yanka/modules/gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch.tpl --><?php }
}
