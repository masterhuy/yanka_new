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

{if $products}
	{if !$refresh}
	<div class="wishlist-container">
		<a href="#" class="button_account hide-wishlist" onclick="WishlistVisibility('wishlist-container', 'Wishlist'); return false;" title="{l s='Close this wishlist' d='Shop.Theme.Global'}" rel="nofollow"><i class="fa fa-close"></i>{l s='Close this wishlist' d='Shop.Theme.Global'}</a>

		<div class="wishlist-url">{l s='Permalink' d='Shop.Theme.Global'}: <input type="text" value="{$link->getModuleLink('gdz_wishlist', 'view', ['token' => $token_wish])|escape:'html':'UTF-8'}" class="form-control" readonly="readonly" /></div>
		<div class="wishlist-tools">
			<div id="showSendWishlist">
				<a href="#" class="button_account exclusive" onclick="WishlistVisibility('wl_send', 'SendWishlist'); return false;" title="{l s='Send this wishlist' d='Shop.Theme.Global'}"><i class="fa fa-send-o"></i>&nbsp;&nbsp;{l s='Send this wishlist' d='Shop.Theme.Global'}</a>
			</div>
			<ul class="clearfix display_list">
				<li>
					<a href="#" id="hideBoughtProducts" class="button_account"  onclick="WishlistVisibility('wlp_bought', 'BoughtProducts'); return false;" title="{l s='Hide products' d='Shop.Theme.Global'}">{l s='Hide products' d='Shop.Theme.Global'}</a>
					<a href="#" id="showBoughtProducts" class="button_account"  onclick="WishlistVisibility('wlp_bought', 'BoughtProducts'); return false;" title="{l s='Show products' d='Shop.Theme.Global'}" style="display:none;">{l s='Show products' d='Shop.Theme.Global'}</a>
				</li>
				{if count($productsBoughts)}
				<li>
					<a href="#" id="hideBoughtProductsInfos" class="button_account" onclick="WishlistVisibility('wlp_bought_infos', 'BoughtProductsInfos'); return false;" title="{l s="Hide products" d='Shop.Theme.Global'}">{l s="Hide bought products' info" d='Shop.Theme.Global'}</a>
					<a href="#" id="showBoughtProductsInfos" class="button_account"  onclick="WishlistVisibility('wlp_bought_infos', 'BoughtProductsInfos'); return false;" title="{l s="Show products" d='Shop.Theme.Global'}">{l s="Show bought products' info" d='Shop.Theme.Global'}</a>
				</li>
				{/if}
			</ul>
		</div>
	{/if}
	<div class="wlp_bought">
		<ul class="clearfix wlp_bought_list row">
		{foreach from=$products item=product name=i}
			<li id="wlp_{$product.id_product}_{$product.id_product_attribute}" class="clearfix col-6 col-md-4 col-lg-3 address {if $smarty.foreach.i.index % 2}alternate_{/if}item">
				<div class="wishlist-box">
				<a href="javascript:;" class="wishlist-box-delete" onclick="WishlistProductManage('wlp_bought', 'delete', '{$id_wishlist}', '{$product.id_product}', '{$product.id_product_attribute}', $('#quantity_{$product.id_product}_{$product.id_product_attribute}').val(), $('#priority_{$product.id_product}_{$product.id_product_attribute}').val());" title="{l s='Delete' d='Shop.Theme.Global'}"><i class="fa fa-trash-o"></i></a>
				<div class="clearfix">
					<div class="product_image">
						<a href="{$link->getProductlink($product.id_product, $product.link_rewrite, $product.category_rewrite)|escape:'html'}" title="{l s='Product detail' d='Shop.Theme.Global'}">
							<img class="w-100" src="{$link->getImageLink($product.link_rewrite, $product.cover, ImageType::getFormatedName('medium'))|escape:'html'}" alt="{$product.name|escape:'html':'UTF-8'}" />
						</a>
					</div>
					<div class="product_infos">
						<p id="s_title" class="product_name">{$product.name|truncate:30:'...'|escape:'html':'UTF-8'}</p>
						<div class="wishlist_product_detail">
						{if isset($product.attributes_small)}
							<a href="{$link->getProductlink($product.id_product, $product.link_rewrite, $product.category_rewrite)|escape:'html'}" title="{l s='Product detail' d='Shop.Theme.Global'}">{$product.attributes_small|escape:'html':'UTF-8'}</a>
						{/if}
							{l s='Quantity' d='Shop.Theme.Global'}:<input type="text" id="quantity_{$product.id_product}_{$product.id_product_attribute}" value="{$product.quantity|intval}" class="form-control" size="3"  />
							{l s='Priority' d='Shop.Theme.Global'}:
							<select id="priority_{$product.id_product}_{$product.id_product_attribute}" class="form-control">
								<option value="0"{if $product.priority eq 0} selected="selected"{/if}>{l s='High' d='Shop.Theme.Global'}</option>
								<option value="1"{if $product.priority eq 1} selected="selected"{/if}>{l s='Medium' d='Shop.Theme.Global'}</option>
								<option value="2"{if $product.priority eq 2} selected="selected"{/if}>{l s='Low' d='Shop.Theme.Global'}</option>
							</select>
							{if $wishlists|count > 1}
								{l s='Move'}:
                                {foreach name=wl from=$wishlists item=wishlist}
                                    {if $smarty.foreach.wl.first}
                                       <select class="wishlist_change_button form-control">
                                       <option>---</option>
                                    {/if}
                                    {if $id_wishlist != {$wishlist.id_wishlist}}
										<option title="{$wishlist.name}" value="{$wishlist.id_wishlist}" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" data-quantity="{$product.quantity|intval}" data-priority="{$product.priority}" data-id-old-wishlist="{$id_wishlist}" data-id-new-wishlist="{$wishlist.id_wishlist}">
											{l s='Move to %s'|sprintf:$wishlist.name d='Shop.Theme.Global'}
										</option>
                                    {/if}
                                    {if $smarty.foreach.wl.last}
                                        </select>
                                    {/if}
                                {/foreach}
                            {/if}
						</div>
					</div>
				</div>
				<div class="btn_action">
					<a href="javascript:;" class="exclusive lnksave btn btn-primary" onclick="WishlistProductManage('wlp_bought_{$product.id_product_attribute}', 'update', '{$id_wishlist}', '{$product.id_product}', '{$product.id_product_attribute}', $('#quantity_{$product.id_product}_{$product.id_product_attribute}').val(), $('#priority_{$product.id_product}_{$product.id_product_attribute}').val());" title="{l s='Save' d='Shop.Theme.Global'}">{l s='Save' d='Shop.Theme.Global'}</a>
				</div>
				</div>
			</li>
		{/foreach}
		</ul>
	</div>
	{if !$refresh}
	<form method="post" class="wl_send std" onsubmit="return (false);" style="display: none;">
		<a id="hideSendWishlist" class="button_account btn icon"  href="#" onclick="WishlistVisibility('wl_send', 'SendWishlist'); return false;" rel="nofollow" title="{l s='Close this wishlist' d='Shop.Theme.Global'}">
			<i class="icon-remove"></i>
		</a>
		<fieldset>
			<p class="required">
				<label for="email1">{l s='Email' d='Shop.Theme.Global'}1 <sup>*</sup></label>
				<input type="text" name="email1" id="email1" class="form-control" />
			</p>
			{section name=i loop=11 start=2}
			<p>
				<label for="email{$smarty.section.i.index}">{l s='Email' d='Shop.Theme.Global'}{$smarty.section.i.index}</label>
				<input type="text" name="email{$smarty.section.i.index}" id="email{$smarty.section.i.index}" class="form-control" />
			</p>
			{/section}
			<p class="submit">
				<input class="button" type="submit" value="{l s='Send' d='Shop.Theme.Global'}" name="submitWishlist" onclick="WishlistSend('wl_send', '{$id_wishlist}', 'email');" />
			</p>
			<p class="required">
				<sup>*</sup> {l s='Required field' d='Shop.Theme.Global'}
			</p>
		</fieldset>
	</form>
	{if count($productsBoughts)}
	<table class="wlp_bought_infos hidden std">
		<thead>
			<tr>
				<th class="first_item">{l s='Product' d='Shop.Theme.Global'}</th>
				<th class="item">{l s='Quantity' d='Shop.Theme.Global'}</th>
				<th class="item">{l s='Offered by' d='Shop.Theme.Global'}</th>
				<th class="last_item">{l s='Date' d='Shop.Theme.Global'}</th>
			</tr>
		</thead>
		<tbody>
		{foreach from=$productsBoughts item=product name=i}
			{foreach from=$product.bought item=bought name=j}
			{if $bought.quantity > 0}
				<tr>
					<td class="first_item">
						<span style="float:left;"><img src="{$link->getImageLink($product.link_rewrite, $product.cover, 'small')|escape:'html'}" alt="{$product.name|escape:'html':'UTF-8'}" /></span>
						<span style="float:left;">
							{$product.name|truncate:40:'...'|escape:'html':'UTF-8'}
						{if isset($product.attributes_small)}
							<br /><i>{$product.attributes_small|escape:'html':'UTF-8'}</i>
						{/if}
						</span>
					</td>
					<td class="item align_center">{$bought.quantity|intval}</td>
					<td class="item align_center">{$bought.firstname} {$bought.lastname}</td>
					<td class="last_item align_center">{$bought.date_add|date_format:"%Y-%m-%d"}</td>
				</tr>
			{/if}
			{/foreach}
		{/foreach}
		</tbody>
	</table>
	{/if}
	{/if}
{else}
	<p class="warning">{l s='No products' d='Shop.Theme.Global'}</p>
{/if}
