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
{extends file='page.tpl'}

{block name='page_title'}
    {l s='Forgot your password?' d='Shop.Theme.Customeraccount'}
{/block}

{block name='page_content'}
    <form action="{$urls.pages.password}" class="forgotten-password" method="post">
        <ul class="ps-alert-error">
            {foreach $errors as $error}
                <li class="item">
                    <p>{$error}</p>
                </li>
            {/foreach}
        </ul>

        <header>
            <p class="send-renew-password-link mb-2">{l s='Please enter the email address you used to register. You will receive a temporary link to reset your password.' d='Shop.Theme.Customeraccount'}</p>
        </header>

        <section class="form-fields">
            <label class="form-control-label required">{l s='Email address' d='Shop.Forms.Labels'}</label>
            <div class="form-group center-email-fields">
                <div class="row">
                    <div class="email col-12 col-md-10">
                        <input type="email" name="email" id="email" value="{if isset($smarty.post.email)}{$smarty.post.email|stripslashes}{/if}" class="form-control" required>
                    </div>
                    <div class="col-12 col-md-2">
                        <button class="form-control-submit btn btn-btn-default" name="submit" type="submit">
                            {l s='Send' d='Shop.Theme.Actions'}
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </form>
{/block}

{block name='page_footer'}
    <a href="{$urls.pages.my_account}" class="account-link">
        <i class="material-icons">&#xE5CB;</i>
        <span>{l s='Back to login' d='Shop.Theme.Actions'}</span>
    </a>
{/block}
