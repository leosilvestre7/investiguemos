<?php /* Smarty version 3.1.27, created on 2016-12-23 07:48:36
         compiled from "/home/investiguemos25/public_html/application/views/templates/web/page/Home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2062743328585d1d240039d3_55780246%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0fe3d5408ef1e6a28da4085546b3ef6b80ee166' => 
    array (
      0 => '/home/investiguemos25/public_html/application/views/templates/web/page/Home.tpl',
      1 => 1482497296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062743328585d1d240039d3_55780246',
  'variables' => 
  array (
    'slider' => 0,
    'base_url' => 0,
    's' => 0,
    'lista_tres_ult' => 0,
    'li' => 0,
    'vistos' => 0,
    'v' => 0,
    'lista_articulos' => 0,
    'l' => 0,
    'lista_ambiente' => 0,
    'am' => 0,
    'lista_educacion' => 0,
    'lista_informacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585d1d2412cb86_79381122',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585d1d2412cb86_79381122')) {
function content_585d1d2412cb86_79381122 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2062743328585d1d240039d3_55780246';
?>
<section>
    <div class="container bg-todoh1m1">

        <div class="row" style="overflow: hidden;">
            <div class="col-sm-7 col-md-7" style="padding-top: 15px;">
                <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider">
                        <?php if (isset($_smarty_tpl->tpl_vars['slider']->value)) {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['slider']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
thumbs/599/336/articulo-<?php echo $_smarty_tpl->tpl_vars['s']->value['imagen'];?>
" alt="" title="#<?php echo $_smarty_tpl->tpl_vars['s']->value['numero'];?>
"/>
                            <?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
                        <?php }?>
                    </div>
                    <!-- TEXTOS DE SLIDER-->
                    <?php if (isset($_smarty_tpl->tpl_vars['slider']->value)) {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['slider']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
                            <div id="<?php echo $_smarty_tpl->tpl_vars['s']->value['numero'];?>
" class="nivo-html-caption">
                                <h1><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['s']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['titulo'];?>
</a></h1>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['s']->value['descripcion'];?>

                                </p>
                                <p class="fecha-slider">
                                    <span>
                                        <i class="fa fa-calendar"></i> 
                                        <?php echo $_smarty_tpl->tpl_vars['s']->value['fecha'];?>

                                    </span>
                                </p>
                            </div>
                        <?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
                    <?php }?>

                </div>
                <div class="main-post-large-style">
                    <ul class="list-category1">
                        <?php if (isset($_smarty_tpl->tpl_vars['lista_tres_ult']->value)) {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['lista_tres_ult']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['li'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['li']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['li']->value) {
$_smarty_tpl->tpl_vars['li']->_loop = true;
$foreach_li_Sav = $_smarty_tpl->tpl_vars['li'];
?>    
                                <li>
                                    <div class="blog-boxnot_2">
                                        <div class="blog-putleft_1"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
thumbs/240/135/articulo-<?php echo $_smarty_tpl->tpl_vars['li']->value['imagen'];?>
" alt=""></div>
                                        <div class="caption">
                                            <div class="txt_blog2">
                                                <h3 class="">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['li']->value['url'];?>
">
                                                        <?php echo $_smarty_tpl->tpl_vars['li']->value['titulo'];?>

                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="txt_blog4">
                                                <a href="#"><span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['li']->value['f_creacion'];?>
</a>
                                                <a href="#"><i class="fa fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['li']->value['visto'];?>
</a>
                                            </p>
                                            <div class="txt_blog3">
                                                <?php echo $_smarty_tpl->tpl_vars['li']->value['descripcion'];?>

                                            </div>
                                            <div class="more-link">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['li']->value['url'];?>
" class="read-more" title="">
                                                    Leer más
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            <?php
$_smarty_tpl->tpl_vars['li'] = $foreach_li_Sav;
}
?>
                        <?php }?>
                    </ul>
                </div>
            </div>

            <div class="col-sm-5 col-md-5">
                <div class="row divcontncol2">
                    <div class="col-md-12">
                        <ul class="red-to1afgs1">
                            <li><a href="https://www.facebook.com/Investiguemosnet-1018872178224649/"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/icono/facebook.png"></a></li>
                            <li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/icono/twitter.png"></a></li>
                            <li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/icono/youtube.png"></a></li>
                            <li><a href="https://www.linkedin.com/in/sabino-mu%C3%B1oz-1b0443109" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/icono/linkedin.png"></a></li>
                        </ul>

                        <div class="post post-variant-1">
                            <div class="post-inner">
                                <?php if (!empty($_smarty_tpl->tpl_vars['vistos']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['vistos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                        <?php if ($_smarty_tpl->tpl_vars['v']->value['numero'] == 1) {?>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
thumbs/536/411/articulo-<?php echo $_smarty_tpl->tpl_vars['v']->value['imagen'];?>
" width="536" height="411" alt="" class="img-responsive post-image">

                                            <div class="post-caption">
                                                <ul class="ullinewnot">
                                                    <li>
                                                        <a href="#">
                                                            <span class="label label-warning lab-txtq1">
                                                                Mas Vistos
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="divgs-new">

                                                    <div class="h4 text-normal font-accent-2">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['li']->value['url'];?>
" class="ahref1gs">
                                                            <?php echo $_smarty_tpl->tpl_vars['v']->value['titulo'];?>

                                                        </a>
                                                    </div>
                                                    <div class="post-meta post-meta-hidden-outer">
                                                        <div class="element-groups-custom veil reveal-md-block">
                                                            <a href="#" class="post-meta-author ahref1gs1">
                                                                <span>Por</span>
                                                                <?php echo $_smarty_tpl->tpl_vars['li']->value['autor'];?>

                                                            </a>
                                                            <a href="#" class="post-meta-time ahref1gs2">
                                                                <span class="fa fa-clock-o"></span>
                                                                <time datetime="2016-06-06"><?php echo $_smarty_tpl->tpl_vars['li']->value['fecha'];?>
</time>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php }?>
                                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                                <?php }?>
                            </div>
                        </div>
                        <hr class="divider divider-dashed">
                    </div>

                    <div class="col-md-12">
                        <?php if (!empty($_smarty_tpl->tpl_vars['vistos']->value)) {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['vistos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['v']->value['numero'] == 2) {?>
                                    <article class="ma-1at12">
                                        <figure><img class="img-responsive center-block" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
thumbs/536/411/articulo-<?php echo $_smarty_tpl->tpl_vars['v']->value['imagen'];?>
" alt="Image 7"></figure>
                                        <div class="blog-boxnot_2">
                                            <div class="caption">
                                                <div class="txt_blog2">
                                                    <h3 class="">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['li']->value['url'];?>
">
                                                             <?php echo $_smarty_tpl->tpl_vars['v']->value['titulo'];?>

                                                        </a>
                                                    </h3>
                                                </div>
                                                <p class="txt_blog4">
                                                    <a href="#"><span class="fa fa-calendar"></span><?php echo $_smarty_tpl->tpl_vars['v']->value['fecha'];?>
</a>
                                                    <a href="#"><i class="fa fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['v']->value['visto'];?>
</a>
                                                </p>
                                                <div class="txt_blog3">
                                                   <?php echo $_smarty_tpl->tpl_vars['v']->value['descripcion'];?>

                                                </div>
                                                <div class="more-link">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['li']->value['url'];?>
" class="read-more" title="">
                                                        Leer más
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                        <?php }?>
                    </div>
                      <?php if (!empty($_smarty_tpl->tpl_vars['vistos']->value)) {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['vistos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['v']->value['numero'] > 2) {?>
                    <div class="col-md-12">
                        <article class="no-1dtica1bg">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
thumbs/80/60/articulo-<?php echo $_smarty_tpl->tpl_vars['v']->value['imagen'];?>
" alt="..." style="max-width: 80px;">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="no-1dtica1"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['li']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['titulo'];?>
</a></h4>
                                </div>
                            </div>
                        </article>
                    </div>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                        <?php }?>      
                  
                  
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 bor-car1selq">
                <div class="slider responva">
                    <?php
$_from = $_smarty_tpl->tpl_vars['lista_articulos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?>
                        <div>
                            <div class="post-titletwo">
                                <h3>
                                    <a class="title-gs" href="#" title="">
                                        <img class="center-block img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/imagen/articulo/<?php echo $_smarty_tpl->tpl_vars['l']->value['imagen'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['l']->value['titulo'];?>
                   
                                    </a>
                                </h3>
                            </div>
                            <p class="post-meta">
                                <span class="meta-date">
                                    <i class="fa fa-calendar"></i> <?php echo $_smarty_tpl->tpl_vars['l']->value['f_creacion'];?>

                                </span>

                            </p>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h1 class="blog-sect3titag1"><a href="#">Ambiente</a></h1>
                <ul class="list-category1">
                    <?php if (!empty($_smarty_tpl->tpl_vars['lista_ambiente']->value)) {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['lista_ambiente']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['am'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['am']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['am']->value) {
$_smarty_tpl->tpl_vars['am']->_loop = true;
$foreach_am_Sav = $_smarty_tpl->tpl_vars['am'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['am']->value['numero'] == 1) {?>
                                <li>
                                    <div class="blog-boxnot_2">
                                        <div class="blog-putcntr_2"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
thumbs/329/247/articulo-<?php echo $_smarty_tpl->tpl_vars['am']->value['imagen'];?>
" alt="Image 7"></div>
                                        <div class="caption">
                                            <div class="txt_blog2">
                                                <h3 class="">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['am']->value['url'];?>
">
                                                        <?php echo $_smarty_tpl->tpl_vars['am']->value['titulo'];?>

                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="txt_blog4">
                                                <a href="#"><span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['am']->value['f_creacion'];?>
</a>
                                                <a href="#"><i class="fa fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['am']->value['visto'];?>
</a>
                                            </p>
                                            <div class="txt_blog3">
                                                <?php echo $_smarty_tpl->tpl_vars['am']->value['descripcion'];?>

                                            </div>
                                            <div class="more-link">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['am']->value['url'];?>
" class="read-more" title="">
                                                    Leer más
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['am'] = $foreach_am_Sav;
}
?>
                    <?php }?>
                </ul>
                <div>
                    <ul class="home-page-tab">
                        <?php if (!empty($_smarty_tpl->tpl_vars['lista_ambiente']->value)) {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['lista_ambiente']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['am'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['am']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['am']->value) {
$_smarty_tpl->tpl_vars['am']->_loop = true;
$foreach_am_Sav = $_smarty_tpl->tpl_vars['am'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['am']->value['numero'] > 1) {?>
                                    <li class="post-tab-home pst-bord-1">
                                        <div class="image_rvw_wpr1">
                                            <a href="#"> 
                                                <img class="main" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
thumbs/100/75/articulo-<?php echo $_smarty_tpl->tpl_vars['am']->value['imagen'];?>
">                
                                            </a>
                                        </div> 
                                        <div class="feature-text">
                                            <div class="post-title">
                                                <h3>
                                                    <a class="title alinkref" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['am']->value['url'];?>
" title="">
                                                        <?php echo $_smarty_tpl->tpl_vars['am']->value['titulo'];?>
                  
                                                    </a>
                                                </h3>
                                            </div> 
                                            <div class="more-link">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['am']->value['url'];?>
" class="read-more" title="">
                                                    Leer más
                                                </a>
                                            </div>                          
                                        </div>
                                    </li>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['am'] = $foreach_am_Sav;
}
?>
                        <?php }?>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <h1 class="blog-sect3titag1"><a href="#">Educación</a></h1>
                <ul class="list-category1">
                    <?php if (!empty($_smarty_tpl->tpl_vars['lista_educacion']->value)) {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['lista_educacion']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['am'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['am']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['am']->value) {
$_smarty_tpl->tpl_vars['am']->_loop = true;
$foreach_am_Sav = $_smarty_tpl->tpl_vars['am'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['am']->value['numero'] == 1) {?>
                                <li>
                                    <div class="blog-boxnot_2">
                                        <div class="blog-putcntr_2"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
thumbs/329/247/articulo-<?php echo $_smarty_tpl->tpl_vars['am']->value['imagen'];?>
" alt="Image 7"></div>
                                        <div class="caption">
                                            <div class="txt_blog2">
                                                <h3 class="">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['am']->value['url'];?>
">
                                                        <?php echo $_smarty_tpl->tpl_vars['am']->value['titulo'];?>

                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="txt_blog4">
                                                <a href="#"><span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['am']->value['f_creacion'];?>
</a>
                                                <a href="#"><i class="fa fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['am']->value['visto'];?>
</a>
                                            </p>
                                            <div class="txt_blog3">
                                                <?php echo $_smarty_tpl->tpl_vars['am']->value['descripcion'];?>

                                            </div>
                                            <div class="more-link">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['am']->value['url'];?>
" class="read-more" title="">
                                                    Leer más
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['am'] = $foreach_am_Sav;
}
?>
                    <?php }?>
                </ul>
                <div>
                    <ul class="home-page-tab">
                        <?php if (!empty($_smarty_tpl->tpl_vars['lista_educacion']->value)) {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['lista_educacion']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['am'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['am']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['am']->value) {
$_smarty_tpl->tpl_vars['am']->_loop = true;
$foreach_am_Sav = $_smarty_tpl->tpl_vars['am'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['am']->value['numero'] > 1) {?>
                                    <li class="post-tab-home pst-bord-1">
                                        <div class="image_rvw_wpr1">
                                            <a href="#"> 
                                                <img class="main" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
thumbs/100/75/articulo-<?php echo $_smarty_tpl->tpl_vars['am']->value['imagen'];?>
">                
                                            </a>
                                        </div> 
                                        <div class="feature-text">
                                            <div class="post-title">
                                                <h3>
                                                    <a class="title alinkref" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['am']->value['url'];?>
" title="">
                                                        <?php echo $_smarty_tpl->tpl_vars['am']->value['titulo'];?>
                  
                                                    </a>
                                                </h3>
                                            </div> 
                                            <div class="more-link">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['am']->value['url'];?>
" class="read-more" title="">
                                                    Leer más
                                                </a>
                                            </div>                          
                                        </div>
                                    </li>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['am'] = $foreach_am_Sav;
}
?>
                        <?php }?>
                    </ul>

                </div>
            </div>
            <div class="col-md-4">
                <h1 class="blog-sect3titag1"><a href="#">Información</a></h1>
                <ul class="list-category1">
                    <?php if (!empty($_smarty_tpl->tpl_vars['lista_informacion']->value)) {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['lista_informacion']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['am'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['am']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['am']->value) {
$_smarty_tpl->tpl_vars['am']->_loop = true;
$foreach_am_Sav = $_smarty_tpl->tpl_vars['am'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['am']->value['numero'] == 1) {?>
                                <li>
                                    <div class="blog-boxnot_2">
                                        <div class="blog-putcntr_2"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
thumbs/329/247/articulo-<?php echo $_smarty_tpl->tpl_vars['am']->value['imagen'];?>
" alt="Image 7"></div>
                                        <div class="caption">
                                            <div class="txt_blog2">
                                                <h3 class="">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['am']->value['url'];?>
">
                                                        <?php echo $_smarty_tpl->tpl_vars['am']->value['titulo'];?>

                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="txt_blog4">
                                                <a href="#"><span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['am']->value['f_creacion'];?>
</a>
                                                <a href="#"><i class="fa fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['am']->value['visto'];?>
</a>
                                            </p>
                                            <div class="txt_blog3">
                                                <?php echo $_smarty_tpl->tpl_vars['am']->value['descripcion'];?>

                                            </div>
                                            <div class="more-link">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['am']->value['url'];?>
" class="read-more" title="">
                                                    Leer más
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['am'] = $foreach_am_Sav;
}
?>
                    <?php }?>

                </ul>
                <div>
                    <ul class="home-page-tab">
                        <?php if (!empty($_smarty_tpl->tpl_vars['lista_informacion']->value)) {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['lista_informacion']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['am'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['am']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['am']->value) {
$_smarty_tpl->tpl_vars['am']->_loop = true;
$foreach_am_Sav = $_smarty_tpl->tpl_vars['am'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['am']->value['numero'] > 1) {?>
                                    <li class="post-tab-home pst-bord-1">
                                        <div class="image_rvw_wpr1">
                                            <a href="#"> 
                                                <img class="main" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
thumbs/100/75/articulo-<?php echo $_smarty_tpl->tpl_vars['am']->value['imagen'];?>
">               
                                            </a>
                                        </div> 
                                        <div class="feature-text">
                                            <div class="post-title">
                                                <h3>
                                                    <a class="title alinkref" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['am']->value['url'];?>
" title="">
                                                        <?php echo $_smarty_tpl->tpl_vars['am']->value['titulo'];?>
                  
                                                    </a>
                                                </h3>
                                            </div> 
                                            <div class="more-link">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['am']->value['url'];?>
" class="read-more" title="">
                                                    Leer más
                                                </a>
                                            </div>                          
                                        </div>
                                    </li>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['am'] = $foreach_am_Sav;
}
?>
                        <?php }?>

                    </ul>

                </div>
            </div>
        </div>
    </div>
</section><?php }
}
?>