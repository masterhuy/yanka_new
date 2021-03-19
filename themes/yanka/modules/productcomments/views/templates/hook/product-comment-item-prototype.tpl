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

<div class="product-comment-list-item" data-product-comment-id="@COMMENT_ID@" data-product-id="@PRODUCT_ID@">
    <div class="comment-infos">
        <div class="grade-stars"></div>
        <h4>@COMMENT_TITLE@</h4>
        <div class="comment-date">
            <div class="comment-author">
                @CUSTOMER_NAME@
                <span>{l s='on' d='Modules.Productcomments.Shop'}</span>
            </div>
            @COMMENT_DATE@
        </div>
        <p>@COMMENT_COMMENT@</p>
    </div>
    <div class="comment-buttons btn-group">
        {if $usefulness_enabled}
            <a class="useful-review">
                <i class="material-icons thumb_up">thumb_up</i>
                <span class="useful-review-value">@COMMENT_USEFUL_ADVICES@</span>
            </a>
            <a class="not-useful-review">
                <i class="material-icons thumb_down">thumb_down</i>
                <span class="not-useful-review-value">@COMMENT_NOT_USEFUL_ADVICES@</span>
            </a>
        {/if}
        <a class="report-abuse" title="{l s='Report abuse' d='Modules.Productcomments.Shop'}">
            {l s='Report as Inappropriate' d='Modules.Productcomments.Shop'}
        </a>
    </div>
</div>