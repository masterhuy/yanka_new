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
<div id="quickview-modal-{$product.id}-{$product.id_product_attribute}" class="modal fade quickview-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog container" role="document">
        <div class="modal-content">
            <div class="modal-body" id="main">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
                        <polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
                    </svg>
                </button>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 left">
                        {block name='product_cover_thumbnails'}
                            {include file='catalog/_partials/product-cover-thumbnails-quickview.tpl'}
                        {/block}
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 right">
                        {block name='page_header_container'}
                            {block name='page_header'}
                                <h2 itemprop="name" class="product-name">{block name='page_title'}{$product.name}{/block}</h2>
                            {/block}
                        {/block}
                        {block name='product_prices'}
                            {include file='catalog/_partials/product-prices.tpl'} 
                        {/block}
                        <div class="product-information">
                            {block name='product_description_short'}
                                <div id="product-description-short-{$product.id}" class="product-desc">{$product.description_short|truncate:120:"..." nofilter}</div>
                            {/block}
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

                                        {block name='product_discounts'}
                                            {include file='catalog/_partials/product-discounts.tpl'}
                                        {/block}

                                        {block name='product_variants'}
                                            {include file='catalog/_partials/product-variants.tpl'}
                                        {/block}

                                        {block name='product_add_to_cart'}
                                            {include file='catalog/_partials/product-add-to-cart.tpl'}
                                        {/block}

                                    </form>
                                {/block}
                            </div>
                        </div>
                        {if $gdzSetting.quickview_sharing}
                            {hook h='displayProductButtons' product=$product}
                        {/if}
                        <a href="{$product.link|escape:'html'}" class="btn-link">
                            {l s='View full info' d='Shop.Theme.Catalog'}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
