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
<a id="mobile-menu-toggle" class="open-button hidden-lg">
	<svg width="24" height="24" viewBox="0 0 24 24">
        <use xlink:href="#icon-mobile-menu-toggle">
            <symbol id="icon-mobile-menu-toggle" fill="none" viewBox="0 0 24 24">
                <path d="M0 6h24M0 12h16M0 18h24" stroke="currentColor" stroke-widht="1.6"></path>
            </symbol>
        </use>
    </svg>
</a>
<div class="mobile-menu-wrap hidden-lg">
    <button id="mobile-menu-close" class="close-button">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
            <polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
        </svg>
        <span>{l s='Close' d='Shop.Theme.Global'}</span>
    </button>
    {hook h='displayTopColumn'}
    <nav id="off-canvas-menu">
        {widget name="gdz_megamenu" hook='MobiMenu'}
    </nav>
    {widget_block name="ps_languageselector"}
        {include 'module:ps_languageselector/ps_languageselector.tpl'}
    {/widget_block}
    {widget_block name="ps_currencyselector"}
        {include 'module:ps_currencyselector/ps_currencyselector.tpl'}
    {/widget_block}
    {widget_block name="ps_customersignin"}
        {include 'module:ps_customersignin/ps_customersignin.tpl'}
    {/widget_block}
</div>
<div class="mobile-menu-overlay"></div>


