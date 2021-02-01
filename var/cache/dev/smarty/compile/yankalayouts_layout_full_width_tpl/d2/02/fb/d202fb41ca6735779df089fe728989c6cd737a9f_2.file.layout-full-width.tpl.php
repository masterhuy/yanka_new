<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:14
  from 'F:\xampp\htdocs\yanka\themes\yanka\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e2da52c8_63943992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd202fb41ca6735779df089fe728989c6cd737a9f' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\templates\\layouts\\layout-full-width.tpl',
      1 => 1609386794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017d1e2da52c8_63943992 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15104326266017d1e2d08ec7_08935312', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19739732316017d1e2d2ffc0_80044592', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16872192906017d1e2d570c9_36182946', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_15104326266017d1e2d08ec7_08935312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_15104326266017d1e2d08ec7_08935312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_19739732316017d1e2d2ffc0_80044592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_19739732316017d1e2d2ffc0_80044592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_15501335426017d1e2d7e1c6_59819738 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p>Hello world! This is HTML5 Boilerplate.</p>
        <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_16872192906017d1e2d570c9_36182946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_16872192906017d1e2d570c9_36182946',
  ),
  'content' => 
  array (
    0 => 'Block_15501335426017d1e2d7e1c6_59819738',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != "index") {?>class="col-12 col-lg-12"<?php }?>>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15501335426017d1e2d7e1c6_59819738', 'content', $this->tplIndex);
?>

    </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
