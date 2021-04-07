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
{if ($gdzSetting.header_topbar == 1)}
    <div class="alert-box">
        <div class="container">
            <div class="row">
                <div class="layout-column col-12">
                    {$gdzSetting.topbar_content nofilter}
                </div>
            </div>
        </div>
    </div>
{/if}

<div id="header-top" class="{if $gdzSetting.topbar_class} {$gdzSetting.topbar_class}{/if} header-top top-panel">
    <div class="container-fluid">
        <div class="row align-items-center">
            {$gdzSetting.header_html nofilter}
        </div>
    </div>
</div>

<div id="header-mobile-top" class="header-mobile-top mobile-menu-light{if $gdzSetting.header_mobile_sticky == 1} header-sticky{/if}{if ($gdzSetting.header_mobile_sticky == 1) && ($gdzSetting.header_sticky_effect != '')} {$gdzSetting.header_sticky_effect}{/if}">
    <div class="container">
        <div class="row align-items-center">
            <div class="layout-column col-4 header-left">
                {include file='_partials/headers/mobile-menu.tpl'}
            </div>
            <div class="layout-column col-4 text-center">
                {include file='_partials/headers/logo.tpl'}
            </div>
            <div class="layout-column col-4 right-module-header header-right">
                <div class="row align-items-center justify-content-end no-margin">
                    {if $gdzSetting.search == 1}
                        {if $gdzSetting.search_box_type == 'dropdown'}
                            {widget_block name="gdz_ajaxsearch"}
                                {include 'module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch-dropdown.tpl'}
                            {/widget_block}
                        {elseif $gdzSetting.search_box_type == 'fullwidth'}
                            {widget_block name="gdz_ajaxsearch"}
                                {include 'module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch-fullwidth.tpl'}
                            {/widget_block}
                        {else}
                            {widget_block name="gdz_ajaxsearch"}
                                {include 'module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch-fullscreen.tpl'}
                            {/widget_block}
                        {/if}
                    {/if}
                    {if ($gdzSetting.cart == 1)}
                        {widget_block name="ps_shoppingcart"}
                            {include 'module:ps_shoppingcart/ps_shoppingcart.tpl'}
                        {/widget_block}
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>

