<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-10 20:40:51
  from 'F:\xampp\htdocs\yanka\themes\yanka\templates\_partials\headers\wishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6049752314ffa4_10218770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90abc97ebfbf4c91bda95081e9cd055022ba5699' => 
    array (
      0 => 'F:\\xampp\\htdocs\\yanka\\themes\\yanka\\templates\\_partials\\headers\\wishlist.tpl',
      1 => 1609987264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6049752314ffa4_10218770 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="wishlist_block"class="wishlist">
    <a class="hover-tooltip" href="index.php?fc=module&module=gdz_wishlist&controller=mywishlist">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
            <path fill="currentColor" d="M6.9,2.6c1.4,0,2.7,0.6,3.8,1.6l0.2,0.2L12,5.6l1.1-1.1l0.2-0.2c1-1,2.3-1.6,3.8-1.6s2.8,0.6,3.8,1.6
            c2.1,2.1,2.1,5.6,0,7.7L12,20.7l-8.9-8.9C1,9.7,1,6.2,3.1,4.1C4.2,3.2,5.5,2.6,6.9,2.6z M6.9,1C5.1,1,3.3,1.7,2,3.1
            c-2.7,2.7-2.7,7.2,0,9.9l10,10l10-9.9c2.7-2.8,2.7-7.3,0-10c-1.4-1.4-3.1-2-4.9-2c-1.8,0-3.6,0.7-4.9,2L12,3.3l-0.2-0.2
            C10.4,1.7,8.7,1,6.9,1z">
            </path>
        </svg>
        <span class="tooltip-wrap bottom">
            <span class="tooltip-text">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </span>
        </span>
    </a>
</div>
<?php }
}
