{*
 * @package Jms Ajax Search
 * @version 1.1
 * @Copyright (C) 2009 - 2015 Joommasters.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: http://www.joommasters.com
*}
<div class="gdz_ajax_search{if $gdzSetting.search_box_type} {$gdzSetting.search_box_type}{/if}" id="gdz_ajax_search">
	<a href="#" class="btn-search hover-tooltip" data-toggle="dropdown" data-display="static">
		<i class="d-flex">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
				<path fill="currentColor" d="M23.6,22.4l-4.3-4.3C21,16.3,22,13.7,22,11c0-6.1-4.9-11-11-11S0,4.9,0,11s4.9,11,11,11c2.7,0,5.3-1,7.2-2.7
					l4.3,4.3L23.6,22.4z M1.6,11c0-5.2,4.2-9.4,9.4-9.4c5.2,0,9.4,4.2,9.4,9.4c0,5.2-4.2,9.4-9.4,9.4C5.8,20.4,1.6,16.2,1.6,11z"></path>
			</svg>
		</i>
		<span class="tooltip-wrap bottom"> 
			<span class="tooltip-text">{l s='Search' d='Shop.Theme.Catalog'}</span> 
		</span>
	</a>
	<div id="search-form-dropdown" class="search-form dropdown-menu">
		<div class="container">
			<div class="search-box">
				<form method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}">
					<input type="hidden" name="controller" value="search" />
					<input type="hidden" name="orderby" value="position" />
					<input type="hidden" name="orderway" value="desc" />
					<div class="input-group">
						<input type="text" name="search_query" placeholder="{l s='Search products...' d='Shop.Theme.Catalog'}" class="gdz-search-input form-control search-input" />
						<button type="submit" name="submit_search" class="button-search">
							<i class="d-flex">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
									<path fill="currentColor" d="M23.6,22.4l-4.3-4.3C21,16.3,22,13.7,22,11c0-6.1-4.9-11-11-11S0,4.9,0,11s4.9,11,11,11c2.7,0,5.3-1,7.2-2.7
										l4.3,4.3L23.6,22.4z M1.6,11c0-5.2,4.2-9.4,9.4-9.4c5.2,0,9.4,4.2,9.4,9.4c0,5.2-4.2,9.4-9.4,9.4C5.8,20.4,1.6,16.2,1.6,11z"></path>
								</svg>
							</i>
						</button>
					</div>
				</form>
				<div class="search-result-area"></div>
			</div>
		</div>
	</div>
</div>
