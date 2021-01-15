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
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $tabs|@count gt 0}
{assign var=tab_id value=1000|mt_rand:9999}
<div class="pb-tabs">
    <ul class="nav nav-tabs" id="tab-{$tab_id}">
    {foreach from=$tabs key=index item=tab}
        <li class="nav-item">
            <a class="nav-link {if $index == 0}active{/if}" data-toggle="tab" href="#tab-{$tab_id}-{$index}" role="tab" aria-controls="{$tab->title|escape:'htmlall':'UTF-8'}">{$tab->title|escape:'htmlall':'UTF-8'}</a>
        </li>
    {/foreach}
    </ul>
    <div class="tab-content" id="tabcontent-{$tab_id}">
    {foreach from=$tabs key=index item=tab}
        <div class="tab-pane {if $index == 0}fade show active{/if}" id="tab-{$tab_id}-{$index}" role="tabpanel">
          {$tab->content|escape:'htmlall':'UTF-8'}
        </div>
    {/foreach}
    </div>
</div>
{/if}
