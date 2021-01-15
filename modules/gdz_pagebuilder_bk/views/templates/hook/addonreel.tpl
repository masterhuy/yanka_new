<div class="gdz_reel row" data-autoplay="{$reel->autoplay}">
    <div class="col-lg-4 center">
        <div class="video">
            <video controls {if $reel->autoplay}muted{/if} loop class="reel_video" width="100%">
                <source src="{$reel->video.url}" type="video/mp4">
                Your browser does not support HTML video.
            </video>
            <div class="play center">
                <span class="fa fa-play"></span>
            </div>
        </div>
    </div>
    <div class="col-lg-8 center">
        <div class="lookbooks">
            {assign var='counter' value=1}
            {foreach $reel->lookbooks as $i => $lookbook}
                <div class="lookbook">
                    <h3>{l s='Look book' mod='gdz_reels'} {$counter}</h3>
                    {foreach $lookbook->products as $j => $product}
                    <div class="lookbook-product" duration="{$product->duration}">
                        <form action="{if isset($urls)}{$urls.pages.cart}{/if}" method="post" class="product row">
                            <div class="col-lg-1">
                                <img class="thumb" src="{$link->getImageLink($product->link_rewrite[$id_lang], $product->getCoverWs())}">
                            </div>
                            <div class="col-lg-5">
                                <p class="name">{$product->name[$id_lang]}</p>
                                <div class="groups">
                                {foreach $product->groups as $id_attribute_group => $group}
                                    <div class="form-group">
                                    <p>{$group.name}</p>
                                        <div class="attributes">
                                        {foreach $group.attributes as $id_attribute => $attribute}
                                            <div class="attribute">
                                                <input type="radio" name="group[{$id_attribute_group}]" value="{$id_attribute}" {if $id_attribute == $group.default}checked{/if}>
                                                <label>{$attribute.name}</label>
                                            </div>
                                        {/foreach}
                                        </div>
                                    </div>
                                {/foreach}
                                </div>
                            </div>
                            <div class="col-lg-2 center">
                                <div class="price">
                                    {Tools::displayPrice($product->price)}
                                </div>
                            </div>
                            <div class="col-lg-4 center">
                                <div class="buttons">
                                    <a class="btn btn-default" href="{if isset($link)}{$link->getProductLink($product)}{/if}">{l s='View' mod='gdz_reels'}</a>
                                    <input type="hidden" name="token" value="{if isset($static_token)}{$static_token}{/if}">
                                    <input type="hidden" name="id_product" value="{$product->id}">
                                    <input type="hidden" name="id_customization" value="0">
                                    <input type="hidden" name="qty" value="1" min="{$product->minimal_quantity}">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="action" value="update">
                                    <input type="submit" class="btn btn-default" value="{l s='Add to cart' mod='gdz_reels'}">
                                </div>
                            </div>
                        </form>
                        <hr>

                    </div>
                    {/foreach}
                </div>
            {$counter = $counter + 1}
            {/foreach}
        </div>
    </div>
</div>
