<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:14
  from 'F:\xampp\htdocs\yanka\themes\yanka\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e25dcfb7_43940956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caee3a80e9247db900a2002410d956f043057d70' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1596438915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017d1e25dcfb7_43940956 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_GET['productbox_type']) && $_GET['productbox_type'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('productbox', "catalog/_partials/miniatures/".((string)$_GET['productbox_type']).".tpl");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('productbox', "catalog/_partials/miniatures/".((string)$_smarty_tpl->tpl_vars['gdzSetting']->value['productbox_type']).".tpl");
}
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['productbox']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
}
}
