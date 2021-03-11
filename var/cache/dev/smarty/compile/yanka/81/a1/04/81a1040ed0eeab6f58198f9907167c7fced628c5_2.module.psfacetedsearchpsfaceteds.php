<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-10 20:40:51
  from 'module:psfacetedsearchpsfaceteds' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60497523aeceb8_16284768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:psfacetedsearchpsfaceteds',
      1 => 1609387382,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60497523aeceb8_16284768 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin F:\xampp\htdocs\yanka/themes/yanka/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php if (isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
    <div id="search_filters_wrapper" class="hidden-sm-down">
        <div id="search_filter_controls" class="d-flex justify-content-center hidden-md-up">
            <button class="btn btn-secondary ok">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </button>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

    </div>
<?php }?>

<!-- end F:\xampp\htdocs\yanka/themes/yanka/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php }
}
