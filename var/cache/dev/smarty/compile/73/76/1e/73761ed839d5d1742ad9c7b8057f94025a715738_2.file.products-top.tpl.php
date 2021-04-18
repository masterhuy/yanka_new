<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-16 00:42:00
  from 'E:\xampp7327\htdocs\yanka\themes\yanka\templates\catalog\_partials\products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60791598ebbe47_19684383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73761ed839d5d1742ad9c7b8057f94025a715738' => 
    array (
      0 => 'E:\\xampp7327\\htdocs\\yanka\\themes\\yanka\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1618479939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_60791598ebbe47_19684383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="filters-panel">
	<div class="row align-items-center">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-sort text-right">
			<div class="row">
				<?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
					<div class="col-auto d-block d-lg-none">
						<button id="search_filter_toggler">
							<svg>
								<use xlink:href="#icon-filter">
									<symbol id="icon-filter" fill="none" viewBox="0 0 22 24">
										<path d="M9 24V12L1 5V0h22v5l-8 7v8l-6 4zM2.6 4.3l8 7V21l2.8-1.9v-7.9l8-7V1.6H2.6v2.7z" fill="currentColor" stroke-widht="1.6">
										</path>
									</symbol>
								</use>
							</svg>
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
						</button>
					</div>
				<?php }?>
				<div class="col sort-by">
					<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['shop_sortby'] == 1) {?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48512847660791598eb2de2_97198627', 'sort_by');
?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['shop_switchlist'] == 1) {?>
						<div class="view-mode">
							<div class="button">
								<a class="switch-view view-grid view-grid-2" href="#">
									<span></span>
									<span></span>
								</a>
								<a class="switch-view view-grid view-grid-3 <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['shop_list'] == 'grid') {?>active<?php }?>" href="#">
									<span></span>
									<span></span>
									<span></span>
								</a>
								<a class="switch-view view-grid view-grid-4" href="#">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
								</a>
								<a class="switch-view view-list <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['shop_list'] == 'list') {?>active<?php }?>" href="#">
									<span></span>
									<span></span>
								</a>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }
/* {block 'sort_by'} */
class Block_48512847660791598eb2de2_97198627 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_48512847660791598eb2de2_97198627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
						<?php
}
}
/* {/block 'sort_by'} */
}
