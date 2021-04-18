<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-15 23:54:33
  from 'E:\xampp7327\htdocs\yanka\themes\yanka\templates\_partials\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60790a79b7ddf3_49183019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '890e6dbbc9092e32a6fc1617b9d0f1362d2c08af' => 
    array (
      0 => 'E:\\xampp7327\\htdocs\\yanka\\themes\\yanka\\templates\\_partials\\notifications.tpl',
      1 => 1617174180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60790a79b7ddf3_49183019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
    <aside id="notifications">
        <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8712307760790a79b6d638_93029624', 'notifications_error');
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14255301160790a79b71f76_17954893', 'notifications_warning');
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31955672960790a79b762f0_06068317', 'notifications_success');
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159669151160790a79b7a615_57807510', 'notifications_info');
?>

        <?php }?>
    </aside>
<?php }
}
/* {block 'notifications_error'} */
class Block_8712307760790a79b6d638_93029624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_8712307760790a79b6d638_93029624',
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
class Block_14255301160790a79b71f76_17954893 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_14255301160790a79b71f76_17954893',
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
class Block_31955672960790a79b762f0_06068317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_31955672960790a79b762f0_06068317',
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
class Block_159669151160790a79b7a615_57807510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_159669151160790a79b7a615_57807510',
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
