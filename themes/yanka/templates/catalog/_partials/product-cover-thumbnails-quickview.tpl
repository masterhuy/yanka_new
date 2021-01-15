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
<div class="images-container thumbs-left">
    <div class="row">
        {block name='product_images'}
            <div class="col-2">
                <div class="js-qv-mask mask">
                    <div id="gal1" class="product-images js-qv-product-imagess">
                        {foreach from=$product.images item=image}
                            <div class="thumb-container {if $image.id_image == $product.cover.id_image} selected {/if}" data-image="{$image.bySize.large_default.url}">
                                <img
                                    class="thumb js-thumb {if $image.id_image == $product.cover.id_image} selected {/if}"
                                    data-image-medium-src="{$image.bySize.large_default.url}"
                                    data-image-large-src="{$image.bySize.large_default.url}"
                                    src="{$image.bySize.large_default.url}"
                                    alt="{$image.legend}"
                                    title="{$image.legend}"
                                    width="100"
                                    itemprop="image"
                                >
                            </div>
                        {/foreach}
                    </div>
                </div>
            </div>
        {/block}
        {block name='product_cover'}
            <div class="col-10">
                {include file='catalog/_partials/product-cover.tpl'}
            </div>
        {/block}
    </div>
</div>
{hook h='displayAfterProductThumbs'}
