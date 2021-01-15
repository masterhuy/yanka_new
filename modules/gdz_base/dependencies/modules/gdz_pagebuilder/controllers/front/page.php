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

class gdz_pagebuilderPageModuleFrontController extends ModuleFrontController
{
    public $ssl = true;
    public $display_column_left = false;
    /**
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();
        $id_page    = (int)Tools::getValue('id_page');
        $context = Context::getContext();
        $id_lang = $context->language->id;
        $id_shop = $context->shop->id;
        $query = "SELECT pbp.*, pbpl.title, pbpl.meta_desc, pbpl.meta_key
                  FROM "._DB_PREFIX_."gdz_pagebuilder_pages pbp
                  INNER JOIN "._DB_PREFIX_."gdz_pagebuilder_pages_lang pbpl ON pbp.id_page = pbpl.id_page
                  INNER JOIN "._DB_PREFIX_."gdz_pagebuilder pb ON pbp.id_page = pb.id_page
                  WHERE pbpl.id_lang = '".$id_lang."' AND pb.id_shop = '".$id_shop."' AND pbp.id_page = '".$id_page."' AND pbp.active = 1" ;
        $_page = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($query);
        $params = $_page['params'];
        $page_result = gdzPageBuilderHelper::genRows($params);
        $this->root_url = gdzPageBuilderHelper::getRootUrl();
        $this->context->smarty->assign(array(
            'gdz_pagebuilder_page' => $_page,
            'pagebuilder_css' => $page_result['css'],
            'rows' => $page_result['rows'],
            'root_url' => $this->root_url
        ));
        $this->setTemplate('module:'._GDZ_PB_NAME_.'/views/templates/front/page.tpl');
    }
}
