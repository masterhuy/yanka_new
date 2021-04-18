<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-16 00:00:20
  from 'E:\xampp7327\htdocs\yanka\themes\yanka\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60790bd487af25_61471668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13fd4e24be105f59cd2885845532a496d13da010' => 
    array (
      0 => 'E:\\xampp7327\\htdocs\\yanka\\themes\\yanka\\templates\\_partials\\header.tpl',
      1 => 1608180551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/headers/header-mobile-1.tpl' => 1,
    'file:_partials/headers/header-mobile-2.tpl' => 1,
    'file:_partials/headers/header-mobile-3.tpl' => 1,
    'file:_partials/headers/header-mobile-4.tpl' => 1,
  ),
),false)) {
function content_60790bd487af25_61471668 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_GET['header_layout']) && $_GET['header_layout'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('header_layout', $_GET['header_layout']);?>
    <?php $_smarty_tpl->_assignInScope('header_layout_link', "_partials/headers/header-".((string)$_GET['header_layout']).".tpl");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('header_layout', $_smarty_tpl->tpl_vars['gdzSetting']->value['header_layout']);?>
    <?php $_smarty_tpl->_assignInScope('header_layout_link', "_partials/headers/header-".((string)$_smarty_tpl->tpl_vars['gdzSetting']->value['header_layout']).".tpl");
}?>

<div id="desktop-header" class="header-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['header_layout']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['header_class'], ENT_QUOTES, 'UTF-8');
}?>">
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header_layout_link']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<div id="mobile-header" class="header-mobile-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['header_mobile_layout'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['header_class'], ENT_QUOTES, 'UTF-8');
}?>">
    <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_mobile_layout'] == 1) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_mobile_layout'] == 2) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_mobile_layout'] == 3) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</div>
<?php }
}
