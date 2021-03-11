<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-10 20:40:51
  from 'module:pscurrencyselectorpscurre' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60497523274f29_25254528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eefc2ea735fa48d5e06513ebfda709a2f2686b5a' => 
    array (
      0 => 'module:pscurrencyselectorpscurre',
      1 => 1610075646,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60497523274f29_25254528 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin F:\xampp\htdocs\yanka/themes/yanka/modules/ps_currencyselector/ps_currencyselector-dropdown.tpl --><div class="block-collapse currency-info position-relative">
   	<a class="hover-tooltip" href="#currency" data-toggle="collapse">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>

		<i>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
				<g>
					<polygon fill="currentColor" points="12.5,17.6 2.9,8.1 4.1,6.9 12.5,15.4 20.9,6.9 22.1,8.1 	"></polygon>
				</g>
			</svg>
        </i>
		<span class="tooltip-wrap bottom">
			<span class="tooltip-text">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

			</span>
		</span>
	</a>
	<div id="currency" class="header-collapse collapse">
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
				<li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
					<a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="collapse-item">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>

					</a>
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
</div>
<!-- end F:\xampp\htdocs\yanka/themes/yanka/modules/ps_currencyselector/ps_currencyselector-dropdown.tpl --><?php }
}
