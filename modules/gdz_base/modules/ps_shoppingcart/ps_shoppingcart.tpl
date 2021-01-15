<div class="btn-group blockcart cart-preview dropdown col-auto{if $gdzSetting.addtocart_type !=''} {$gdzSetting.addtocart_type}{/if}" id="cart_block" data-refresh-url="{$refresh_url}">
	<a href="#" class="cart-icon" data-toggle="dropdown" data-display="static" aria-expanded="false">
		<i class="ptw-icon {$gdzSetting.cart_icon}"></i>
		{if $gdzSetting.addtocart_type == 'circle-filled'}
			{if $cart.products_count > 0}<span class="circle-notify"></span>{/if}
		{else}
			<span class="ajax_cart_quantity">{$cart.products_count}</span>
		{/if}
	</a>
	<div class="dropdown-menu shoppingcart-box{if $gdzSetting.cart_type =='sidebar'} shoppingcart-sidebar{/if}">
					<div class="cart-title">{l s='Shopping Cart' d='Shop.Theme.Actions'} ({$cart.products_count})</div>
					{if $cart.products_count == 0}
					<span class="ajax_cart_no_product">{l s='There is no product' d='Shop.Theme.Actions'}</span>
					{else}
						<ul class="list products cart_block_list">
							{foreach from=$cart.products item=product}
								<li>{include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}</li>
							{/foreach}
						</ul>
					{/if}
					{if $cart.products_count != 0}
					<div class="billing-info">
						{if $gdzSetting.cart_subtotal == 1}
							{foreach from=$cart.subtotals item="subtotal"}
							{if $subtotal.label}
							<div class="{$subtotal.type} cart-prices-line">
									<span class="label">{$subtotal.label}</span>
									<span class="value">{$subtotal.value}</span>
							</div>
							{/if}
							{/foreach}
						{/if}
						{if $gdzSetting.cart_total == 1}
							<div class="cart-total cart-prices-line">
								<span class="label">{$cart.totals.total.label}</span>
								<span class="value">{$cart.totals.total.value}</span>
							</div>
						{/if}
					</div>
					<div class="cart-button">
									{if $gdzSetting.cart_links && 'checkout'|in_array:$gdzSetting.cart_links}
									<a href="{url entity=order}" class="btn btn-primary checkout-btn">{l s='Checkout' d='Shop.Theme.Actions'}</a>
									{/if}
									{if $gdzSetting.cart_links && 'cart'|in_array:$gdzSetting.cart_links}
									<a class="btn cart-btn" href="{$cart_url}" title="{l s='Proceed to checkout' d='Shop.Theme.Actions'}" rel="nofollow">
										{l s='Cart' d='Shop.Theme.Actions'}
									</a>
									{/if}
					</div>
					{/if}
		</div>
</div>
