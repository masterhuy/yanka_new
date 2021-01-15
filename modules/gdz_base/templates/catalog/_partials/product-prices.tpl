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
{if $product.show_price}
    <div class="product-prices content_price">
      {if isset($product.reference_to_display) && $product.reference_to_display neq ''}
          <div class="product-reference">
              <label class="label">{l s='Reference' d='Shop.Theme.Catalog'} </label>
              <span itemprop="sku">{$product.reference_to_display}</span>
          </div>
      {/if}
        {block name='product_discount'}
            {if $product.has_discount}
                {hook h='displayProductPriceBlock' product=$product type="old_price"}
                <div class="price old">{$product.regular_price}</div>
            {/if}
        {/block}

	    <div itemprop="price" content="{$product.price_amount}" class="price new">{$product.price}</div>

        {block name='product_price'}
            <div
                class="product-price h5 {if $product.has_discount}has-discount{/if}"
                itemprop="offers"
                itemscope
                itemtype="https://schema.org/Offer"
            >
                <link itemprop="availability" href="https://schema.org/InStock"/>
                <meta itemprop="priceCurrency" content="{$currency.iso_code}">
                {block name='product_unit_price'}
                    {if $displayUnitPrice}
                        <p class="product-unit-price sub">{l s='(%unit_price%)' d='Shop.Theme.Catalog' sprintf=['%unit_price%' => $product.unit_price_full]}</p>
                    {/if}
                {/block}
            </div>
        {/block}

        {block name='product_without_taxes'}
            {if $priceDisplay == 2}
                <p class="product-without-taxes">{l s='%price% tax excl.' d='Shop.Theme.Catalog' sprintf=['%price%' => $product.price_tax_exc]}</p>
            {/if}
        {/block}

        {block name='product_pack_price'}
            {if $displayPackPrice}
                <p class="product-pack-price"><span>{l s='Instead of %price%' d='Shop.Theme.Catalog' sprintf=['%price%' => $noPackPrice]}</span></p>
            {/if}
        {/block}

        {block name='product_ecotax'}
            {if $product.ecotax.amount > 0}
                <p class="price-ecotax">{l s='Including %amount% for ecotax' d='Shop.Theme.Catalog' sprintf=['%amount%' => $product.ecotax.value]}
                    {if $product.has_discount}
                        {l s='(not impacted by the discount)' d='Shop.Theme.Catalog'}
                    {/if}
                </p>
            {/if}
        {/block}

        {hook h='displayProductPriceBlock' product=$product type="weight" hook_origin='product_sheet'}

        {block name='product_availability'}
            {if $product.show_availability && $product.availability_message}
            <span id="product-availability">
                {if $product.availability == 'available'}
                    <span>{$product.availability_message}</span>
                {elseif $product.availability == 'last_remaining_items'}
                    <span>{l s='last item' d='Shop.Theme.Catalog'}</span>
                {else}
                    <span>{$product.availability_message}</span>
                {/if}
            </span>
            {/if}
        {/block}
  </div>
{/if}
