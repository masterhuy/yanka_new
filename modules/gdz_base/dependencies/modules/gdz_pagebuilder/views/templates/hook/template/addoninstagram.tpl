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
<style type="text/css">
#<%= addonid %> .pb-instagram-grid .il-item {
    padding: <%= gutter/2 %>px;
}
</style>
<%
  component = $('#gdz-configuration').data('component');
  if(component) {
      component.find('.pb-instagram').remove();
      if(view_type == 'grid') {
        component.append('<div class="pb-instagram"><div class="pb-instagram-images pb-instagram-grid row"></div></div>');
      } else {
        component.append('<div class="pb-instagram"><div class="pb-instagram-images pb-instagram-carousel"></div></div>');
      }
      var insta_urls = false;
      if(linked == '1') insta_urls = true;
      var insta_likes = false;
      if(likes == '1') insta_likes = true;
      var insta_comments = false;
      if(comments == '1') insta_comments = true;
      var insta_date = false;
      if(date == '1') insta_date = true;
      if(view_type == 'grid' && element_class == '1') {
          element_class ='col-6 col-md-6 col-lg-12';
      } else if(view_type == 'grid' && element_class == '2') {
          element_class ='col-6 col-md-6 col-lg-6';
      } else if(view_type == 'grid' && element_class == '3') {
          element_class ='col-6 col-md-6 col-lg-4';
      } else if(view_type == 'grid' && element_class == '4') {
          element_class ='col-6 col-md-6 col-lg-3';
      } else if(view_type == 'grid' && element_class == '6') {
          element_class ='col-6 col-md-6 col-lg-2';
      } else if(view_type == 'grid' && element_class == '12') {
          element_class ='col-6 col-md-6 col-lg-1';
      } else {
          element_class = 'image-item';
      }
      component.find('.pb-instagram-images').instagramLite({
          accessToken: access_token,
          limit:limit,
          urls: insta_urls,
          comments: insta_comments,
          date: insta_date,
          likes: insta_likes,
          element_class : element_class,
          success: function() {
              if(view_type == 'carousel') {
                  var $carousel = component.find('.pb-instagram-carousel');
                  if ( ! $carousel.length ) {
                      return;
                  }
                  var nav = false;
                  if(navigation == '1') nav = true;
                  var dots = false;
                  if(pagination == '1') dots = true;
                  var autoplay = false;
                  if(autoplay == '1') autoplay = true;
                  var rewind = false;
                  if(rewind == '1') rewind = true;
                  var slideBy = false;
                  if(slidebypage == '1') slideBy = true;
                  var cols_arr = [];
                  if(cols != '')
                      cols_arr = cols.split("-");
                  $carousel.owlCarousel({
                      loop:true,
                      margin:parseInt(gutter),
                      nav:nav,
                      dots:dots,
                      autoplay:autoplay,
                      rewind:rewind,
                      slideBy:slideBy,
                      lazyLoad:true,
                      responsive:{
                          0:{
                              items:cols_arr[2]
                          },
                          576:{
                              items:cols_arr[1]
                          },
                          992:{
                              items:cols_arr[0]
                          }
                      }
                  });
                  $carousel.addClass('owl-carousel');
              }
          },
          error: function() {
          },
      });
  }
%>
