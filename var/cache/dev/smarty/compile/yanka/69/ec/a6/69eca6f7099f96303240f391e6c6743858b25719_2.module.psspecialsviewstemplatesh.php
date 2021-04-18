<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-16 00:00:22
  from 'module:psspecialsviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60790bd60246c3_11427456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69eca6f7099f96303240f391e6c6743858b25719' => 
    array (
      0 => 'module:psspecialsviewstemplatesh',
      1 => 1615950300,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-flex.tpl' => 1,
  ),
),false)) {
function content_60790bd60246c3_11427456 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin E:\xampp7327\htdocs\yanka/themes/yanka/modules/ps_specials/views/templates/hook/ps_specials.tpl --><section id="special-block">
    <div class="title-block">
        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special Products','d'=>'Modules.Specials.Shop'),$_smarty_tpl ) );?>
</h3>
    </div>
    <div class="products">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-flex.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</section>
<!-- end E:\xampp7327\htdocs\yanka/themes/yanka/modules/ps_specials/views/templates/hook/ps_specials.tpl --><?php }
}
