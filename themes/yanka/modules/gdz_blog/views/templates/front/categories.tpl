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
{if isset($smarty.get.page_layout) && $smarty.get.page_layout !=''}
    {assign var='page_layout' value=$smarty.get.page_layout}
{/if}
{if $page_layout == 'no'}
	{assign var="layout" value="layouts/layout-full-width.tpl"}
{elseif $page_layout == 'right'}
	{assign var="layout" value="layouts/layout-right-column.tpl"}
{else}
	{assign var="layout" value="layouts/layout-left-column.tpl"}
{/if}
{extends file=$layout}
{block name='content'}
    <section id="main">
        {block name='page_content_container'}
            <section id="content" class="page-content">
				{block name="page_content"}
					{capture name=path}{l s='Categories' d='Modules.Gdzblog.Post'}{/capture}
					{if isset($categories) AND $categories}
						<div class="cat-post-list more-columns row">
							{foreach from=$categories item=category}
								{assign var=catparams value=['category_id' => $category.category_id, 'slug' => $category.alias]}
								<div class="item mb-5 col-12 col-sm-6 col-md-6 col-lg-6">
									<div class="category-post">
										{if $category.image && $gdz_blog_setting.GDZBLOG_SHOW_MEDIA}
											<div class="post-thumb">
												<a href="{gdz_blog::getPageLink('gdz_blog-category', $catparams)}">
													<img src="{$image_baseurl|escape:'html':'UTF-8'}{$category.image|escape:'html':'UTF-8'}" alt="{$category.title|escape:'htmlall':'UTF-8'}" class="img-responsive" />
												</a>
											</div>
										{/if}
										<div class="category-info">
											<h4>
												<a class="category-title" href="{gdz_blog::getPageLink('gdz_blog-category', $catparams)}">{$category.title|escape:'htmlall':'UTF-8'}</a></h4>
											<div class="cat-intro">{$category.introtext|truncate:120:'...' nofilter}</div>
										</div>
										<a class="btn btn-default read-more" href="{gdz_blog::getPageLink('gdz_blog-category', $catparams)}">
											{l s='Read more' d='Modules.Gdzblog.Post'}
										</a>
									</div>
								</div>
							{/foreach}
						</div>
					{else}
						{l s='Sorry, dont have any category in this section' d='Modules.Gdzblog.Post'}
					{/if}
				{/block}
            </section>
        {/block}
        {block name='page_footer_container'}{/block}
    </section>
{/block}
