{**
 * 2007-2019 PrestaShop
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
 * @copyright 2007-2019 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<section id="content" class="page-content page-not-found">
    <div class="row">
        <div class="layout-column col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <div class="pt-empty-layout">
				<h2 class="pt-title-02">{l s='Error 404...' d='Shop.Theme.Global'}</h2>
				<h1 class="pt-title pt-size-large">{l s='Page Not Found' d='Shop.Theme.Global'}</h1>
				<p>
					{l s='We looked everywhere for this page. Are you sure the website URL is correct?' d='Shop.Theme.Global'}
					{l s='Go to the' d='Shop.Theme.Global'} <strong><a href="{$urls.base_url}" class="pt-link pt-color-base">{l s='main page' d='Shop.Theme.Global'}</a></strong> {l s='or select suitable category.' d='Shop.Theme.Global'}
				</p>
			</div>
            {block name='hook_not_found'}
                {hook h='displayNotFound'}
            {/block}
        </div>
    </div>
</section>
