{**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<h3>{l s='Drop Us a Line' d='Shop.Theme.Global'}</h3>
<section class="contact-form">
    <form action="{$urls.pages.contact}" method="post" {if $contact.allow_file_upload}enctype="multipart/form-data"{/if}>
        {if $notifications}
            <div class="col-xs-12 alert {if $notifications.nw_error}alert-danger{else}alert-success{/if}">
                <ul>
                    {foreach $notifications.messages as $notif}
                        <li>{$notif}</li>
                    {/foreach}
                </ul>
            </div>
        {/if}
        {if !$notifications || $notifications.nw_error}
            <section class="form-fields row">
                <div class="form-group col-12">
                    <select name="id_contact" class="form-control form-control-select">
                        {foreach from=$contact.contacts item=contact_elt}
                        <option value="{$contact_elt.id_contact}">{$contact_elt.name}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="form-group col-12">
                    <input
                        class="form-control"
                        name="from"
                        type="email"
                        value="{$contact.email}"
                        placeholder="{l s='Email*' d='Shop.Forms.Help'}"
                    >
                </div>
                {if $contact.orders}
                    <div class="form-group col-md-12 col-sx-12">
                        <select name="id_order" class="form-control form-control-select">
                        <option value="">{l s='Select reference' d='Shop.Forms.Help'}</option>
                        {foreach from=$contact.orders item=order}
                            <option value="{$order.id_order}">{$order.reference}</option>
                        {/foreach}
                        </select>
                    </div>
                {/if}
                {if $contact.allow_file_upload}
                    <div class="form-group col-md-12 col-sx-12">
                        <input type="file" name="fileUpload" class="filestyle" data-buttonText="{l s='Choose file' d='Shop.Theme.Actions'}">
                    </div>
                {/if}
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <textarea
                        class="form-control"
                        name="message"
                        placeholder="{l s='Message*' d='Shop.Forms.Help'}"
                        rows="3"
                    >{if $contact.message}{$contact.message}{/if}</textarea>
                </div>
                {if isset($id_module)}
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        {hook h='displayGDPRConsent' id_module=$id_module}
                    </div>
                {/if}
            </section>
            <footer class="form-footer text-sm-right">
                <style>
                    input[name=url] {
                        display: none !important;
                    }
                </style>
                <input type="text" name="url" value=""/>
                <input type="hidden" name="token" value="{$token}" />
                <input class="btn btn-outline-primary-2 btn-minwidth-sm text-uppercase" type="submit" name="submitMessage" value="{l s='Submit' d='Shop.Theme.Actions'}">
            </footer>
        {/if}
    </form>
</section>


