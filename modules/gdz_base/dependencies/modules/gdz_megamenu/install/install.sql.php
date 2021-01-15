<?php
/**
* 2007-2020 PrestaShop
*
* Godzilla MegaMenu for prestashop
*
*  @author    Prestawork<joommasters@gmail.com>
*  @copyright 2007-2020 Prestawork
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: https://www.prestawork.com
*/

$query = "DROP TABLE IF EXISTS `_DB_PREFIX_gdz_megamenu`;
CREATE TABLE `_DB_PREFIX_gdz_megamenu` (
  `menu_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_shop` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=_MYSQL_ENGINE_ DEFAULT CHARSET=utf8;

INSERT INTO `_DB_PREFIX_gdz_megamenu` (`menu_id`, `name`, `id_shop`, `active`) VALUES
(13, 'Top Menu', 1, 1),
(16, 'Vertical Menu', 1, 1),
(17, 'Mobile Menu', 1, 1);

DROP TABLE IF EXISTS `_DB_PREFIX_gdz_megamenu_items`;
CREATE TABLE `_DB_PREFIX_gdz_megamenu_items` (
  `mitem_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(11) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(30) NOT NULL,
  `value` varchar(255) NOT NULL,
  `html_content` text NOT NULL,
  `active` tinyint(1) NOT NULL,
  `target` varchar(25) NOT NULL,
  `params` text NOT NULL,
  `ordering` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=_MYSQL_ENGINE_ DEFAULT CHARSET=utf8;

INSERT INTO `_DB_PREFIX_gdz_megamenu_items` (`mitem_id`, `menu_id`, `parent_id`, `type`, `value`, `html_content`, `active`, `target`, `params`, `ordering`) VALUES
(376, 13, 0, 'link', '', '', 1, '_self', '', 0),
(379, 13, 0, 'category', '8', '', 1, '_self', '', 1),
(381, 16, 0, 'product', '2', '', 1, '_self', '', 1),
(382, 16, 0, 'product', '3', '', 1, '_self', '', 2),
(383, 16, 381, 'product', '3', '', 1, '_self', '', 1),
(384, 16, 383, 'product', '2', '', 1, '_self', '', 1),
(385, 16, 0, 'product', '3', '', 1, '_self', '', 3),
(386, 16, 0, 'product', '4', '', 1, '_self', '', 4),
(387, 16, 0, 'product', '4', '', 1, '_self', '', 5),
(388, 13, 0, 'link', '', '', 1, '_self', '', 2),
(389, 13, 0, 'link', '', '', 1, '_self', '', 4),
(390, 17, 0, 'link', '', '', 1, '_self', '', 0),
(391, 17, 0, 'category', '8', '', 1, '_self', '', 1),
(392, 17, 0, 'jmsblog-categories', 'jmsblog_categories', '', 1, '_self', '', 3),
(393, 17, 0, 'link', '', '', 1, '_self', '', 4),
(394, 17, 0, 'category', '2', '', 1, '_self', '', 2),
(395, 17, 390, 'link', '', '', 1, '_self', '', 1),
(396, 17, 390, 'link', '', '', 1, '_self', '', 2),
(397, 13, 388, 'cms', '1', '', 1, '_self', '', 1),
(399, 13, 376, 'jmspagebuilder-page', '14', '', 1, '_self', '', 0),
(400, 13, 0, 'jmsblog-latest', 'jmsblog_latest', '', 1, '_self', '', 3),
(402, 13, 400, 'jmsblog-categories', 'jmsblog_categories', '', 1, '_self', '', 0),
(403, 13, 400, 'jmsblog-singlepost', '6', '', 1, '_self', '', 2),
(404, 13, 400, 'jmsblog-category', '1', '', 1, '_self', '', 1),
(405, 13, 400, 'jmsblog-archive', '2019-10', '', 1, '_self', '', 3),
(406, 13, 400, 'jmsblog-tag', 'fashion', '', 1, '_self', '', 4);

DROP TABLE IF EXISTS `_DB_PREFIX_gdz_megamenu_items_lang`;
CREATE TABLE `_DB_PREFIX_gdz_megamenu_items_lang` (
  `mitem_id` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `menulink` text NOT NULL
) ENGINE=_MYSQL_ENGINE_ DEFAULT CHARSET=utf8;

INSERT INTO `_DB_PREFIX_gdz_megamenu_items_lang` (`mitem_id`, `id_lang`, `name`, `menulink`) VALUES
(364, 1, 'sdsdsds', ''),
(364, 2, 'sdsdsds', ''),
(376, 1, 'Home', 'index.php'),
(376, 2, 'Home', ''),
(379, 1, 'Shop', ''),
(379, 2, 'Shop', ''),
(381, 1, 'Category Name 1', ''),
(381, 2, 'Category Name 1', ''),
(382, 1, 'Category Name 2', ''),
(382, 2, 'Category Name 2', ''),
(383, 1, 'Category level 2', ''),
(383, 2, 'Category level 2', ''),
(384, 1, 'Category level 3', ''),
(384, 2, 'Category level 3', ''),
(385, 1, 'Category Name 3', ''),
(385, 2, 'Category Name 3', ''),
(386, 1, 'Category Name 4', ''),
(386, 2, 'Category Name 4', ''),
(387, 1, 'Category Name 5', ''),
(387, 2, 'Category Name 5', ''),
(388, 1, 'Pagebuilder', '#'),
(388, 2, 'Pagebuilder', ''),
(389, 1, 'Contact', 'index.php?controller=contact'),
(389, 2, 'Contact', ''),
(390, 1, 'Home', 'index.php'),
(390, 2, '#D9D8D9', 'index.php'),
(391, 1, 'Shop', ''),
(391, 2, 'Shop', ''),
(392, 1, 'Blog', '#'),
(392, 2, 'Blog', '#'),
(393, 1, 'Contact Us', 'index.php?controller=contact'),
(393, 2, 'Contact Us', 'index.php?controller=contact'),
(394, 1, 'Features Products', ''),
(394, 2, 'Features Products', ''),
(395, 1, 'Demo Menu', '#'),
(395, 2, 'Demo Menu', '#'),
(396, 1, 'Demo Menu', '#'),
(396, 2, 'Demo Menu', '#'),
(388, 4, 'Pagebuilder', ''),
(397, 1, 'Cms embed Pagebuilder', ''),
(397, 2, 'Cms embed Pagebuilder', ''),
(397, 4, 'Cms embed Pagebuilder', ''),
(376, 4, 'Home', ''),
(391, 4, 'Shop', ''),
(379, 4, 'Shop', ''),
(389, 4, 'Contact', ''),
(399, 1, 'Home 2', 'index.php?settingpanel=1&jpb_homepage=1'),
(399, 2, 'Home 2', 'index.php?settingpanel=1&jpb_homepage=1'),
(399, 4, 'Home 2', 'index.php?settingpanel=1&jpb_homepage=1'),
(400, 1, 'Blog', ''),
(400, 2, 'Blog', ''),
(400, 4, 'Blog', ''),
(392, 4, 'Blog', ''),
(402, 1, 'Categories', '#'),
(402, 2, 'Categories', '#'),
(402, 4, 'Categories', '#'),
(403, 1, 'Single Post', '#'),
(403, 2, 'Single Post', '#'),
(403, 4, 'Single Post', '#'),
(404, 1, 'Single Category', '#'),
(404, 2, 'Single Category', '#'),
(404, 4, 'Single Category', '#'),
(405, 1, 'Blog Archive', '#'),
(405, 2, 'Blog Archive', '#'),
(405, 4, 'Blog Archive', '#'),
(406, 1, 'Blog Tag', '#'),
(406, 2, 'Blog Tag', '#'),
(406, 4, 'Blog Tag', '#');

ALTER TABLE `_DB_PREFIX_gdz_megamenu`
  ADD PRIMARY KEY (`menu_id`);

ALTER TABLE `_DB_PREFIX_gdz_megamenu_items`
  ADD PRIMARY KEY (`mitem_id`);

ALTER TABLE `_DB_PREFIX_gdz_megamenu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

ALTER TABLE `_DB_PREFIX_gdz_megamenu_items`
  MODIFY `mitem_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=407;
";
