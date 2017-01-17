<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#00bffe">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
         <meta property="og:title" content="{if isset($title)}{$title}{/if}" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{if isset($url)}{$base_url}articulo/{$url}{/if}" />
        <meta property="og:image" content="{if isset($imagen)}{$base_url}public/imagen/articulo/{$imagen}{/if}" />
        <meta property="og:description" content="{if isset($descripcion)}{$descripcion}{/if}" />


        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@leoruelasrojas">
        <meta name="twitter:title" content="{if isset($title)}{$title}{/if}">
        <meta name="twitter:creator" content="@leoruelasrojas">
        <meta name="twitter:image" content="{if isset($imagen)}{$base_url}public/imagen/articulo/{$imagen}{/if}">
        <meta name="twitter:description" content="{if isset($descripcion)}{$descripcion}{/if}">
        
        <link rel="icon" href="{$base_url}public/img/icono/logo_blog.jpg" type="image/x-icon" />
        <link rel="shortcut icon" href="{$base_url}public/img/icono/logo_blog.jpg" type="image/x-icon" />
        <title>{if isset($page_title)}{$page_title}{/if}</title>


        <script> var base_url = "{$base_url}";</script>

        <!-- FUENTES -->
        <link rel='stylesheet' id='bimber-google-fonts-css'  href='//fonts.googleapis.com/css?family=Roboto%3A400%2C300%2C700%7CPoppins%3A400%2C300%2C500%2C600%2C700&#038;subset=latin%2Clatin-ext&#038;ver=2.1.2' type='text/css' media='all' />
        <link rel='stylesheet' id='bimber-google-fonts-css'  href='//fonts.googleapis.com/css?family=Roboto%3A400%2C300%2C700%7CPoppins%3A400%2C300%2C500%2C600%2C700&#038;subset=latin%2Clatin-ext&#038;ver=2.1.2' type='text/css' media='all' />
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="{$base_url}public/plugins/bootstrap/css/bootstrap.css" type="text/css">
        <!-- Animate -->
        <link href="{$base_url}public/plugins/animate/css/animate.css" rel="stylesheet">

        <!-- Bootsnav -->
        <link rel="stylesheet" href="{$base_url}public/plugins/bootsnav-master/css/bootsnav.css" type="text/css">
        <link rel="stylesheet" href="{$base_url}public/plugins/bootsnav-master/css/overwrite.css" type="text/css">
        <link rel="stylesheet" href="{$base_url}public/plugins/bootsnav-master/skins/color.css" type="text/css">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="{$base_url}public/plugins/font-awesome/css/font-awesome.min.css" type="text/css">

        <!--SLICK CAROUSEL-->
        <link rel="stylesheet" href="{$base_url}public/plugins/slick-master/slick/slick.css" type="text/css"/>
        <link rel="stylesheet" href="{$base_url}public/plugins/slick-master/slick/slick-theme.css" type="text/css"/>
        <!--FLEXSLIDER-->
        <link rel="stylesheet" href="{$base_url}public/plugins/woothemes/flexslider.css">
        <!--NIVO SLIDER-->
        <link rel="stylesheet" href="{$base_url}public/plugins/nivoslider/themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="{$base_url}public/plugins/nivoslider/nivo-slider.css" type="text/css" media="screen" />

        <!-- ESTILOS CSS -->
        <link rel="stylesheet" href="{$base_url}public/web/css/estilo.css" type="text/css">


        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=1760047887545552";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

        
    </head>
