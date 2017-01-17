<?php /* Smarty version 3.1.27, created on 2016-12-24 13:15:36
         compiled from "/home/investiguemos25/public_html/application/views/templates/manager/structure/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1576251192585e74f803ec55_61949748%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '010ce0daa04848b58a6013c6681d4c79a45dffbd' => 
    array (
      0 => '/home/investiguemos25/public_html/application/views/templates/manager/structure/header.tpl',
      1 => 1482470226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1576251192585e74f803ec55_61949748',
  'variables' => 
  array (
    'titulo_pagina' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585e74f840a937_25872735',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585e74f840a937_25872735')) {
function content_585e74f840a937_25872735 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1576251192585e74f803ec55_61949748';
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php if (isset($_smarty_tpl->tpl_vars['titulo_pagina']->value)) {
echo $_smarty_tpl->tpl_vars['titulo_pagina']->value;
}?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootstrap/css/bootstrap.min.css">
        <?php echo '<script'; ?>
> var base_url = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";<?php echo '</script'; ?>
>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/font-awesome/css/font-awesome.min.css">

        <!-- jvectormap -->
        <!--<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/jvectormap/jquery-jvectormap-1.2.2.css">-->

        <!-- Theme Style -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/theme/style/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/theme/style/css/skins/_all-skins.css" rel="stylesheet" type="text/css" />

        <!-- ############# ALERTIFY ############# -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/alertifyJS/css/alertify.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/alertifyJS/css/themes/default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/alertifyJS/css/themes/semantic.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/alertifyJS/css/themes/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/css/style.css" rel="stylesheet" type="text/css" />

        <!-- ############# DATEPICKER ############# -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/jqueryui/1.11.2/jquery-ui.css" rel="stylesheet" type="text/css" />
        
          <!-- ############# DATEPICKER ############# -->
        <link rel="stylesheet" media="all" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/datetimepicker/jquery-ui.css" />
        <link rel="stylesheet" media="all" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/datetimepicker/jquery-ui-timepicker-addon.css" />

        <!-- JQUERY -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/jquery/2.1.3/jquery.min.js"><?php echo '</script'; ?>
>
        <!-- ############# HIGHCHARTS ############# -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/highcharts/js/highcharts.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/highcharts/js/modules/data.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/highcharts/js/modules/drilldown.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/datepicker/jquery-ui-timepicker-addon.min.css"><?php echo '</script'; ?>
>


    </head><?php }
}
?>