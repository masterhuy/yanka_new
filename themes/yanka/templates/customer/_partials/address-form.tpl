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
<div class="js-address-form">
    {include file='_partials/form-errors.tpl' errors=$errors['']}
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

    <form
        method="POST"
        action="{url entity='address' params=['id_address' => $id_address]}"
        data-id-address="{$id_address}"
        data-refresh-url="{url entity='address' params=['ajax' => 1, 'action' => 'addressForm']}"
    >
        <section class="form-fields">
            {block name='form_fields'}
                {foreach from=$formFields item="field"}
                {block name='form_field'}
                    {form_field field=$field}
                {/block}
                {/foreach}
            {/block}
        </section>

        <footer class="form-footer clearfix">
            <input type="hidden" name="submitAddress" value="1">
            {block name='form_buttons'}
                <button class="btn-default" type="submit" class="form-control-submit">
                {l s='Save' d='Shop.Theme.Actions'}
                </button>
            {/block}
        </footer>
    </form>
</div>
