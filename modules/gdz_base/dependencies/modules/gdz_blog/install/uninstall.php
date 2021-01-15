<?php
/**
* 2007-2020 PrestaShop
*
* Godzilla Blog
*
*  @author    Prestawork <joommasters@gmail.com>
*  @copyright 2007-2020 Prestawork
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.prestawork.com
*/

    $sql = array();
    $sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'gdz_blog_categories`';
    $sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'gdz_blog_categories_lang`';
    $sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'gdz_blog_posts`';
    $sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'gdz_blog_posts_lang`';
    $sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'gdz_blog_posts_comments`';
