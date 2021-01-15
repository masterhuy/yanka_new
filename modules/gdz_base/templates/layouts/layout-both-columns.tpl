{**
 * 2007-2019 PrestaShop
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
 * @copyright 2007-2019 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<!doctype html>
<html lang="{$language.iso_code}">
    <head>
        {block name='head'}
            {include file='_partials/head.tpl'}
        {/block}
    </head>
    <body id="{$page.page_name}" class="{$page.body_classes|classnames} {if isset($jpb_homeclass) && $jpb_homeclass}{$jpb_homeclass}{/if}{if $jpb_rtl} rtl{/if}{if $gdzSetting.carousel_nav_type} carousel-nav-{$gdzSetting.carousel_nav_type}{/if}{if $gdzSetting.carousel_nav_show} carousel-nav-{$gdzSetting.carousel_nav_show}{/if}{if $gdzSetting.carousel_pag_show} carousel-pag-{$gdzSetting.carousel_pag_show}{/if}">

        {hook h='displayAfterBodyOpeningTag'}
        <div class="main-site">
            {block name='product_activation'}
                {include file='catalog/_partials/product-activation.tpl'}
            {/block}
            <header id="header">
                {block name='header'}
                    {include file='_partials/header.tpl'}
                {/block}
            </header>

    		{if $page.page_name != 'index' && $gdzSetting.breadcrumb}
    			{block name='breadcrumb'}
    			   {include file='_partials/breadcrumb.tpl'}
    			{/block}
    		{/if}
            <div id="wrapper">
                {block name='notifications'}
                    {include file='_partials/notifications.tpl'}
                {/block}
                {if $page.page_name != 'index' && $page.page_name != 'module-jmspagebuilder-page' && $page.page_name != 'module-jmspagebuilder-preview'}
                    <div class="container">
                {/if}
                {if $page.page_name != 'contact' && $page.page_name != 'product'  && $page.page_name != 'cart' && $page.page_name != 'module-jmspagebuilder-preview'}
                <div class="row">
                {/if}
                    {block name="left_column"}
                        <div id="left-column" class="page-column col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            {if $page.page_name == 'product'}
                                {hook h='displayLeftColumnProduct'}
                            {else}
                                {hook h="displayLeftColumn"}
                            {/if}
                        </div>
                    {/block}

                    {block name="content_wrapper"}
                        <div id="content-wrapper" class="left-column right-column col-sm-12 col-md-6">
                            {block name="content"}
                                <p>Hello world! This is HTML5 Boilerplate.</p>
                            {/block}
                        </div>
                    {/block}

                    {block name="right_column"}
                        <div id="right-column" class="col-xs-12 col-sm-12 col-md-4">
                            {if $page.page_name == 'product'}
                                {hook h='displayRightColumnProduct'}
                            {else}
                                {hook h="displayRightColumn"}
                            {/if}
                        </div>
                    {/block}
                {if $page.page_name != 'contact' && $page.page_name != 'product' && $page.page_name != 'cart' && $page.page_name != 'module-jmspagebuilder-preview'}
                </div>
                {/if}
                {if $page.page_name != 'index' && $page.page_name != 'module-jmspagebuilder-page' && $page.page_name != 'module-jmspagebuilder-preview'}
                </div>
                {/if}


    		</div>
        {block name="footer"}
            {include file="_partials/footer.tpl"}
        {/block}
        </div>



        {block name='javascript_bottom'}
            {include file="_partials/javascript.tpl" javascript=$javascript.bottom}
        {/block}

        {hook h='displayBeforeBodyClosingTag'}
    </body>
</html>
