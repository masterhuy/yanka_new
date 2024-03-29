<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-15 23:54:32
  from 'E:\xampp7327\htdocs\yanka\themes\yanka\templates\_partials\stylesheets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60790a786d3f11_45053113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9975ab241dbe0b7e22ef6781bf5416b09583f0ba' => 
    array (
      0 => 'E:\\xampp7327\\htdocs\\yanka\\themes\\yanka\\templates\\_partials\\stylesheets.tpl',
      1 => 1615773210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60790a786d3f11_45053113 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
css/bootstrap.min.css" />
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/gdz_themesetting/views/fonts/font-icon.css" rel="stylesheet">
<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['body_font'] == 'google' && isset($_smarty_tpl->tpl_vars['gdzSetting']->value['body_font_google'])) {?>
    <link href="https://fonts.googleapis.com/css?family=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['body_font_google'], ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['body_font_google_weightstyle'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
<?php } elseif ($_smarty_tpl->tpl_vars['gdzSetting']->value['body_font'] == 'fontface' && isset($_smarty_tpl->tpl_vars['gdzSetting']->value['body_fontface_css'])) {?>
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/gdz_themesetting/views/fonts/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['body_fontface_css'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
<?php }
if ($_smarty_tpl->tpl_vars['gdzSetting']->value['heading_font'] == 'google' && isset($_smarty_tpl->tpl_vars['gdzSetting']->value['heading_font_google'])) {?>
    <link href="https://fonts.googleapis.com/css?family=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['heading_font_google'], ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['heading_font_google_weightstyle'], ENT_QUOTES, 'UTF-8');?>
&display=swap" rel="stylesheet">
<?php } elseif ($_smarty_tpl->tpl_vars['gdzSetting']->value['heading_font'] == 'fontface' && isset($_smarty_tpl->tpl_vars['gdzSetting']->value['heading_fontface_css'])) {?>
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/gdz_themesetting/views/fonts/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['heading_fontface_css'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
<?php }
if ($_smarty_tpl->tpl_vars['gdzSetting']->value['body_icon_font'] != '') {?>
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/gdz_themesetting/views/fonts/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['body_icon_font'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['external'], 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?>
<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['inline'], 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?>
<style>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

</style>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['custom_css']) {?>
<style>
<?php echo $_smarty_tpl->tpl_vars['gdzSetting']->value['custom_css'];?>

</style>
<?php }
}
}
