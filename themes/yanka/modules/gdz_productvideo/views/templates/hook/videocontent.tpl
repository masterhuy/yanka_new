{**
 * 2007-2020 PrestaShop
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
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{if $product_videos}
	<div class="jms-videos {if $video_show == '1'}popup{else}list{/if}" id="gdz_productvideo">
		{foreach $product_videos as $video}
			<div class="jms-video {if $video_show == '1'}popup-active{/if}">
				{if $video_show == '1'}
					<a href="#" class="d-i-block icon-video" title="Open video">
						<i class="d-i-flex align-items-center">
							<svg>
								<use xlink:href="#icon-youtube">
									<symbol id="icon-youtube" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M20.824 8.263c-.105-.741-.357-1.355-.756-1.841-.386-.498-.96-.827-1.722-.984a22.231 22.231 0 0 0-2.04-.256 46.926 46.926 0 0 0-3.673-.164L12 5l-.65.018a47.334 47.334 0 0 0-3.656.164c-.739.061-1.419.146-2.04.256-.761.157-1.341.486-1.74.984-.387.486-.633 1.1-.738 1.841a22.252 22.252 0 0 0-.158 2.443L3 12l.018 1.313c.011.862.064 1.67.158 2.424.105.741.351 1.361.738 1.86.398.485.979.807 1.74.965.621.11 1.301.195 2.04.256.738.06 1.423.103 2.056.127a158.5 158.5 0 0 0 1.6.055h1.283c.433-.012.967-.03 1.6-.055a46.865 46.865 0 0 0 2.074-.127 22.252 22.252 0 0 0 2.039-.256c.761-.158 1.336-.48 1.722-.966.399-.498.65-1.118.756-1.859.094-.754.147-1.562.158-2.425L21 12l-.018-1.294a22.235 22.235 0 0 0-.158-2.443zM9.75 15.5v-7l5.625 3.5-5.625 3.5z" fill="currentColor"></path>
									</symbol>
								</use>
							</svg>
						</i>
					</a>
				{else}
					<h5>{$video.title}</h5>
				{/if}
				{if $video_show == '1'}
					<div class="jms-popup-box">
						<div class="jms-popup-wrap">
							<a class="popup-close">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
									<polygon fill="currentColor" points="15.6,1.6 14.4,0.4 8,6.9 1.6,0.4 0.4,1.6 6.9,8 0.4,14.4 1.6,15.6 8,9.1 14.4,15.6 15.6,14.4 9.1,8 "></polygon>
								</svg>
							</a>
							{foreach $video.links as $video_link}
								{if $video_link|strpos:'youtube' !== false}
									<iframe width="{$video_width}" height="{$video_height}" src="https://www.youtube-nocookie.com/embed/{$video_link|substr:($video_link|strpos:'?v='+3)}?rel=0&amp;controls=0&amp;showinfo=0{if $video_autoplay}&amp;autoplay=1{/if}" frameborder="0" allowfullscreen></iframe>
								{else}
									{assign var=count_ value = ("/"|explode:$video_link)}
									<iframe src="https://player.vimeo.com/video/{$count_[$count_|count-1]}{if $video_autoplay}?autoplay=1{/if}" width="{$video_width}" height="{$video_height}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								{/if}
							{/foreach}
						</div>
						<div class="jms-popup-overlay" style="display:none;opacity:0;"></div>
					</div>
				{else}
					{foreach $video.links as $video_link}
						{if $video_link|strpos:'youtube' !== false}
							<iframe width="{$video_width}" height="{$video_height}" src="https://www.youtube-nocookie.com/embed/{$video.link|substr:($video_link|strpos:'?v='+3)}?rel=0&amp;controls=0&amp;showinfo=0{if $video_autoplay}&amp;autoplay=1{/if}" frameborder="0" allowfullscreen></iframe>
						{else}
							{assign var=count_ value = ("/"|explode:$video_link)}
							<iframe src="https://player.vimeo.com/video/{$count_[$count_|count-1]}{if $video_autoplay}?autoplay=1{/if}" width="{$video_width}" height="{$video_height}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						{/if}
					{/foreach}
				{/if}
			</div>
		{/foreach}
	</div>
{/if}

<style>
	@media (min-width: 768px){
		.jms-popup-wrap {
			width : {$video_width}px;
			height :{$video_height}px;
			margin: -{$video_height/2}px 0 0 -{$video_width/2}px;
		}
	}
</style>