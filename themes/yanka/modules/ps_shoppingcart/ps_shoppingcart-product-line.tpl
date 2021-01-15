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
<div class="row align-items-center">
	{if $product.cover.bySize.cart_default.url}
		<a class="cart-product-image layout-column" href="{$product.url}" title="{$product.name|escape:'html':'UTF-8'}">
			<img alt="{$product.name|escape:'html':'UTF-8'}" src="{$product.cover.bySize.cart_default.url}" class="preview img-responsive" data-full-size-image-url = "{$product.cover.large.url}">
		</a>
	{/if}
	<div class="product-info layout-column">
		<a class="product-link-cart" href="" title="{$product.name|escape:'html':'UTF-8'}">
			{$product.name|truncate:30:'...'}
		</a>
		<div class="property-value">
			{foreach from=$product.attributes item="property_value" key="property"}
				<span>{$property_value}</span>
			{/foreach}
		</div>
		<div class="product-cart-details">
			<span class="quantity">{$product.quantity}</span> <span>x</span> <span class="price new">{$product.price}</span>
		</div>
	</div>
	<a class="remove-from-cart remove_link" rel="nofollow" href="{$product.remove_from_cart_url}" data-link-action="remove-from-cart" title="{l s='Remove from cart' d='Shop.Theme.Actions'}" >
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
			<g>
				<path fill="currentColor" d="M5,24h14l1-17H4L5,24z M18.3,8.6l-0.8,13.8h-11L5.7,8.6H18.3z"></path>
				<rect x="2" y="3.2" fill="currentColor" width="20" height="1.6"></rect>
				<rect x="10" y="0.2" fill="currentColor" width="4" height="1.6"></rect>
			</g>
		</svg>
	</a>
</div>
