<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-01 05:03:16
  from 'F:\xampp\htdocs\yanka\themes\yanka\modules\gdz_recentlybought\views\templates\hook\jrb-popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6017d1e41e55e5_71969168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7685ff3f91770ed3eddbabdba67064451f7bce72' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\modules\\gdz_recentlybought\\views\\templates\\hook\\jrb-popup.tpl',
      1 => 1608699094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017d1e41e55e5_71969168 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\xampp\\htdocs\\yanka\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<style type="text/css">
    #woorebought-popup {
            background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_BACKGROUND'], ENT_QUOTES, 'UTF-8');?>
;
            border-radius:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_BORDER_RADIUS'], ENT_QUOTES, 'UTF-8');?>
px;
    }
    #woorebought-popup p {
            color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_TEXT_COLOR'], ENT_QUOTES, 'UTF-8');?>
 !important;
            font-size:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_TEXT_SIZE'], ENT_QUOTES, 'UTF-8');?>
px;
    }
    #woorebought-popup small {
            color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_TIME_COLOR'], ENT_QUOTES, 'UTF-8');?>
 !important;
            font-size:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_TIME_SIZE'], ENT_QUOTES, 'UTF-8');?>
px !important;
    }
     #woorebought-popup a {
            color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_LINK_COLOR'], ENT_QUOTES, 'UTF-8');?>
 !important;
            font-size:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_LINK_SIZE'], ENT_QUOTES, 'UTF-8');?>
px !important;
    }
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_CUSTOM_CSS'], ENT_QUOTES, 'UTF-8');?>

</style>
<div id="woorebought-popup" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_IMAGE_POSITION'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_POPUP_POSITION'], ENT_QUOTES, 'UTF-8');?>
 animated" style="display: none;"
     data-show_trans="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_POPUP_SHOW_ANIMATE'], ENT_QUOTES, 'UTF-8');?>
"
     data-hide_trans="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_POPUP_HIDE_ANIMATE'], ENT_QUOTES, 'UTF-8');?>
"
     data-popup_content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_POPUP_CONTENT'], ENT_QUOTES, 'UTF-8');?>
"
     >
    <div class="woorebought-content"></div>
    <?php if ($_smarty_tpl->tpl_vars['setting']->value['GRB_CLOSE_ICON']) {?>
        <span id="popup-close">
            <i class="icon-close"></i>
        </span>
    <?php }?>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    'use strict';
    var woorebought = {
        use_ajax    : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_AJAX'], ENT_QUOTES, 'UTF-8');?>
,
        loop        : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_LOOP'], ENT_QUOTES, 'UTF-8');?>
,
        init_delay  : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_INIT_TIME'], ENT_QUOTES, 'UTF-8');?>
,
        total       : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_TOTAL'], ENT_QUOTES, 'UTF-8');?>
,
        display_time: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_DISPLAY_TIME'], ENT_QUOTES, 'UTF-8');?>
,
        next_time   : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_NEXT_TIME'], ENT_QUOTES, 'UTF-8');?>
,
        image       : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['GRB_EXTERNAL_LINK'], ENT_QUOTES, 'UTF-8');?>
,
        count       : 0,
        intel       : 0,
        id          : 0,
        popup_content    : '',
        products    : '',
        ajax_url    : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajaxpath']->value, ENT_QUOTES, 'UTF-8');?>
',
        init        : function () {
            setTimeout(function () {
                woorebought.get_product();
            }, this.init_delay * 1000);

        },
        popup_show: function () {
            var count = this.count++;
            if (count == this.total-1) {
                return;
            }
            var popup_id = jQuery('#woorebought-popup'),
                popup_show_trans = jQuery('#woorebought-popup').data('show_trans'),
                popup_hide_trans = jQuery('#woorebought-popup').data('hide_trans');
            if (popup_id.hasClass(popup_hide_trans)) {
                jQuery(popup_id).removeClass(popup_hide_trans);
            }
            jQuery(popup_id).addClass(popup_show_trans).css('display', 'flex');
            setTimeout(function () {
                woorebought.popup_hide();
            }, this.display_time * 1000);
        },

        popup_hide: function () {
            var popup_id = jQuery('#woorebought-popup'),
                popup_show_trans = jQuery('#woorebought-popup').data('show_trans'),
                popup_hide_trans = jQuery('#woorebought-popup').data('hide_trans');

            if (popup_id.hasClass(popup_show_trans)) {
                jQuery(popup_id).removeClass(popup_show_trans);
            }
            jQuery('#woorebought-popup').addClass(popup_hide_trans);
            jQuery('#woorebought-popup').fadeOut((this.next_time>1)?1000:0);
            if (this.loop) {
                this.intel = setTimeout(function () {
                    woorebought.get_product();
                }, this.next_time * 1000);
            }
        },
        get_product : function () {
            if (this.use_ajax) {
                var str_data;
                if (this.id) {
                    str_data = '&id=' + this.id;
                } else {
                    str_data = '';
                }
                var wb = this;
                jQuery.ajax({
                    type   : 'POST',
                    data   : 'action=woorebought_show_product' + str_data,
                    url    : this.ajax_url,
                    success: function (respond) {
                        // console.log(respond);
                        wb.products = respond;
                    },
                    error  : function (respond) {
                    }
                })
            }
            // console.log(this);
            var products = this.products;
            var popup_content = this.popup_content;
            var image_redirect = this.image;
            products = jQuery.parseJSON(products);
            if (products.length > 0) {
                /*Get data*/
                var index = woorebought.random(0, products.length - 1);
                var product = products[index];
                var data_address = product.address;
                var data_product = product.title;
                var data_product_link = '<a target="_blank" href="' + product.product_link + '">' + product.title + '</a>';
                var data_time = '<small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'About','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 ' + product.time + ' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ago','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</small>';
                var image_html = '';
                var img = $('<img src="' + product.image_link + '">');
                var image_html = $('<div>').append($(img).clone()).html();
                if (product.image_link && image_redirect) {
                        image_html = '<a target="_blank" href="' + product.product_link + '">' + image_html + '</a>';
                }
                /*Replace Content*/
                
                var replaceArray = ['{address}', '{product_name}', '{product_link}', '{time_ago}'];
                
                var replaceArrayValue = [data_address, data_product, data_product_link, data_time];
                var finalAns = popup_content;
                for (var i = replaceArray.length - 1; i >= 0; i--) {
                    finalAns = finalAns.replace(replaceArray[i], replaceArrayValue[i]);
                }
                var html = image_html + '<p>' + finalAns + '</p>';
                jQuery('.woorebought-content').html(html);
                // console.log('show');
                $(img).load(function(){
                    // console.log(image_html);
                    woorebought.popup_show();
                })

            }
        },
        close_notify: function () {
            jQuery('#popup-close').on('click', function () {
                woorebought.popup_hide();
            });
        },
        random      : function (min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
    }

    jQuery(document).ready(function () {
        if (jQuery('#woorebought-popup').length > 0) {
            var data = jQuery('#woorebought-popup').data();
            var popup = woorebought;
            popup.products = '<?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['products']->value )),'\'','\\\'');?>
';
            popup.popup_content = data.popup_content;

            if (data.product) {
                popup.id = data.product;
            }
            popup.init();
        }

        jQuery('#popup-close').on('click', function () {
            woorebought.popup_hide();
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
