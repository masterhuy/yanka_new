{if $product_videos}
	<div class="jms-videos" id="gdz_productvideo">
		{foreach $product_videos as $video}
			<div class="jms-video {if $video_show == '1'}popup-active{/if}">
				{if $video_show == '1'}
					<a href="#" class="d-i-block icon-video" title="Open video">
						<i class="icon-youtube"></i>
					</a>
				{else}
					<h5>{$video.title}</h5>
				{/if}
				{if $video_show == '1'}
					<div class="jms-popup-box">
						<div class="jms-popup-wrap">
							<a class="popup-close">
								<i class="mfp-close"></i>
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