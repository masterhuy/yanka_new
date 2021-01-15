<?php
/**
* 2007-2020 PrestaShop
*
Godzilla PageBuilder
*
*  @author    Godzilla <joommasters@gmail.com>
*  @copyright 2007-2020 Godzilla
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: https://www.prestawork.com
*/

class gdzImportExport extends Module
{
    public function __construct()
    {
        $this->name = _GDZ_PB_NAME_;
        parent::__construct();
    }
    public function getPage($id_page)
    {
        $context = Context::getContext();
        $id_lang = $context->language->id;
        $id_shop = $context->shop->id;
        $req = "SELECT pbpl.title, pbp.params
                FROM `"._DB_PREFIX_."gdz_pagebuilder_pages_lang` pbpl
                INNER JOIN "._DB_PREFIX_."gdz_pagebuilder_pages pbp ON pbp.id_page = pbpl.id_page
                INNER JOIN "._DB_PREFIX_."gdz_pagebuilder pb ON pbpl.id_page = pb.id_page
                WHERE pbpl.id_lang = '".$id_lang."' AND pb.id_shop = '".$id_shop."' AND pbpl.`id_page` = ".(int)$id_page;
        //echo $req; exit;
        $page = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($req);
        return ($page);
    }

    public function exportPage($id_page)
    {
        $page = $this->getPage($id_page);
        $filename = str_replace(' ', '_', $page['title']).'.txt';
        header('Content-type: text/xml');
        header('Content-Disposition: attachment; filename="'.Tools::strtolower($filename).'"');
        $_output = $page['params'];
        echo $_output;
        exit;
    }
}
