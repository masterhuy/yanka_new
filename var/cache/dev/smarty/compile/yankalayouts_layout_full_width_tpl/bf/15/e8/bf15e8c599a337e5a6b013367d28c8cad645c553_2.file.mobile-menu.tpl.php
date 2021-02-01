<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:15
  from 'F:\xampp\htdocs\yanka\themes\yanka\templates\_partials\headers\mobile-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e3b342d9_12110161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf15e8c599a337e5a6b013367d28c8cad645c553' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\templates\\_partials\\headers\\mobile-menu.tpl',
      1 => 1611297425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/socials.tpl' => 1,
  ),
),false)) {
function content_6017d1e3b342d9_12110161 (Smarty_Internal_Template $_smarty_tpl) {
?><a id="mobile-menu-toggle" class="open-button hidden-lg">
	<i class="icon-bars"></i>
</a>
<div class="mobile-menu-wrap hidden-lg">
    <button id="mobile-menu-close" class="close-button">
        <i class="icon-close"></i>
    </button>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

    <h3 class="text-menu"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
    <nav id="off-canvas-menu">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"gdz_megamenu",'hook'=>'MobiMenu'),$_smarty_tpl ) );?>

    </nav>
    <div class="social-block">
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/socials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<div class="mobile-menu-overlay"></div>


<?php }
}
