<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-10 20:40:51
  from 'F:\xampp\htdocs\yanka\themes\yanka\templates\_partials\headers\header-7.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6049752302b025_67045611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e20e0480169d1201d7f2b7461abe65fd05738acb' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\templates\\_partials\\headers\\header-7.tpl',
      1 => 1612602755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/headers/logo.tpl' => 1,
    'module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch.tpl' => 1,
    'module:ps_customersignin/ps_customersignin-dropdown.tpl' => 1,
    'module:ps_customersignin/ps_customersignin-sidebar.tpl' => 1,
    'file:_partials/headers/wishlist.tpl' => 1,
    'module:ps_shoppingcart/ps_shoppingcart.tpl' => 1,
    'module:ps_languageselector/ps_languageselector-dropdown.tpl' => 1,
    'module:ps_currencyselector/ps_currencyselector-dropdown.tpl' => 1,
  ),
),false)) {
function content_6049752302b025_67045611 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="header-top" class="<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['topbar_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['topbar_class'], ENT_QUOTES, 'UTF-8');
}?> header-top top-panel">
    <div class="container-fluid">
        <div class="row align-items-center">
            <?php echo $_smarty_tpl->tpl_vars['gdzSetting']->value['header_html'];?>

        </div>
    </div>
</div>
<div class="header-middle">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="layout-column col-3">
                <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="layout-column col-6">
                <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['search'] == 1) {?>
                    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"gdz_ajaxsearch"));
$_block_repeat=true;
echo $_block_plugin1->smartyWidgetBlock(array('name'=>"gdz_ajaxsearch"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_subTemplateRender('module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_block_repeat=false;
echo $_block_plugin1->smartyWidgetBlock(array('name'=>"gdz_ajaxsearch"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            </div>
            <div class="layout-column col-3 right-module-header d-flex align-items-center">
                <?php if (($_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin'] == 1)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['customersignin_type'] == 'dropdown') {?>
                        <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_customersignin"));
$_block_repeat=true;
echo $_block_plugin2->smartyWidgetBlock(array('name'=>"ps_customersignin"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_subTemplateRender('module:ps_customersignin/ps_customersignin-dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_block_repeat=false;
echo $_block_plugin2->smartyWidgetBlock(array('name'=>"ps_customersignin"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php } else { ?>
                        <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_customersignin"));
$_block_repeat=true;
echo $_block_plugin3->smartyWidgetBlock(array('name'=>"ps_customersignin"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_subTemplateRender('module:ps_customersignin/ps_customersignin-sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_block_repeat=false;
echo $_block_plugin3->smartyWidgetBlock(array('name'=>"ps_customersignin"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php }?>
                <?php }?>
                <?php if (($_smarty_tpl->tpl_vars['gdzSetting']->value['wishlist'] == 1)) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/wishlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
                <?php if (($_smarty_tpl->tpl_vars['gdzSetting']->value['cart'] == 1)) {?>
                    <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_shoppingcart"));
$_block_repeat=true;
echo $_block_plugin4->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_block_repeat=false;
echo $_block_plugin4->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
                <?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_languageselector"));
$_block_repeat=true;
echo $_block_plugin5->smartyWidgetBlock(array('name'=>"ps_languageselector"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->_subTemplateRender('module:ps_languageselector/ps_languageselector-dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_block_repeat=false;
echo $_block_plugin5->smartyWidgetBlock(array('name'=>"ps_languageselector"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_currencyselector"));
$_block_repeat=true;
echo $_block_plugin6->smartyWidgetBlock(array('name'=>"ps_currencyselector"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->_subTemplateRender('module:ps_currencyselector/ps_currencyselector-dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_block_repeat=false;
echo $_block_plugin6->smartyWidgetBlock(array('name'=>"ps_currencyselector"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        </div>
    </div>
</div>
<div class="sticky-wrapper <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_sticky'] == 1) {?> header-sticky<?php }
if (($_smarty_tpl->tpl_vars['gdzSetting']->value['header_sticky'] == 1) && ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_sticky_effect'] != '')) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['header_sticky_effect'], ENT_QUOTES, 'UTF-8');
}?>">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="layout-column position-static col">
                <div id="hor-menu" class="<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['hormenu_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['hormenu_class'], ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['hormenu_align']) {?> align-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['hormenu_align'], ENT_QUOTES, 'UTF-8');
}?>">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"gdz_megamenu",'hook'=>'HorMenu'),$_smarty_tpl ) );?>

                </div>
            </div>
            <div class="col-auto">
                <a href="#" class="buy-theme">Buy theme!</a>
            </div>
        </div>
    </div>
</div>





<?php }
}
