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
{block name='page_header_container'}{/block}
{block name='page_content'}
    <div class="contact-layout-3" id="contact-wrapper">
        <div class="container">
            <div class="row contact-row">
                <div class="col-md-5 mb-2 mb-md-0">
                    <div class="contact-map" id="contact-map">
                        <img width="100%" src="{$gdzSetting.contact_page_image}" />   
                    </div>
                </div>
                <div class="col-md-7">
                    <div id="contact-info">
                        {widget name="ps_contactinfo"}
                    </div>
                    <div id="contact-form" class="contact-row">
                        {widget name="contactform"}
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}
