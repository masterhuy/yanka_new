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
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $widget_setting.GBW_SB_SHOW_CATEGORYMENU}
	<aside class="blog-widget widget-categories">
		<h3 class="widget-title"><span>{l s='Categories' d='Modules.Gdzblog.Sidebar-widget'}</span></h3>
		<ul>{$category_menu nofilter}</ul>
	</aside>
{/if}
{if $widget_setting.GBW_SB_SHOW_POPULAR}
	<aside class="blog-widget widget-popular">
		<h3 class="widget-title"><span>{l s='Popular Posts' d='Modules.Gdzblog.Sidebar-widget'}</span></h3>
		{foreach from=$popularpost key=k item=post}
			{assign var="show_view" value=$post.views + 1}
			{assign var=params value=['post_id' => $post.post_id, 'category_slug' => $post.category_alias, 'slug' => $post.alias]}
			<article class="item-post clearfix">
				<div class="row">
					<div class="col-5">
						{if $post.image}
							<img src="{$image_baseurl nofilter}thumb_{$post.image nofilter}" class="img-responsive" />
						{else}
							<img src="{$image_baseurl nofilter}no-img.jpg" class="img-responsive" />
						{/if}
					</div>
					<div class="col-7">
						<p class="post-created">{$post.created|escape:'htmlall':'UTF-8'|date_format:"%B %e, %Y"}</p>
						<a href="{gdz_blog::getPageLink('gdz_blog-post', $params) nofilter}" class="post-title">
							{$post.title|truncate:30:'...' nofilter}
						</a>
					</div>
				</div>
			</article>
		{/foreach}
	</aside>
{/if}
{if $widget_setting.GBW_SB_SHOW_RECENT}
	<aside class="blog-widget widget-recent">
		<h3 class="widget-title"><span>{l s='Recent' d='Modules.Gdzblog.Sidebar-widget'}</span></h3>
		{foreach from=$latestpost key=k item=post}
			{assign var="show_view" value=$post.views + 1}
			{assign var=params value=['post_id' => $post.post_id, 'category_slug' => $post.category_alias, 'slug' => $post.alias]}
			<article class="item-post clearfix">
				<a href="{gdz_blog::getPageLink('gdz_blog-post', $params) nofilter}" class="post-img">
				{if $post.image}
					<img src="{$image_baseurl nofilter}thumb_{$post.image nofilter}" class="img-responsive" />
				{else}
					<img src="{$image_baseurl nofilter}no-img.jpg" class="img-responsive" />
				{/if}
				<p class="post-created">{$post.created|escape:'htmlall':'UTF-8'|date_format:"%B %e, %Y"}</p>
				<h6>{$post.title nofilter}</h6>
				</a>
			</article>
		{/foreach}
	</aside>
{/if}
{if $widget_setting.GBW_SB_SHOW_LATESTCOMMENT}
	<aside class="blog-widget widget-recent">
		<h3 class="widget-title"><span>{l s='Comments' d='Modules.Gdzblog.Sidebar-widget'}</span></h3>
		{foreach from=$latestcomment key=k item=comment}
			<article class="comment-item">
				<img src="{$image_baseurl nofilter}user.png" class="img-responsive">
				<h6>{$comment.customer_name nofilter}:</h6>
				<p>{$comment.comment nofilter}</p>
			</article>
		{/foreach}
	</aside>
{/if}
{if $widget_setting.GBW_SB_SHOW_ARCHIVES}
	<aside class="blog-widget widget-archives">
		<h3 class="widget-title"><span>{l s='Archives' d='Modules.Gdzblog.Sidebar-widget'}</span></h3>
		<ul>
			{foreach from=$archives item=archive}
				{assign var=aparams value=['archive' => $archive.postmonth]}
				<li><a href="{gdz_blog::getPageLink('gdz_blog-archive', $aparams)}">{$archive.postmonth nofilter}</a></li>
			{/foreach}
		</ul>
	</aside>
{/if}


