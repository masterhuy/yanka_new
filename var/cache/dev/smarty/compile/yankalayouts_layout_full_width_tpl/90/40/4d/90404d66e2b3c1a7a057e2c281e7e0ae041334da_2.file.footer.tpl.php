<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-15 23:54:33
  from 'E:\xampp7327\htdocs\yanka\themes\yanka\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60790a79bb8161_17044992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90404d66e2b3c1a7a057e2c281e7e0ae041334da' => 
    array (
      0 => 'E:\\xampp7327\\htdocs\\yanka\\themes\\yanka\\templates\\_partials\\footer.tpl',
      1 => 1614066442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60790a79bb8161_17044992 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (isset($_GET['footer_layout']) && $_GET['footer_layout'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('footer_layout', $_GET['footer_layout']);?>
    <?php $_smarty_tpl->_assignInScope('footer_layout_link', "_partials/footers/footer-".((string)$_GET['footer_layout']).".tpl");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('footer_layout', $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_layout']);?>
    <?php $_smarty_tpl->_assignInScope('footer_layout_link', "_partials/footers/footer-".((string)$_smarty_tpl->tpl_vars['gdzSetting']->value['footer_layout']).".tpl");
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179223704560790a79bb2b77_85576202', "footer");
?>


<?php }
/* {block "footer"} */
class Block_179223704560790a79bb2b77_85576202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_179223704560790a79bb2b77_85576202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer id="footer" class="footer-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['footer_layout']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_class'], ENT_QUOTES, 'UTF-8');
}?>">
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer_layout_link']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </footer>
<?php
}
}
/* {/block "footer"} */
}
