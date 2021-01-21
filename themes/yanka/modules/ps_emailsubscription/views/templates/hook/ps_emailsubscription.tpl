{*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="email_subscription block block_newsletter">
	<div class="newsletter-desc">{l s='Be the first to learn about our latest trends and get exclusive offers.' d='Modules.Emailsubscription.Shop'}</div>
	<div class="block-content">
	  	{if $msg}
	    	<div class="alert {if $nw_error}alert-error{else}alert-success{/if}">{$msg}</div>
	  	{/if}
	  	<form action="{$urls.pages.index}" method="post">
			<div class="input-group newsletter-input-group">
	    		<input type="text" name="email" value="{$value}" required class="form-control" placeholder="{l s='Your email address' d='Modules.Emailsubscription.Shop'}" />
	    		<button type="submit" class="btn btn-popup newsletter-button align-items-center" name="submitNewsletter">
					{l s='Subscribe!' d='Modules.Emailsubscription.Shop'}
				</button>
				<button type="submit" class="btn btn-icon align-items-center" name="submitNewsletter">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
						<path fill="currentColor" d="M0,4v16h24V4H0z M21,5.6L12,12L3,5.6H21z M1.6,18.4V6.6L12,14l10.4-7.4v11.8H1.6z"></path>
					</svg>
				</button>
			</div>
	    	{hook h='displayGDPRConsent' id_module=$id_module}
	    	<input type="hidden" name="action" value="0" />
	  	</form>
	</div>
</div>

