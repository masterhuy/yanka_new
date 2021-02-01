<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:15
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e36a04d5_53991879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1610338897,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' => 2,
  ),
),false)) {
function content_6017d1e36a04d5_53991879 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin F:\xampp\htdocs\yanka/themes/yanka/modules/ps_shoppingcart/ps_shoppingcart.tpl --><?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['cart_type'] == 'dropdown') {?>
	<div class="btn-group blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['addtocart_type'] != '') {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['addtocart_type'], ENT_QUOTES, 'UTF-8');
}?>" id="cart_block" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<a href="#blockcart" class="cart-icon hover-tooltip" data-toggle="collapse">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
				<path fill="currentColor" d="M22,8c0-1.1-0.9-2-2-2h-2.7c-0.9-3.4-2.9-5.8-5.3-5.8C9.6,0.2,7.6,2.6,6.7,6H4C2.9,6,2,6.9,2,8L0,22l0,0.1
				C0,23.2,0.9,24,2,24h20c1.1,0,2-0.8,2-1.9l0-0.1L22,8z M12,1.8c1.5,0,2.9,1.7,3.6,4.2H8.4C9.1,3.5,10.5,1.8,12,1.8z M22,22.4H2
				c-0.2,0-0.4-0.1-0.4-0.3l2-13.8l0-0.2c0-0.2,0.2-0.4,0.4-0.4h2.4C6.3,8.4,6.2,9.2,6.2,10h1.6c0-0.8,0.1-1.6,0.2-2.4h8
				c0.1,0.8,0.2,1.6,0.2,2.4h1.6c0-0.8-0.1-1.6-0.2-2.4H20c0.2,0,0.4,0.2,0.4,0.5l2,14C22.4,22.3,22.2,22.4,22,22.4z">
				</path>
			</svg>
			<span class="tooltip-wrap bottom">
				<span class="tooltip-text">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

				</span>
			</span>
			<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['addtocart_type'] == 'circle-filled') {?>
				<?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?><span class="circle-notify"></span><?php }?>
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?><span class="ajax_cart_quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
			<?php }?>
		</a>
		<div id="blockcart" class="collapse cart-collapse shoppingcart-box<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['cart_type'] == 'sidebar') {?> shoppingcart-sidebar<?php }?>">
			<div class="shoppingcartbox">
				<div class="cart-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</div>
				<?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] == 0) {?>
					<span class="ajax_cart_no_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is no product','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				<?php } else { ?>
					<ul class="list products cart_block_list">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
							<li><?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] != 0) {?>
					<div class="billing-info">
						<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['cart_subtotal'] == 1) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
?>
								<?php if ($_smarty_tpl->tpl_vars['subtotal']->value['label']) {?>
								<div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
 cart-prices-line">
									<span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
:</span>
									<span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
								</div>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['cart_total'] == 1) {?>
							<div class="cart-total cart-prices-line">
								<span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
:</span>
								<span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
							</div>
						<?php }?>
					</div>
					<div class="cart-button">
						<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['cart_links'] && in_array('checkout',$_smarty_tpl->tpl_vars['gdzSetting']->value['cart_links'])) {?>
							<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order'),$_smarty_tpl ) );?>
" class="btn w-100 justify-content-center text-uppercase" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

								<i class="icon-long-arrow-right"></i>
							</a>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['cart_links'] && in_array('cart',$_smarty_tpl->tpl_vars['gdzSetting']->value['cart_links'])) {?>
							<a class="btn-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" rel="nofollow">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

							</a>
						<?php }?>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
<?php } else { ?>
	<div class="btn-group blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['addtocart_type'] != '') {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['addtocart_type'], ENT_QUOTES, 'UTF-8');
}?>" id="cart_block" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<a href="#" class="cart-icon hover-tooltip js-open-sidebar" data-toggle="dropdown" data-display="static">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
				<path fill="currentColor" d="M22,8c0-1.1-0.9-2-2-2h-2.7c-0.9-3.4-2.9-5.8-5.3-5.8C9.6,0.2,7.6,2.6,6.7,6H4C2.9,6,2,6.9,2,8L0,22l0,0.1
				C0,23.2,0.9,24,2,24h20c1.1,0,2-0.8,2-1.9l0-0.1L22,8z M12,1.8c1.5,0,2.9,1.7,3.6,4.2H8.4C9.1,3.5,10.5,1.8,12,1.8z M22,22.4H2
				c-0.2,0-0.4-0.1-0.4-0.3l2-13.8l0-0.2c0-0.2,0.2-0.4,0.4-0.4h2.4C6.3,8.4,6.2,9.2,6.2,10h1.6c0-0.8,0.1-1.6,0.2-2.4h8
				c0.1,0.8,0.2,1.6,0.2,2.4h1.6c0-0.8-0.1-1.6-0.2-2.4H20c0.2,0,0.4,0.2,0.4,0.5l2,14C22.4,22.3,22.2,22.4,22,22.4z">
				</path>
			</svg>
			<span class="tooltip-wrap bottom">
				<span class="tooltip-text">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

				</span>
			</span>
			<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['addtocart_type'] == 'circle-filled') {?>
				<?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?><span class="circle-notify"></span><?php }?>
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?><span class="ajax_cart_quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
			<?php }?>
		</a>
		<div id="blockcart" class="dropdown-menu sidebar shoppingcart-box">
			<div class="shoppingcartbox">
				<?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] != 0) {?><div class="cart-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] == 0) {?>
					<span class="ajax_cart_no_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is no product','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				<?php } else { ?>
					<ul class="list products cart_block_list">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
							<li><?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] != 0) {?>
					<div class="billing-info">
						<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['cart_subtotal'] == 1) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
?>
								<?php if ($_smarty_tpl->tpl_vars['subtotal']->value['label']) {?>
								<div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
 cart-prices-line">
									<span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
:</span>
									<span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
								</div>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['cart_total'] == 1) {?>
							<div class="cart-total cart-prices-line">
								<span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
:</span>
								<span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
							</div>
						<?php }?>
					</div>
					<div class="cart-button">
						<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['cart_links'] && in_array('checkout',$_smarty_tpl->tpl_vars['gdzSetting']->value['cart_links'])) {?>
							<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order'),$_smarty_tpl ) );?>
" class="btn w-100 justify-content-center text-uppercase" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

								<i class="icon-long-arrow-right"></i>
							</a>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['cart_links'] && in_array('cart',$_smarty_tpl->tpl_vars['gdzSetting']->value['cart_links'])) {?>
							<a class="btn-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" rel="nofollow">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

							</a>
						<?php }?>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
<?php }?>

<!-- end F:\xampp\htdocs\yanka/themes/yanka/modules/ps_shoppingcart/ps_shoppingcart.tpl --><?php }
}
