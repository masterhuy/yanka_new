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

use PageBuilder\Editor;

if (!defined('_PS_VERSION_')) {
    exit;
}
require_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/classes/gdzHelper.php');
require_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/lib/awesome/icon.php');
require_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/classes/gdzPage.php');
require_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/classes/gdzTemplate.php');
require_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/classes/gdzImportExport.php');
class gdzPagebuilderEditorController extends ModuleAdminController
{
    public function __construct()
    {
        $this->bootstrap = true;
        $this->display_header = false;
        parent::__construct();
        if (!$this->module->active) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminHome'));
        }
        $this->name = 'gdzPagebuilderEditor';
        $this->root_url = gdzPageBuilderHelper::getRootUrl();
    }
    public function initContent() {
        $this->setMedia();
        $this->initHeader();
    }
    public function setMedia($isNewTheme = false){

        $this->addJquery();
        $this->addJqueryPlugin('fancybox');
        $this->addJqueryPlugin('chosen');
        $this->addJqueryPlugin('autocomplete');
        $this->addJS(_PS_JS_DIR_.'admin.js');
        $this->addJS(_PS_BO_ALL_THEMES_DIR_.'default/js/tree.js');


        $this->addCSS(array(
            __PS_BASE_URI__.$this->admin_webpath.'/themes/'.$this->bo_theme.'/css/admin-theme.css',
            __PS_BASE_URI__.$this->admin_webpath.'/themes/'.$this->bo_theme.'/public/theme.css',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/awesome/font-awesome.min.css',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/icon/style.css',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/bootstrap-colorpicker/bootstrap-colorpicker.min.css',
            _MODULE_DIR_._GDZ_PB_NAME_.'/views/css/editor.css',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/perfect-scrollbar/perfect-scrollbar.css'
        ));

        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/modal.css', 'all');
        $version = Configuration::get('PS_INSTALL_VERSION');
        $tiny_path = ($version >= '1.6.0.13') ? 'admin/' : '';
        $tiny_path .= 'tinymce.inc.js';
        $this->context->controller->addJqueryUi('ui.autocomplete');
        $this->addJS(array(
            __PS_BASE_URI__.$this->admin_webpath.'/themes/'.$this->bo_theme.'/js/vendor/bootstrap.min.js',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/jquery-ui/core.min.js',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/jquery-ui/widget.min.js?ver=1.11.4',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/jquery-ui/mouse.min.js?ver=1.11.4',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/jquery-ui/sortable.min.js?ver=1.11.4',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/jquery-ui/resizable.min.js?ver=1.11.4',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/jquery-ui/position.min.js?ver=1.11.4',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/jquery-ui/draggable.min.js',
            _PS_JS_DIR_.'tiny_mce/tiny_mce.js',
            _PS_JS_DIR_.$tiny_path,
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/owl-carousel/owl.carousel.min.js',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/instagram-lite-master/instagramLite.min.js',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/jquery.fractionslider.js',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/perfect-scrollbar/perfect-scrollbar.min.js',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/jquery.plugin.js',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/jquery.countdown.js',
            _MODULE_DIR_._GDZ_PB_NAME_.'/lib/bootstrap-colorpicker/bootstrap-colorpicker.js',
            _MODULE_DIR_._GDZ_PB_NAME_.'/views/js/lodash.js',
            _MODULE_DIR_._GDZ_PB_NAME_.'/views/js/editor.js',
            _MODULE_DIR_._GDZ_PB_NAME_.'/views/js/configuration.js',
            _MODULE_DIR_._GDZ_PB_NAME_.'/views/js/input.js',

        ));
        $base_url = Tools::getHttpHost(true);
        $base_url = Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE') ? $base_url : str_replace('https', 'http', $base_url);

        Hook::exec('actionAdminControllerSetMedia');

    }
    public function display(){
        $this->context->smarty->assign(array(
            'js_def_vars' => Media::getJsDef(),
        ));
        $id_lang = Tools::getValue('id_lang');
        $id_page = Tools::getValue('id_page');
        if((int)$id_page == 0) {
          echo "please select page"; die;
        }
        $pages = gdzPageBuilderHelper::getPages();
        $modules = gdzPageBuilderHelper::getModules();
        $modulenames = array();
        $modulenames[] = '';
        foreach($modules as $_module) {
          $modulenames[] = $_module['name'];
        }
        $page_link = $this->context->link->getModuleLink('gdz_pagebuilder', 'page', array(
            'id_page' => $id_page
        ), true);
        $link_params = explode("?", $page_link);
        parse_str($link_params[1], $link_args);

        if(isset($link_args['id_lang']) && (int)$link_args['id_lang'] > 0 && $id_lang) {
            $link_args['id_lang'] = $id_lang;
            $page_link = $link_params[0].'?'.urldecode(http_build_query($link_args));
        }
        $addons = gdzPageBuilderHelper::getAddonsList();
        $addonTitles = array();
        $addonslist = array();
        $addonstemplate = array();
        $addondefaults = array();
        $i = 0;
        foreach ($addons as $key => $addon) {
            $addonfile = 'addon'.$addon.'.php';
            $addonclass = 'gdzAddon'.Tools::ucfirst($addon);
            if (file_exists(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/'.$addonfile)) {
                require_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/'.$addonfile);
            }
            $addon_instance = new $addonclass();
            $addonslist[$key]['ordering'] = $addon_instance->ordering;
            $addonslist[$key]['type'] = $addon_instance->type;
            $addonslist[$key]['addon'] = $addon_instance->genEditorAddonList();
            $addonTitles[$addon] = $addon_instance->addontitle;
            $addonstemplate[$i]['name'] = $addon;
            $addonstemplate[$i]['configuration'] = $addon_instance->genConfiguration();
            $addondefaults[$addon] = $addon_instance->defaultValue();
            $i++;
        }
        $_type = array_column($addonslist, 'type');
        array_multisort($_type, SORT_ASC, $addonslist);
        $preview_link = $this->context->link->getModuleLink('gdz_pagebuilder', 'preview', array(
            'id_page' => $id_page
        ), true);
        $link_params = explode("?", $preview_link);
        parse_str($link_params[1], $link_args);

        if(isset($link_args['id_lang']) && (int)$link_args['id_lang'] > 0 && $id_lang) {
            $link_args['id_lang'] = $id_lang;
            $preview_link = $link_params[0].'?'.urldecode(http_build_query($link_args));
        }
        $editor_link = $this->context->link->getAdminLink('gdzPagebuilderEditor');
        $ajax_link = $this->context->link->getModuleLink('gdz_pagebuilder', 'ajax', array(), true);
        require_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/classes/settings.php');
    		$rowSettings = gdzPageBuilderHelper::getSettingsDefaultValue($row_settings);
        $colSettings = gdzPageBuilderHelper::getSettingsDefaultValue($column_settings);
        $pagejson = Db::getInstance()->getValue('SELECT params FROM '._DB_PREFIX_.'gdz_pagebuilder_pages '.($id_page ? ' WHERE `id_page` = '.$id_page : ''));
        $awesomeicons = AwesomeIcon::getAwesomeIcons();
        Media::addJsDef(
            array(
              'PagebuilderConfig' => [
                'preview_link' => $preview_link,
                'editor_link' => $editor_link,
                'ajax_link' => $ajax_link,
                'secure_key' => $this->module->secure_key
              ],
              'addonTitles' => json_encode($addonTitles),
              'pagejson' => $pagejson,
              'rowSettings' => json_encode( $rowSettings ),
              'colSettings' => json_encode( $colSettings ),
              'addonDefaults' => json_encode( $addondefaults ),
              'awesomeIcons' => json_encode($awesomeicons),
              'root_url' => gdzPageBuilderHelper::getRootUrl()

            )
        );
        $this->context->smarty->assign(array(
            'js_def_vars' => Media::getJsDef(),
        ));
        $templates = gdzPageBuilderHelper::getTemplates();
        $fid = time();
        $languages = Language::getLanguages(false);
        $this->context->smarty->assign(array(
            'baseDir' => __PS_BASE_URI__.basename(_PS_ADMIN_DIR_).'/',
            'modules_url' => gdzPageBuilderHelper::getRootUrl().'modules/',
            'media_link' => $this->context->link->getAdminLink('AdminGdzpagebuilderMedia', true, array(), array('fid' => $fid)),
            'fid' => $fid,
            'page_link' => $page_link,
            'preview_link' => $preview_link,
            'pages' => $pages,
            'id_page' => $id_page,
            'id_lang' => $id_lang,
            'modules' => $modules,
            'addonslist' => $addonslist,
            'addonstemplate' => $addonstemplate,
            'templates' => $templates,
            'row_settings' => $row_settings,
            'column_settings' => $column_settings,
            'languages' => $languages,
            'ad' => __PS_BASE_URI__.basename(_PS_ADMIN_DIR_),
            'converturl' => (int)Configuration::get('JPB_CONVERTURL'),
            'root_url' => $this->root_url
        ));

        $this->smartyOutputContent(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/views/templates/admin/editor.tpl');
    }
    public function ajaxProcessGetModule() {
        $module = Tools::getValue('module');
        $hook = Tools::getValue('hook');
        $module_content = gdzPageBuilderHelper::execModule($hook, array(), $module, $this->context->shop->id);
        echo $module_content;
        die;
    }
    public function ajaxProcessSavePage() {
        $page_id = (int)Tools::getValue('page_id');
        $page = new gdzPage($page_id);
        $page->params = Tools::getValue('jsonparams');
        $res = $page->update();
        die;
    }
    public function ajaxProcessSaveTemplate() {
        $template = new gdzTemplate();
        $template->name = Tools::getValue('templatename');
        $template->params = Tools::getValue('jsonparams');
        $res = $template->add();
        die;
    }
    public function ajaxProcessDeleteTemplate() {
        $id_template = (int)Tools::getValue('id_template');
        $template = new gdzTemplate($id_template);
        $res = $template->delete();
        die;
    }
    public function ajaxProcessExportTemplate() {
        $id_template = (int)Tools::getValue('id_template');
        $template = new gdzTemplate($id_template);
        $filename = str_replace(' ', '_', $template->name).'.json';
        header('Content-type: text/xml');
        header('Content-Disposition: attachment; filename="'.Tools::strtolower($filename).'"');
        $_output = $template->params;
        echo $_output;
        exit;
    }
    public function ajaxProcessGetTemplates() {
        $context = Context::getContext();
        $templates = gdzPageBuilderHelper::getTemplates();
        $context->smarty->assign(
            array(
                'templates' => $templates
            )
        );
        $html = $context->smarty->fetch(_PS_MODULE_DIR_._GDZ_PB_NAME_."/views/templates/admin/templates.tpl");
        echo $html;
        exit;
    }
    public function ajaxProcessImportTemplate() {
        $context = Context::getContext();
        $id_template = (int)Tools::getValue('id_template');
        $template = new gdzTemplate($id_template);
        $params = $template->params;
        if(Tools::getValue('id_lang')) {
            $id_lang    = (int)Tools::getValue('id_lang');
        } else {
            $id_lang = (int)(Configuration::get('PS_LANG_DEFAULT'));
        }
        $id_shop = $context->shop->id;
        $rows = (array)Tools::jsonDecode($params);
        $bresult = array();
        $b_index = 0;
        foreach ($rows as $key => $row) {
            $row_css = '';
            $row->id = 'row-'.Tools::substr(md5(uniqid(mt_rand(), true)), 0, 9);
            $row_css .= gdzPageBuilderHelper::parseStyleItem('row', $row);
            $row->class = $row->settings->custom_class;
            if($row->settings->animation) {
              $row->class .= " animated ".$row->settings->animation;
            }
            if(isset($row->settings->content_align) && $row->settings->content_align != '') {
              $row->class .= " ".$row->settings->content_align."-align";
            }
            if($row->settings->hidden_mobile) {
              $row->class .= " pb-hidden-xs";
            }
            if($row->settings->hidden_tablet) {
              $row->class .= " pb-hidden-sm";
            }
            if($row->settings->hidden_desktop) {
              $row->class .= " pb-hidden-md";
            }
            $bresult[] = $row;
            $columns = $rows[$key]->cols;
            foreach ($columns as $ckey => $column) {
                $column->id = 'col-'.Tools::substr(md5(uniqid(mt_rand(), true)), 0, 9);
                $row_css .= gdzPageBuilderHelper::parseStyleItem('column', $column);
                $column->class = $column->settings->lg_col." ".$column->settings->sm_col." ".$column->settings->xs_col." ".$column->settings->custom_class;
                if($column->settings->animation) {
                  $column->class .= " animated ".$column->settings->animation;
                }
                if(isset($column->settings->content_align) && $column->settings->content_align != '') {
                  $column->class .= " ".$column->settings->content_align."-align";
                }
                if($column->settings->hidden_mobile) {
                  $column->class .= " pb-hidden-xs";
                }
                if($column->settings->hidden_tablet) {
                  $column->class .= " pb-hidden-sm";
                }
                if($column->settings->hidden_desktop) {
                  $column->class .= " pb-hidden-md";
                }
                $addons = $column->addons;
                foreach ($addons as $akey => $addon) {
                    $addon->id = 'addon-'.Tools::substr(md5(uniqid(mt_rand(), true)), 0, 9);
                    $row_css .= gdzPageBuilderHelper::parseStyleItem('addon', $addon);
                    $bresult[$b_index]->cols[$ckey]->addons[$akey]->return_value = $this->loadAddon($addon);
                }
            }
            $bresult[$b_index]->style = $row_css;
            $b_index++;

        }
        $context->smarty->assign(
            array(
                'rows' => $bresult
            )
        );
        $html = $context->smarty->fetch(_PS_MODULE_DIR_._GDZ_PB_NAME_."/views/templates/admin/preview_rows.tpl");
        $rs = array(
            'html' => $html,
            'params' => $rows,
        );
        die(Tools::jsonEncode($rs));
    }
    public function loadAddon($addon)
    {
        $addonfile = 'addon'.$addon->type.'.php';
        $addonclass = 'gdzAddon'.Tools::ucfirst($addon->type);
        if (file_exists(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/'.$addonfile)) {
            require_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/'.$addonfile);
        }
        $addon_instance = new $addonclass();
        $addon_instance->root_url = gdzPageBuilderHelper::getRootUrl();
        return $addon_instance->returnValue($addon);
    }
    public function ajaxProcessGetBlog() {
        include_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/addonblog.php');
        $blog = new gdzAddonBlog();
        $setting = Tools::getValue('setting');
        $obj = json_decode(json_encode($setting));
        $context = Context::getContext();
        $id_lang = $context->language->id;
        $cols = $obj[15]->value;
        $cols_arr = array();
        if($cols)
            $cols_arr = explode("-", $cols);
        if($cols)
            $cols_arr = explode("-", $cols);
        $posts = $blog->getPost($obj);
        if(count($posts) == 0) exit;
        $context->smarty->assign(
            array(
              'link' => $context->link,
              'posts' => $posts,
              'cols'  => $cols,
              'cols_md'   => $cols_arr[0],
              'cols_sm'   => $cols_arr[1],
              'cols_xs'   => $cols_arr[2],
              'navigation' => $obj[16]->value,
              'pagination' => $obj[17]->value,
              'autoplay' => $obj[18]->value,
              'rewind' => $obj[19]->value,
              'slidebypage' => $obj[20]->value,
              'show_category' => $obj[4]->value,
              'show_introtext' => $obj[5]->value,
              'show_readmore' => $obj[7]->value,
              'readmore_text' => $obj[8]->value->$id_lang,
              'show_time' => $obj[9]->value,
              'show_ncomments' => $obj[10]->value,
              'show_nviews' => $obj[11]->value,
              'show_media' => $obj[12]->value,
              'image_url' => $blog->root_url.'modules/'.$blog->modulename.'/views/img/',
            )
        );
        $html = $context->smarty->fetch(_PS_MODULE_DIR_._GDZ_PB_NAME_."/views/templates/hook/addonblog.tpl");
        echo $html;
        exit;
    }
    public function ajaxProcessGetMenu() {
        $context = Context::getContext();
        include_once(_PS_MODULE_DIR_.'gdz_megamenu/classes/gdzMegamenuHelper.php');
        $menu_id = Tools::getValue('menu_id');
        $gdzhelper = new gdzMegamenuHelper();
        $menu_html = $gdzhelper->returnMenu($menu_id);
        $context->smarty->assign(
            array(
                'menu_html' => $menu_html
            )
        );
        $html = $context->smarty->fetch(_PS_MODULE_DIR_._GDZ_PB_NAME_."/views/templates/hook/addonmenu.tpl");
        echo $html;
        exit;
    }
    public function ajaxProcessGetSlider() {
        $addonclass = 'gdzAddonSliderLayer';
        $setting = array(
            'fields' => Tools::getValue('setting')
        );
        $setting = Tools::jsonDecode(Tools::jsonEncode($setting));
        $addonfile = 'addonsliderlayer.php';
        if (file_exists(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/'.$addonfile)) {
            require_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/'.$addonfile);
        } else {
            die('Addon not found');
        }
        $addon_instance = new $addonclass();
        $html = $addon_instance->returnValue($setting);
        echo $html;
        exit;
    }
    public function ajaxProcessGetDeals() {
        include_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/addonhotdeal.php');
        $gdzSetting = gdzPageBuilderHelper::genGdzSetting();
        $gdz_pagebuilder = Module::getInstanceByName(_GDZ_PB_NAME_);
        $configuration = $gdz_pagebuilder->getTemplateVarConfiguration();
        $context = Context::getContext();
        $id_lang = $context->language->id;
        $hotdeal = new gdzAddonHotdeal();
        $setting = Tools::getValue('setting');
        $obj = json_decode(json_encode($setting));
        $_products = $hotdeal->getDeals($obj);
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
        echo $html;
        exit;
    }
}
