<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-16 00:48:31
  from 'module:psfacetedsearchpsfaceteds' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6079171f3a9501_88642398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:psfacetedsearchpsfaceteds',
      1 => 1618548507,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6079171f3a9501_88642398 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin E:\xampp7327\htdocs\yanka/themes/yanka/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php if (isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
    <div id="search_filters_wrapper" class="hidden-sm-down">
        <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

    </div>
<?php }?>
<button class="d-flex d-lg-none btn-close">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
        <polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
    </svg>
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
</button>

<!-- end E:\xampp7327\htdocs\yanka/themes/yanka/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php }
}
