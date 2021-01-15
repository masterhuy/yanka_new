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
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="logo-footer">
                    {include file='_partials/footers/logo.tpl'}
                </div>
                {$gdzSetting.footer_html nofilter}
            </div>
            {block name='hook_footer'}
                {hook h='displayFooter'}
            {/block}
            <div class="layout-column block newsletter">
                <h3 class="h3 block-title">
                   {l s='Sign up to newsletter' d='Shop.jmstheme'}
                </h3>
                <p>{l s='Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan.' d='Shop.jmstheme'}</p>
                {block name='footer-newsletter'}
                    <div class="block block-footer block-newsletter">
                        {widget name="ps_emailsubscription" hook='displayFooter'}
                    </div>
                {/block}
            </div>
        </div>
    </div>
</div>
{block name='footer-copyright'}
    <div id="footer-copyright" class="footer-copyright{if $gdzSetting.footer_copyright_class} {$gdzSetting.footer_copyright_class}{/if}">
        <div class="container-fluid">
            <div class="row align-items-center">
                {if isset($gdzSetting.footer_copyright_content) && $gdzSetting.footer_copyright_content}
                    <div class="col-12 col-lg-7">
                        {$gdzSetting.footer_copyright_content nofilter}
                    </div>
                {/if}
                <div class="col-12 col-lg-5 text-lg-right">
                    {include file='_partials/socials.tpl'}
                </div>
            </div>
        </div>
    </div>
{/block}
