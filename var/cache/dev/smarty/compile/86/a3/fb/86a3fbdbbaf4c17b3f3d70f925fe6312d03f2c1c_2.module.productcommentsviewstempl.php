<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-16 03:40:02
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60793f528c4917_89563806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a3fbdbbaf4c17b3f3d70f925fe6312d03f2c1c' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1616138041,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60793f528c4917_89563806 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin E:\xampp7327\htdocs\yanka/themes/yanka/modules/productcomments/views/templates/hook/product-comment-item-prototype.tpl -->
<div class="product-comment-list-item" data-product-comment-id="@COMMENT_ID@" data-product-id="@PRODUCT_ID@">
    <div class="comment-infos">
        <div class="grade-stars"></div>
        <h4>@COMMENT_TITLE@</h4>
        <div class="comment-date">
            <div class="comment-author">
                @CUSTOMER_NAME@
                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'on','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
</span>
            </div>
            @COMMENT_DATE@
        </div>
        <p>@COMMENT_COMMENT@</p>
    </div>
    <div class="comment-buttons btn-group">
        <?php if ($_smarty_tpl->tpl_vars['usefulness_enabled']->value) {?>
            <a class="useful-review">
                <i class="material-icons thumb_up">thumb_up</i>
                <span class="useful-review-value">@COMMENT_USEFUL_ADVICES@</span>
            </a>
            <a class="not-useful-review">
                <i class="material-icons thumb_down">thumb_down</i>
                <span class="not-useful-review-value">@COMMENT_NOT_USEFUL_ADVICES@</span>
            </a>
        <?php }?>
        <a class="report-abuse" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report abuse','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report as Inappropriate','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

        </a>
    </div>
</div><!-- end E:\xampp7327\htdocs\yanka/themes/yanka/modules/productcomments/views/templates/hook/product-comment-item-prototype.tpl --><?php }
}
