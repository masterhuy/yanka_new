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
<div class="product-miniature js-product-miniature thumbnail-container productbox-12 customs" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
	<div class="product-preview">
		{block name='product_thumbnail'}
		  	<a href="{$product.url}" class="product-image{if $gdzSetting.productbox_hover == 'swap-image' && isset($product.images.1) && $product.images.1} swap-image{else} blur-image{/if}">
				<img class="img-responsive product-img1{if $gdzSetting.carousel_lazyload} owl-lazy{/if}"
            	    data-src="{$product.cover.bySize.home_default_200x310.url}"
				    src = "{$product.cover.bySize.home_default_200x310.url}"
				    alt = "{$product.cover.legend}"
					title = "{$product.name|escape:'html':'UTF-8'}"
				    data-full-size-image-url = "{$product.cover.large.url}"
				/>
				{if $gdzSetting.productbox_hover == 'swap-image' && isset($product.images.1) && $product.images.1}
					<img class="img-responsive product-img2"
					    src = "{$product.images.1.bySize.home_default_200x310.url}"
					    alt = "{$product.images.1.legend}"
						title = "{$product.name|escape:'html':'UTF-8'}"
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
				{l s='by' d='Shop.Theme.Actions'} 
				<span>{$product.category_name|escape:'html':'UTF-8'}</span>
			</a>
	    {/if}
		{block name='product_name'}
        	<h3 class="product-title" itemprop="name"><a class="product-link" href="{$product.canonical_url}">{$product.name|truncate:35:'...'}</a></h3>
        {/block}
        {if $gdzSetting.productbox_price}
    		{block name='product_price_and_shipping'}
    			{if $product.show_price}
					<div class="content_price">
						{hook h='displayProductPriceBlock' product=$product type="before_price"}
						<span class="price new {if $product.has_discount}has-discount{/if}">
							{$product.price}
						</span>
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
		<div class="product-footer">
			{block name='product_reviews'}
				{hook h='displayProductListReviews' product=$product}
			{/block}
			<div class="product-action">
				{if !$configuration.is_catalog && $gdzSetting.productbox_addtocart}
					{if $product.quantity >= 1}
						<a href="#" class="ajax-add-to-cart product-btn {if $product.quantity < 1}disabled{/if} cart-button btn-icon" {if $product.quantity < 1}disabled{/if} title="{if $product.quantity < 1}{l s='Sold Out' d='Shop.Theme.Actions'}{else}{l s='Add to cart' d='Shop.Theme.Actions'}{/if}" {if $product.quantity < 1}disabled{/if} data-id-product="{$product.id}" data-minimal-quantity="{$product.minimal_quantity}" data-token="{if isset($static_token) && $static_token}{$static_token}{/if}">
							<span>{l s='Add to cart' d='Shop.Theme.Actions'}</span>
						</a>
					{else}
						<a href="#" class="product-btn btn-icon disabled" disabled title="{l s='Sold Out' d='Shop.Theme.Actions'}" data-id-product="{$product.id}" data-minimal-quantity="{$product.minimal_quantity}">
							<span>{l s='Sold Out' d='Shop.Theme.Actions'}</span>
						</a>
					{/if}
				{/if}
			</div>
			{if $gdzSetting.productbox_wishlist}            
				<a href="#" class="addToWishlist btn-icon" title="{l s='Add to Wishlist' d='Shop.Theme.Actions'}" onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|escape:'html'}', false, 1); return false;" data-id-product="{$product.id_product|escape:'html'}">
					<span>{l s='Add to Wishlist' d='Shop.Theme.Actions'}</span>
				</a>
			{/if}
		</div>
	</div>
	<div class="product-actions">
        {if $gdzSetting.productbox_price}
            {block name='product_price_and_shipping'}
                {if $product.show_price}
                    <div class="content_price">
						{hook h='displayProductPriceBlock' product=$product type="before_price"}
						<span class="price new {if $product.has_discount}has-discount{/if}">{$product.price}</span>
						{if $product.has_discount}
							{hook h='displayProductPriceBlock' product=$product type="old_price"}
							<span class="old price">{$product.regular_price}</span>
						{/if}
						{hook h='displayProductPriceBlock' product=$product type='unit_price'}
						{hook h='displayProductPriceBlock' product=$product type='weight'}
					</div>
                {/if}
            {/block}
        {/if}
        {if $gdzSetting.productbox_quickview}
			<a href="#" data-link-action="quickview" title="{l s='Quick View' d='Shop.Theme.Actions'}" class="btn-icon quick-view">
				<span>{l s='Quick View' d='Shop.Theme.Actions'}</span>
			</a>
		{/if}
		{if !$configuration.is_catalog && $gdzSetting.productbox_addtocart}
			{if $product.quantity >= 1}
				<a href="#" class="ajax-add-to-cart product-btn {if $product.quantity < 1}disabled{/if} cart-button btn-icon" {if $product.quantity < 1}disabled{/if} title="{if $product.quantity < 1}{l s='Sold Out' d='Shop.Theme.Actions'}{else}{l s='Add to cart' d='Shop.Theme.Actions'}{/if}" {if $product.quantity < 1}disabled{/if} data-id-product="{$product.id}" data-minimal-quantity="{$product.minimal_quantity}" data-token="{if isset($static_token) && $static_token}{$static_token}{/if}">
					<span>{l s='Add to cart' d='Shop.Theme.Actions'}</span>
				</a>
			{else}
				<a href="#" class="product-btn btn-icon disabled" disabled title="{l s='Sold Out' d='Shop.Theme.Actions'}" data-id-product="{$product.id}" data-minimal-quantity="{$product.minimal_quantity}">
					<span>{l s='Sold Out' d='Shop.Theme.Actions'}</span>
				</a>
			{/if}
		{/if}
    </div>
</div>

