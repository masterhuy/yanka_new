{**
 * 2007-2019 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
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
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="header-dropdown user-info btn-group">
	{if $logged}
		<div class="header-dropdown">
			<a href="#" title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}">
				{$customerName}
			</a>
			<div class="header-menu">
				<ul>
					<li><a href="{$link->getPageLink('my-account', true)}" title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}" rel="nofollow">{l s='My Account' d='Shop.Theme.Customeraccount'} </a></li>
					<li><a href="{$link->getPageLink('order', true)}" title="{l s='Checkout' d='Shop.Theme.Customeraccount'}" rel="nofollow">{l s='Checkout' d='Shop.Theme.Customeraccount'} </a></li>
					<li><a class="logout" href="{$logout_url}" rel="nofollow" >{l s='Log out' d='Shop.Theme.Actions'}</a></li>
				</ul>
			</div>
		</div>
	{else}
		<a href="{$link->getPageLink('my-account', true)}" title="{l s='Sign in' d='Shop.Theme.Customeraccount'}">
			{l s='Sign in / Sign up' d='Shop.Theme.Actions'}
		</a>
	{/if}
</div>

