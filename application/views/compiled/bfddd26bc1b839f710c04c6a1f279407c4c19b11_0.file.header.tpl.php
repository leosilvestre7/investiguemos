<?php /* Smarty version 3.1.27, created on 2016-12-29 03:03:39
         compiled from "/home/investiguemos25/public_html/application/views/templates/web/structure/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7388478845864c35b06b524_32993331%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfddd26bc1b839f710c04c6a1f279407c4c19b11' => 
    array (
      0 => '/home/investiguemos25/public_html/application/views/templates/web/structure/header.tpl',
      1 => 1482998365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7388478845864c35b06b524_32993331',
  'variables' => 
  array (
    'title' => 0,
    'url' => 0,
    'base_url' => 0,
    'imagen' => 0,
    'descripcion' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5864c35b0d01b9_88075718',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5864c35b0d01b9_88075718')) {
function content_5864c35b0d01b9_88075718 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7388478845864c35b06b524_32993331';
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
        <meta property="og:description" content="<?php if (isset($_smarty_tpl->tpl_vars['descripcion']->value)) {
echo $_smarty_tpl->tpl_vars['descripcion']->value;
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
        <meta name="twitter:description" content="<?php if (isset($_smarty_tpl->tpl_vars['descripcion']->value)) {
echo $_smarty_tpl->tpl_vars['descripcion']->value;
}?>">
        
        <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/icono/logo_blog.jpg" type="image/x-icon" />
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/icono/logo_blog.jpg" type="image/x-icon" />
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


        <div id="fb-root"></div>
<?php echo '<script'; ?>
>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=1760047887545552";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>

        
    </head>
<?php }
}
?>