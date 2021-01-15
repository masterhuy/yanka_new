{*
 * @package Jms Ajax Search
 * @version 1.1
 * @Copyright (C) 2009 - 2015 Joommasters.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: http://www.joommasters.com
*}
<div class="btn-group gdz_ajax_search col-auto{if $gdzSetting.search_box_type} {$gdzSetting.search_box_type}{/if}" id="gdz_ajax_search">
	<a href="#" class="btn-search" data-toggle="dropdown" data-display="static"><i class="ptw-icon {$gdzSetting.search_icon}"></i></a>
	<div id="search-form-dropdown" class="search-form dropdown-menu">
		<div class="search-box">
			<form method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}">
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
        <div class="input-group">
    				<input type="text" name="search_query" placeholder="{l s='Search everything...' mod='gdz_ajaxsearch'}" class="gdz-search-input form-control search-input" />
    				<button type="submit" name="submit_search" class="button-search">
    					<i class="ptw-icon {$gdzSetting.search_icon}"></i>
    				</button>
        </div>
			</form>
			<div class="search-result-area"></div>
		</div>
	</div>
</div>
