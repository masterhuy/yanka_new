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

class gdz_pagebuilderPreviewModuleFrontController extends ModuleFrontController
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
        if(Tools::getValue('id_lang')) {
            $id_lang    = (int)Tools::getValue('id_lang');
        } else {
            $id_lang = (int)(Configuration::get('PS_LANG_DEFAULT'));
        }
        $context = Context::getContext();
        $id_shop = $context->shop->id;
        $query = "SELECT pbp.*, pbpl.title, pbpl.meta_desc, pbpl.meta_key
                  FROM "._DB_PREFIX_."gdz_pagebuilder_pages pbp
                  INNER JOIN "._DB_PREFIX_."gdz_pagebuilder_pages_lang pbpl ON pbp.id_page = pbpl.id_page
                  INNER JOIN "._DB_PREFIX_."gdz_pagebuilder pb ON pbp.id_page = pb.id_page
                  WHERE pbpl.id_lang = '".$id_lang."' AND pb.id_shop = '".$id_shop."' AND pbp.id_page = '".$id_page."' AND pbp.active = 1" ;
        $_page = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($query);
        $params = $_page['params'];
        $page_result = gdzPageBuilderHelper::genRows($params);
        $this->context->controller->registerStylesheet('gdzpb-awesome-icon', 'modules/'.$this->module->name.'/lib/awesome/font-awesome.min.css', ['media' => 'all', 'priority' => 1]);
        //$this->context->controller->registerStylesheet('gdzpb-base-css', 'modules/'.$this->module->name.'/views/css/base.css', ['media' => 'all', 'priority' => 2]);
        $this->context->controller->registerStylesheet('modules-gdz_pagebuilder-editor-preview', 'modules/'.$this->module->name.'/views/css/preview.css', ['media' => 'all', 'priority' => 100]);
        $this->root_url = gdzPageBuilderHelper::getRootUrl();
        $addons = gdzPageBuilderHelper::getAddonsList();
        $addonslist = array();
        $addonstemplate = array();
        $addondefaults = array();
        $i = 0;
        foreach ($addons as $addon) {
          $addonfile = 'addon'.$addon.'.php';
          $addonclass = 'gdzAddon'.Tools::ucfirst($addon);
          if (file_exists(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/'.$addonfile)) {
              require_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/'.$addonfile);
          }
          $addon_instance = new $addonclass();
          $addonslist[] = $addon_instance->genEditorAddonList();
          $addonstemplate[$i]['name'] = $addon;
          $addonstemplate[$i]['tpl'] = $addon_instance->getTemplate();
          $addondefaults[$addon] = $addon_instance->defaultValue();
          $i++;
        }

        $this->context->smarty->assign(array(
            'gdz_pagebuilder_page' => $_page,
            'pagebuilder_css' => $page_result['css'],
            'rows' => $page_result['rows'],
            'root_url' => $this->root_url,
            'addonstemplate' => $addonstemplate,
        ));
        $this->setTemplate('module:gdz_pagebuilder/views/templates/admin/preview.tpl');
    }
}
