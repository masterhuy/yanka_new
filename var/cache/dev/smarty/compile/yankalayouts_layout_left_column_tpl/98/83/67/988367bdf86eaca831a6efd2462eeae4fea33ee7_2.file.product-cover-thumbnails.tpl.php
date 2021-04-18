<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-16 03:40:02
  from 'E:\xampp7327\htdocs\yanka\themes\yanka\templates\catalog\_partials\product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60793f52466193_96981086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '988367bdf86eaca831a6efd2462eeae4fea33ee7' => 
    array (
      0 => 'E:\\xampp7327\\htdocs\\yanka\\themes\\yanka\\templates\\catalog\\_partials\\product-cover-thumbnails.tpl',
      1 => 1617069625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails-gallery.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails-left.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails-right.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails-gallery2.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails-bottom.tpl' => 1,
  ),
),false)) {
function content_60793f52466193_96981086 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_GET['product_content_layout']) && $_GET['product_content_layout'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('product_content_layout', $_GET['product_content_layout']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('product_content_layout', $_smarty_tpl->tpl_vars['gdzSetting']->value['product_content_layout']);
}
if ($_smarty_tpl->tpl_vars['product_content_layout']->value == 'thumbs-gallery') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['product_content_layout']->value == 'thumbs-left' || $_smarty_tpl->tpl_vars['product_content_layout']->value == 'tabfullwidth-1') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['product_content_layout']->value == 'thumbs-right') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['product_content_layout']->value == '3-columns') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-gallery2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
