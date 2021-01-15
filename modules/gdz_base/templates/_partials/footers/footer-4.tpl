{**
 * 2007-2017 PrestaShop
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
 <div id="footer-main" class="footer-main">
     <div class="container">
         <div class="row">
             <div class="layout-column">
                 {include file='_partials/headers/logo.tpl'}
             </div>
         </div>
     </div>
 </div>
 {block name='footer-copyright'}
 <div id="footer-copyright" class="footer-copyright{if $gdzSetting.footer_copyright_class} {$gdzSetting.footer_copyright_class}{/if}">
     <div class="container">
           <div class="row align-items-center">
               <div class="layout-column col-auto">
                   {widget_block name="ps_languageselector"}
                       {include 'module:ps_languageselector/ps_languageselector-dropdown-full.tpl'}
                   {/widget_block}
               </div>
               {if isset($gdzSetting.footer_copyright_content) && $gdzSetting.footer_copyright_content}
               <div class="layout-column text-right html_links">
                     {$gdzSetting.footer_html nofilter}
               </div>
               {/if}

           </div>
     </div>
 </div>
 {/block}
