<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:16
  from 'F:\xampp\htdocs\yanka\themes\yanka\templates\_partials\footers\footer-3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e4085ce7_84871957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f92ed1e677824acff14e9c75cd619a816b8f610' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\templates\\_partials\\footers\\footer-3.tpl',
      1 => 1611287398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/socials.tpl' => 1,
  ),
),false)) {
function content_6017d1e4085ce7_84871957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="footer-main" class="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 block block-newsletter">
                <h3 class="h3 block-title">
                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe to Our Newsletter!','d'=>'Shop.jmstheme'),$_smarty_tpl ) );?>

                </h3>
                <div class="block-content">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6819667586017d1e40109d8_41314375', 'footer-newsletter');
?>

                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By entering your email, you agree to our Terms of Service and Privacy Policy.','d'=>'Shop.jmstheme'),$_smarty_tpl ) );?>
</p>
                    <div class="block-socials">
                        <?php $_smarty_tpl->_subTemplateRender('file:_partials/socials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                </div>
            </div>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7409816446017d1e4037ad2_60216965', 'hook_footer');
?>

            <div class="col-xl-4 block block-store">
                <h3 class="h3 block-title">
                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store','d'=>'Shop.jmstheme'),$_smarty_tpl ) );?>

                </h3>
                <div class="block-content">
                    <?php echo $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_html'];?>

                </div>
            </div>
            
        </div>
    </div>
</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11685210096017d1e405ebd1_92630333', 'footer-copyright');
?>

<?php }
/* {block 'footer-newsletter'} */
class Block_6819667586017d1e40109d8_41314375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-newsletter' => 
  array (
    0 => 'Block_6819667586017d1e40109d8_41314375',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="block block-footer block-newsletter">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_emailsubscription",'hook'=>'displayFooter'),$_smarty_tpl ) );?>

                        </div>
                    <?php
}
}
/* {/block 'footer-newsletter'} */
/* {block 'hook_footer'} */
class Block_7409816446017d1e4037ad2_60216965 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_7409816446017d1e4037ad2_60216965',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'footer-copyright'} */
class Block_11685210096017d1e405ebd1_92630333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-copyright' => 
  array (
    0 => 'Block_11685210096017d1e405ebd1_92630333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="footer-copyright" class="footer-copyright<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_class'], ENT_QUOTES, 'UTF-8');
}?>">
        <div class="container">
            <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_content']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_content']) {?>
                <?php echo $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_content'];?>

                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_payment_image'], ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payments','d'=>'Shop.jmstheme'),$_smarty_tpl ) );?>
"/>
            <?php }?>
        </div>
    </div>
<?php
}
}
/* {/block 'footer-copyright'} */
}
