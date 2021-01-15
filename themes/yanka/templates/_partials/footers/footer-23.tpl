{**
 * 2007-2017 PrestaShop
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div id="footer-main" class="footer-main">
    <div class="container">
        <div class="row">
            <div class="layout-column block col">
                <h3 class="h3 block-title">
                    {l s='About us' d='Shop.jmstheme'}
                </h3>
                {$gdzSetting.footer_html nofilter}
                <div class="payments">
                    <p class="widget-about-title">{l s='Payment Method' d='Shop.jmstheme'}</p>
                    <img src="{$gdzSetting.footer_payment_image}" class="img-fluid" alt="{l s='Payments' d='Shop.jmstheme'}"/>
                </div>
            </div>
            {block name='hook_footer'}
                {hook h='displayFooter'}
            {/block}
        </div>
        <div class="row">
            {block name='hook_footer_after'}
                {hook h='displayFooterAfter'}
            {/block}
        </div>
    </div>
</div>

