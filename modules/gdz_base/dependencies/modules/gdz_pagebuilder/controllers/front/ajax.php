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
include_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/classes/gdzPage.php');
include_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/classes/gdzHelper.php');
class gdz_pagebuilderAjaxModuleFrontController extends ModuleFrontController
{
    public $ssl = true;
    public $display_column_left = false;
    /**
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();
        $gdz_pagebuilder = Module::getInstanceByName(_GDZ_PB_NAME_);
        if (!Tools::isSubmit('secure_key') || Tools::getValue('secure_key') != $gdz_pagebuilder->secure_key) {
            die(1);
        }
        $configuration = $gdz_pagebuilder->getTemplateVarConfiguration();
        $gdzSetting = gdzPageBuilderHelper::genGdzSetting();
        $action    = Tools::getValue('action');
        $context = Context::getContext();
        if ($action == 'getProduct') {
            include_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/addonproductfilter.php');
            $productfilter = new gdzAddonProductFilter();
            $setting = Tools::getValue('setting');
            $obj = json_decode(json_encode($setting));
            $products = $productfilter->getProducts($obj);
            if(!isset($products) || count($products) == 0) return;
            $view_type = $obj[2]->value;
            if($view_type == 'carousel')
                $cols= $obj[5]->value;
            else
                $cols= $obj[4]->value;
            $cols_arr = array();
            if($cols)
                $cols_arr = explode("-", $cols);
            $context->smarty->assign(
                array(
                    'products_slides' => $products,
                    'gdzSetting' => $gdzSetting,
                    'configuration' => $configuration,
                    'link' => $context->link,
                    'products_slides' => $products,
                    'addon_title' => '',
                    'addon_desc' => '',
                    'producttype' => $obj[0]->value,
                    'cols'  => $cols,
                    'cols_md'   => $cols_arr[0],
                    'cols_sm'   => $cols_arr[1],
                    'cols_xs'   => $cols_arr[2],
                    'navigation' => $obj[7]->value,
                    'pagination' => $obj[8]->value,
                    'autoplay' => $obj[9]->value,
                    'rewind' => $obj[10]->value,
                    'slidebypage' => $obj[11]->value,
                    'view_type' => $view_type
                )
            );
            $html = $context->smarty->fetch(_PS_MODULE_DIR_._GDZ_PB_NAME_."/views/templates/hook/addonproductfilter.tpl");
            echo $html; exit;
        } elseif ($action == 'getCatProducts') {
            include_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/addoncategoryproduct.php');
            $catproduct = new gdzAddonCategoryProduct();
            $setting = Tools::getValue('setting');
            $obj = json_decode(json_encode($setting));
            $category = $catproduct->getCategory($obj);
            $id_lang = $context->language->id;
            $view_type = $obj[6]->value;
            if($view_type == 'carousel')
                $cols = $obj[9]->value;
            else
                $cols = $obj[8]->value;
            $cols_arr = array();
            if($cols)
                $cols_arr = explode("-", $cols);

            $context->smarty->assign(
                array(
                    'category' => $category ,
                    'gdzSetting' => $gdzSetting,
                    'configuration' => $configuration,
                    'cols_md'   => $cols_arr[0],
                    'cols_sm'   => $cols_arr[1],
                    'cols_xs'   => $cols_arr[2],
                    'navigation' => $obj[11]->value,
                    'pagination' => $obj[12]->value,
                    'autoplay' => $obj[13]->value,
                    'rewind' => $obj[14]->value,
                    'slidebypage' => $obj[15]->value,
                    'showcategoryname' => $obj[3]->value,
                    'showviewall' => $obj[4]->value,
                    'viewall_text' => $obj[5]->value->$id_lang,
                    'view_type' => $view_type,
                )
            );
            $html = $context->smarty->fetch(_PS_MODULE_DIR_._GDZ_PB_NAME_."/views/templates/hook/addoncategoryproduct.tpl");
            echo $html; exit;
        } elseif ($action == 'getProductTab') {
            include_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/addonproducttab.php');
            $producttab = new gdzAddonProductTab();
            $setting = Tools::getValue('setting');
            $obj = json_decode(json_encode($setting));
            $_producttabs = $producttab->getProductTab($obj);
            if(!isset($_producttabs) || count($_producttabs) == 0) return;
            $view_type = $obj[12]->value;
            if($view_type == 'carousel')
                $cols = $obj[16]->value;
            else
                $cols = $obj[14]->value;
            $cols_arr = array();
            if($cols)
                $cols_arr = explode("-", $cols);

            $context->smarty->assign(
                array(
                    'producttabs' => $_producttabs ,
                    'gdzSetting' => $gdzSetting,
                    'configuration' => $configuration,
                    'tab_align'   => $obj[10]->value,
                    'cols_md'   => $cols_arr[0],
                    'cols_sm'   => $cols_arr[1],
                    'cols_xs'   => $cols_arr[2],
                    'navigation' => $obj[17]->value,
                    'pagination' => $obj[18]->value,
                    'autoplay' => $obj[19]->value,
                    'rewind' => $obj[20]->value,
                    'slidebypage' => $obj[21]->value,
                    'view_type' => $view_type
                )
            );
            $html = $context->smarty->fetch(_PS_MODULE_DIR_._GDZ_PB_NAME_."/views/templates/hook/addonproducttab.tpl");
            echo $html; exit;
        } elseif ($action == 'getCategoryTab') {
            include_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/addoncategorytab.php');
            $categorytab = new gdzAddonCategoryTab();
            $setting = Tools::getValue('setting');
            $obj = json_decode(json_encode($setting));
            $_categories = $categorytab->getCategoryTab($obj);
            if(!isset($_categories) || count($_categories) == 0) return;
            $view_type = $obj[4]->value;
            if($view_type == 'carousel')
                $cols = $obj[8]->value;
            else
                $cols = $obj[6]->value;

            $cols_arr = array();
            if($cols)
                $cols_arr = explode("-", $cols);
            $context->smarty->assign(
                array(
                    'categories' => $_categories ,
                    'gdzSetting' => $gdzSetting,
                    'configuration' => $configuration,
                    'tab_align'   => $obj[3]->value,
                    'cols_md'   => $cols_arr[0],
                    'cols_sm'   => $cols_arr[1],
                    'cols_xs'   => $cols_arr[2],
                    'navigation' => $obj[9]->value,
                    'pagination' => $obj[10]->value,
                    'autoplay' => $obj[11]->value,
                    'rewind' => $obj[12]->value,
                    'slidebypage' => $obj[13]->value,
                    'view_type' => $view_type
                )
            );
            $html = $context->smarty->fetch(_PS_MODULE_DIR_._GDZ_PB_NAME_."/views/templates/hook/addoncategorytab.tpl");
            echo $html; exit;
        } elseif ($action == 'getDeals') {
            include_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/addonhotdeal.php');
            $context = Context::getContext();
            $id_lang = $context->language->id;
            $hotdeal = new gdzAddonHotdeal();
            $setting = Tools::getValue('setting');
            $obj = json_decode(json_encode($setting));
            $_products = $hotdeal->getDeals($obj);
            if(!isset($_products) || count($_products) == 0) return;
            $cols = $obj[3]->value;
            $cols_arr = array();
            if($cols)
                $cols_arr = explode("-", $cols);
            $context->smarty->assign(
                array(
                    'gdzSetting' => $gdzSetting,
                    'configuration' => $configuration,
                    'link' => $context->link,
                    'products' => $_products,
                    'cols'  => $cols,
                    'cols_md'   => $cols_arr[0],
                    'cols_sm'   => $cols_arr[1],
                    'cols_xs'   => $cols_arr[2],
                    'navigation' => $obj[4]->value,
                    'pagination' => $obj[5]->value,
                    'autoplay' => $obj[6]->value,
                    'rewind' => $obj[7]->value,
                    'slidebypage' => $obj[8]->value,
                    'showviewall' => $obj[0]->value,
                    'viewall_text' => $obj[1]->value->$id_lang
                )
            );
            $html = $context->smarty->fetch(_PS_MODULE_DIR_._GDZ_PB_NAME_."/views/templates/hook/addonhotdeal.tpl");
            echo $html; exit;
        } elseif ($action == 'getFlashSales') {
            include_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/addonflashsale.php');
            $context = Context::getContext();
            $id_lang = $context->language->id;
            $flashsale = new gdzAddonFlashSale();
            $setting = Tools::getValue('setting');
            $obj = json_decode(json_encode($setting));
            $_products = $flashsale->getFlashSales($obj);
            if(!isset($_products) || count($_products) == 0) return;
            $cols = $obj[2]->value;
            $cols_arr = array();
            if($cols)
                $cols_arr = explode("-", $cols);
            $expire_time = Configuration::get('GDZ_FLASHSALE_EXPIRETIME');
            $category_id = $obj[0]->value;
            $_category = $flashsale->getFlashCategory($category_id);
            $context->smarty->assign(
                array(
                    'gdzSetting' => $gdzSetting,
                    'configuration' => $configuration,
                    'products' => $_products,
                    'expire_time' => $expire_time,
                    'flash_category' => $_category,
                    'cols'  => $cols,
                    'cols_md'   => $cols_arr[0],
                    'cols_sm'   => $cols_arr[1],
                    'cols_xs'   => $cols_arr[2],
                    'navigation' => $obj[3]->value,
                    'pagination' => $obj[4]->value,
                    'autoplay' => $obj[5]->value,
                    'rewind' => $obj[6]->value,
                    'slidebypage' => $obj[7]->value
                )
            );
            $html = $context->smarty->fetch(_PS_MODULE_DIR_._GDZ_PB_NAME_."/views/templates/hook/addonflashsale.tpl");
            echo $html; exit;
        }
    }
}
