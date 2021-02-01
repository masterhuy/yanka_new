<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:14
  from 'F:\xampp\htdocs\yanka\themes\yanka\templates\catalog\_partials\variant-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e289c1b0_22939840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8621040892911c1d0b960723157970ae059b15fe' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\templates\\catalog\\_partials\\variant-links.tpl',
      1 => 1610705155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017d1e289c1b0_22939840 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="variant-links">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variants']->value, 'variant');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
            class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['type'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?>texture<?php }?>"
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']) {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->tpl_vars['variant']->value['html_color_code'] == "#ffffff") {?>border: 1px solid #e5e5e5<?php }?>" <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?> style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
        >
            <span class="sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <span class="js-count count"></span>
</div>
<?php }
}
