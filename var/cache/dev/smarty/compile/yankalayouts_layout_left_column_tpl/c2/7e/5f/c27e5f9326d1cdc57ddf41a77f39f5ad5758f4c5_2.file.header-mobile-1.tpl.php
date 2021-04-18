<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-16 00:00:21
  from 'E:\xampp7327\htdocs\yanka\themes\yanka\templates\_partials\headers\header-mobile-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60790bd58d1f78_07435282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c27e5f9326d1cdc57ddf41a77f39f5ad5758f4c5' => 
    array (
      0 => 'E:\\xampp7327\\htdocs\\yanka\\themes\\yanka\\templates\\_partials\\headers\\header-mobile-1.tpl',
      1 => 1617780592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/headers/mobile-menu.tpl' => 1,
    'file:_partials/headers/logo.tpl' => 1,
    'module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch-dropdown.tpl' => 1,
    'module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch-fullwidth.tpl' => 1,
    'module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch-fullscreen.tpl' => 1,
    'module:ps_shoppingcart/ps_shoppingcart.tpl' => 1,
  ),
),false)) {
function content_60790bd58d1f78_07435282 (Smarty_Internal_Template $_smarty_tpl) {
if (($_smarty_tpl->tpl_vars['gdzSetting']->value['header_topbar'] == 1)) {?>
    <div class="alert-box">
        <div class="container">
            <div class="row">
                <div class="layout-column col-12">
                    <?php echo $_smarty_tpl->tpl_vars['gdzSetting']->value['topbar_content'];?>

                </div>
            </div>
        </div>
    </div>
<?php }?>

<div id="header-top" class="<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['topbar_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['topbar_class'], ENT_QUOTES, 'UTF-8');
}?> header-top top-panel">
    <div class="container-fluid">
        <div class="row align-items-center">
            <?php echo $_smarty_tpl->tpl_vars['gdzSetting']->value['header_html'];?>

        </div>
    </div>
</div>

<div id="header-mobile-top" class="header-mobile-top mobile-menu-light<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_mobile_sticky'] == 1) {?> header-sticky<?php }
if (($_smarty_tpl->tpl_vars['gdzSetting']->value['header_mobile_sticky'] == 1) && ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_sticky_effect'] != '')) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['header_sticky_effect'], ENT_QUOTES, 'UTF-8');
}?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="layout-column col-4 header-left">
                <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/mobile-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="layout-column col-4 text-center">
                <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="layout-column col-4 right-module-header header-right">
                <div class="row align-items-center justify-content-end no-margin">
                    <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['search'] == 1) {?>
                        <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['search_box_type'] == 'dropdown') {?>
                            <?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"gdz_ajaxsearch"));
$_block_repeat=true;
echo $_block_plugin9->smartyWidgetBlock(array('name'=>"gdz_ajaxsearch"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_subTemplateRender('module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch-dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php $_block_repeat=false;
echo $_block_plugin9->smartyWidgetBlock(array('name'=>"gdz_ajaxsearch"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['gdzSetting']->value['search_box_type'] == 'fullwidth') {?>
                            <?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"gdz_ajaxsearch"));
$_block_repeat=true;
echo $_block_plugin10->smartyWidgetBlock(array('name'=>"gdz_ajaxsearch"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_subTemplateRender('module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch-fullwidth.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php $_block_repeat=false;
echo $_block_plugin10->smartyWidgetBlock(array('name'=>"gdz_ajaxsearch"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php } else { ?>
                            <?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"gdz_ajaxsearch"));
$_block_repeat=true;
echo $_block_plugin11->smartyWidgetBlock(array('name'=>"gdz_ajaxsearch"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_subTemplateRender('module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch-fullscreen.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php $_block_repeat=false;
echo $_block_plugin11->smartyWidgetBlock(array('name'=>"gdz_ajaxsearch"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['gdzSetting']->value['cart'] == 1)) {?>
                        <?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_shoppingcart"));
$_block_repeat=true;
echo $_block_plugin12->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_block_repeat=false;
echo $_block_plugin12->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php }
}
