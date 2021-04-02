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
<div class="product-line-grid row">
    <!--  product left content: image-->
    <div class="product-line-grid-left col col-12 col-sm-6 col-md-6 mb-2 mb-sm-0">
        <div class="row align-items-center small-gutters">
            <div class="col-auto">
                <div class="col-12 col-auto col-md cart-line-product-actions">
                    <a
                        class                       = "remove-from-cart"
                        rel                         = "nofollow"
                        href                        = "{$product.remove_from_cart_url}"
                        data-link-action            = "delete-from-cart"
                        data-id-product             = "{$product.id_product|escape:'javascript'}"
                        data-id-product-attribute   = "{$product.id_product_attribute|escape:'javascript'}"
                        data-id-customization   	  = "{$product.id_customization|escape:'javascript'}"
                    >
                    {if !isset($product.is_gift) || !$product.is_gift}
                        <i>
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                <g>
                                    <path fill="currentColor" d="M5,24h14l1-17H4L5,24z M18.3,8.6l-0.8,13.8h-11L5.7,8.6H18.3z"></path>
                                    <rect x="2" y="3.2" fill="currentColor" width="20" height="1.6"></rect>
                                    <rect x="10" y="0.2" fill="currentColor" width="4" height="1.6"></rect>
                                </g>
                            </svg>
                        </i>
                    {/if}
                    </a>
                    {block name='hook_cart_extra_product_actions'}
                        {hook h='displayCartExtraProductActions' product=$product}
                    {/block}
                </div>
            </div>
            <div class="col-auto">
                {if $product.cover.bySize.cart_default.url}
                    <div class="product-image media-middle">
                        <img src="{$product.cover.bySize.home_default.url}" alt="{$product.name|escape:'quotes'}">
                    </div>
                {/if}
            </div>
            <!--  product left body: description -->
            <div class="col-auto">
                <div class="product-line-info">
                    <a class="product-link" href="{$product.url}" data-id_customization="{$product.id_customization|intval}">{$product.name}</a>
                </div>

                <div class="product-line-info product-price h5 {if $product.has_discount}has-discount{/if}">
                    {if $product.has_discount}
                        <div class="product-discount">
                            <span class="regular-price">{$product.regular_price}</span>
                            {if $product.discount_type === 'percentage'}
                                <span class="discount discount-percentage">
                                    -{$product.discount_percentage_absolute}
                                </span>
                            {else}
                                <span class="discount discount-amount">
                                    -{$product.discount_to_display}
                                </span>
                            {/if}
                        </div>
                    {/if}
                </div>

                {foreach from=$product.attributes key="attribute" item="value"}
                    <div class="product-line-info">
                        <span class="label">{$attribute}:</span>
                        <span class="value">{$value}</span>
                    </div>
                {/foreach}

                {if is_array($product.customizations) && $product.customizations|count}
                <br>
                {block name='cart_detailed_product_line_customization'}
                    {foreach from=$product.customizations item="customization"}
                    <a href="#" data-toggle="modal" data-target="#product-customizations-modal-{$customization.id_customization}">{l s='Product customization' d='Shop.Theme.Catalog'}</a>
                    <div class="modal fade customization-modal" id="product-customizations-modal-{$customization.id_customization}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title">{l s='Product customization' d='Shop.Theme.Catalog'}</h4>
                            </div>
                            <div class="modal-body">
                            {foreach from=$customization.fields item="field"}
                                <div class="product-customization-line row">
                                <div class="col-sm-3 col-xs-4 label">
                                    {$field.label}
                                </div>
                                <div class="col-sm-9 col-xs-8 value">
                                    {if $field.type == 'text'}
                                    {if (int)$field.id_module}
                                        {$field.text nofilter}
                                    {else}
                                        {$field.text}
                                    {/if}
                                    {elseif $field.type == 'image'}
                                    <img src="{$field.image.small.url}">
                                    {/if}
                                </div>
                                </div>
                            {/foreach}
                            </div>
                        </div>
                        </div>
                    </div>
                    {/foreach}
                {/block}
                {/if}
            </div>
        </div>
    </div>
    <!--  product left body: description -->
    <div class="product-line-grid-right col col-12 col-sm-6 col-md-6 product-line-actions">
        <div class="row align-items-center justify-content-end">
            <div class="col-12 col-auto col-md price">
                <span class="product-price">
                    <span class="price">{$product.price}</span>
                    {if $product.unit_price_full}
                        <div class="unit-price-cart">{$product.unit_price_full}</div>
                    {/if}
                </span>
            </div>
            <div class="col-12 col-auto col-md qty">
                {if isset($product.is_gift) && $product.is_gift}
                <span class="gift-quantity">{$product.quantity}</span>
                {else}
                <input
                    class="js-cart-line-product-quantity"
                    data-down-url="{$product.down_quantity_url}"
                    data-up-url="{$product.up_quantity_url}"
                    data-update-url="{$product.update_quantity_url}"
                    data-product-id="{$product.id_product}"
                    type="number"
                    value="{$product.quantity}"
                    name="product-quantity-spin"
                    min="{$product.minimal_quantity}"
                />
                {/if}
            </div>
            <div class="col-12 col-auto col-md total">
                <span class="product-price">
                    {if isset($product.is_gift) && $product.is_gift}
                        <span class="gift">{l s='Gift' d='Shop.Theme.Checkout'}</span>
                    {else}
                        {$product.total}
                    {/if}
                </span>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
