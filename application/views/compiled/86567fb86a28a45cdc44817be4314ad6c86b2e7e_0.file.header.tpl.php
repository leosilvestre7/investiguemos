<?php /* Smarty version 3.1.27, created on 2016-12-22 22:59:25
         compiled from "C:\wamp\www\Blog_V2\application\views\templates\web\structure\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3229585ca11d756f89_58888092%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86567fb86a28a45cdc44817be4314ad6c86b2e7e' => 
    array (
      0 => 'C:\\wamp\\www\\Blog_V2\\application\\views\\templates\\web\\structure\\header.tpl',
      1 => 1482465562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3229585ca11d756f89_58888092',
  'variables' => 
  array (
    'title' => 0,
    'url' => 0,
    'base_url' => 0,
    'imagen' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585ca11d807655_54981932',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585ca11d807655_54981932')) {
function content_585ca11d807655_54981932 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3229585ca11d756f89_58888092';
?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#00bffe">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
         <meta property="og:title" content="<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {
echo $_smarty_tpl->tpl_vars['title']->value;
}?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php if (isset($_smarty_tpl->tpl_vars['url']->value)) {
echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['url']->value;
}?>" />
        <meta property="og:image" content="<?php if (isset($_smarty_tpl->tpl_vars['imagen']->value)) {
echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/imagen/articulo/<?php echo $_smarty_tpl->tpl_vars['imagen']->value;
}?>" />

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@leoruelasrojas">
        <meta name="twitter:title" content="<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {
echo $_smarty_tpl->tpl_vars['title']->value;
}?>">
        <meta name="twitter:creator" content="@leoruelasrojas">
        <meta name="twitter:image" content="<?php if (isset($_smarty_tpl->tpl_vars['imagen']->value)) {
echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/imagen/articulo/<?php echo $_smarty_tpl->tpl_vars['imagen']->value;
}?>">
        
        <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/logo/co-isotip.png" type="image/x-icon" />
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/logo/co-isotip.png" type="image/x-icon" />
        <title><?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)) {
echo $_smarty_tpl->tpl_vars['page_title']->value;
}?></title>


        <?php echo '<script'; ?>
> var base_url = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";<?php echo '</script'; ?>
>

        <!-- FUENTES -->
        <link rel='stylesheet' id='bimber-google-fonts-css'  href='//fonts.googleapis.com/css?family=Roboto%3A400%2C300%2C700%7CPoppins%3A400%2C300%2C500%2C600%2C700&#038;subset=latin%2Clatin-ext&#038;ver=2.1.2' type='text/css' media='all' />
        <link rel='stylesheet' id='bimber-google-fonts-css'  href='//fonts.googleapis.com/css?family=Roboto%3A400%2C300%2C700%7CPoppins%3A400%2C300%2C500%2C600%2C700&#038;subset=latin%2Clatin-ext&#038;ver=2.1.2' type='text/css' media='all' />
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootstrap/css/bootstrap.css" type="text/css">
        <!-- Animate -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/animate/css/animate.css" rel="stylesheet">

        <!-- Bootsnav -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootsnav-master/css/bootsnav.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootsnav-master/css/overwrite.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootsnav-master/skins/color.css" type="text/css">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/font-awesome/css/font-awesome.min.css" type="text/css">

        <!--SLICK CAROUSEL-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/slick-master/slick/slick.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/slick-master/slick/slick-theme.css" type="text/css"/>
        <!--FLEXSLIDER-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/woothemes/flexslider.css">
        <!--NIVO SLIDER-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/nivoslider/themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/nivoslider/nivo-slider.css" type="text/css" media="screen" />

        <!-- ESTILOS CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/css/estilo.css" type="text/css">
    </head>
<?php }
}
?>