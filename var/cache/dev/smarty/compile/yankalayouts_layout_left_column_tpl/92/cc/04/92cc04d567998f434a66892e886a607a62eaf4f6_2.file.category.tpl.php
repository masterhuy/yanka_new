<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-16 00:00:20
  from 'E:\xampp7327\htdocs\yanka\themes\yanka\templates\catalog\listing\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60790bd45e25a8_47623067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92cc04d567998f434a66892e886a607a62eaf4f6' => 
    array (
      0 => 'E:\\xampp7327\\htdocs\\yanka\\themes\\yanka\\templates\\catalog\\listing\\category.tpl',
      1 => 1592884693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/category-header.tpl' => 1,
  ),
),false)) {
function content_60790bd45e25a8_47623067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205856789460790bd45d9b21_79499086', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_205856789460790bd45d9b21_79499086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_205856789460790bd45d9b21_79499086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
?>
 <?php
}
}
/* {/block 'product_list_header'} */
}
