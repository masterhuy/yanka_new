{*
* 2007-2019 PrestaShop
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
*  @copyright  2007-2019 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!-- Block languages module -->
{if count($languages) > 1}
	<div class="block-collapse languages-info position-relative">
		<a class="hover-tooltip" href="#language" data-toggle="collapse">
			{$current_language.name_simple|truncate:3:''}
			<i>
	            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
					<g>
						<polygon fill="currentColor" points="12.5,17.6 2.9,8.1 4.1,6.9 12.5,15.4 20.9,6.9 22.1,8.1 	"></polygon>
					</g>
				</svg>
	        </i>
			<span class="tooltip-wrap bottom">
				<span class="tooltip-text">
					{l s='Language' d='Shop.Theme.Actions'}
				</span>
			</span>
		</a>
		<div id="language" class="header-collapse collapse">
			<ul>
				{foreach from=$languages key=k item=language name="languages"}
					<li {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
						<a href="{url entity='language' id=$language.id_lang}" class="collapse-item">
							{$language.name_simple|truncate:3:''}
						</a>
					</li>
				{/foreach}
			</ul>
		</div>
	</div>
{/if}
<!-- /Block languages module -->
