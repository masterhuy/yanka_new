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
<article id="address-{$address.id}" class="address" data-id-address="{$address.id}">
    <div class="address-body">
        <div class="address-top">
            <h4>{l s='Your Addresses' d='Shop.Theme.Actions'}</h4>
            <div class="addresses-create-new">
                <a href="{$urls.pages.address}" data-link-action="add-address" class="btn-default">
                    <span>{l s='Add a new address' d='Shop.Theme.Actions'}</span>
                </a>
            </div>
            <a href="{$link->getPageLink('my-account', true)}" class="btn-link btn-lg pt-link-back">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                    <g>
                        <polygon fill="currentColor" points="16.4,21.6 6.9,12 16.4,2.4 17.6,3.6 9.1,12 17.6,20.4"></polygon>
                    </g>
                </svg>
                <span class="pt-text">{l s='Return To Account Page' d='Shop.Theme.Actions'}</span>
            </a>
        </div>
        <div class="pt-wrapper">
            <h3 class="pt-title">{l s='Title' d='Shop.Theme.Actions'}</h3>
            <div class="pt-table-responsive">
                <table class="pt-table-shop-02">
                    <tbody>
                        <tr>
                            <td>{l s='Name' d='Shop.Theme.Actions'}:</td>
                            <td>{$address.firstname} {$address.lastname} </td>
                        </tr>
                        <tr>
                            <td>{l s='Address' d='Shop.Theme.Actions'}:</td>
                            <td>{$address.address1}</td>
                        </tr>
                        <tr>
                            <td>{l s='Address' d='Shop.Theme.Actions'} 2:</td>
                            <td>{$address.address2}</td>
                        </tr>
                        <tr>
                            <td>{l s='Country' d='Shop.Theme.Actions'}:</td>
                            <td>{$address.country}</td>
                        </tr>
                        <tr>
                            <td>{l s='Postcode' d='Shop.Theme.Actions'}:</td>
                            <td>{$address.postcode}</td>
                        </tr>
                        <tr>
                            <td>{l s='Phone' d='Shop.Theme.Actions'}:</td>
                            <td>{$address.phone}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="address-footer">
        <a href="{url entity=address id=$address.id}" data-link-action="edit-address" class="btn-edit btn-link btn-lg pt-link-back">
            <svg width="28" height="28" viewBox="0 0 24 24">
                <use xlink:href="#icon-edit">
                    <symbol id="icon-edit" viewBox="0 0 24 24">
                        <path d="M2.3 20.4c-.1 0-.1 0 0 0H2c-.1 0-.1-.1-.2-.1-.1-.1-.1-.2-.1-.3v-.3l.6-5v-.1s0-.1.1-.1L14.6 2.1c.4-.4.8-.5 1.4-.5.5 0 1 .2 1.3.5l2.6 2.6c.4.4.5.8.5 1.3s-.2 1-.5 1.3L7.7 19.6s-.1 0-.1.1h-.1l-5.2.7zm.6-1.3l2.9-.4-2.6-2.6-.3 3zm.8-4.3L5 16.1l9.7-9.7L13.5 5l-9.8 9.8zm3.5 3.5L17 8.5l-1.3-1.3L5.9 17l1.3 1.3zM15.5 3l-1.2 1.2 3.5 3.5L19 6.5c.1-.1.2-.3.2-.4 0-.2-.1-.3-.2-.4L16.4 3c-.1-.1-.3-.2-.4-.2-.2 0-.4 0-.5.2z" fill="currentColor">
                        </path>
                    </symbol>
                </use>
            </svg>
            <span class="pt-text">{l s='Edit' d='Shop.Theme.Actions'}</span>
        </a>
        <a href="{url entity=address id=$address.id params=['delete' => 1, 'token' => $token]}" data-link-action="delete-address" class="btn-delete btn-link btn-lg pt-link-back">
            <svg width="28" height="28" viewBox="0 0 24 24">
                <use xlink:href="#icon-remove">
                    <symbol id="icon-remove" fill="none" viewBox="0 0 24 24">
                        <path d="M5.754 23.2L4.848 7.8h14.304l-.906 15.4H5.754zM2 4h20M10 1h4" stroke="currentColor" stroke-widht="1.6">
                        </path>
                    </symbol>
                </use>
            </svg>
            <span class="pt-text">{l s='Delete' d='Shop.Theme.Actions'}</span>
        </a>
    </div>
</article>
