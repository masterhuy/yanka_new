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
<div class="product-add-to-cart">
    {if !$configuration.is_catalog}
        {block name='product_quantity'}
            <div class="product-quantity">
                <div class="qty">
                    <input
                        type="text"
                        name="qty"
                        id="quantity_wanted"
                        value="{$product.quantity_wanted}"
                        class="input-group"
                        min="{$product.minimal_quantity}"
                        aria-label="{l s='Quantity' d='Shop.Theme.Actions'}"
                    />
                </div>
      		    <div class="add">
                    <button title="{l s='Add to Cart' d='Shop.Theme.Actions'}" class="btn-default add-to-cart product-btn cart-button {if !$product.add_to_cart_url}disabled{/if}" data-button-action="add-to-cart" type="submit" {if !$product.add_to_cart_url}disabled{/if}>
                        <i class="icon-cart">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
                                <path fill="currentColor" d="M22,8c0-1.1-0.9-2-2-2h-2.7c-0.9-3.4-2.9-5.8-5.3-5.8C9.6,0.2,7.6,2.6,6.7,6H4C2.9,6,2,6.9,2,8L0,22l0,0.1
                                C0,23.2,0.9,24,2,24h20c1.1,0,2-0.8,2-1.9l0-0.1L22,8z M12,1.8c1.5,0,2.9,1.7,3.6,4.2H8.4C9.1,3.5,10.5,1.8,12,1.8z M22,22.4H2
                                c-0.2,0-0.4-0.1-0.4-0.3l2-13.8l0-0.2c0-0.2,0.2-0.4,0.4-0.4h2.4C6.3,8.4,6.2,9.2,6.2,10h1.6c0-0.8,0.1-1.6,0.2-2.4h8
                                c0.1,0.8,0.2,1.6,0.2,2.4h1.6c0-0.8-0.1-1.6-0.2-2.4H20c0.2,0,0.4,0.2,0.4,0.5l2,14C22.4,22.3,22.2,22.4,22,22.4z"></path>
                            </svg>
                        </i>
                        <span class="text-addcart">
                            {l s='Add to cart' d='Shop.Theme.Actions'}
                        </span>
                        <span class="text-outofstock">
                            {l s='Sold Out' d='Shop.Theme.Actions'}
                        </span>
                    </button>
                </div>
                
                {hook h='displayProductActions' product=$product}
            </div>
            {if $gdzSetting.productbox_wishlist}
                <a 
                    href="#" 
                    class="addToWishlist" 
                    onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|escape:'html'}', false, 1); return false;" 
                    data-id-product="{$product.id_product|escape:'html'}" 
                    title="{l s='Add to Wishlist' d='Shop.Theme.Actions'}"
                >
                    <span>{l s='Add to Wishlist' d='Shop.Theme.Actions'}</span>
                </a>
            {/if}
            <div class="clearfix"></div>
        {/block}

        {block name='product_availability'}
            <span id="product-availability">
                {if $product.show_availability && $product.availability_message}
                    {if $product.availability == 'available'}
                        <i class="la la-check"></i>
                    {elseif $product.availability == 'last_remaining_items'}
                        <i class="la la-exclamation-triangle"></i>
                    {else}
                        <i class="la la-ban"></i>
                    {/if}
                    {$product.availability_message}
                {/if}
            </span>
        {/block}

        {block name='product_minimal_quantity'}
            <p class="product-minimal-quantity">
                {if $product.minimal_quantity > 1}
                    {l
                        s='The minimum purchase order quantity for the product is %quantity%.'
                        d='Shop.Theme.Checkout'
                        sprintf=['%quantity%' => $product.minimal_quantity]
                    }
                {/if}
            </p>
        {/block}
    {/if}
</div>
