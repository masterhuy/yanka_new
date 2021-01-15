<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Setting
{
    static $sprefix = 'gdz_';
    static $settings = array(
        'body_width' => array('type' => 'default', 'value' => '1', 'front' => 1),
        'body_container_width' => array('type' => 'default', 'value' => '1200'),
        'body_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
        'body_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
        'body_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
        'body_font' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'font'),
        'body_font_google' => array('type' => 'google-font', 'value' => '', 'front' => 1, 'css' => 'no'),
        'body_font_system' => array('type' => 'default', 'value' => ''),
        'body_fontface_css' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
        'body_font_face' => array('type' => 'default', 'value' => ''),
        'body_fontsize' => array('type' => 'default', 'value' => ''),
        'body_text_color' => array('type' => 'default', 'value' => ''),
        'body_link_color' => array('type' => 'default', 'value' => ''),
        'body_link_hover_color' => array('type' => 'default', 'value' => ''),
        'body_lineheight' => array('type' => 'default', 'value' => ''),
        'body_fontweight' => array('type' => 'default', 'value' => ''),
        'body_letterspacing' => array('type' => 'default', 'value' => ''),
        'heading_font' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'font'),
        'heading_font_google' => array('type' => 'google-font', 'value' => '', 'front' => 1, 'css' => 'no'),
        'heading_font_system' => array('type' => 'default', 'value' => ''),
        'heading_fontface_css' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
        'heading_font_face' => array('type' => 'default', 'value' => ''),
        'heading_fontweight' => array('type' => 'default', 'value' => ''),
        'heading_letterspacing' => array('type' => 'default', 'value' => ''),
        'heading_text_color' => array('type' => 'default', 'value' => ''),
        'body_icon_font' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
        'header_layout' => array('type' => 'default', 'value' => '1', 'front' => 1),
        'header_width' => array('type' => 'default', 'value' => 'container', 'front' => 1),
        'header_container_width' => array('type' => 'default', 'value' => '1200'),
        'header_height' => array('type' => 'default', 'value' => 'auto'),
        'header_personalized_height' => array('type' => 'default', 'value' => ''),
        'header_html' => array('type' => 'html_lang', 'value' => '','front' => 1, 'css' => 'no'),
        'header_sticky' => array('type' => 'default', 'value' => '1', 'front' => 1),
        'header_sticky_effect' => array('type' => 'default', 'value' => '', 'front' => 1),
        'header_sticky_height' => array('type' => 'default', 'value' => ''),
        'header_sticky_bg' => array('type' => 'default', 'value' => ''),
        'header_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'header_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'header_class' => array('type' => 'default', 'value' => '', 'front' => 1),
        'header_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
        'header_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
        'header_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
        'header_bottom_text_color' => array('type' => 'default', 'value' => ''),
        'header_bottom_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'header_bottom_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'header_bottom_bg' => array('type' => 'default', 'value' => ''),
        'header_icon_fontsize' => array('type' => 'default', 'value' => ''),
        'header_icon_color' => array('type' => 'default', 'value' => ''),
        'header_icon_hover_color' => array('type' => 'default', 'value' => ''),
        'header_topbar' => array('type' => 'default', 'value' => '', 'front' => 1),
        'topbar_content' => array('type' => 'html_lang', 'value' => '','front' => 1, 'css' => 'no'),
        'topbar_width' => array('type' => 'default', 'value' => '', 'front' => 1),
        'topbar_fontsize' => array('type' => 'default', 'value' => ''),
        'topbar_text_color' => array('type' => 'default', 'value' => ''),
        'topbar_link_color' => array('type' => 'default', 'value' => ''),
        'topbar_link_hover_color' => array('type' => 'default', 'value' => ''),
        'topbar_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'topbar_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'topbar_text_color' => array('type' => 'default', 'value' => ''),
        'topbar_class' => array('type' => 'default', 'value' => '', 'front' => 1),
        'topbar_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
        'topbar_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
        'topbar_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
        'header_sidebar' => array('type' => 'default', 'value' => '', 'front' => 1),
        'sidebar_position' => array('type' => 'default', 'value' => 'right-sidebar', 'front' => 1),
        'sidebar_fontsize' => array('type' => 'default', 'value' => ''),
        'sidebar_text_color' => array('type' => 'default', 'value' => ''),
        'sidebar_link_color' => array('type' => 'default', 'value' => ''),
        'sidebar_link_hover_color' => array('type' => 'default', 'value' => ''),
        'sidebar_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'sidebar_class' => array('type' => 'default', 'value' => ''),
        'sidebar_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
        'sidebar_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
        'sidebar_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
        'header_mobile_layout' => array('type' => 'default', 'value' => '1', 'front' => 1),
        'header_mobile_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'header_mobile_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
        'header_mobile_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
        'header_mobile_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
        'header_mobile_sticky' => array('type' => 'default', 'value' => '1', 'front' => 1),
        'header_mobile_sticky_height' => array('type' => 'default', 'value' => ''),
        'header_mobile_sticky_bg' => array('type' => 'default', 'value' => ''),
        'header_mobile_icon_fontsize' => array('type' => 'default', 'value' => ''),
        'header_mobile_icon_color' => array('type' => 'default', 'value' => ''),
        'header_mobile_icon_hover_color' => array('type' => 'default', 'value' => ''),
        'hormenu_id' => array('type' => 'default', 'value' => ''),
        'hormenu_align' => array('type' => 'default', 'value' => '', 'front' => 1),
        'hormenu_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'hormenu_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'hormenu_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
        'hormenu_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
        'hormenu_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
        'hormenu_class' => array('type' => 'default', 'value' => '', 'front' => 1),
        'hormenu_item_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'hormenu_link_color' => array('type' => 'default', 'value' => ''),
        'hormenu_link_hover_color' => array('type' => 'default', 'value' => ''),
        'hormenu_item_bg' => array('type' => 'default', 'value' => ''),
        'hormenu_item_hover_bg' => array('type' => 'default', 'value' => ''),
        'hormenu_item_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'hormenu_item_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'hormenu_submenu_bg' => array('type' => 'default', 'value' => ''),
        'hormenu_submenu_item_hover_bg' => array('type' => 'default', 'value' => ''),
        'hormenu_submenu_fontsize' => array('type' => 'default', 'value' => ''),
        'hormenu_submenu_link_color' => array('type' => 'default', 'value' => ''),
        'hormenu_submenu_link_hover_color' => array('type' => 'default', 'value' => ''),
        'hormenu_submenu_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'hormenu_submenu_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'hormenu_submenu_item_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'hormenu_submenu_item_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'vermenu_id' => array('type' => 'default', 'value' => ''),
        'vermenu_button_text' => array('type' => 'text_lang', 'value' => '','front' => 1, 'css' => 'no'),
        'vermenu_button_bg' => array('type' => 'default', 'value' => ''),
        'vermenu_button_text_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'vermenu_button_text_color' => array('type' => 'default', 'value' => ''),
        'vermenu_button_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'vermenu_button_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'vermenu_button_width' => array('type' => 'default', 'value' => '25%'),
        'vermenu_button_border_radius' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'vermenu_button_border' => array('type' => 'border', 'value' => '', 'css' => 'border'),
        'vermenu_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'vermenu_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'vermenu_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
        'vermenu_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
        'vermenu_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
        'vermenu_class' => array('type' => 'default', 'value' => '', 'front' => 1),
        'vermenu_item_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'vermenu_link_color' => array('type' => 'default', 'value' => ''),
        'vermenu_link_hover_color' => array('type' => 'default', 'value' => ''),
        'vermenu_item_bg' => array('type' => 'default', 'value' => ''),
        'vermenu_item_hover_bg' => array('type' => 'default', 'value' => ''),
        'vermenu_item_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'vermenu_item_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'vermenu_submenu_bg' => array('type' => 'default', 'value' => ''),
        'vermenu_submenu_item_hover_bg' => array('type' => 'default', 'value' => ''),
        'vermenu_submenu_fontsize' => array('type' => 'default', 'value' => ''),
        'vermenu_submenu_link_color' => array('type' => 'default', 'value' => ''),
        'vermenu_submenu_link_hover_color' => array('type' => 'default', 'value' => ''),
        'vermenu_submenu_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'vermenu_submenu_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'vermenu_submenu_item_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'vermenu_submenu_item_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'mobimenu_id' => array('type' => 'default', 'value' => ''),
        'mobimenu_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
        'mobimenu_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
        'mobimenu_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
        'mobimenu_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'mobimenu_class' => array('type' => 'default', 'value' => ''),
        'mobimenu_item_fontsize' => array('type' => 'default', 'value' => ''),
        'mobimenu_link_color' => array('type' => 'default', 'value' => ''),
        'mobimenu_link_hover_color' => array('type' => 'default', 'value' => ''),
        'mobimenu_item_bg' => array('type' => 'default', 'value' => ''),
        'mobimenu_item_hover_bg' => array('type' => 'default', 'value' => ''),
        'mobimenu_item_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'mobimenu_submenu_bg' => array('type' => 'default', 'value' => ''),
        'mobimenu_submenu_item_hover_bg' => array('type' => 'default', 'value' => ''),
        'mobimenu_submenu_fontsize' => array('type' => 'default', 'value' => ''),
        'mobimenu_submenu_link_color' => array('type' => 'default', 'value' => ''),
        'mobimenu_submenu_link_hover_color' => array('type' => 'default', 'value' => ''),
        'mobimenu_submenu_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'mobimenu_submenu_item_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'cart' => array('type' => 'default', 'value' => '', 'front' => 1),
        'cart_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'icon_thickness' => array('type' => 'default', 'value' => '_medium', 'front' => 1),
        'cart_links' => array('type' => 'checkbox2', 'value' => '', 'css' => 'no'),
        'cart_text_color' => array('type' => 'default', 'value' => ''),
        'cart_bg_color' => array('type' => 'default', 'value' => ''),
        'cart_class' => array('type' => 'default', 'value' => '', 'front' => 1),
        'cart_type' => array('type' => 'default', 'value' => '', 'front' => 1),
        'cart_subtotal' => array('type' => 'default', 'value' => '', 'front' => 1),
        'cart_total' => array('type' => 'default', 'value' => '', 'front' => 1),
        'addtocart_type' => array('type' => 'default', 'value' => '', 'front' => 1),
        'addtocart_notification_color' => array('type' => 'default', 'value' => ''),
        'search' => array('type' => 'default', 'value' => '', 'front' => 1),
        'search_ajax' => array('type' => 'default', 'value' => '', 'front' => 1),
        'search_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'search_box_class' => array('type' => 'default', 'value' => '', 'front' => 1),
        'search_box_bg_color' => array('type' => 'default', 'value' => ''),
        'search_box_type' => array('type' => 'default', 'value' => '', 'front' => 1),
        'search_box_height' => array('type' => 'default', 'value' => ''),
        'search_input_border_radius' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'search_input_border' => array('type' => 'border', 'value' => '', 'css' => 'border'),
        'search_input_text_color' => array('type' => 'default', 'value' => ''),
        'search_input_lineheight' => array('type' => 'default', 'value' => ''),
        'search_input_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'search_input_letterspacing' => array('type' => 'default', 'value' => ''),
        'search_input_bg_color' => array('type' => 'default', 'value' => ''),
        'search_input_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'wishlist' => array('type' => 'default', 'value' => '', 'front' => 1),
        'wishlist_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'customersignin' => array('type' => 'default', 'value' => '', 'front' => 1),
        'customersignin_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'customersignin_notlogged_links' => array('type' => 'checkbox2', 'value' => '', 'css' => 'no'),
        'customersignin_logged_links' => array('type' => 'checkbox2', 'value' => '', 'css' => 'no'),
        'customersignin_text' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'customersignin_text_color' => array('type' => 'default', 'value' => ''),
        'customersignin_bg_color' => array('type' => 'default', 'value' => ''),
        'customersignin_class' => array('type' => 'default', 'value' => '', 'front' => 1),
        'customersignin_type' => array('type' => 'default', 'value' => '', 'front' => 1),
        'close_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'delete_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'grid_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'list_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'menu_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'more_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'less_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'left_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'right_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'send_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'preview_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'calendar_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'comment_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'facebook_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'twitter_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'youtube_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'whatsapp_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'instagram_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'skype_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'linkedin_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'pinterest_icon' => array('type' => 'icon', 'value' => '', 'front' => 1),
        'button_text_color' => array('type' => 'default', 'value' => ''),
        'button_bg_color' => array('type' => 'default', 'value' => ''),
        'button_text_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'button_text_letterspacing' => array('type' => 'default', 'value' => ''),
        'button_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'button_border_radius' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'button_border' => array('type' => 'border', 'value' => '', 'css' => 'border'),
        'button_hover_text_color' => array('type' => 'default', 'value' => ''),
        'button_hover_bg_color' => array('type' => 'default', 'value' => ''),
        'button_hover_border_color' => array('type' => 'default', 'value' => ''),
        'button_active_text_color' => array('type' => 'default', 'value' => ''),
        'button_active_bg_color' => array('type' => 'default', 'value' => ''),
        'button_active_border_color' => array('type' => 'default', 'value' => ''),
        'button_small_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'button_small_text_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'footer_layout' => array('type' => 'default', 'value' => '', 'front' => 1),
        'footer_width' => array('type' => 'default', 'value' => '', 'front' => 1),
        'footer_container_width' => array('type' => 'default', 'value' => '1200'),
        'footer_personalized_height' => array('type' => 'default', 'value' => ''),
        'footer_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'footer_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'footer_class' => array('type' => 'default', 'value' => '', 'front' => 1),
        'footer_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
        'footer_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
        'footer_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
        'footer_html' => array('type' => 'html_lang', 'value' => '','front' => 1, 'css' => 'no'),
        'footer_text_color' => array('type' => 'default', 'value' => ''),
        'footer_block_title_color' => array('type' => 'default', 'value' => ''),
        'footer_block_title_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'footer_block_collapse' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'footer_top_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'footer_top_class' => array('type' => 'default', 'value' => '', 'front' => 1),
        'footer_top_text_color' => array('type' => 'default', 'value' => ''),
        'footer_top_bg_color' => array('type' => 'default', 'value' => ''),
        'footer_copyright_content' => array('type' => 'html_lang', 'value' => '','front' => 1, 'css' => 'no'),
        'footer_copyright_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'footer_copyright_class' => array('type' => 'default', 'value' => '', 'front' => 1),
        'footer_copyright_text_color' => array('type' => 'default', 'value' => ''),
        'footer_copyright_bg_color' => array('type' => 'default', 'value' => ''),
        'footer_copyright_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'footer_payment_image' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
        'social_facebook' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
        'social_twitter' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
        'social_gplus' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
        'social_instagram' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
        'social_pinterest' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
        'social_youtube' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
        'social_vimeo' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
        'social_linkedin' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
        'shop_width' => array('type' => 'default', 'value' => '1', 'front' => 1),
        'shop_layout' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'shop_list' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'shop_grid_column' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'shop_switchlist' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'shop_sortby' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'shop_activefilter' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'shop_cat_banner' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'shop_cat_desc' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'productbox_type' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'productbox_addtocart' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'productbox_quickview' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'productbox_wishlist' => array('type' => 'default', 'value' => '0', 'front' => 1, 'css' => 'no'),
        'productbox_price' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'productbox_category' => array('type' => 'default', 'value' => '0', 'front' => 1, 'css' => 'no'),
        'productbox_variant' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'productbox_hover' => array('type' => 'default', 'value' => '1', 'front' => 1),
        'productbox_title_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'productbox_title_color' => array('type' => 'default', 'value' => ''),
        'productbox_price_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'productbox_price_color' => array('type' => 'default', 'value' => ''),
        'product_page_width' => array('type' => 'default', 'value' => '1'),
        'product_page_layout' => array('type' => 'default', 'value' => 'no-sidebar', 'front' => 1, 'css' => 'no'),
        'product_content_layout' => array('type' => 'default', 'value' => 'thumbs-bottom', 'front' => 1, 'css' => 'no'),
        'product_image_zoom' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
        'product_page_title_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'product_page_title_color' => array('type' => 'default', 'value' => ''),
        'product_page_price_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'product_page_price_color' => array('type' => 'default', 'value' => ''),
        'product_page_sharing' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'product_page_accessories' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'product_page_moreinfos_type' => array('type' => 'default', 'value' => 'accordion', 'front' => 1, 'css' => 'no'),
        'product_page_tab_align' => array('type' => 'default', 'value' => 'left', 'front' => 1, 'css' => 'no'),
        'contact_page_width' => array('type' => 'default', 'value' => '1', 'front' => 1),
        'contact_page_layout' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'contact_page_title_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'contact_page_title_color' => array('type' => 'default', 'value' => ''),
        'contact_page_map_src' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
        'contact_page_image' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
        'contact_page_box_border' => array('type' => 'border', 'value' => '', 'css' => 'border'),
        'contact_page_box_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'login_page_width' => array('type' => 'default', 'value' => '1'),
        'login_page_hide_header' => array('type' => 'default', 'value' => '0'),
        'login_page_hide_footer' => array('type' => 'default', 'value' => '0'),
        'login_page_layout' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'login_page_title_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'login_page_title_color' => array('type' => 'default', 'value' => ''),
        'login_page_image' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
        'login_page_box_border' => array('type' => 'border', 'value' => '', 'css' => 'border'),
        'login_page_box_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'login_page_signup_content' => array('type' => 'html_lang', 'value' => '','front' => 1, 'css' => 'no'),
        'quickview_sharing' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'quickview_title_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'quickview_title_color' => array('type' => 'default', 'value' => ''),
        'quickview_price_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'quickview_price_color' => array('type' => 'default', 'value' => ''),
        'breadcrumb' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
        'breadcrumb_width' => array('type' => 'default', 'value' => '1'),
        'breadcrumb_align' => array('type' => 'default', 'value' => 'left', 'front' => 1, 'css' => 'no'),
        'breadcrumb_text_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'breadcrumb_text_color' => array('type' => 'default', 'value' => ''),
        'breadcrumb_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
        'breadcrumb_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
        'breadcrumb_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
        'breadcrumb_seperator' => array('type' => 'default', 'value' => 'slash', 'front' => 1, 'css' => 'no'),
        'breadcrumb_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'blocktitle_layout' => array('type' => 'default', 'value' => '1', 'front' => 1),
        'blocktitle_title' => array('type' => 'default', 'value' => ''),
        'blocktitle_title_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'blocktitle_title_color' => array('type' => 'default', 'value' => ''),
        'blocktitle_title_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'blocktitle_desc' => array('type' => 'default', 'value' => ''),
        'blocktitle_desc_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'blocktitle_desc_color' => array('type' => 'default', 'value' => ''),
        'blocktitle_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'blocktitle_desc_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'blocktitle_seperator_color' => array('type' => 'default', 'value' => ''),
        'blocktitle_seperator_height' => array('type' => 'default', 'value' => ''),
        'blocktitle_seperator_hl_color' => array('type' => 'default', 'value' => ''),
        'blocktab_layout' => array('type' => 'default', 'value' => '1', 'front' => 1),
        'blocktab_title' => array('type' => 'default', 'value' => ''),
        'blocktab_title_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'blocktab_title_color' => array('type' => 'default', 'value' => ''),
        'blocktab_title_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'blocktab_desc' => array('type' => 'default', 'value' => ''),
        'blocktab_desc_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'blocktab_desc_color' => array('type' => 'default', 'value' => ''),
        'blocktab_item_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'blocktab_item_color' => array('type' => 'default', 'value' => ''),
        'blocktab_item_active_color' => array('type' => 'default', 'value' => ''),
        'blocktab_item_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'blocktab_item_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'blocktab_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'blocktab_desc_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'blocktab_seperator_color' => array('type' => 'default', 'value' => ''),
        'blocktab_seperator_height' => array('type' => 'default', 'value' => ''),
        'blocktab_seperator_hl_color' => array('type' => 'default', 'value' => ''),
        'logo_source' => array('type' => 'default', 'value' => 'default', 'front' => 1, 'css' => 'no'),
        'logo_text' => array('type' => 'html_lang', 'value' => '','front' => 1, 'css' => 'no'),
        'logo_text_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
        'logo_text_color' => array('type' => 'default', 'value' => ''),
        'logo_text_letterspacing' => array('type' => 'default', 'value' => ''),
        'logo_text_border_radius' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'logo_text_border' => array('type' => 'border', 'value' => '', 'css' => 'border'),
        'logo_image' => array('type' => 'default', 'value' => '','front' => 1, 'css' => 'no'),
        'logo_text_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'carousel_lazyload' => array('type' => 'default', 'value' => '','front' => 1, 'css' => 'no'),
        'carousel_nav_type' => array('type' => 'default', 'value' => '1', 'front' => 1),
        'carousel_nav_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'carousel_nav_border' => array('type' => 'border', 'value' => '{"width":"2","style":"solid","color":"#bdbdbd"}', 'css' => 'border'),
        'carousel_nav_arrow_color' => array('type' => 'default', 'value' => ''),
        'carousel_nav_arrow_hover_color' => array('type' => 'default', 'value' => ''),
        'carousel_nav_bg_hover_color' => array('type' => 'default', 'value' => ''),
        'carousel_nav_show' => array('type' => 'default', 'value' => '', 'front' => 1),
        'carousel_pag_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'carousel_pag_dot_border' => array('type' => 'border', 'value' => '{"width":"1","style":"solid","color":"#dedede"}', 'css' => 'border'),
        'carousel_pag_dot_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
        'carousel_pag_dot_active_color' => array('type' => 'default', 'value' => ''),
        'carousel_pag_show' => array('type' => 'default', 'value' => '', 'front' => 1),
        'custom_js' => array('type' => 'custom_code', 'value' => '','front' => 1, 'css' => 'no'),
        'custom_css' => array('type' => 'custom_code', 'value' => '','front' => 1, 'css' => 'no'),
        'edit_css' => array('type' => 'edit_file', 'value' => '', 'css' => 'no'),
    );
}
