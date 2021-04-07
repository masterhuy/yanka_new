{foreach $linkBlocks as $linkBlock}
    <div class="layout-column wrapper block">
        <h3 class="h3 block-title">
            {$linkBlock.title}
            <i class="pt-icon"> 
                <svg viewBox="0 0 16 16" fill="none"> <path d="M14.4343 0.434315L0.434315 14.4343L1.56569 15.5657L15.5657 1.56569L14.4343 0.434315ZM0.434315 1.56569L14.4343 15.5657L15.5657 14.4343L1.56569 0.434315L0.434315 1.56569Z" fill="currentColor"></path> </svg> 
            </i>
        </h3>
        <div class="block-content">
            <ul>
                {foreach $linkBlock.links as $link}
                    <li>
                        <a
                            id="{$link.id}-{$linkBlock.id}"
                            class="{$link.class}"
                            href="{$link.url}"
                            title="{$link.description}">
                            {$link.title}
                        </a>
                    </li>
                {/foreach}
            </ul>
        </div>
    </div>
{/foreach}
