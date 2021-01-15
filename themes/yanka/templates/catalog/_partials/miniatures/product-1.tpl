{**
 * 2007-2019 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="product-miniature js-product-miniature thumbnail-container productbox-1" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
	<div class="product-preview">
		{block name='product_thumbnail'}
		  	<a href="{$product.url}" class="product-image{if $gdzSetting.productbox_hover == 'swap-image' && isset($product.images.1) && $product.images.1} swap-image{else} blur-image{/if}">
				<img class="img-responsive product-img1{if $gdzSetting.carousel_lazyload} owl-lazy{/if}"
            		data-src="{$product.cover.bySize.home_default.url}"
				    src = "{$product.cover.bySize.home_default.url}"
				    alt = "{$product.cover.legend}"
					title="{$product.name|escape:'html':'UTF-8'}"
				    data-full-size-image-url = "{$product.cover.large.url}"
				/>
				{if $gdzSetting.productbox_hover == 'swap-image' && isset($product.images.1) && $product.images.1}
					<img class="img-responsive product-img2"
					    src = "{$product.images.1.bySize.home_default.url}"
					    alt = "{$product.images.1.legend}"
						title="{$product.name|escape:'html':'UTF-8'}"
					    data-full-size-image-url = "{$product.images.1.large.url}"
					/>
				{/if}
		  	</a>
		{/block}
		{block name='product_flags'}
			<ul class="product-flags">
				{foreach from=$product.flags item=flag}
					<li class="product-flag {$flag.type}">{$flag.label}</li>
				{/foreach}
			</ul>
		{/block}
	</div>
	<div class="product-info">
		{if $gdzSetting.productbox_wishlist}            
			<a href="#" class="addToWishlist btn-icon" title="{l s='Add to Wishlist' d='Shop.Theme.Actions'}" onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|escape:'html'}', false, 1); return false;" data-id-product="{$product.id_product|escape:'html'}"></a>
		{/if}
        {if $gdzSetting.productbox_category}
			<a class="category-name" href="{url entity='category' id=$product.id_category_default}">
				{$product.category_name|escape:'html':'UTF-8'}
			</a>
	    {/if}
		{block name='product_name'}
        	<h3 class="product-title" itemprop="name"><a class="product-link" href="{$product.canonical_url}">{$product.name|truncate:30:'...'}</a></h3>
        {/block}
        {if $gdzSetting.productbox_price}
    		{block name='product_price_and_shipping'}
    			{if $product.show_price}
					<div class="content_price">
						{hook h='displayProductPriceBlock' product=$product type="before_price"}
						<span class="price new {if $product.has_discount}has-discount{/if}">{$product.price}</span>
						{if $product.has_discount}
							{hook h='displayProductPriceBlock' product=$product type="old_price"}
							<span class="old price">{l s='Was' d='Shop.Theme.Actions'} {$product.regular_price}</span>
						{/if}
						{hook h='displayProductPriceBlock' product=$product type='unit_price'}
						{hook h='displayProductPriceBlock' product=$product type='weight'}
					</div>
    			{/if}
    		{/block}
        {/if}
    	<div class="product-short-desc">
    		{$product.description_short|truncate:300:'...' nofilter}
    	</div>
		{if $product.main_variants && $gdzSetting.productbox_variant}
            {block name='product_variants'}
                {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
            {/block}
        {/if}
	</div>
	<div class="btn-group bottom">
		{if $gdzSetting.productbox_wishlist}							
			<a href="#" class="addToWishlist product-btn p-relative d-block" onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|escape:'html'}', false, 1); return false;" data-id-product="{$product.id_product|escape:'html'}">
				<i class="d-flex">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
						<path fill="currentColor" d="M6.9,2.6c1.4,0,2.7,0.6,3.8,1.6l0.2,0.2L12,5.6l1.1-1.1l0.2-0.2c1-1,2.3-1.6,3.8-1.6s2.8,0.6,3.8,1.6
							c2.1,2.1,2.1,5.6,0,7.7L12,20.7l-8.9-8.9C1,9.7,1,6.2,3.1,4.1C4.2,3.2,5.5,2.6,6.9,2.6z M6.9,1C5.1,1,3.3,1.7,2,3.1
							c-2.7,2.7-2.7,7.2,0,9.9l10,10l10-9.9c2.7-2.8,2.7-7.3,0-10c-1.4-1.4-3.1-2-4.9-2c-1.8,0-3.6,0.7-4.9,2L12,3.3l-0.2-0.2
							C10.4,1.7,8.7,1,6.9,1z">
						</path>
					</svg>
				</i>
				<span class="tooltip-wrap left">
					<span class="tooltip-text">
						{l s='Add to wishlist' d='Shop.Theme.Actions'}
					</span>
				</span>
			</a>
		{/if}
		{if $gdzSetting.productbox_quickview}
			<a href="#" data-link-action="quickview" class="d-flex flex-center p-relative quick-view product-btn">
				<i class="d-flex">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
						<g>
							<polygon fill="currentColor" points="11.8,7 10.2,7 10.2,10.2 7,10.2 7,11.8 10.2,11.8 10.2,15 11.8,15 11.8,11.8 15,11.8 15,10.2
								11.8,10.2">
							</polygon>
							<path fill="currentColor" d="M23.6,22.4l-4.3-4.3C21,16.3,22,13.7,22,11c0-6.1-4.9-11-11-11S0,4.9,0,11s4.9,11,11,11c2.7,0,5.3-1,7.2-2.7
								l4.3,4.3L23.6,22.4z M1.6,11c0-5.2,4.2-9.4,9.4-9.4c5.2,0,9.4,4.2,9.4,9.4c0,5.2-4.2,9.4-9.4,9.4C5.8,20.4,1.6,16.2,1.6,11z">
							</path>
						</g>
					</svg>
				</i>
				<span class="tooltip-wrap left">
					<span class="tooltip-text">
						{l s='Quick View' d='Shop.Theme.Actions'}
					</span>
				</span>
			</a>
		{/if}
	</div>
</div>
