<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-16 00:00:22
  from 'E:\xampp7327\htdocs\yanka\themes\yanka\templates\_partials\footers\footer-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60790bd6abb807_31827618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '080c84376b8981e9c484e0325dc5fd88459fcd1f' => 
    array (
      0 => 'E:\\xampp7327\\htdocs\\yanka\\themes\\yanka\\templates\\_partials\\footers\\footer-1.tpl',
      1 => 1617790293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/socials.tpl' => 1,
  ),
),false)) {
function content_60790bd6abb807_31827618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="footer-main" class="footer-main">
    <div class="container">
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71639135660790bd6aabc53_80293620', 'hook_footer');
?>

            <div class="col-xl-3 block block-store">
                <h3 class="h3 block-title">
                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store','d'=>'Shop.jmstheme'),$_smarty_tpl ) );?>

                   <i class="pt-icon"> 
                        <svg viewBox="0 0 16 16" fill="none"> <path d="M14.4343 0.434315L0.434315 14.4343L1.56569 15.5657L15.5657 1.56569L14.4343 0.434315ZM0.434315 1.56569L14.4343 15.5657L15.5657 14.4343L1.56569 0.434315L0.434315 1.56569Z" fill="currentColor"></path> </svg> 
                    </i>
                </h3>
                <div class="block-content">
                    <?php echo $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_html'];?>

                </div>
            </div>
            <div class="col-xl-3 block block-newsletter">
                <h3 class="h3 block-title">
                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe to Our Newsletter!','d'=>'Shop.jmstheme'),$_smarty_tpl ) );?>

                </h3>
                <div class="block-contents">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71722102160790bd6ab0449_49925495', 'footer-newsletter');
?>

                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By entering your email, you agree to our Terms of Service and Privacy Policy.','d'=>'Shop.jmstheme'),$_smarty_tpl ) );?>
</p>
                    <div class="block-socials">
                        <?php $_smarty_tpl->_subTemplateRender('file:_partials/socials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123487553460790bd6ab3be4_09972857', 'footer-copyright');
?>

<?php }
/* {block 'hook_footer'} */
class Block_71639135660790bd6aabc53_80293620 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_71639135660790bd6aabc53_80293620',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'footer-newsletter'} */
class Block_71722102160790bd6ab0449_49925495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-newsletter' => 
  array (
    0 => 'Block_71722102160790bd6ab0449_49925495',
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
/* {block 'footer-copyright'} */
class Block_123487553460790bd6ab3be4_09972857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-copyright' => 
  array (
    0 => 'Block_123487553460790bd6ab3be4_09972857',
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
