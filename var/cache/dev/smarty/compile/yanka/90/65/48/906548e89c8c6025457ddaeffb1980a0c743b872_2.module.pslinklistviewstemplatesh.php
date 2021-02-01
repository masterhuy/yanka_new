<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:16
  from 'module:pslinklistviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e40fafe0_64623465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '906548e89c8c6025457ddaeffb1980a0c743b872' => 
    array (
      0 => 'module:pslinklistviewstemplatesh',
      1 => 1608280201,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017d1e40fafe0_64623465 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin F:\xampp\htdocs\yanka/themes/yanka/modules/ps_linklist/views/templates/hook/linkblock.tpl --><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlocks']->value, 'linkBlock');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['linkBlock']->value) {
?>
    <div class="layout-column wrapper block">
        <h3 class="h3 block-title">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['title'], ENT_QUOTES, 'UTF-8');?>

        </h3>
        <div class="block-content">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlock']->value['links'], 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
                    <li>
                        <a
                            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                            class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['class'], ENT_QUOTES, 'UTF-8');?>
"
                            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['description'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['title'], ENT_QUOTES, 'UTF-8');?>

                        </a>
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- end F:\xampp\htdocs\yanka/themes/yanka/modules/ps_linklist/views/templates/hook/linkblock.tpl --><?php }
}
