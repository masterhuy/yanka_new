<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:15
  from 'F:\xampp\htdocs\yanka\themes\yanka\templates\_partials\headers\header-mobile-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e3a49cd2_32674670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd512aa7f1d03fee6b4d62f11107f64efede47384' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\templates\\_partials\\headers\\header-mobile-1.tpl',
      1 => 1605149519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:ps_currencyselector/ps_currencyselector-dropdown.tpl' => 1,
    'module:ps_languageselector/ps_languageselector-dropdown.tpl' => 1,
    'module:ps_customersignin/ps_customersignin.tpl' => 1,
    'file:_partials/headers/mobile-menu.tpl' => 1,
    'file:_partials/headers/logo.tpl' => 1,
    'file:_partials/headers/wishlist.tpl' => 1,
    'module:ps_shoppingcart/ps_shoppingcart.tpl' => 1,
    'module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch-fullscreen.tpl' => 1,
  ),
),false)) {
function content_6017d1e3a49cd2_32674670 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header-top">
    <div class="container">
        <div class="row no-margin">
            <div class="header-left">
                <?php echo $_smarty_tpl->tpl_vars['gdzSetting']->value['topbar_content'];?>

            </div>
            <div class="header-right">
                <button type="button" class="btn btn-link" data-toggle="dropdown">Links</button>
                <div id="link" class="dropdown-menu">
                    <?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_currencyselector"));
$_block_repeat=true;
echo $_block_plugin7->smartyWidgetBlock(array('name'=>"ps_currencyselector"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_subTemplateRender('module:ps_currencyselector/ps_currencyselector-dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_block_repeat=false;
echo $_block_plugin7->smartyWidgetBlock(array('name'=>"ps_currencyselector"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_languageselector"));
$_block_repeat=true;
echo $_block_plugin8->smartyWidgetBlock(array('name'=>"ps_languageselector"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_subTemplateRender('module:ps_languageselector/ps_languageselector-dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_block_repeat=false;
echo $_block_plugin8->smartyWidgetBlock(array('name'=>"ps_languageselector"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_customersignin"));
$_block_repeat=true;
echo $_block_plugin9->smartyWidgetBlock(array('name'=>"ps_customersignin"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_subTemplateRender('module:ps_customersignin/ps_customersignin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_block_repeat=false;
echo $_block_plugin9->smartyWidgetBlock(array('name'=>"ps_customersignin"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="header-mobile-top" class="header-mobile-top mobile-menu-light<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_mobile_sticky'] == 1) {?> header-sticky<?php }
if (($_smarty_tpl->tpl_vars['gdzSetting']->value['header_mobile_sticky'] == 1) && ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_sticky_effect'] != '')) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['header_sticky_effect'], ENT_QUOTES, 'UTF-8');
}?>">
    <div class="container">
        <div class="row align-items-center no-margin">
            <div class="layout-column col-auto header-left">
                <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/mobile-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="layout-column text-center">
                <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="layout-column col-auto header-right">
                <div class="row">
                    <?php if (($_smarty_tpl->tpl_vars['gdzSetting']->value['wishlist'] == 1)) {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/wishlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['gdzSetting']->value['cart'] == 1)) {?>
                        <?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_shoppingcart"));
$_block_repeat=true;
echo $_block_plugin10->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_block_repeat=false;
echo $_block_plugin10->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['search'] && $_smarty_tpl->tpl_vars['gdzSetting']->value['search_box_type'] != 'dropdown') {?>
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
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
