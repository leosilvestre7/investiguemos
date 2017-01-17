<?php /* Smarty version 3.1.27, created on 2016-12-23 07:48:35
         compiled from "/home/investiguemos25/public_html/application/views/templates/web/structure/inter_header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1056601266585d1d23ef8294_85907947%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fd585ce3440e2e88c865cd87c8ef37500d003ec' => 
    array (
      0 => '/home/investiguemos25/public_html/application/views/templates/web/structure/inter_header.tpl',
      1 => 1482497266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1056601266585d1d23ef8294_85907947',
  'variables' => 
  array (
    'fecha2' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585d1d23f3c354_79336420',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585d1d23f3c354_79336420')) {
function content_585d1d23f3c354_79336420 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1056601266585d1d23ef8294_85907947';
?>
<body id="page-top">
    <!-- Start Navigation -->
  
      
            <div class="container" style="background: #00bffe;">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mn-fecha1">
                            <span>Fecha:</span> 
                        <?php if (isset($_smarty_tpl->tpl_vars['fecha2']->value)) {
echo $_smarty_tpl->tpl_vars['fecha2']->value;
}?>
                    </p>
                    <ul class="hd-listred">
                        <li><a href="https://www.facebook.com/Investiguemosnet-1018872178224649/"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                    <button id="buscar" style="display: none;"></button>
                </div>
               
              <!--  <div class="col-md-6">
                    

                </div>-->
            </div>
                     <div class="row"  style="padding-bottom: 5px;">
                    <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/portada/banner.jpg">
                </div>
        </div>
     <div class="container" style="background: white; margin-bottom: 3px;">
    <section class="">
        <nav class="navbar navbar-default bootsnav">
            <div class="top-search" style="display: none;">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" id="buscardor" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <div class="container">  
                <div class="attr-nav">
                    <ul>
                        <li class="search" style="    margin-right: 48px;">
                            <a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- Start Header Navigation -->
                <div class="navbar-header cnone-log1">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeInUp">
                        <li class="blog-mnhvr"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
home">Home</a></li>                    
                        <!--<li class="blog-mnhvr"><a href="#">Sobre mí</a></li>-->
                        <li class="blog-mnhvr"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/ambiente">Ambiente</a></li>
                        <li class="blog-mnhvr"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/educacion">Educación</a></li>
                        <li class="blog-mnhvr"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/informacion">Información</a></li>
                        <li class="blog-mnhvr"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/investigacion">Investigación</a></li>
                        <li class="blog-mnhvr"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/actividades">Actividades</a></li>

                    </ul>
                </div>
            </div>   
        </nav>
    </section>
     </div>
<!-- End Navigation -->
<div class="clearfix"></div><?php }
}
?>