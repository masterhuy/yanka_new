<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:14
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e2826eb6_07203635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9e4d0b935584380ea8beb3f467908e1cd2486f5' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1611021910,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017d1e2826eb6_07203635 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin F:\xampp\htdocs\yanka/themes/yanka/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
<?php if ($_smarty_tpl->tpl_vars['nb_comments']->value != 0) {?>
    <div id="review">
        <div class="product-list-reviews no-review" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['product_comment_grade_url']->value;?>
">
            <div class="grade-stars small-stars"></div>
            <div class="comments-nb ratings-text"></div>
        </div>
    </div>

        <div itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating" itemscope>
        <meta itemprop="reviewCount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nb_comments']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <meta itemprop="ratingValue" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average_grade']->value, ENT_QUOTES, 'UTF-8');?>
" />
    </div>
<?php }?>
<!-- end F:\xampp\htdocs\yanka/themes/yanka/modules/productcomments/views/templates/hook/product-list-reviews.tpl --><?php }
}
