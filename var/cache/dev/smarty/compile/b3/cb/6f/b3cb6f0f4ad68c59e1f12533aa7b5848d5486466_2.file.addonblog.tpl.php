<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:14
  from 'F:\xampp\htdocs\yanka\themes\yanka\modules\gdz_pagebuilder\views\templates\hook\addonblog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e29867c4_52525014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3cb6f0f4ad68c59e1f12533aa7b5848d5486466' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addonblog.tpl',
      1 => 1611544505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017d1e29867c4_52525014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\xampp\\htdocs\\yanka\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'F:\\xampp\\htdocs\\yanka\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="pb-blog">
	<?php if (count($_smarty_tpl->tpl_vars['posts']->value) > 0) {?>
		<div class="blog-carousel owl-carousel carousel-with-shadow" data-items="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-lg="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-md="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }?>" data-sm="<?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_sm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>2<?php }?>" data-xs="<?php if ($_smarty_tpl->tpl_vars['cols_xs']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_xs']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" data-nav="<?php if ($_smarty_tpl->tpl_vars['navigation']->value == '0') {?>false<?php } else { ?>true<?php }?>" data-dots="<?php if ($_smarty_tpl->tpl_vars['pagination']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-auto="<?php if ($_smarty_tpl->tpl_vars['autoplay']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-rewind="<?php if ($_smarty_tpl->tpl_vars['rewind']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-slidebypage="<?php if ($_smarty_tpl->tpl_vars['slidebypage']->value == '1') {?>page<?php } else { ?>1<?php }?>" data-margin="<?php if (isset($_smarty_tpl->tpl_vars['gutter']->value)) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gutter']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>30<?php }?>">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'posts_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['posts_slide']->value) {
?>
				<div class="item">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts_slide']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
						<?php $_smarty_tpl->_assignInScope('params', array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']));?>
						<?php $_smarty_tpl->_assignInScope('catparams', array('category_id'=>$_smarty_tpl->tpl_vars['post']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias']));?>
						<div class="blog-item">
							<?php if ($_smarty_tpl->tpl_vars['post']->value['link_video'] && ($_smarty_tpl->tpl_vars['show_media']->value == '1')) {?>
								<div class="post-thumb">
									<?php echo $_smarty_tpl->tpl_vars['post']->value['link_video'];?>

								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['image'] && ($_smarty_tpl->tpl_vars['show_media']->value == '1')) {?>
								<div class="post-thumb">
									<a href="<?php echo htmlspecialchars(smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['postlink'],'htmlall','UTF-8' )),'&amp;','&'), ENT_QUOTES, 'UTF-8');?>
">
										<img src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;?>
thumb_<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" class="img-responsive" />
									</a>
								</div>
							<?php }?>
							<div class="entry-body">
								<a class="post-title" href="<?php echo htmlspecialchars(smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['postlink'],'htmlall','UTF-8' )),'&amp;','&'), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a>
								<?php if ($_smarty_tpl->tpl_vars['show_introtext']->value == '1') {?>
									<div class="post-intro"><?php echo $_smarty_tpl->tpl_vars['post']->value['introtext'];?>
</div>
								<?php }?>
								<ul class="post-meta">
									<?php if ($_smarty_tpl->tpl_vars['show_category']->value == '1') {?>
										<li class="post-category">
											<a href="<?php echo htmlspecialchars(smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['catlink'],'htmlall','UTF-8' )),'&amp;','&'), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['category_name'];?>
</a>
										</li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['show_time']->value == '1') {?>
										<li class="post-created">
											<?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8' )),'%B %e, %Y'), ENT_QUOTES, 'UTF-8');?>

										</li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['show_nviews']->value == '1') {?>
										<li class="post-views"><?php echo $_smarty_tpl->tpl_vars['post']->value['views'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','d'=>'Modules.Gdzblog.Addonblog'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['post']->value['views'] > 1) {?>s<?php }?></li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['show_ncomments']->value == '1') {?>
										<li class="post-comments"><?php echo $_smarty_tpl->tpl_vars['post']->value['comment_count'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','d'=>'Modules.Gdzblog.Addonblog'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['post']->value['comment_count'] > 1) {?>s<?php }?></li>
									<?php }?>
								</ul>
								<?php if ($_smarty_tpl->tpl_vars['show_readmore']->value == '1') {?>
									<a class="btn-link post-readmore" href="<?php echo htmlspecialchars(smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['postlink'],'htmlall','UTF-8' )),'&amp;','&'), ENT_QUOTES, 'UTF-8');?>
">
										<span><?php echo $_smarty_tpl->tpl_vars['readmore_text']->value;?>
</span>
									</a>
								<?php }?>
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
	<?php }?>
</div>
<?php }
}
