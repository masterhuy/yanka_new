<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-16 03:40:02
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60793f5290a188_18000846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53d020846923f4e549f38bd47e8a8005fe0312d9' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1609233048,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60793f5290a188_18000846 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin E:\xampp7327\htdocs\yanka/themes/yanka/modules/productcomments/views/templates/hook/alert-modal.tpl -->
<?php $_smarty_tpl->_assignInScope('icon', (($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? 'check_circle' : $tmp));
$_smarty_tpl->_assignInScope('modal_message', (($tmp = @$_smarty_tpl->tpl_vars['modal_message']->value)===null||$tmp==='' ? '' : $tmp));?>

<?php echo '<script'; ?>
 type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
    const alertModal = $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modal_id']->value, ENT_QUOTES, 'UTF-8');?>
');
    alertModal.on('hidden.bs.modal', function () {
      alertModal.modal('hide');
    });
  });
<?php echo '</script'; ?>
>

<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modal_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="modal fade product-comment-modal" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2>
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modal_title']->value, ENT_QUOTES, 'UTF-8');?>

        </h2>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12  col-sm-12" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modal_id']->value, ENT_QUOTES, 'UTF-8');?>
-message">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modal_message']->value, ENT_QUOTES, 'UTF-8');?>

          </div>
        </div>
        <div class="row">
          <div class="col-md-12  col-sm-12 post-comment-buttons">
            <button type="button" class="btn btn-comment btn-comment-huge" data-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end E:\xampp7327\htdocs\yanka/themes/yanka/modules/productcomments/views/templates/hook/alert-modal.tpl --><?php }
}