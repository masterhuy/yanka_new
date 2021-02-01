<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:14
  from 'F:\xampp\htdocs\yanka\themes\yanka\modules\gdz_pagebuilder\views\templates\hook\addonbanner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e21e55b2_61341767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '596abe08fd9efdc282571fcb3b790b16155e58a1' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addonbanner.tpl',
      1 => 1608110634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017d1e21e55b2_61341767 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-banner<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
	<?php if ($_smarty_tpl->tpl_vars['banner_link']->value) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['banner_link']->value;?>
" target="<?php echo $_smarty_tpl->tpl_vars['target']->value;?>
">
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['banner']->value) {?>
		<div class="pb-banner-img">
			<span>
				<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alt_text']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-responsive" />
			</span>
		</div>
		<div class="pb-banner-text pb-banner-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_align']->value, ENT_QUOTES, 'UTF-8');?>
">
			<?php if ($_smarty_tpl->tpl_vars['subtitle']->value) {?><span class="pb-banner-subtitle"><?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>
</span><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['title']->value) {?><<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_tag']->value, ENT_QUOTES, 'UTF-8');?>
 class="pb-banner-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_tag']->value, ENT_QUOTES, 'UTF-8');?>
><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['description']->value) {?><div class="pb-banner-desc"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['button_text']->value) {?><div class="pb-banner-button btn"><span><?php echo $_smarty_tpl->tpl_vars['button_text']->value;?>
</span><i class="icon-long-arrow-right"></i></div><?php }?>
		</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['banner_link']->value) {?>
	</a>
	<?php }?>
</div>

<?php }
}
