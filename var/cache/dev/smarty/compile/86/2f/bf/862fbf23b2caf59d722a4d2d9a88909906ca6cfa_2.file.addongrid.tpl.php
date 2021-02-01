<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:14
  from 'F:\xampp\htdocs\yanka\modules\gdz_pagebuilder\views\templates\hook\addongrid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e22cfbb9_96892594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '862fbf23b2caf59d722a4d2d9a88909906ca6cfa' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addongrid.tpl',
      1 => 1607064206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017d1e22cfbb9_96892594 (Smarty_Internal_Template $_smarty_tpl) {
if (strpos($_smarty_tpl->tpl_vars['page']->value['page_name'],'preview') || strpos($_smarty_tpl->tpl_vars['page']->value['page_name'],'gdz_pagebuilder')) {?>
<div class="grid">
    <div class="grid_row row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grid']->value, 'g');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
?>
            <div class="col-lg-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['g']->value->col->lg, ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['g']->value->col->sm, ENT_QUOTES, 'UTF-8');?>
 col-xs-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['g']->value->col->xs, ENT_QUOTES, 'UTF-8');?>
 grid_column addon-sortable dragenterable" lg="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['g']->value->col->lg, ENT_QUOTES, 'UTF-8');?>
" sm="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['g']->value->col->sm, ENT_QUOTES, 'UTF-8');?>
" xs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['g']->value->col->xs, ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['g']->value->addons, 'addon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->value) {
?>
                    <div id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon']->value->id,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="addon-box" data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value->type, ENT_QUOTES, 'UTF-8');?>
">
                        <div class="pb-addon-tools">
                            <a href="#" class="pb-drag-arrow pull-right"><i class="fa fa-arrows-alt"></i></a>
                            <a href="#" class="pb-addon-setting pull-right"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="pb-addon-duplicate pull-right"><i class="fa fa-files-o"></i></a>
                            <a href="#" class="pb-addon-delete pull-right"><i class="fa fa-trash-o"></i></a>
                        </div>
                        <div class="addon-body">
                            <?php if (isset($_smarty_tpl->tpl_vars['addon']->value->return_value) && $_smarty_tpl->tpl_vars['addon']->value->return_value) {
echo $_smarty_tpl->tpl_vars['addon']->value->return_value;
}?>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php } else { ?>
<div class="grid">
    <div class="grid_row row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grid']->value, 'g');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
?>
            <div class="col-lg-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['g']->value->col->lg, ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['g']->value->col->sm, ENT_QUOTES, 'UTF-8');?>
 col-xs-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['g']->value->col->xs, ENT_QUOTES, 'UTF-8');?>
 grid_column">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['g']->value->addons, 'addon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->value) {
?>
                    <div id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon']->value->id,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="addon-box">
                        <?php if (isset($_smarty_tpl->tpl_vars['addon']->value->return_value) && $_smarty_tpl->tpl_vars['addon']->value->return_value) {
echo $_smarty_tpl->tpl_vars['addon']->value->return_value;
}?>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
}
}
