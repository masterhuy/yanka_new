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
            <div class="col-xl-4 block block-newsletter">
                <h3 class="h3 block-title">
                   {l s='Subscribe to Our Newsletter!' d='Shop.jmstheme'}
                </h3>
                <div class="block-content">
                    {block name='footer-newsletter'}
                        <div class="block block-footer block-newsletter">
                            {widget name="ps_emailsubscription" hook='displayFooter'}
                        </div>
                    {/block}
                    <p>{l s='By entering your email, you agree to our Terms of Service and Privacy Policy.' d='Shop.jmstheme'}</p>
                    <div class="block-socials">
                        {include file='_partials/socials.tpl'}
                    </div>
                </div>
            </div>
            {block name='hook_footer'}
                {hook h='displayFooter'}
            {/block}
            <div class="col-xl-4 block block-store">
                <h3 class="h3 block-title">
                   {l s='Store' d='Shop.jmstheme'}
                </h3>
                <div class="block-content">
                    {$gdzSetting.footer_html nofilter}
                </div>
            </div>
            
        </div>
    </div>
</div>
{block name='footer-copyright'}
    <div id="footer-copyright" class="footer-copyright{if $gdzSetting.footer_copyright_class} {$gdzSetting.footer_copyright_class}{/if}">
        <div class="container">
            {if isset($gdzSetting.footer_copyright_content) && $gdzSetting.footer_copyright_content}
                {$gdzSetting.footer_copyright_content nofilter}
                <img src="{$gdzSetting.footer_payment_image}" class="img-fluid" alt="{l s='Payments' d='Shop.jmstheme'}"/>
            {/if}
        </div>
    </div>
{/block}
