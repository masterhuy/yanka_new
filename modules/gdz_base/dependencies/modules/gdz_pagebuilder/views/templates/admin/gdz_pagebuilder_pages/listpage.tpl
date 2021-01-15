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
<div class="panel"><h3><i class="icon-list-ul"></i> {l s='Pages List' mod='gdz_pagebuilder'}
	<span class="panel-heading-action">
		<a class="list-toolbar-btn" href="{$link->getAdminLink('AdminGdzpagebuilderPages')|escape:'html':'UTF-8'}&configure=gdz_pagebuilder&addPage=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div id="rows">
		<div id="page_list" class="page">
			{foreach from=$pages key=i item=page}
				<div id="page_{$page.id_page|escape:'html':'UTF-8'}" class="panel">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows"></i></span>
						</div>
						<div class="col-md-11">
							<h4 class="pull-left">#{$page.id_page|escape:'html':'UTF-8'} - {$page.title|escape:'html':'UTF-8'}</h4>
							<div class="btn-group-action pull-right">
								<a class="btn {if $page.active}btn-success{else}btn-danger{/if}"	href="{$link->getAdminLink('AdminGdzpagebuilderPages')|escape:'html':'UTF-8'}&configure=gdz_pagebuilder&status_id_page={$page.id_page|escape:'html':'UTF-8'}" title="{if $page.active}Enabled{else}Disabled{/if}">
								<i class="{if $page.active}icon-check{else}icon-remove{/if}"></i>{if $page.active}Enabled{else}Disabled{/if}
								</a>
								<a class="btn btn-default" href="{$link->getAdminLink('AdminGdzpagebuilderPages')|escape:'html':'UTF-8'}&configure=gdz_pagebuilder&config_id_page={$page.id_page|escape:'html':'UTF-8'}">
									<i class="icon-sitemap"></i>
									{l s='Layout Config' mod='gdz_pagebuilder'}
								</a>
								<a class="btn btn-default" href="{$link->getAdminLink('gdzPagebuilderEditor')|escape:'html':'UTF-8'}&id_page={$page.id_page|escape:'html':'UTF-8'}">
									<i class="icon-sitemap"></i>
									{l s='Live Editor' mod='gdz_pagebuilder'}
								</a>
								<a class="btn btn-default" href="{$link->getAdminLink('AdminGdzpagebuilderPages')|escape:'html':'UTF-8'}&configure=gdz_pagebuilder&duplicate_id_page={$page.id_page|escape:'html':'UTF-8'}">
									<i class="icon-copy"></i>
									{l s='Duplicate' mod='gdz_pagebuilder'}
								</a>
								<a class="btn btn-default" href="{$link->getAdminLink('AdminGdzpagebuilderPages')|escape:'html':'UTF-8'}&configure=gdz_pagebuilder&edit_id_page={$page.id_page|escape:'html':'UTF-8'}">
									<i class="icon-edit"></i>
									{l s='Edit' mod='gdz_pagebuilder'}
								</a>
								<a class="btn btn-default" href="{$link->getAdminLink('AdminGdzpagebuilderPages')|escape:'html':'UTF-8'}&configure=gdz_pagebuilder&delete_id_page={$page.id_page|escape:'html':'UTF-8'}" onclick="return confirm('{l s='Are you sure you want to delete this item' mod='gdz_pagebuilder'}?');">
									<i class="icon-trash"></i>
									{l s='Delete' mod='gdz_pagebuilder'}
								</a>
							</div>
						</div>
					</div>
				</div>
			{/foreach}
		</div>
	</div>
</div>
