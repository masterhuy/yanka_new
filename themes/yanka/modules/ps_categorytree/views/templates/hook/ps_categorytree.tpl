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
{function name="categories" nodes=[] depth=0}
    {strip}
        {if $nodes|count}
            <div class="category-sub-menu collapse show" id="category-sub-menu">
                <ul>
                    {foreach from=$nodes item=node}
                    <li data-depth="{$depth}" class="cat-item">
                        {if $depth===0}
                            <a href="{$node.link}">
                                {$node.name}
                            </a>
                            {if $node.children}
                                <span class="navbar-toggler collapse-icons collapsed" data-toggle="collapse" data-target="#exCollapsingNavbar{$node.id}">
                                    <i class="d-i-flex">
                                        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path>
                                        </svg>
                                    </i>
                                </span>
                            {/if}
                            {if $node.children}
                                <div class="sub-list collapse" id="exCollapsingNavbar{$node.id}">
                                    {categories nodes=$node.children depth=$depth+1}
                                </div>
                            {/if}
                        {else}
                            <a class="category-sub-link" href="{$node.link}">{$node.name}
                                {if $node.children}
                                    <span class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar{$node.id}">
                                        <i class="d-i-flex">
                                            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path>
                                            </svg>
                                        </i>
                                    </span>
                                {/if}
                            </a>
                            {if $node.children}
                                <div class="collapse" id="exCollapsingNavbar{$node.id}">
                                    {categories nodes=$node.children depth=$depth+1}
                                </div>
                            {/if}
                        {/if}
                    </li>
                    {/foreach}
                </ul>
            </div>
        {/if}
    {/strip}
{/function}

<div class="block-categories hidden-sm-down">
	{if $page.page_name != 'index'}
		<div class="title-block">
			<h3 class="d-flex cursor-pointer" data-toggle="collapse" data-target="#category-sub-menu">
                {l s='Collections' d='Shop.Theme.CategoryTree'}
                <i class="d-i-flex">
                    <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 0.992188L6 5.98947L11 0.992187" stroke="#D0D0D0" stroke-width="1.1"></path>
                    </svg>
                </i>
            </h3>
		</div>
	{/if}
	{categories nodes=$categories.children}
</div>
