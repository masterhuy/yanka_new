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
			<div class="sort-by">
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
