<?php /* Smarty version 3.1.27, created on 2017-01-24 01:24:03
         compiled from "C:\wamp\www\investiguemos\application\views\templates\web\structure\inter_header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:95255886f30378dec7_56520908%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f21b7dcc67b156ebf4463ca7f23306cb4ee14992' => 
    array (
      0 => 'C:\\wamp\\www\\investiguemos\\application\\views\\templates\\web\\structure\\inter_header.tpl',
      1 => 1485237611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95255886f30378dec7_56520908',
  'variables' => 
  array (
    'fecha2' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5886f303b80d91_00808666',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5886f303b80d91_00808666')) {
function content_5886f303b80d91_00808666 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '95255886f30378dec7_56520908';
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
                        <li class="blog-mnhvr"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
descripcion">¿Qué es Investiguemos.net?</a></li>
                        <li class="blog-mnhvr"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/investigacion">Investigación Científica</a></li>
                        <li class="blog-mnhvr"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/educacion">Educación</a></li>
                        <li class="blog-mnhvr"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/informacion">Información</a></li>
                        <li class="blog-mnhvr"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/ambiente">Ambiente</a></li>
                        <li class="blog-mnhvr"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/evaluacion">Evaluación</a></li>
                        <li class="blog-mnhvr"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/productos">Productos</a></li>
                        <li class="blog-mnhvr"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/actividades">Actividades</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </section>
     </div>
<!-- End Navigation -->
<div class="clearfix"></div>
<?php }
}
?>