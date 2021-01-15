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
<div class="lds-ring"><div></div><div></div><div></div><div></div></div>
<%
  component = $('#gdz-configuration').data('component');
  if(component) {
    setting = component.data('setting');
    $.ajax({
        type: 'POST',
        url: PagebuilderConfig.editor_link + '&action=GetReel&ajax=1',
        data: {
            'setting' : setting,
        },
        success: function(data)
        {
            component.find('.addon-body').html(data);
            $(component).find('.gdz_reel').each(function(i, e) {
                let h = $(this).find('.lookbooks').height();
                if (h < 500) {
                    h = 500;
                }
                $(this).find('video').css({
                    'max-height': h,
                    'display': 'block',
                });
            })
        }
  });
}
%>
