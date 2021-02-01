<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:15
  from 'F:\xampp\htdocs\yanka\themes\yanka\templates\_partials\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e3dcc3d1_57696185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7694b24efe720b57f3fc8c00f76e3f3fd95cdf6c' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\templates\\_partials\\notifications.tpl',
      1 => 1608538547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017d1e3dcc3d1_57696185 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
    <aside id="notifications" class="container">
        <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_652699876017d1e3d2ffd9_60362780', 'notifications_error');
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10756677406017d1e3d570d2_78054551', 'notifications_warning');
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3650303096017d1e3d7e1d1_80134141', 'notifications_success');
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5929240726017d1e3da52d8_89891631', 'notifications_info');
?>

        <?php }?>
    </aside>
<?php }
}
/* {block 'notifications_error'} */
class Block_652699876017d1e3d2ffd9_60362780 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_652699876017d1e3d2ffd9_60362780',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <article class="alert alert-danger mb-2" role="alert" data-alert="danger">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </article>
            <?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
class Block_10756677406017d1e3d570d2_78054551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_10756677406017d1e3d570d2_78054551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <article class="alert alert-warning mb-2" role="alert" data-alert="warning">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </article>
            <?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
class Block_3650303096017d1e3d7e1d1_80134141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_3650303096017d1e3d7e1d1_80134141',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <article class="alert alert-success" role="alert" data-alert="success">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </article>
            <?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
class Block_5929240726017d1e3da52d8_89891631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_5929240726017d1e3da52d8_89891631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <article class="alert alert-info" role="alert" data-alert="info">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </article>
            <?php
}
}
/* {/block 'notifications_info'} */
}
