{**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="btn-group blockcart cart-preview {if $gdzSetting.addtocart_type !=''} {$gdzSetting.addtocart_type}{/if}" id="cart_block" data-refresh-url="{$refresh_url}">
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
				{l s='Cart' d='Shop.Theme.Actions'}
			</span>
		</span>
		{if $gdzSetting.addtocart_type == 'circle-filled'}
			{if $cart.products_count > 0}<span class="circle-notify"></span>{/if}
		{else}
			{if $cart.products_count > 0}<span class="ajax_cart_quantity">{$cart.products_count}</span>{/if}
		{/if}
	</a>
	<div id="blockcart" class="dropdown-menu sidebar shoppingcart-box">
		<div class="shoppingcartbox">
			<div class="cart-title">{l s='My Cart' d='Shop.Theme.Actions'}</div>
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
								<span class="label">{$subtotal.label}:</span>
								<span class="value">{$subtotal.value}</span>
							</div>
							{/if}
						{/foreach}
					{/if}
					{if $gdzSetting.cart_total == 1}
						<div class="cart-total cart-prices-line">
							<span class="label">{$cart.totals.total.label}:</span>
							<span class="value">{$cart.totals.total.value}</span>
						</div>
					{/if}
				</div>
				<div class="cart-button">
					{if $gdzSetting.cart_links && 'checkout'|in_array:$gdzSetting.cart_links}
						<a href="{url entity=order}" class="btn w-100 justify-content-center text-uppercase" title="{l s='Proceed to checkout' d='Shop.Theme.Actions'}">
							{l s='Proceed to checkout' d='Shop.Theme.Actions'}
							<i class="icon-long-arrow-right"></i>
						</a>
					{/if}
					{if $gdzSetting.cart_links && 'cart'|in_array:$gdzSetting.cart_links}
						<a class="btn-link" href="{$cart_url}" title="{l s='View cart' d='Shop.Theme.Actions'}" rel="nofollow">
							{l s='View cart' d='Shop.Theme.Actions'}
						</a>
					{/if}
				</div>
			{/if}
		</div>
	</div>
</div>
