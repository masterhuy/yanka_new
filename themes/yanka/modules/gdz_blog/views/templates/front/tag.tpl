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
{extends file='page.tpl'}
{block name="page_content"}
	{capture name=path}{$tag nofilter}{/capture}

		<h4 class="title-blog">{l s='Tag' d='Modules.Gdzblog.Post'} : {$tag nofilter}</h4>
		{if isset($posts) AND $posts}
			<div class="post-list row">
				{foreach from=$posts item=post}
					{assign var=params value=['post_id' => $post.post_id, 'category_slug' => $post.category_alias, 'slug' => $post.alias]}
					{assign var=catparams value=['category_id' => $post.category_id, 'slug' => $post.category_alias]}
					<article class="blog-post col-4">
						{if $post.link_video && $gdz_blog_setting.GDZBLOG_SHOW_MEDIA}
							<div class="post-thumb">
								{$post.link_video nofilter}
							</div>
						{elseif $post.image && $gdz_blog_setting.GDZBLOG_SHOW_MEDIA}
							<div class="post-thumb">
								<a href="{gdz_blog::getPageLink('gdz_blog-category', $catparams) nofilter}"><img src="{$image_baseurl nofilter}{$post.image nofilter}" alt="{$post.title nofilter}" class="img-responsive w-100" /></a>
							</div>
						{/if}
						<ul class="post-meta">
							<li class="post-created">{$post.created|escape:'htmlall':'UTF-8'|date_format:"%B %e, %Y"}</li>
							{if $gdz_blog_setting.GDZBLOG_SHOW_VIEWS}
								<li class="post-views"><span>{l s='Views' d='Modules.Gdzblog.Post'} :</span> {$post.views nofilter}</li>
							{/if}
							{if $gdz_blog_setting.GDZBLOG_SHOW_COMMENTS}
								<li class="post-comments"><span>{l s='Comments' d='Modules.Gdzblog.Post'} :</span> {$post.comment_count nofilter}</li>
							{/if}
						</ul>
						<h5 class="post-title"><a class="blog-list-title" href="{gdz_blog::getPageLink('gdz_blog-post', $params) nofilter}">{$post.title nofilter}</a></h5>
						{if $gdz_blog_setting.GDZBLOG_SHOW_CATEGORY}
							<div class="post-category">
								<span>{l s='in' d='Modules.Gdzblog.Post'} :</span> 
								<a href="{gdz_blog::getPageLink('gdz_blog-category', $catparams) nofilter}">{$post.category_name nofilter}</a>
							</div>
						{/if}
						<div class="blog-intro">{$post.introtext|truncate:100:'...' nofilter}</div>
						<a class="read-more" href="#">{l s='Continue reading' d='Modules.Gdzblog.Post'}</a>
					</article>
				{/foreach}
			</div>
		{else}
			{l s='Sorry, dont have any post in this category' d='Modules.Gdzblog.Post'}
		{/if}

{/block}
