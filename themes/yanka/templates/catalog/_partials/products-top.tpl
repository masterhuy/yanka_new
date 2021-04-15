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
<div id="js-product-list-top" class="filters-panel">
	<div class="row align-items-center">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-sort text-right">
			<div class="row">
				{if !empty($listing.rendered_facets)}
					<div class="col-auto d-block d-lg-none">
						<button id="search_filter_toggler">
							<svg>
								<use xlink:href="#icon-filter">
									<symbol id="icon-filter" fill="none" viewBox="0 0 22 24">
										<path d="M9 24V12L1 5V0h22v5l-8 7v8l-6 4zM2.6 4.3l8 7V21l2.8-1.9v-7.9l8-7V1.6H2.6v2.7z" fill="currentColor" stroke-widht="1.6">
										</path>
									</symbol>
								</use>
							</svg>
							<span>{l s='Filter' d='Shop.Theme.Actions'}</span>
						</button>
					</div>
				{/if}
				<div class="col sort-by">
					{if $gdzSetting.shop_sortby == 1}
						{block name='sort_by'}
							{include file='catalog/_partials/sort-orders.tpl' sort_orders=$listing.sort_orders}
						{/block}
					{/if}
					{if $gdzSetting.shop_switchlist == 1}
						<div class="view-mode">
							<div class="button">
								<a class="switch-view view-grid view-grid-2" href="#">
									<span></span>
									<span></span>
								</a>
								<a class="switch-view view-grid view-grid-3 {if $gdzSetting.shop_list == 'grid'}active{/if}" href="#">
									<span></span>
									<span></span>
									<span></span>
								</a>
								<a class="switch-view view-grid view-grid-4" href="#">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
								</a>
								<a class="switch-view view-list {if $gdzSetting.shop_list == 'list'}active{/if}" href="#">
									<span></span>
									<span></span>
								</a>
							</div>
						</div>
					{/if}
				</div>
			</div>
		</div>
	</div>
</div>
