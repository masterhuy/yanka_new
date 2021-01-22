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
	<i class="icon-bars"></i>
</a>
<div class="mobile-menu-wrap hidden-lg">
    <button id="mobile-menu-close" class="close-button">
        <i class="icon-close"></i>
    </button>
    {hook h='displayTopColumn'}
    <h3 class="text-menu">{l s='Menu' d='Shop.Theme.Global'}</h3>
    <nav id="off-canvas-menu">
        {widget name="gdz_megamenu" hook='MobiMenu'}
    </nav>
    <div class="social-block">
        {include file='_partials/socials.tpl'}
    </div>
</div>
<div class="mobile-menu-overlay"></div>


