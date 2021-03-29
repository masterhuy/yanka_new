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
<div class="row product-detail default">
    <div class="pb-left-column col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-2 mb-md-0">
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
    <div class="pb-right-column col-lg-6 col-md-6 col-sm-6 col-xs-12">
        {block name='page_header_container'}
            {block name='page_header'}
                <h1 itemprop="name" class="product-name">{block name='page_title'}{$product.name}{/block}</h1>
            {/block}
        {/block}

        {block name='product_prices'}
            {include file='catalog/_partials/product-prices.tpl'}
        {/block}

        <div class="rating">
            {hook h='displayProductAdditionalInfo' product=$product}
        </div>

        <div class="product-information">
            <ul class="other-info">
                {if $product.reference}
                    <li id="product_reference">
                        <label>{l s='Product Code:' d='Shop.Theme.Catalog'}</label>
                        <span class="editable">{$product.reference}</span>
                    </li>
                {/if}
                <li>
                    {block name='product_availability'}
                        {if $product.show_availability && $product.availability_message}
                            <li>
                                <label>{l s='Availability:' d='Shop.Theme.Catalog'}</label>
                                <span class="editable">
                                    {if $product.availability == 'available'}
                                        {$product.availability_message}
                                    {elseif $product.availability == 'last_remaining_items'}
                                        <i class="material-icons product-last-items">&#xE002;</i>
                                    {else}
                                        {$product.availability_message}
                                    {/if}
                                </span>
                            </li>
                        {/if}
                    {/block}
                </li>
                {if $product.id_manufacturer}
                    <li id="product_vendor">
                        <label>{l s='Vendor:' d='Shop.Theme.Catalog'}</label>
                        <span class="editable">{Manufacturer::getnamebyid($product.id_manufacturer)}</span>
                    </li>
                {/if}
                <li class="product-category">
                    <label>{l s='Product Type: '}</label>
                    <a class="editable" href="{url entity='category' id=$product.id_category_default}">
                        {$product.category|escape:'html':'UTF-8'}
                    </a
                </li>
            </ul>

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

                        {block name='hook_display_reassurance'}
                            {hook h='displayReassurance'}
                        {/block}

                        {block name='product_add_to_cart'}
                            {include file='catalog/_partials/product-add-to-cart.tpl'}
                        {/block}
                        
                        {if $gdzSetting.product_page_sharing}
                            {hook h='displayProductButtons' product=$product}
                        {/if}
                        
                        {block name='product_refresh'}
                            <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="{l s='Refresh' d='Shop.Theme.Actions'}">
                        {/block}
                    </form>
                {/block}
            </div> 
        </div>

        {include file='catalog/_partials/product-guaranteed.tpl'}

        {if isset($smarty.get.product_page_moreinfos_type) && $smarty.get.product_page_moreinfos_type !=''}
            {assign var='product_page_moreinfos_type' value=$smarty.get.product_page_moreinfos_type}
        {else}
            {assign var='product_page_moreinfos_type' value=$gdzSetting.product_page_moreinfos_type}
        {/if}
        
        {if $product_page_moreinfos_type == 'accordion'}
            {include file='catalog/more-infos-accordion.tpl'}
        {else}
            {include file='catalog/more-infos-tab.tpl'}
        {/if}
    </div>
</div>

<div id="sticky-bar" class="hidden">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto col-left">
                <div class="d-flex align-items-center">
                    {block name='product_cover'}
                        <div class="product-cover">
                            <img class="zoom_01 js-qv-product-cover" src="{$product.cover.bySize.small_default.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}" itemprop="image">
                        </div>
                    {/block}
                    <div class="info">
                        <h4 class="product-title">{$product.name}</h4>
                        {block name='product_discount'}
                            {if $product.has_discount}
                                {hook h='displayProductPriceBlock' product=$product type="old_price"}
                                <div class="price old">{$product.regular_price}</div>
                            {/if}
                        {/block}
                        <div itemprop="price" content="{$product.price_amount}" class="price new">{$product.price}</div>
                    </div>
                </div>
            </div>
            <div class="col-auto col-right">
                <div class="d-flex align-items-center">
                    
                </div>
            </div>
        </div>
    </div>
</div>