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
{extends file=$layout}

{block name='content'}
	<section id="main">
		<div class="cart-block">
			<h1>{l s='Shopping Cart' d='Shop.Theme.Checkout'}</h1>
		</div>
		<div class="cart-grid">
			<div class="row first">
				<!-- Left Block: cart product informations & shpping -->
				<div class="cart-grid-body col-12 col-lg-8 mb-2 mb-lg-0">
					<div class="cart-box">
						<!-- cart products detailed -->
						<div class="cart cart-container">
							{block name='cart_overview'}
								{include file='checkout/_partials/cart-detailed.tpl' cart=$cart}
							{/block}
						</div>
						{block name='continue_shopping'}
							<a class="btn-continue-shopping" href="{$urls.pages.index}">
								<i class="d-i-flex">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
										<g>
											<polygon fill="currentColor" points="16.4,21.6 6.9,12 16.4,2.4 17.6,3.6 9.1,12 17.6,20.4"></polygon>
										</g>
									</svg>
								</i>
								<span>{l s='Continue shopping' d='Shop.Theme.Actions'}</span>
							</a>
						{/block}
						<!-- shipping informations -->
						<div>
							{hook h='displayShoppingCartFooter'}
						</div>
					</div>
				</div>
				<!-- Right Block: cart subtotal & cart total -->
				<div class="cart-grid-right col-12 col-lg-4">
					<div class="right-box">
						{block name='cart_summary'}
						<div class="card cart-summary">
							{hook h='displayShoppingCart'}
							{block name='cart_totals'}
								{include file='checkout/_partials/cart-detailed-totals.tpl' cart=$cart}
							{/block}
							{block name='cart_actions'}
								{include file='checkout/_partials/cart-detailed-actions.tpl' cart=$cart}
							{/block}
						</div>
						{/block}
					</div>
				</div>
			</div>
		</div>
	</section>
{/block}
