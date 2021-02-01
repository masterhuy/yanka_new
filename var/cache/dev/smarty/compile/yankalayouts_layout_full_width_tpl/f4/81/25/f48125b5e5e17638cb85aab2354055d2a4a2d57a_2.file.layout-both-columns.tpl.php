<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:15
  from 'F:\xampp\htdocs\yanka\themes\yanka\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e3085cc7_05655258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f48125b5e5e17638cb85aab2354055d2a4a2d57a' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1611126144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_6017d1e3085cc7_05655258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (isset($_GET['shop_width']) && $_GET['shop_width'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('shop_width', $_GET['shop_width']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('shop_width', $_smarty_tpl->tpl_vars['gdzSetting']->value['shop_width']);
}?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <head>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14665827676017d1e2e1a5c9_27956921', 'head');
?>

    </head>
    <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_pageclass']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['jpb_rtl']->value) {?> rtl<?php }
if ($_smarty_tpl->tpl_vars['gdzSetting']->value['carousel_nav_type']) {?> carousel-nav-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['carousel_nav_type'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['gdzSetting']->value['carousel_nav_show']) {?> carousel-nav-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['carousel_nav_show'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['gdzSetting']->value['carousel_pag_show']) {?> carousel-pag-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['carousel_pag_show'], ENT_QUOTES, 'UTF-8');
}?>">

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

        <div class="main-site">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14558458976017d1e2e416c7_56714790', 'product_activation');
?>

            <header id="header">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18897415816017d1e2e687c7_09178745', 'header');
?>

            </header>

    		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index' && $_smarty_tpl->tpl_vars['gdzSetting']->value['breadcrumb']) {?>
    			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12239414606017d1e2e8f8c8_94304747', 'breadcrumb');
?>

    		<?php }?>
            <div id="wrapper">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10828924616017d1e2eb69c0_51549967', 'notifications');
?>

                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'pagenotfound' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'module-gdz_pagebuilder-page' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'module-gdz_pagebuilder-preview') {?>
                    <div class="container<?php if ($_smarty_tpl->tpl_vars['shop_width']->value != 1) {?>-fluid<?php }?>">
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'module-jmspagebuilder-preview') {?>
                <div class="row">
                <?php }?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1288249476017d1e2eddac9_93403643', "left_column");
?>

                    
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2887066466017d1e2f04bc5_24527008', "content_wrapper");
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5859739336017d1e30109c3_93340191', "right_column");
?>

                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'contact' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'product' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'cart' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'module-gdz_pagebuilder-preview') {?>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'module-gdz_pagebuilder-page' && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'module-gdz_pagebuilder-preview') {?>
                </div>
                <?php }?>
    		</div>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1826169926017d1e3037ac4_77952064', "footer");
?>

            <div class="back-to-top show" id="back-to-top">
                <span class="h-100">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                        <g>
                            <polygon fill="currentColor" points="20.9,17.1 12.5,8.6 4.1,17.1 2.9,15.9 12.5,6.4 22.1,15.9"></polygon>
                        </g>
                    </svg>
                    <span class="text d-block d-md-none"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to top','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                </span>
            </div>
        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20140905556017d1e305ebc7_45513013', 'javascript_bottom');
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    </body>
</html>
<?php }
/* {block 'head'} */
class Block_14665827676017d1e2e1a5c9_27956921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_14665827676017d1e2e1a5c9_27956921',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'head'} */
/* {block 'product_activation'} */
class Block_14558458976017d1e2e416c7_56714790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_14558458976017d1e2e416c7_56714790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_18897415816017d1e2e687c7_09178745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_18897415816017d1e2e687c7_09178745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'header'} */
/* {block 'breadcrumb'} */
class Block_12239414606017d1e2e8f8c8_94304747 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_12239414606017d1e2e8f8c8_94304747',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    			   <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    			<?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'notifications'} */
class Block_10828924616017d1e2eb69c0_51549967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_10828924616017d1e2eb69c0_51549967',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'notifications'} */
/* {block "left_column"} */
class Block_1288249476017d1e2eddac9_93403643 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_1288249476017d1e2eddac9_93403643',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="left-column" class="sidebar-column col-lg-3 col-md-12 col-sm-12 col-12">
                            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

                            <?php }?>
                        </div>
                    <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_9787764226017d1e2f2bcc8_64358992 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <p>Hello world! This is HTML5 Boilerplate.</p>
                            <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_2887066466017d1e2f04bc5_24527008 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_2887066466017d1e2f04bc5_24527008',
  ),
  'content' => 
  array (
    0 => 'Block_9787764226017d1e2f2bcc8_64358992',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="content-wrapper" class="col-sm-12 col-md-6">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9787764226017d1e2f2bcc8_64358992', "content", $this->tplIndex);
?>

                        </div>
                    <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_5859739336017d1e30109c3_93340191 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_5859739336017d1e30109c3_93340191',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="right-column" class="sidebar-column col-lg-3 col-md-12 col-sm-12 col-12">
                            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

                            <?php }?>
                        </div>
                    <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_1826169926017d1e3037ac4_77952064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1826169926017d1e3037ac4_77952064',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_20140905556017d1e305ebc7_45513013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_20140905556017d1e305ebc7_45513013',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
        <?php
}
}
/* {/block 'javascript_bottom'} */
}
