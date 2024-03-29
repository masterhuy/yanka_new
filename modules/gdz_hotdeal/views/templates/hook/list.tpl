{*
* 2007-2020 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2020 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="panel"><h3><i class="icon-list-ul"></i> {l s='Deal list' d='Shop.Theme.Global'}
	<span class="panel-heading-action">
		<a id="desc-product-new" class="list-toolbar-btn" href="{$link->getAdminLink('AdminModules')|escape:'html'}&configure=gdz_hotdeal&addDeal=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div id="dealsContent">
		{if isset($deals) && $deals|@count gt 0}
		<div id="deals">
			{foreach from=$deals item=hotdeal}
				<div id="slides_{$hotdeal.id_deal|escape:'html'}" class="panel">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows"></i></span>
						</div>
						<div class="col-md-11">
							<h4 class="pull-left">#{$hotdeal.id_deal|escape:'html'} - {$hotdeal.product_name|escape:'html'}</h4>
							<div class="btn-group-action pull-right">


								<a class="btn {if $hotdeal.active}btn-success{else}btn-danger{/if}"
                                    href="{$link->getAdminLink('AdminModules')|escape:'html':'UTF-8'}&configure=gdz_hotdeal&changeStatus&id_deal={$hotdeal.id_deal|escape:'html'}">
                                    <i class="{if $hotdeal.active}icon-check{else}icon-remove{/if}"></i>{if $hotdeal.active}Enabled{else}Disabled{/if}
                           		 </a>

								<a class="btn btn-default"
									href="{$link->getAdminLink('AdminModules')|escape:'html'}&configure=gdz_hotdeal&id_deal={$hotdeal.id_deal|escape:'html'}">
									<i class="icon-edit"></i>
									{l s='Edit' d='Shop.Theme.Global'}
								</a>
								<a class="btn btn-default"
									href="{$link->getAdminLink('AdminModules')|escape:'html'}&configure=gdz_hotdeal&delete_id_deal={$hotdeal.id_deal|escape:'html'}">
									<i class="icon-trash"></i>
									{l s='Delete' d='Shop.Theme.Global'}
								</a>
							</div>
						</div>
					</div>
				</div>
			{/foreach}
		</div>
	{/if}
	</div>
</div>
