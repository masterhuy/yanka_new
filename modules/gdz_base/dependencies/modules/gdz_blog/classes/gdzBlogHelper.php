<?php
/**
* 2007-2020 PrestaShop
*
* Godzilla Blog
*
*  @author    Prestawork <joommasters@gmail.com>
*  @copyright 2007-2020 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.prestawork.com
*/

class gdz_blogHelper
{
    public static function makeAlias($url)
    {
        $url    = preg_replace('/[^a-z A-Z0-9-]*/', '', $url);
        $url    = preg_replace('/-{2,}/', '-', $url);
        $url    = preg_replace('/ /', '-', $url);
        $url    = trim(Tools::strtolower($url));
        $url    = ltrim($url, '-');
        $url    = rtrim($url, '-');
        return $url;
    }
    public static function createThumb($src, $image, $max_width, $max_height, $resize_name, $crop)
    {
        if ($image) {
            if ($crop) {
                $imgInfo = getimagesize($src.'/'.$image);
                $width = $imgInfo[0];
                $height = $imgInfo[1];
                $ratio = max($max_width / $width, $max_height / $height);
                $y = ($height - $max_height / $ratio) / 2;
                $height = $max_height / $ratio;
                $x = ($width - $max_width / $ratio) / 2;
                $width = $max_width / $ratio;
                $rzname = $resize_name.$image; // get the file extension

                $resized = $src.'/'.$rzname;

                switch ($imgInfo[2])
                {
                    case 1:
                        $im = imagecreatefromgif($src.'/'.$image);
                        break;
                    case 2:
                        $im = imagecreatefromjpeg($src.'/'.$image);
                        break;
                    case 3:
                        $im = imagecreatefrompng($src.'/'.$image);
                        break;
                    default:
                        return '';
                }
                $newImg = imagecreatetruecolor($max_height, $max_height);

                /* Check if this image is PNG or GIF, then set if Transparent*/
                if (($imgInfo[2] == 1) || ($imgInfo[2] == 3)) {
                    imagealphablending($newImg, false);
                    imagesavealpha($newImg, true);
                    $transparent = imagecolorallocatealpha($newImg, 255, 255, 255, 127);
                    imagefilledrectangle($newImg, 0, 0, $max_width, $max_height, $transparent);
                }
                imagecopyresampled($newImg, $im, 0, 0, $x, $y, $max_width, $max_height, $width, $height);

                //Generate the file, and rename it to $newfilename
                switch ($imgInfo[2])
                {
                    case 1:
                        imagegif($newImg, $resized);
                        break;
                    case 2:
                        imagejpeg($newImg, $resized, 90);
                        break;
                    case 3:
                        imagepng($newImg, $resized);
                        break;
                    default:
                        return '';
                }
                return $src.'/'.$rzname;
            } else {
                $imgInfo = getimagesize($src.'/'.$image);
                $width = $imgInfo[0];
                $height = $imgInfo[1];
                if (!$max_width && !$max_height) {
                    $max_width = $width;
                    $max_height = $height;
                } else {
                    if (!$max_width) {
                        $max_width = 1000;
                    }
                    if (!$max_height) {
                        $max_height = 1000;
                    }
                }
                $x_ratio = $max_width / $width;
                $y_ratio = $max_height / $height;
                if (($width <= $max_width) && ($height <= $max_height)) {
                    $tn_width = $width;
                    $tn_height = $height;
                } else if (($x_ratio * $height) < $max_height) {
                    $tn_height = ceil($x_ratio * $height);
                    $tn_width = $max_width;
                } else {
                    $tn_width = ceil($y_ratio * $width);
                    $tn_height = $max_height;
                }

                $rzname = $resize_name.$image; // get the file extension

                $resized = $src.'/'.$rzname;

                switch ($imgInfo[2])
                {
                    case 1:
                        $im = imagecreatefromgif($src.'/'.$image);
                        break;
                    case 2:
                        $im = imagecreatefromjpeg($src.'/'.$image);
                        break;
                    case 3:
                        $im = imagecreatefrompng($src.'/'.$image);
                        break;
                    default:
                        return '';
                }

                $newImg = imagecreatetruecolor($tn_width, $tn_height);

                /* Check if this image is PNG or GIF, then set if Transparent*/
                if (($imgInfo[2] == 1) || ($imgInfo[2] == 3)) {
                    imagealphablending($newImg, false);
                    imagesavealpha($newImg, true);
                    $transparent = imagecolorallocatealpha($newImg, 255, 255, 255, 127);
                    imagefilledrectangle($newImg, 0, 0, $tn_width, $tn_height, $transparent);
                }
                imagecopyresampled($newImg, $im, 0, 0, 0, 0, $tn_width, $tn_height, $imgInfo[0], $imgInfo[1]);

                //Generate the file, and rename it to $newfilename
                switch ($imgInfo[2])
                {
                    case 1:
                        imagegif($newImg, $resized);
                        break;
                    case 2:
                        imagejpeg($newImg, $resized, 90);
                        break;
                    case 3:
                        imagepng($newImg, $resized);
                        break;
                    default:
                        return '';
                }
                return $src.'/'.$rzname;
            }
        }
    }
    public static function updateViews($post_id)
    {
        Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'gdz_blog_posts` SET views = views+1 WHERE post_id = '.$post_id);
    }
    public static function getCategory($category_id = 0)
    {
        $context = Context::getContext();
        $id_lang = $context->language->id;
        $_query = 'SELECT hss.`category_id` as category_id, hssl.`title`, hssl.`alias` FROM '._DB_PREFIX_.'gdz_blog_categories hss LEFT JOIN '._DB_PREFIX_.'gdz_blog_categories_lang hssl ON (hss.category_id = hssl.category_id) WHERE hss.active = 1 AND hssl.id_lang = '.(int)$id_lang.' AND hss.`category_id` = '.$category_id.' ORDER BY hss.ordering';
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($_query);
    }
    public static function getCategoryByAlias($category_slug = '')
    {
        $context = Context::getContext();
        $id_lang = $context->language->id;
        $_query = 'SELECT hss.`category_id` as category_id, hssl.`title` FROM '._DB_PREFIX_.'gdz_blog_categories hss LEFT JOIN '._DB_PREFIX_.'gdz_blog_categories_lang hssl ON (hss.category_id = hssl.category_id) WHERE hss.active = 1 AND hssl.id_lang = '.(int)$id_lang.' AND hssl.`alias` = "'.$category_slug.'" ORDER BY hss.ordering';
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($_query);
    }
    public static function getPostByID($post_id)
    {
        $context = Context::getContext();
        $id_lang = $context->language->id;
        $sql = '
            SELECT hss.`post_id`, hssl.`image`,hss.`link_video`,hss.`category_id`, hss.`ordering`, hss.`active`, hssl.`title`, hss.`created`, hss.`modified`, hss.`views`,
            hssl.`alias`, hssl.`fulltext`, hssl.`introtext`, hssl.`meta_desc`, hssl.`meta_key`, hssl.`key_ref`, hss.`category_id`, hscl.`title` as category_name, hscl.`alias` as category_alias
            FROM '._DB_PREFIX_.'gdz_blog_posts hss
            LEFT JOIN '._DB_PREFIX_.'gdz_blog_posts_lang hssl ON (hss.post_id = hssl.post_id)
            LEFT JOIN '._DB_PREFIX_.'gdz_blog_categories hsc ON (hsc.category_id = hss.category_id)
            LEFT JOIN '._DB_PREFIX_.'gdz_blog_categories_lang hscl ON (hscl.category_id = hss.category_id)
            WHERE hssl.id_lang = '.(int)$id_lang.
            ' AND hss.`post_id` = '.$post_id.'
            ORDER BY hss.ordering';
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($sql);
    }
    public static function getSettingFieldsValues()
    {
        return array(
            'GDZBLOG_PAGE_SIDEBAR' => Tools::getValue('GDZBLOG_PAGE_SIDEBAR', Configuration::get('GDZBLOG_PAGE_SIDEBAR')),
            'GDZBLOG_INTROTEXT_LIMIT' => (int)Tools::getValue('GDZBLOG_INTROTEXT_LIMIT', Configuration::get('GDZBLOG_INTROTEXT_LIMIT')),
            'GDZBLOG_SHOW_CATEGORY' => (int)Tools::getValue('GDZBLOG_SHOW_CATEGORY', Configuration::get('GDZBLOG_SHOW_CATEGORY')),
            'GDZBLOG_SHOW_VIEWS' => (int)Tools::getValue('GDZBLOG_SHOW_VIEWS', Configuration::get('GDZBLOG_SHOW_VIEWS')),
            'GDZBLOG_SHOW_COMMENTS' => (int)Tools::getValue('GDZBLOG_SHOW_COMMENTS', Configuration::get('GDZBLOG_SHOW_COMMENTS')),
            'GDZBLOG_SHOW_MEDIA' => (int)Tools::getValue('GDZBLOG_SHOW_MEDIA', Configuration::get('GDZBLOG_SHOW_MEDIA')),

            'GDZBLOG_IMAGE_WIDTH' => (int)Tools::getValue('GDZBLOG_IMAGE_WIDTH', Configuration::get('GDZBLOG_IMAGE_WIDTH')),
            'GDZBLOG_IMAGE_HEIGHT' => (int)Tools::getValue('GDZBLOG_IMAGE_HEIGHT', Configuration::get('GDZBLOG_IMAGE_HEIGHT')),
            'GDZBLOG_IMAGE_THUMB_WIDTH' => (int)Tools::getValue('GDZBLOG_IMAGE_THUMB_WIDTH', Configuration::get('GDZBLOG_IMAGE_THUMB_WIDTH')),
            'GDZBLOG_IMAGE_THUMB_HEIGHT' => (int)Tools::getValue('GDZBLOG_IMAGE_THUMB_HEIGHT', Configuration::get('GDZBLOG_IMAGE_THUMB_HEIGHT')),

            'GDZBLOG_COMMENT_ENABLE' => (int)Tools::getValue('GDZBLOG_COMMENT_ENABLE', Configuration::get('GDZBLOG_COMMENT_ENABLE')),
            'GDZBLOG_ALLOW_GUEST_COMMENT' => (int)Tools::getValue('GDZBLOG_ALLOW_GUEST_COMMENT', Configuration::get('GDZBLOG_ALLOW_GUEST_COMMENT')),
            'GDZBLOG_FACEBOOK_COMMENT' => (int)Tools::getValue('GDZBLOG_FACEBOOK_COMMENT', Configuration::get('GDZBLOG_FACEBOOK_COMMENT')),
            'GDZBLOG_COMMENT_DELAY' => (int)Tools::getValue('GDZBLOG_COMMENT_DELAY', Configuration::get('GDZBLOG_COMMENT_DELAY')),
            'GDZBLOG_AUTO_APPROVE_COMMENT' => (int)Tools::getValue('GDZBLOG_AUTO_APPROVE_COMMENT', Configuration::get('GDZBLOG_AUTO_APPROVE_COMMENT')),

            'GDZBLOG_SHOW_SOCIAL_SHARING' => (int)Tools::getValue('GDZBLOG_SHOW_SOCIAL_SHARING', Configuration::get('GDZBLOG_SHOW_SOCIAL_SHARING')),
            'GDZBLOG_SHOW_FACEBOOK' => (int)Tools::getValue('GDZBLOG_SHOW_FACEBOOK', Configuration::get('GDZBLOG_SHOW_FACEBOOK')),
            'GDZBLOG_SHOW_TWITTER' => (int)Tools::getValue('GDZBLOG_SHOW_TWITTER', Configuration::get('GDZBLOG_SHOW_TWITTER')),
            'GDZBLOG_SHOW_GOOGLEPLUS' => (int)Tools::getValue('GDZBLOG_SHOW_GOOGLEPLUS', Configuration::get('GDZBLOG_SHOW_GOOGLEPLUS')),
            'GDZBLOG_SHOW_LINKEDIN' => (int)Tools::getValue('GDZBLOG_SHOW_LINKEDIN', Configuration::get('GDZBLOG_SHOW_LINKEDIN')),
            'GDZBLOG_SHOW_PINTEREST' => (int)Tools::getValue('GDZBLOG_SHOW_PINTEREST', Configuration::get('GDZBLOG_SHOW_PINTEREST')),
            'GDZBLOG_SHOW_EMAIL' => (int)Tools::getValue('GDZBLOG_SHOW_EMAIL', Configuration::get('GDZBLOG_SHOW_EMAIL')),

            'GBW_SB_ITEM_SHOW' => Tools::getValue('GBW_SB_ITEM_SHOW', Configuration::get('GBW_SB_ITEM_SHOW')),
            'GBW_SB_SHOW_POPULAR' => Tools::getValue('GBW_SB_SHOW_POPULAR', Configuration::get('GBW_SB_SHOW_POPULAR')),
            'GBW_SB_SHOW_RECENT' => Tools::getValue('GBW_SB_SHOW_RECENT', Configuration::get('GBW_SB_SHOW_RECENT')),
            'GBW_SB_SHOW_LATESTCOMMENT' => Tools::getValue('GBW_SB_SHOW_LATESTCOMMENT', Configuration::get('GBW_SB_SHOW_LATESTCOMMENT')),
            'GBW_SB_COMMENT_LIMIT' => Tools::getValue('GBW_SB_COMMENT_LIMIT', Configuration::get('GBW_SB_COMMENT_LIMIT')),
            'GBW_SB_SHOW_CATEGORYMENU' => Tools::getValue('GBW_SB_SHOW_CATEGORYMENU', Configuration::get('GBW_SB_SHOW_CATEGORYMENU')),
            'GBW_SB_SHOW_ARCHIVES' => Tools::getValue('GBW_SB_SHOW_ARCHIVES', Configuration::get('GBW_SB_SHOW_ARCHIVES')),
        );
    }

    public static function genIntrotext($introtext, $c_limit)
    {
        if (Tools::strlen($introtext) <= $c_limit) {
            return $introtext;
        }
        $pos = strpos($introtext, ' ', $c_limit);
        if ((int)$pos == 0) {
            return $introtext;
        }
        $result = Tools::substr($introtext, 0, $pos);
        if (Tools::strlen($introtext) > Tools::strlen($result)) {
            $result .= ' ...';
        }
        return $result;
    }

    public static function getCommentCount($post_id)
    {
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('SELECT count(cps.`comment_id`) FROM '._DB_PREFIX_.'gdz_blog_posts_comments cps WHERE cps.`status` = 1 AND cps.`post_id` = '.$post_id);
    }

    public static function getArchives()
    {
        $archives = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT DISTINCT DATE_FORMAT(hss.created,"%Y-%m") AS postmonth FROM '._DB_PREFIX_.'gdz_blog_posts hss
        ');
        return $archives;
    }
    public static function getPopularPost()
    {
        $context = Context::getContext();
        $id_lang = $context->language->id;
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('SELECT hss.`post_id`, hss.`link_video`, hssl.`image`, hss.`category_id`, hss.`ordering`, hss.`active`, hssl.`title`, hss.`created`, hss.`modified`, hss.`views`,hssl.`alias`, hssl.`fulltext`, hssl.`introtext`,hssl.`meta_desc`, hssl.`meta_key`, hssl.`key_ref`, catsl.`title` AS category_name, catsl.`alias` AS category_alias FROM '._DB_PREFIX_.'gdz_blog_posts hss LEFT JOIN '._DB_PREFIX_.'gdz_blog_posts_lang hssl ON (hss.`post_id` = hssl.`post_id`) LEFT JOIN '._DB_PREFIX_.'gdz_blog_categories_lang catsl ON (catsl.`category_id` = hss.`category_id`) WHERE hss.`active` = 1 AND hssl.`id_lang` = '.(int)$id_lang.' GROUP BY hss.`post_id` ORDER BY hss.`views` DESC LIMIT 0,'.Configuration::get('GBW_SB_ITEM_SHOW'));
    }
    public static function getLatestPost()
    {
        $context = Context::getContext();
        $id_lang = $context->language->id;
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('SELECT hss.`post_id`,hss.`link_video`, hssl.`image`,hss.`category_id`, hss.`ordering`, hss.`active`, hssl.`title`, hss.`created`, hss.`modified`, hss.`views`, hssl.`alias`, hssl.`fulltext`, hssl.`introtext`,hssl.`meta_desc`, hssl.`meta_key`, hssl.`key_ref`, catsl.`title` AS category_name, catsl.`alias` AS category_alias FROM '._DB_PREFIX_.'gdz_blog_posts hss LEFT JOIN '._DB_PREFIX_.'gdz_blog_posts_lang hssl ON (hss.`post_id` = hssl.`post_id`) LEFT JOIN '._DB_PREFIX_.'gdz_blog_categories_lang catsl ON (catsl.`category_id` = hss.`category_id`) WHERE hss.`active` = 1 AND hssl.`id_lang` = '.(int)$id_lang.' GROUP BY hss.`post_id` ORDER BY hss.`created` DESC LIMIT 0,'.Configuration::get('GBW_SB_ITEM_SHOW'));
    }
    public static function getLatestComment()
    {
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('SELECT hss.`comment_id`, hss.`title`, hss.`comment`, hss.`customer_name`, hss.`email`, hss.`customer_site`, hss.`time_add`, hss.`status` FROM '._DB_PREFIX_.'gdz_blog_posts_comments hss WHERE 1  AND hss.`status` = 1 ORDER BY hss.`time_add` DESC LIMIT 0,'.Configuration::get('GBW_SB_ITEM_SHOW'));
    }
    public static function getUrl()
    {
        $force_ssl = Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE');
        $protocol_link = (Configuration::get('PS_SSL_ENABLED') || Tools::usingSecureMode()) ? 'https://' : 'http://';

        if (isset($force_ssl) && $force_ssl) {
            return $protocol_link.Tools::getShopDomainSsl().__PS_BASE_URI__;
        } else {
            return _PS_BASE_URL_.__PS_BASE_URI__;
        }
    }

	public static function getFiles($_prefix)
    {
		$folder_path = _PS_ROOT_DIR_.'/modules/gdz_blog/views/templates/front';

        $ffs = scandir($folder_path);
		$result = array();
		foreach($ffs as $ff){
			$ext = pathinfo($ff, PATHINFO_EXTENSION);
			if(!is_dir($folder_path.'/'.$ff) && $ff != '.' && $ff != '..' && (strpos($ff, $_prefix) === 0)) {
				$result[]['file'] = $ff;
			}
		}
		return $result;
    }
}
