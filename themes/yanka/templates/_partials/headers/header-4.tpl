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
<div id="header-top" class="{if $gdzSetting.topbar_class} {$gdzSetting.topbar_class}{/if} header-top top-panel">
    <div class="container-fluid">
        <div class="row align-items-center">
            {$gdzSetting.header_html nofilter}
        </div>
    </div>
</div>
<div class="header-middle">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="layout-column col-auto">
                {include file='_partials/headers/logo.tpl'}
            </div>
            <div class="layout-column col">
                {if $gdzSetting.search == 1}
                    {widget_block name="gdz_ajaxsearch"}
                        {include 'module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch.tpl'}
                    {/widget_block}
                {/if}
            </div>
            <div class="layout-column col-auto right-module-header d-flex align-items-center">
                {if ($gdzSetting.customersignin == 1)}
                    {if $gdzSetting.customersignin_type =='dropdown'}
                        {widget_block name="ps_customersignin"}
                            {include 'module:ps_customersignin/ps_customersignin-dropdown.tpl'}
                        {/widget_block}
                    {else}
                        {widget_block name="ps_customersignin"}
                            {include 'module:ps_customersignin/ps_customersignin-sidebar.tpl'}
                        {/widget_block}
                    {/if}
                {/if}
                {if ($gdzSetting.wishlist == 1)}
                    {include file='_partials/headers/wishlist.tpl'}
                {/if}
                {if ($gdzSetting.cart == 1)}
                    {widget_block name="ps_shoppingcart"}
                        {include 'module:ps_shoppingcart/ps_shoppingcart.tpl'}
                    {/widget_block}
                {/if}
                {widget_block name="ps_languageselector"}
                    {include 'module:ps_languageselector/ps_languageselector-dropdown.tpl'}
                {/widget_block}
                {widget_block name="ps_currencyselector"}
                    {include 'module:ps_currencyselector/ps_currencyselector-dropdown.tpl'}
                {/widget_block}
            </div>
        </div>
    </div>
</div>
<div class="sticky-wrapper {if $gdzSetting.header_sticky == 1} header-sticky{/if}{if ($gdzSetting.header_sticky == 1) && ($gdzSetting.header_sticky_effect != '')} {$gdzSetting.header_sticky_effect}{/if}">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="layout-column position-static col">
                <div id="hor-menu" class="{if $gdzSetting.hormenu_class} {$gdzSetting.hormenu_class}{/if} {if $gdzSetting.hormenu_align} align-{$gdzSetting.hormenu_align}{/if}">
                    {widget name="gdz_megamenu" hook='HorMenu'}
                </div>
            </div>
        </div>
    </div>
</div>





