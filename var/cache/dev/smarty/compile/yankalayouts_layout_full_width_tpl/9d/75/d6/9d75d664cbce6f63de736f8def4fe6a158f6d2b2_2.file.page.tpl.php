<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:14
  from 'F:\xampp\htdocs\yanka\themes\yanka\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e2c93bc7_85989247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d75d664cbce6f63de736f8def4fe6a158f6d2b2' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\templates\\page.tpl',
      1 => 1592884694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017d1e2c93bc7_85989247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7836849916017d1e2bd06c1_87537162', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_10405536746017d1e2c1e8c5_31310020 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_18653831946017d1e2c459c4_00538232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_6041825866017d1e2bf77c7_42786755 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10405536746017d1e2c1e8c5_31310020', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18653831946017d1e2c459c4_00538232', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_3911859176017d1e2c6cac0_02721329 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_7836849916017d1e2bd06c1_87537162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7836849916017d1e2bd06c1_87537162',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_6041825866017d1e2bf77c7_42786755',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10405536746017d1e2c1e8c5_31310020',
  ),
  'page_content' => 
  array (
    0 => 'Block_18653831946017d1e2c459c4_00538232',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_3911859176017d1e2c6cac0_02721329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6041825866017d1e2bf77c7_42786755', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3911859176017d1e2c6cac0_02721329', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
