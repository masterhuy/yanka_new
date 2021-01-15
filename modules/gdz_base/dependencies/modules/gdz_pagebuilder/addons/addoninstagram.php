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

if (!defined('_PS_VERSION_')) {
    exit;
}
include_once(_PS_MODULE_DIR_._GDZ_PB_NAME_.'/addons/addonbase.php');
class gdzAddonInstagram extends gdzAddonBase
{
    public static $index = 0;
    public function __construct()
    {
        $this->modulename = _GDZ_PB_NAME_;
        $this->addonname = 'instagram';
        $this->addontitle = 'Instagram';
        $this->addondesc = 'Show latest instagram images';
        $this->type = 'Shop Addons';
        $this->ordering = 85;
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();
        self::$index++;
    }
    public function getInputs()
    {
        $inputs = array(
            array(
                'type' => 'text',
                'name' => 'access_token',
                'lang' => '0',
                'label' => $this->l('Access Token'),
                'desc' => 'Instagram API Access Token. You can get it from <a href="https://elfsight.com/service/get-instagram-access-token/">here</a>',
                'default' => '3101646260.aeeff59.336db3ecf36a4e2db9e1fd6f3d765021'
            ),
            array(
                'type' => 'range',
                'name' => 'limit',
                'lang' => '0',
                'label' => $this->l('Total Items'),
                'desc' => 'Number Images Instagram To Display',
                'min' => 1,
                'max' => 30,
                'default' => 6
            ),
            array(
                'type' => 'checkbox2',
                'name' => 'linked',
                'lang' => '0',
                'label' => $this->l('Image Linked'),
                'desc' => 'Images should be linked to their page on Instagram',
                'default' => 0
            ),
            array(
                'type' => 'checkbox2',
                'name' => 'comments',
                'lang' => '0',
                'label' => $this->l('Show Comments'),
                'desc' => 'Show Image Comments',
                'default' => 0
            ),
            array(
                'type' => 'checkbox2',
                'name' => 'date',
                'lang' => '0',
                'label' => $this->l('Show Date'),
                'desc' => 'Show Image Date',
                'default' => 0
            ),
            array(
                'type' => 'checkbox2',
                'name' => 'likes',
                'lang' => '0',
                'label' => $this->l('Show Likes'),
                'desc' => 'Show Image Likes',
                'default' => 0
            ),
            array(
                'type' => 'select',
                'name' => 'view_type',
                'label' => $this->l('View'),
                'lang' => '0',
                'desc' => 'View Type',
                'options' => array('grid', 'carousel'),
                'default' => 'grid'
            ),
            array(
                'type' => 'range',
                'name' => 'gutter',
                'lang' => '0',
                'label' => $this->l('Image Gutter(px)'),
                'desc' => 'Gutter between images',
                'min' => 0,
                'max' => 60,
                'default' => 0
            ),
            array(
                'type' => 'select',
                'name' => 'element_class',
                'label' => $this->l('Items per Line'),
                'lang' => '0',
                'desc' => 'Number of items per line',
                'options' => array('1', '2', '3', '4', '6', '12'),
                'default' => '6',
                'condition' => array(
                    'view_type' => '==grid'
                )
            ),
            array(
                'type' => 'screen-range',
                'name' => 'cols',
                'label' => $this->l('Items per Line'),
                'min'  => 1,
                'max'  => 10,
                'lang' => '0',
                'desc' => 'Number of Item per Line',
                'default' => '6-4-2',
                'condition' => array(
                    'view_type' => '==carousel'
                ),
            ),
            array(
                'type' => 'checkbox2',
                'name' => 'navigation',
                'label' => $this->l('Show Navigation'),
                'lang' => '0',
                'desc' => 'Enable/Disable Navigation',
                'default' => '0',
                'condition' => array(
                    'view_type' => '==carousel'
                ),
            ),
            array(
                'type' => 'checkbox2',
                'name' => 'pagination',
                'label' => $this->l('Show Pagination'),
                'lang' => '0',
                'desc' => 'Enable/Disable Pagination',
                'default' => '0',
                'condition' => array(
                    'view_type' => '==carousel'
                ),
            ),
            array(
                'type' => 'checkbox2',
                'name' => 'autoplay',
                'label' => $this->l('Auto Play'),
                'lang' => '0',
                'desc' => 'Enable/Disable Auto Play',
                'default' => '0',
                'condition' => array(
                    'view_type' => '==carousel'
                ),
            ),
            array(
                'type' => 'checkbox2',
                'name' => 'rewind',
                'label' => $this->l('ReWind Navigation'),
                'lang' => '0',
                'desc' => 'Enable/Disable ReWind Navigation',
                'default' => '1',
                'condition' => array(
                    'view_type' => '==carousel'
                ),
            ),
            array(
                'type' => 'checkbox2',
                'name' => 'slidebypage',
                'label' => $this->l('slide By Page'),
                'lang' => '0',
                'desc' => 'Enable/Disable Slide By Page',
                'default' => '0',
                'condition' => array(
                    'view_type' => '==carousel'
                ),
            ),
            array(
                'type' => 'text',
                'name' => 'overwrite_tpl',
                'label' => $this->l('Overwrite Tpl File'),
                'lang' => '0',
                'desc' => 'Use When you want overwrite template file'
            )
        );
        return $inputs;
    }
    public function returnValue($addon)
    {
        $this->context->controller->addJS('modules/'.$this->name.'/lib/instagram-lite-master/instagramLite.min.js', 'all');
        $this->context->controller->addJS('modules/'.$this->name.'/views/js/instagram.js', 'all');
        if(empty($addon->fields[0]->value)) return;
        $access_token = $addon->fields[0]->value;
        $limit = $addon->fields[1]->value;
        $linked = $addon->fields[2]->value;
        $comments = $addon->fields[3]->value;
        $date = $addon->fields[4]->value;
        $likes = $addon->fields[5]->value;
        $view_type = $addon->fields[6]->value;
        $element_class = $addon->fields[8]->value;
        if($view_type == 'grid' && $element_class == '1') {
          $element_class ='col-6 col-md-6 col-lg-12';
        } elseif($view_type == 'grid' && $element_class == '2') {
          $element_class ='col-6 col-md-6 col-lg-6';
        } elseif($view_type == 'grid' && $element_class == '3') {
          $element_class ='col-6 col-md-6 col-lg-4';
        } elseif($view_type == 'grid' && $element_class == '4') {
          $element_class ='col-6 col-md-6 col-lg-3';
        } elseif($view_type == 'grid' && $element_class == '6') {
          $element_class ='col-6 col-md-6 col-lg-2';
        } elseif($view_type == 'grid' && $element_class == '12') {
          $element_class ='col-6 col-md-6 col-lg-1';
        } else {
          $element_class = 'image-item';
        }
        $cols= $addon->fields[9]->value;
        $cols_arr = array();
        if($cols)
            $cols_arr = explode("-", $cols);
        $instagram_options = array(
            'view_type' => $view_type,
            'access_token' => $access_token,
            'limit' => $limit,
            'linked' => $linked,
            'comments' => $comments,
            'date' => $date,
            'likes' => $likes,
            'element_class' => $element_class,
            'gutter' => $addon->fields[7]->value
        );
        $this->context->smarty->assign(
            array(
                'instagram_options' => str_replace('"', '&quot;', json_encode($instagram_options)),
                'view_type' => $view_type,
                'cols'  => $cols,
                'cols_md'   => $cols_arr[0],
                'cols_sm'   => $cols_arr[1],
                'cols_xs'   => $cols_arr[2],
                'navigation' => $addon->fields[10]->value,
                'pagination' => $addon->fields[11]->value,
                'autoplay' => $addon->fields[12]->value,
                'rewind' => $addon->fields[13]->value,
                'slidebypage' => $addon->fields[14]->value

            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
