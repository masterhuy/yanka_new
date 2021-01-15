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
<div class="row product-detail product-layout-sticky-info">
	<div class="pb-left-column col-12 col-md-6">
		<div class="pd-left-content">
			{block name='page_content_container'}
				<section class="page-content" id="content">
					{block name='page_content'}
						{block name='product_cover_thumbnails'}                      
							{include file='catalog/_partials/product-cover-thumbnails.tpl'}
						{/block}
					{/block}
				</section>
			{/block}
		</div>
	</div>
	<div class="pb-right-column col-12 col-md-6">
		<div class="js-content-sticky">
			{block name='page_header_container'}
				{block name='page_header'}
					<h1 itemprop="name" class="product-name">{block name='page_title'}{$product.name}{/block}</h1>
				{/block}
			{/block}
			<div class="rating">
				{block name='product_reviews'}
					{hook h='displayProductListReviews' product=$product}
				{/block}
			</div>
			{block name='product_prices'}
				{include file='catalog/_partials/product-prices.tpl'}
			{/block}
			<div class="product-information">
				{block name='product_description_short'}
					<div id="product-description-short-{$product.id}" class="product-desc">{$product.description_short|truncate:400:"..." nofilter}</div>
				{/block}
				{if isset($product.specific_prices.to) && $product.specific_prices.to > 0}
					<div class="specific_prices">
						<div class="countdown-box">
							<div class="countdown">{$product.specific_prices.to}</div>
						</div>
					</div>
				{/if}
				{if $product.is_customizable && count($product.customizations.fields)}
					{block name='product_customization'}
						{include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
					{/block}
				{/if}
				<div class="product-actions">
					{block name='product_buy'}
						<form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
							<input type="hidden" name="token" value="{$static_token}">
							<input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
							<input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">
							{block name='product_pack'}
								{if $packItems}
									<section class="product-pack">
										<h6>{l s='This pack contains' d='Shop.Theme.Catalog'}</h6>
										<article>
											<div class="pack-product-container">
												<table class="table">
													<thead>
														<tr>
															<th>{l s='Products' d='Shop.Theme.Catalog'}</th>
															<th>{l s='Price' d='Shop.Theme.Catalog'}</th>
															<th>{l s='Quantity' d='Shop.Theme.Catalog'}</th>
														</tr>
													</thead>
													{foreach from=$packItems item="product_pack"}
														{block name='product_miniature'}
															{include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack}
														{/block}
													{/foreach}
												</table>
											</div>
										</article>
									</section>
								{/if}
							{/block}
							{block name='product_discounts'}
								{include file='catalog/_partials/product-discounts.tpl'}
							{/block}
								
							{block name='product_variants'}
								{include file='catalog/_partials/product-variants.tpl'}
							{/block}

							{block name='product_add_to_cart'}
								{include file='catalog/_partials/product-add-to-cart.tpl'}
							{/block}
							<div class="product-details-footer">
								<div class="product-cat">
									<span>{l s='Category' d='Shop.Theme.Catalog'}:</span>
									<a href="{url entity='category' id=$product.id_category_default}">
										{$product.category_name|escape:'html':'UTF-8'}
									</a>
								</div>
								{if $gdzSetting.product_page_sharing}
									{hook h='displayProductButtons' product=$product}
								{/if}
							</div>
							{block name='product_refresh'}
								<input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="{l s='Refresh' d='Shop.Theme.Actions'}">
							{/block}
						</form>
					{/block}
				</div>
				{hook h='displayReassurance'}
			</div>
			{include file='catalog/more-infos-accordion.tpl'}
		</div>
	</div>
</div>

<hr class="mt-3 mb-5">

<div id="sticky-bar">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto col-left">
                <div class="d-flex align-items-center">
                    {block name='product_cover'}
                        <div class="product-cover">
                            <img class="zoom_01 js-qv-product-cover" src="{$product.cover.bySize.small_default.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}" itemprop="image">
                        </div>
                    {/block}
                    <h4 class="product-title">{$product.name}</h4>
                </div>
            </div>
            <div class="col-auto col-right">
                <div class="d-flex align-items-center content">
                    {block name='product_prices'}
                        {include file='catalog/_partials/product-prices.tpl'}
                    {/block}
                </div>
            </div>
        </div>
    </div>
</div>