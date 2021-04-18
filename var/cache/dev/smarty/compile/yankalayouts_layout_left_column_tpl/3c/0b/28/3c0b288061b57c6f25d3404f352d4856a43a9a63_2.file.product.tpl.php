<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-16 00:00:22
  from 'E:\xampp7327\htdocs\yanka\themes\yanka\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60790bd62b6020_27030975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c0b288061b57c6f25d3404f352d4856a43a9a63' => 
    array (
      0 => 'E:\\xampp7327\\htdocs\\yanka\\themes\\yanka\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1596438915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60790bd62b6020_27030975 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_GET['productbox_type']) && $_GET['productbox_type'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('productbox', "catalog/_partials/miniatures/".((string)$_GET['productbox_type']).".tpl");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('productbox', "catalog/_partials/miniatures/".((string)$_smarty_tpl->tpl_vars['gdzSetting']->value['productbox_type']).".tpl");
}
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['productbox']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
}
}
