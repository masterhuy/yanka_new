<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:22
  from 'F:\xampp\htdocs\yanka\modules\gdz_ajaxsearch\views\templates\hook\search-ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1ea79ae32_14229861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1ec670ad10f457f218b9337068382c989dc5f14' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\modules\\gdz_ajaxsearch\\views\\templates\\hook\\search-ajax.tpl',
      1 => 1610100320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017d1ea79ae32_14229861 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="search-result-content">
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <div class="search_product_list">
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                    <div class="item col-12 col-lg-2">
                        <div class="row">
                            <?php if ($_smarty_tpl->tpl_vars['show_image']->value == 1) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class="search-product-image col-auto layout-column">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'medium_default');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" />
                                </a>
                            <?php }?>
                            <div class="product-info layout-column">
                                <a class="product-link" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' ));?>

                                </a>
                                <?php if ($_smarty_tpl->tpl_vars['show_desc']->value == 1) {?>
                                    <p class="desc"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['desc'],$_smarty_tpl->tpl_vars['desc_count']->value,'...' ));?>
</p>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['show_price']->value == 1) {?>
                                    <div class="content_price">
                                        <span class="price new"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['no_text']->value;?>

    <?php }?>
</div>
<?php }
}
