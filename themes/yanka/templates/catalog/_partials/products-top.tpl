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
		<div class="col-4 sidebar-toggler">
			<a href="#" class="js-open-filter">
				<i class="icon-bars"></i>
				{l s='Filters' d='Shop.Theme.Catalog'}
			</a>
		</div>
		<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-pagination text-left">
			{block name='pagination'}
				{include file='_partials/pagination.tpl' pagination=$listing.pagination}
			{/block}
		</div>
		<div class="col-12 col-sm-12 col-md-6 col-lg-8 col-sort text-right">
			<div class="sort-by">
				{if $gdzSetting.shop_sortby == 1}
					{block name='sort_by'}
						{include file='catalog/_partials/sort-orders.tpl' sort_orders=$listing.sort_orders}
					{/block}
				{/if}
				{if $gdzSetting.shop_switchlist == 1}
					<div class="view-mode">
						<a class="switch-view view-list {if $gdzSetting.shop_list == 'list'}active{/if}" href="#">
							<svg width="16" height="10">
								<rect x="0" y="0" width="4" height="4"></rect>
								<rect x="6" y="0" width="10" height="4"></rect>
								<rect x="0" y="6" width="4" height="4"></rect>
								<rect x="6" y="6" width="10" height="4"></rect>
							</svg>
						</a>
						<a class="switch-view view-grid view-grid-2" href="#">
							<svg width="10" height="10">
								<rect x="0" y="0" width="4" height="4"></rect>
								<rect x="6" y="0" width="4" height="4"></rect>
								<rect x="0" y="6" width="4" height="4"></rect>
								<rect x="6" y="6" width="4" height="4"></rect>
							</svg>
						</a>
						<a class="switch-view view-grid view-grid-3 {if $gdzSetting.shop_list == 'grid'}active{/if}" href="#">
							<svg width="16" height="10">
								<rect x="0" y="0" width="4" height="4"></rect>
								<rect x="6" y="0" width="4" height="4"></rect>
								<rect x="12" y="0" width="4" height="4"></rect>
								<rect x="0" y="6" width="4" height="4"></rect>
								<rect x="6" y="6" width="4" height="4"></rect>
								<rect x="12" y="6" width="4" height="4"></rect>
							</svg>
						</a>
						<a class="switch-view view-grid view-grid-4" href="#">
							<svg width="22" height="10">
								<rect x="0" y="0" width="4" height="4"></rect>
								<rect x="6" y="0" width="4" height="4"></rect>
								<rect x="12" y="0" width="4" height="4"></rect>
								<rect x="18" y="0" width="4" height="4"></rect>
								<rect x="0" y="6" width="4" height="4"></rect>
								<rect x="6" y="6" width="4" height="4"></rect>
								<rect x="12" y="6" width="4" height="4"></rect>
								<rect x="18" y="6" width="4" height="4"></rect>
							</svg>
						</a>
					</div>
				{/if}
			</div>
			{if !empty($listing.rendered_facets)}
				<div class="filter-button d-flex justify-content-center hidden-md-up">
					<button id="search_filter_toggler" class="btn btn-outline-dark">
						{l s='Filter' d='Shop.Theme.Actions'}
					</button>
				</div>
			{/if}
		</div>
	</div>
</div>
