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
				{capture name=path}{$current_category.title|escape:'html':'UTF-8'}{/capture}
				{if isset($posts) AND $posts}
					<div class="cat-post-list row justify-content-center">
						{foreach from=$posts item=post}
							{assign var=params value=['post_id' => $post.post_id, 'category_slug' => $post.category_alias, 'slug' => $post.alias]}
							{assign var=catparams value=['category_id' => $post.category_id, 'slug' => $post.category_alias]}
							<div class="item col-12 {if $page_layout == 'no'}col-lg-10 col-xl-8{/if}">
								<div class="blog-post">
									<div class="post-thumb">
										{if $post.link_video && $gdz_blog_setting.GDZBLOG_SHOW_MEDIA}
											{$post.link_video}
										{elseif $post.image && $gdz_blog_setting.GDZBLOG_SHOW_MEDIA}
											<a class="link" href="{gdz_blog::getPageLink('gdz_blog-post', $params)}">
												<img src="{$image_baseurl|escape:'html':'UTF-8'}{$post.image|escape:'html':'UTF-8'}" alt=""/>
											</a>
										{/if}
									</div>
									<div class="entry-body">
										
										<div class="post-info">
											<h4 class="post-title">
												<a class="blog-list-title" href="{gdz_blog::getPageLink('gdz_blog-post', $params)}" alt="{l s='Blog Images' d='Modules.Gdzblog.Post'}">{$post.title|escape:'htmlall':'UTF-8'}</a>
											</h4>
											
											<div class="post-intro">
												{$post.introtext|truncate:380:'...' nofilter}
											</div>
											<ul class="post-meta">
												<li class="post-created">{$post.created|escape:'htmlall':'UTF-8'|date_format:"%B %e, %Y"}</li>
												{if $gdz_blog_setting.GDZBLOG_SHOW_VIEWS}
													<li class="post-views">{$post.views nofilter} <span>{l s='Views' d='Modules.Gdzblog.Post'}</span></li>		
												{/if}
												
												{if $gdz_blog_setting.GDZBLOG_SHOW_CATEGORY}
													<li class="post-category">
														<span>{l s='in' d='Modules.Gdzblog.Post'} </span> 
														<a href="{gdz_blog::getPageLink('gdz_blog-category', $catparams) nofilter}">{$post.category_name nofilter}</a>
													</li>
												{/if}
												{if $gdz_blog_setting.GDZBLOG_SHOW_COMMENTS}
													<li class="comment">
														<span class="pt-icon"></span>
														<span>{$post.comment_count nofilter}{l s=' Comment(s)' d='Modules.JmsBlog'}</span>
													</li>
												{/if}
											</ul>
										</div>
									</div>
								</div>
							</div>
						{/foreach}
					</div>
				{else}
					{l s='Sorry, dont have any post in this category' d='Modules.JmsBlog'}
				{/if}
				{/block}
            </section>
        {/block}
        {block name='page_footer_container'}{/block}
    </section>
{/block}


