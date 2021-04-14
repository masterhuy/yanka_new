{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
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
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

{if $nb_comments != 0 || $post_allowed}
    <div class="product-comments-additional-info">
        {include file='module:productcomments/views/templates/hook/average-grade-stars.tpl' grade=$average_grade}

        {* Rich snippet rating*}
    </div>
{/if}
<div itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating" itemscope>
    <meta itemprop="reviewCount" content="{if $nb_comments != 0 || $post_allowed}{$nb_comments}{else}1{/if}" />
    <meta itemprop="ratingValue" content="{if $nb_comments != 0 || $post_allowed}{$average_grade}{else}5{/if}" />
</div>
