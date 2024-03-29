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
{if $field.type == 'hidden'}
    <input type="hidden" name="{$field.name}" value="{$field.value}">
{else}

    <div class="form-group row align-items-center {if !empty($field.errors)}has-error{/if}">
        <label class="col-md-12 form-control-label{if $field.required} required{/if}">
            {if $field.type !== 'checkbox'}
                {$field.label}{if $field.required} <span class="required float-right">* {l s='Required Field' d='Shop.Forms.Labels'}</span>{/if}
            {/if}
        </label>
        <div class="col-md-12{if ($field.type === 'radio-buttons')} form-control-valign{/if}">
            {if $field.type === 'select'}
                <select class="form-control form-control-select" name="{$field.name}" {if $field.required}required{/if}>
                    <option value disabled selected>{l s='-- please choose --' d='Shop.Forms.Labels'}</option>
                    {foreach from=$field.availableValues item="label" key="value"}
                        <option value="{$value}" {if $value eq $field.value} selected {/if}>{$label}</option>
                    {/foreach}
                </select>
            {elseif $field.type === 'countrySelect'}

            <select
                class="form-control form-control-select js-country"
                name="{$field.name}"
                {if $field.required}required{/if}
            >
                <option value disabled selected>{l s='-- please choose --' d='Shop.Forms.Labels'}</option>
                {foreach from=$field.availableValues item="label" key="value"}
                    <option value="{$value}" {if $value eq $field.value} selected {/if}>{$label}</option>
                {/foreach}
            </select>
            {elseif $field.type === 'radio-buttons'}
            {foreach from=$field.availableValues item="label" key="value"}
                <label class="radio-inline">
                    <span class="custom-radio">
                        <input
                            name="{$field.name}"
                            type="radio"
                            value="{$value}"
                            {if $field.required}required{/if}
                            {if $value eq $field.value} checked {/if}
                        >
                        <span></span>
                    </span>
                    {$label}
                </label>
            {/foreach}
            {elseif $field.type === 'checkbox'}
                <span class="custom-checkbox">
                    <input name="{$field.name}" type="checkbox" value="1" {if $field.value}checked="checked"{/if} {if $field.required}required{/if}>
                    <label>{$field.label nofilter}</label >
                </span>
            {elseif $field.type === 'date'}
                <input class="form-control" type="date" value="{$field.value}" placeholder="{if isset($field.availableValues.placeholder)}{$field.availableValues.placeholder}{/if}">
                {if isset($field.availableValues.comment)}
                    <span class="form-control-comment">
                        {$field.availableValues.comment}
                    </span>
                {/if}
            {elseif $field.type === 'birthday'}
                <div class="js-parent-focus">
                    {html_select_date
                    field_order=DMY
                    time={$field.value}
                    field_array={$field.name}
                    prefix=false
                    reverse_years=true
                    field_separator='<br>'
                    day_extra='class="form-control form-control-select"'
                    month_extra='class="form-control form-control-select"'
                    year_extra='class="form-control form-control-select"'
                    day_empty={l s='-- day --' d='Shop.Forms.Labels'}
                    month_empty={l s='-- month --' d='Shop.Forms.Labels'}
                    year_empty={l s='-- year --' d='Shop.Forms.Labels'}
                    start_year={'Y'|date}-100 end_year={'Y'|date}
                    }
                </div>
            {elseif $field.type === 'password'}
                <div class="js-parent-focus pasword-form">
                    <input
                        class="form-control js-child-focus js-visible-password"
                        name="{$field.name}"
                        placeholder="{l s='Enter your password' d='Shop.Forms.Labels'}"
                        type="password"
                        value=""
                        pattern=".{literal}{{/literal}5,{literal}}{/literal}"
                        {if $field.required}required{/if}
                    >
                    <span class="input-group-btn show-pass">
                        <button
                        class="btn btn-default"
                        type="button"
                        data-action="show-password"
                        data-text-show="{l s='Show' d='Shop.Theme.Actions'}"
                        data-text-hide="{l s='Hide' d='Shop.Theme.Actions'}"
                        >{l s='Show' d='Shop.Theme.Actions'}</button>
                    </span>
                </div>
            {else}
                <input
                    class="form-control"
                    name="{$field.name}"
                    type="{$field.type}"
                    value="{$field.value}"
                    {if isset($field.availableValues.placeholder)}placeholder="{$field.availableValues.placeholder}"{/if}
                    {if $field.maxLength}maxlength="{$field.maxLength}"{/if}
                    {if $field.required}required{/if}
                    {if $field.name === "email"}placeholder="{l s='john.smith@example.com' d='Shop.Forms.Labels'}"{/if}
                >
                {if isset($field.availableValues.comment)}
                    <span class="form-control-comment">
                        {$field.availableValues.comment}
                    </span>
                {/if}
            {/if}
            {include file='_partials/form-errors.tpl' errors=$field.errors}
        </div>
    </div>
{/if}
