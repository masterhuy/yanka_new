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
                {block name='page_content_top'}{/block}
				{block name="page_content"}
				{capture name=path}{$post.title|escape:'html':'UTF-8'}{/capture}
				<div class="single-blog">
					<div class="blog-post">
						<h1 class="title">{$post.title|escape:'html':'UTF-8'}</h1>
						{assign var=params value=['post_id' => $post.post_id, 'category_slug' => $post.category_alias, 'slug' => $post.alias]}
						{assign var=catparams value=['category_id' => $post.category_id, 'slug' => $post.category_alias]}
						<ul class="post-meta">
							<li class="post-created">{$post.created|escape:'htmlall':'UTF-8'|date_format:"%B %e, %Y"}</li>
							{if $gdz_blog_setting.GDZBLOG_SHOW_VIEWS}
								<li class="post-views">{$post.views nofilter} <span>{l s='Views' d='Modules.Gdzblog.Post'}</span></li>		
							{/if}
							{if $gdz_blog_setting.GDZBLOG_SHOW_COMMENTS}
								<li class="post-comment-count">
									{$comments|@count nofilter}
									<span> {l s='Comments' d='Modules.Gdzblog.Post'}</span>
								</li>
							{/if}
							{if $gdz_blog_setting.GDZBLOG_SHOW_CATEGORY}
								<li class="post-category">
									<span>{l s='In' d='Modules.Gdzblog.Post'}</span> 
									<a href="{gdz_blog::getPageLink('gdz_blog-category', $catparams) nofilter}">{$post.category_name nofilter}</a>
								</li>
							{/if}
						</ul>
						{if $post.link_video && $gdz_blog_setting.GDZBLOG_SHOW_MEDIA}
							<div class="post-video">
								{$post.link_video}
							</div>
						{elseif $post.image && $gdz_blog_setting.GDZBLOG_SHOW_MEDIA}
							<div class="post-thumb">
								<img class="img-responsive w-100" src="{$image_baseurl|escape:'html':'UTF-8'}{$post.image|escape:'html':'UTF-8'}" alt="{l s='Image Blog' d='Modules.JmsBlog'}" />
							</div>
						{/if}
						

						<div class="post-fulltext">
							{$post.fulltext nofilter}
						</div>
					</div>
					{if $gdz_blog_setting.GDZBLOG_SHOW_SOCIAL_SHARING}
						<div class="social-sharing">
							{literal}
								<script type="text/javascript">var switchTo5x=true;</script>
								<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
								<script type="text/javascript">stLight.options({publisher: "a6f949b3-864b-44c5-b0ec-4140186ad958", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
							{/literal}
							<span class='st_sharethis_large' displayText='ShareThis'></span>
							{if $gdz_blog_setting.GDZBLOG_SHOW_FACEBOOK}
								<span class='st_facebook_large' displayText='Facebook'></span>
							{/if}
							{if $gdz_blog_setting.GDZBLOG_SHOW_TWITTER}
								<span class='st_twitter_large' displayText='Tweet'></span>
							{/if}
							{if $gdz_blog_setting.GDZBLOG_SHOW_GOOGLEPLUS}
								<span class='st_googleplus_large' displayText='Google +'></span>
							{/if}
							{if $gdz_blog_setting.GDZBLOG_SHOW_LINKEDIN}
								<span class='st_linkedin_large' displayText='LinkedIn'></span>
							{/if}
							{if $gdz_blog_setting.GDZBLOG_SHOW_PINTEREST}
								<span class='st_pinterest_large' displayText='Pinterest'></span>
							{/if}
							{if $gdz_blog_setting.GDZBLOG_SHOW_EMAIL}
								<span class='st_email_large' displayText='Email'></span>
							{/if}
						</div>
					{/if}
				</div>
					{if $gdz_blog_setting.GDZBLOG_COMMENT_ENABLE}
						<div id="comments">
							{if $gdz_blog_setting.GDZBLOG_FACEBOOK_COMMENT == 0}
								{if $msg == 1}
									<div class="success">
										{l s='Your comment submited' d='Modules.Gdzblog.Post'} ! {if $gdz_blog_setting.GDZBLOG_AUTO_APPROVE_COMMENT == 0} {l s='Please waiting approve from Admin' d='Modules.Gdzblog.Post'}.{/if}
									</div>
								{/if}
								{if $cerrors|@count gt 0}
									<ul>
									{foreach from=$cerrors item=cerror}
										<li class="error">{$cerror}</li>
									{/foreach}
									</ul>
								{/if}
								{if $comments}
									<div id="accordion" class="panel-group">
										<div class="panels">
											<div id="post-comments">
												{foreach from=$comments item=comment key = k}
													<div class="post-comment clearfix">
														<div class="post-comment-info">
															<div class="user-image">
																<svg fill="none" viewBox="0 0 24 24" id="icon_avatar" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><path fill="transparent" d="M0 0h24v24H0z"></path><path d="M2.826 23.2c.36-5.393 4.323-9.4 9.174-9.4 4.851 0 8.815 4.007 9.174 9.4H2.826z" stroke="currentColor" stroke-width="1.6"></path><circle cx="12" cy="6" r="5.2" stroke="currentColor" stroke-width="1.6"></circle></svg>
															</div>
															<div class="info">
																<div class="title">
																	<div>
																		{l s='By' d='Modules.JmsBlog'}
																		<span>{$comment.customer_name|escape:'html':'UTF-8'}</span>
																	</div>
																	<div>
																		{$comment.time_add|escape:'html':'UTF-8'|date_format:'%B %e, %Y'}
																	</div>
																</div>
																<p class="post-comment-content">{$comment.comment nofilter}</p>
															</div>
														</div>
													</div>
												{/foreach}
											</div>
										</div>
									</div>
								{/if}
								{if $gdz_blog_setting.GDZBLOG_ALLOW_GUEST_COMMENT || (!$gdz_blog_setting.GDZBLOG_ALLOW_GUEST_COMMENT && $logged)}
								<div class="commentForm">
									<form id="commentForm" enctype="multipart/form-data" method="post" action="index.php?fc=module&module=gdz_blog&controller=post&post_id={$post.post_id|escape:'html':'UTF-8'}&action=submitComment">
										<div class="row">
											<div class="col-sm-12">
												<h4 class="heading">{l s='Leave a Comment' d='Modules.Gdzblog.Post'}</h4>
											</div>
										</div>
										
										<div class="row">
											<div class="col-12">
												<label for="comment_name">{l s='Name' d='Modules.Gdzblog.Post'}</label>
												<div class="form-group">
													<input id="customer_name" placeholder="{l s='Enter your name' d='Modules.Gdzblog.Post'} *" class="form-control" name="customer_name" type="text" value="{$customer.firstname}{$customer.lastname}" required />
												</div>
											</div>
											<div class="col-12">
												<label for="comment_title">{l s='Email address' d='Modules.Gdzblog.Post'}</label>
												<div class="form-group">
													<input id="comment_title" placeholder="{l s='john.smith@example.com' d='Modules.Gdzblog.Post'} *" class="form-control" name="email" type="text" value="{$customer.email}" required />
												</div>
											</div>
											<div class="col-12">
												<label for="comment_title">{l s='Your Website' d='Modules.Gdzblog.Post'}</label>
												<div class="form-group">
													<input id="customer_site" placeholder="{l s='Your website' d='Modules.Gdzblog.Post'}" class="form-control" name="customer_site" type="text" value=""/>
												</div>
											</div>
											<div class="col-12">
												<label for="content">{l s='Your Comment' d='Modules.Gdzblog.Post'}</label>
												<textarea id="comment" placeholder="{l s='Write your comments here' d='Modules.Gdzblog.Post'}" class="form-control" name="comment" rows="3" required></textarea>
											</div>
										</div>
										<div id="new_comment_form_footer">
											<input id="item_id_comment_send" name="post_id" type="hidden" value="{$post.post_id|escape:'html':'UTF-8'}" />
											<input id="item_id_comment_reply" name="post_id_comment_reply" type="hidden" value="" />
											<button id="submitComment" class="btn active text-uppercase" name="submitComment" type="submit">
												{l s='Post Comment' d='Modules.Gdzblog.Post'}
											</button>
										</div>
									</form>
								</div>
								{/if}
								{if !$gdz_blog_setting.GDZBLOG_ALLOW_GUEST_COMMENT && !$logged}
									{l s='Please Login to comment' d='Modules.Gdzblog.Post'}
								{/if}
							{else}
								{include file="modules/gdz_blog/views/templates/front/comment_facebook.tpl"}
							{/if}
						</div>
					{/if}
				{/block}
            </section>
        {/block}
        {block name='page_footer_container'}
        {/block}
    </section>
{/block}
