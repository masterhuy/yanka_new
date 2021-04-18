<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-16 00:01:01
  from 'E:\xampp7327\htdocs\yanka\themes\yanka\templates\errors\page-not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60790bfd0ea151_53392224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d012d8695b90e3456ae153ff84e645b9e5ac4f3' => 
    array (
      0 => 'E:\\xampp7327\\htdocs\\yanka\\themes\\yanka\\templates\\errors\\page-not-found.tpl',
      1 => 1616491849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60790bfd0ea151_53392224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
    <div class="row">
        <div class="layout-column col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <div class="pt-empty-layout">
				<h2 class="pt-title-02"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error 404...','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2>
				<h1 class="pt-title pt-size-large"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Page Not Found','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h1>
				<p>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We looked everywhere for this page. Are you sure the website URL is correct?','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to the','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <strong><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
" class="pt-link pt-color-base"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'main page','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a></strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or select suitable category.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

				</p>
			</div>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64969318760790bfd0e5fd0_85323208', 'hook_not_found');
?>

        </div>
    </div>
</section>
<?php }
/* {block 'hook_not_found'} */
class Block_64969318760790bfd0e5fd0_85323208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_not_found' => 
  array (
    0 => 'Block_64969318760790bfd0e5fd0_85323208',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_not_found'} */
}
