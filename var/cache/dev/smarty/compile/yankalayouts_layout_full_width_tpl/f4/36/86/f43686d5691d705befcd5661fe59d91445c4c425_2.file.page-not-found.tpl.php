<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:17
  from 'F:\xampp\htdocs\yanka\themes\yanka\templates\errors\page-not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e5d3bfd4_24240366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f43686d5691d705befcd5661fe59d91445c4c425' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\templates\\errors\\page-not-found.tpl',
      1 => 1601863968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017d1e5d3bfd4_24240366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
    <div class="row">
        <div class="layout-column col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h1 class="error-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error 404','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h1>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"We are sorry, the page you've requested is not available.",'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
            <a class="btn btn-outline-primary-2 btn-minwidth-lg" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to homepage','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
        
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18439119026017d1e5d38158_94758680', 'hook_not_found');
?>

        </div>
    </div>
</section>
<?php }
/* {block 'hook_not_found'} */
class Block_18439119026017d1e5d38158_94758680 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_not_found' => 
  array (
    0 => 'Block_18439119026017d1e5d38158_94758680',
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
