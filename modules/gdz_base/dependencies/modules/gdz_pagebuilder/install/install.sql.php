<?php
/**
* 2007-2020 PrestaShop
*
* Godzilla Pagebuilder
*
*  @author    Godzilla <joommasters@gmail.com>
*  @copyright 2007-2020 Godzilla
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: https://www.prestawork.com
*/

$query = "DROP TABLE IF EXISTS `_DB_PREFIX_gdz_pagebuilder`;
CREATE TABLE `_DB_PREFIX_gdz_pagebuilder` (
  `id_page` int(10) UNSIGNED NOT NULL,
  `id_shop` int(10) UNSIGNED NOT NULL
) ENGINE=_MYSQL_ENGINE_ DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `_DB_PREFIX_gdz_pagebuilder_pages`;
CREATE TABLE `_DB_PREFIX_gdz_pagebuilder_pages` (
  `id_page` int(11) NOT NULL,
  `css_file` varchar(30) NOT NULL,
  `js_file` varchar(30) NOT NULL,
  `page_class` varchar(100) NOT NULL,
  `params` mediumtext NOT NULL,
  `active` tinyint(1) NOT NULL,
  `ordering` int(11) NOT NULL
) ENGINE=_MYSQL_ENGINE_ DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `_DB_PREFIX_gdz_pagebuilder_pages_lang`;
CREATE TABLE `_DB_PREFIX_gdz_pagebuilder_pages_lang` (
  `id_page` int(10) UNSIGNED NOT NULL,
  `id_lang` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `key_ref` varchar(255) NOT NULL
) ENGINE=_MYSQL_ENGINE_ DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `_DB_PREFIX_gdz_pagebuilder_templates`;
CREATE TABLE `_DB_PREFIX_gdz_pagebuilder_templates` (
  `id_template` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `params` mediumtext NOT NULL
) ENGINE=_MYSQL_ENGINE_ DEFAULT CHARSET=utf8;

ALTER TABLE `_DB_PREFIX_gdz_pagebuilder`
  ADD PRIMARY KEY (`id_page`,`id_shop`);

ALTER TABLE `_DB_PREFIX_gdz_pagebuilder_pages`
  ADD PRIMARY KEY (`id_page`);

ALTER TABLE `_DB_PREFIX_gdz_pagebuilder_pages_lang`
  ADD PRIMARY KEY (`id_page`,`id_lang`);

ALTER TABLE `_DB_PREFIX_gdz_pagebuilder_templates`
  ADD PRIMARY KEY (`id_template`);

ALTER TABLE `_DB_PREFIX_gdz_pagebuilder`
  MODIFY `id_page` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `_DB_PREFIX_gdz_pagebuilder_pages`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

ALTER TABLE `_DB_PREFIX_gdz_pagebuilder_templates`
  MODIFY `id_template` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
";
