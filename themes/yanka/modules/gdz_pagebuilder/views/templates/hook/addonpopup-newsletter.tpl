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
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="pb-popup gdz-popup-overlay" style="display: none;">
	<div class="gdz-popup newsletter-popup-container animated fadeIn hidden">
		<div class="content">
			<a class="popup-close">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
					<polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
				</svg>
			</a>
			<div class="row d-flex w-100">
				<div class="gdz-popup-content col-lg-6 col-md-6 col-12 ml-auto">
					{if $popup_title}
						<h3>
							{$popup_title|escape:'htmlall':'UTF-8'}
						</h3>
					{/if}
					{$popup_content nofilter}

					<div class="dontshow">
						<input type="checkbox" name="dontshowagain" value="1" id="dontshowagain"/>
						<label>{l s="I accept teh" d='Shop.Theme.Actions'} <a href="index.php?id_cms=14&controller=cms">{l s="Privacy policy." d='Shop.Theme.Actions'}</a></label>
						<span class="checkmark"></span>
					</div>
					<input type="hidden" name="width_default" id="width-default" value="{$popup_width|escape:'htmlall':'UTF-8'}" />
					<input type="hidden" name="height_default" id="height-default" value="{$popup_height|escape:'htmlall':'UTF-8'}" />
					<input type="hidden" name="loadtime" id="loadtime" value="{$loadtime|escape:'htmlall':'UTF-8'}" />
				</div>
			</div>
		</div>
	</div>
</div>

