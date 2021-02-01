<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:14
  from 'F:\xampp\htdocs\yanka\themes\yanka\modules\gdz_pagebuilder\views\templates\hook\addontestimonial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e29fbac7_59522401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56b9903adcaabbcf29de4c1dbdf2a781f85a9ff5' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addontestimonial.tpl',
      1 => 1611558693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017d1e29fbac7_59522401 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['testimonials']->value) > 0) {?>
    <div class="pb-testimonial">
        <div class="pb-testimonial-carousel owl-carousel carousel-tpl" data-items="<?php if ($_smarty_tpl->tpl_vars['items_show_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>5<?php }?>" data-lg="<?php if ($_smarty_tpl->tpl_vars['items_show_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>5<?php }?>" data-md="<?php if ($_smarty_tpl->tpl_vars['items_show_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-sm="<?php if ($_smarty_tpl->tpl_vars['items_show_sm']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_sm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }?>" data-xs="<?php if ($_smarty_tpl->tpl_vars['items_show_xs']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_xs']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>2<?php }?>" data-nav="<?php if ($_smarty_tpl->tpl_vars['navigation']->value == '0') {?>false<?php } else { ?>true<?php }?>" data-dots="<?php if ($_smarty_tpl->tpl_vars['pagination']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-auto="<?php if ($_smarty_tpl->tpl_vars['autoplay']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-rewind="<?php if ($_smarty_tpl->tpl_vars['rewind']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-slidebypage="<?php if ($_smarty_tpl->tpl_vars['slidebypage']->value == '1') {?>page<?php } else { ?>1<?php }?>" data-margin="<?php if (isset($_smarty_tpl->tpl_vars['gutter']->value)) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gutter']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>30<?php }?>">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials']->value, 'testimonial');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->value) {
?>
                <div class="pb-testimonial-box">
                    <div class="pb-testimonial-comment" >
                        <?php if ($_smarty_tpl->tpl_vars['show_rating']->value) {?>
                            <div class="pb-rating" data-rating="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['testimonial']->value->rating, ENT_QUOTES, 'UTF-8');?>
">
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                                <i class="star"></i>
                            </div>
                        <?php }?>
                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['testimonial']->value->comment,'html','UTF-8' ));?>

                    </div>
                    <div class="pb-reviewsbox-author">
                        <?php if ($_smarty_tpl->tpl_vars['show_image']->value) {?>
                            <div class="pb-testimonial-img">
                                <img class="img-responsive" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['testimonial']->value->image,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                            </div>
                        <?php }?>
                        <h5 class="pb-testimonial-author">
                            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['testimonial']->value->author,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                        </h5>
                        <?php if ($_smarty_tpl->tpl_vars['show_position']->value) {?>
                            <div class="pb-testimonial-position">
                                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['testimonial']->value->position,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }?>


<?php }
}
