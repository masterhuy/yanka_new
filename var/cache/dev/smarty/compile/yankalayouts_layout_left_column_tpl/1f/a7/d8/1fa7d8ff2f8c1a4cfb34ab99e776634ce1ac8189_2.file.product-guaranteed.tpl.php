<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-16 03:40:02
  from 'E:\xampp7327\htdocs\yanka\themes\yanka\templates\catalog\_partials\product-guaranteed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60793f527b1cc4_82428175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fa7d8ff2f8c1a4cfb34ab99e776634ce1ac8189' => 
    array (
      0 => 'E:\\xampp7327\\htdocs\\yanka\\themes\\yanka\\templates\\catalog\\_partials\\product-guaranteed.tpl',
      1 => 1616122348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60793f527b1cc4_82428175 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="guaranteed text-center">
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guaranteed safe checkout','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
    <img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
images/payments.png" alt="">
</div><?php }
}
