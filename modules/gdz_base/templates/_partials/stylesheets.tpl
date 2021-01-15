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
 * needs please refer to http://www.ptrestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
 <link rel="stylesheet" type="text/css" href="{$urls.theme_assets}css/bootstrap.min.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{$urls.base_url}/modules/gdz_themesetting/views/fonts/font-icon.css" rel="stylesheet">
{if $gdzSetting.body_font == 'google' && isset($gdzSetting.body_font_google)}
    <link href="https://fonts.googleapis.com/css?family={$gdzSetting.body_font_google}:{$gdzSetting.body_font_google_weightstyle}" rel="stylesheet">
{elseif $gdzSetting.body_font == 'fontface' && isset($gdzSetting.body_fontface_css)}
    <link href="{$urls.base_url}/modules/gdz_themesetting/views/fonts/{$gdzSetting.body_fontface_css}" rel="stylesheet">
{/if}
{if $gdzSetting.heading_font == 'google' && isset($gdzSetting.heading_font_google)}
    <link href="https://fonts.googleapis.com/css?family={$gdzSetting.heading_font_google}:{$gdzSetting.heading_font_google_weightstyle}&display=swap" rel="stylesheet">
{elseif $gdzSetting.heading_font == 'fontface' && isset($gdzSetting.heading_fontface_css)}
    <link href="{$urls.base_url}/modules/gdz_themesetting/views/fonts/{$gdzSetting.heading_fontface_css}" rel="stylesheet">
{/if}
{if $gdzSetting.body_icon_font != ''}
    <link href="{$urls.base_url}/modules/gdz_themesetting/views/fonts/{$gdzSetting.body_icon_font}" rel="stylesheet">
{/if}
{foreach $stylesheets.external as $stylesheet}
<link rel="stylesheet" href="{$stylesheet.uri}" type="text/css" media="{$stylesheet.media}">
{/foreach}
{foreach $stylesheets.inline as $stylesheet}
<style>
{$stylesheet.content}
</style>
{/foreach}
{if $gdzSetting.custom_css}
<style>
{$gdzSetting.custom_css nofilter}
</style>
{/if}
