<?php /* Smarty version 3.1.27, created on 2016-12-29 03:07:24
         compiled from "/home/investiguemos25/public_html/application/views/templates/web/page/Noticia_descripcion.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12494112355864c43c7d2fb0_33319641%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39a24b55aa41cb37269b9e027980984692c1baab' => 
    array (
      0 => '/home/investiguemos25/public_html/application/views/templates/web/page/Noticia_descripcion.tpl',
      1 => 1482998826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12494112355864c43c7d2fb0_33319641',
  'variables' => 
  array (
    'base_url' => 0,
    'caturl' => 0,
    'catnombre' => 0,
    'title' => 0,
    'fechanoticia' => 0,
    'nombreautor' => 0,
    'imagen' => 0,
    'video' => 0,
    'url' => 0,
    'descrip' => 0,
    'lista_cart' => 0,
    'l' => 0,
    'vistos' => 0,
    'vi' => 0,
    'tema' => 0,
    't' => 0,
    'lista_seis' => 0,
    'li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5864c43c88a677_40670037',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5864c43c88a677_40670037')) {
function content_5864c43c88a677_40670037 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12494112355864c43c7d2fb0_33319641';
?>
<section>
    <div class="container bg-todoh1m1">
        <div class="row" style="overflow: hidden;">
            <h5 style="margin-left:16px; font-size: 12px"> <strong>Home</strong> > <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/<?php echo $_smarty_tpl->tpl_vars['caturl']->value;?>
"><?php if (isset($_smarty_tpl->tpl_vars['catnombre']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['catnombre']->value;
}?></a></h5>
            <div class="col-sm-7 col-md-7" style="padding-top: 15px;">
                <h1 class="not-tita"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                <p>
                    <span class="date updated"><i class="fa fa-calendar"></i> <?php echo $_smarty_tpl->tpl_vars['fechanoticia']->value;?>
</span>
                    <span class="date updated"><i class="fa fa-user"></i><?php echo $_smarty_tpl->tpl_vars['nombreautor']->value;?>
 </span>
                </p>

                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img class="img-responsive center-block"  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/imagen/articulo/<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" alt=""/>
                        </li>
                        <?php if (!empty($_smarty_tpl->tpl_vars['video']->value)) {?>
                            <li>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['video']->value;?>
" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </li>
                        <?php }?>
                    </ul>
                </div>

                <div style="margin-top: 10px;margin-bottom: 15px;">
     
                    <div class="fb-like" data-href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" data-layout="button_count" data-action="like"  data-show-faces="false" data-share="true"  style="top: -5px;"></div>

                </div>
                <?php echo $_smarty_tpl->tpl_vars['descrip']->value;?>


                <h1 style="font-size: 20px;margin-bottom: 0px;">
                    <b>Etiquetas:</b>
                </h1>
                <div class="tagcloud">
                    <?php if (!empty($_smarty_tpl->tpl_vars['lista_cart']->value)) {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['lista_cart']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tema/<?php echo $_smarty_tpl->tpl_vars['l']->value['tema_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['tema'];?>
</a>
                        <?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
                    <?php }?>
                </div>
                
                        <h1  style="font-size: 20px;margin-bottom: 0px;"><b>Deja tu Comentario:</b></h1>
                        <div class="fb-comments" data-href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" data-numposts="5"></div>
                    
          



            </div>

            <div class="col-sm-5 col-md-5">
                <div class="row divcontncol2">
                    <div class="col-md-12">
                        <ul class="red-to1afgs1">
                            <li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/icono/facebook.png"></a></li>
                            <li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/icono/linkedin.png"></a></li>
                        </ul>
                    </div>

                    <div class="col-md-12">
                        <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs"> 
                            <ul id="myTabs2" class="nav nav-tabs" role="tablist"> 
                                <li role="presentation" class="active">
                                    <a href="#it1" id="it1-tab" role="tab" data-toggle="tab" aria-controls="it1" aria-expanded="true">
                                        Lo más visto
                                    </a>
                                </li> 

                                <li role="presentation" class="">
                                    <a href="#it3" role="tab" id="it3-tab" data-toggle="tab" aria-controls="it3" aria-expanded="false">
                                        Tag
                                    </a>
                                </li> 
                            </ul> 
                            <div id="myTabContent2" class="tab-content"> 
                                <div role="tabpanel" class="tab-pane fade active in" id="it1" aria-labelledby="it1-tab"> 
                                    <div>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['vistos']->value)) {?>
                                            <ul class="home-page-tab">
                                                <?php
$_from = $_smarty_tpl->tpl_vars['vistos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vi'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vi']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vi']->value) {
$_smarty_tpl->tpl_vars['vi']->_loop = true;
$foreach_vi_Sav = $_smarty_tpl->tpl_vars['vi'];
?>
                                                    <li class="post-tab-home">
                                                        <div class="image_rvw_wpr1">
                                                            <a href="#"> 
                                                                <img class="main" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
thumbs/100/75/articulo-<?php echo $_smarty_tpl->tpl_vars['vi']->value['imagen'];?>
">                
                                                            </a>
                                                        </div> 
                                                        <div class="feature-text">
                                                            <div class="post-title">
                                                                <h3>
                                                                    <a class="title alinkref" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['vi']->value['url'];?>
" title="">
                                                                        <?php echo $_smarty_tpl->tpl_vars['vi']->value['titulo'];?>
                      
                                                                    </a>
                                                                </h3>
                                                            </div> 
                                                            <p class="post-meta">
                                                                <span class="meta-date">
                                                                    <i class="fa fa-calendar"></i> 
                                                                    <?php echo $_smarty_tpl->tpl_vars['vi']->value['fecha'];?>

                                                                </span>

                                                                <span class="meta-comment last-meta">
                                                                    <a href="#">
                                                                        <i class="fa fa-eye"></i> 
                                                                        <?php echo $_smarty_tpl->tpl_vars['vi']->value['visto'];?>

                                                                    </a>
                                                                </span>
                                                            </p>
                                                            <!--<p class="noti-gscnt1">
                                                                Vestibulum molestie risus non mauris tincidunt iaculis id non elit. Sed id odio dui. In accumsan accumsan turpis, a lacinia nibh rhoncus eu. Class aptent taciti sociosqu ad litora torquent per...
                                                            </p>-->
                                                            <div class="more-link">
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['vi']->value['url'];?>
" class="read-more" title="">
                                                                    Leer más
                                                                </a>
                                                            </div>                          
                                                        </div>
                                                    </li>
                                                <?php
$_smarty_tpl->tpl_vars['vi'] = $foreach_vi_Sav;
}
?>
                                            </ul>
                                        <?php }?>

                                    </div>
                                </div> 

                                <div role="tabpanel" class="tab-pane fade" id="it3" aria-labelledby="it3-tab"> 
                                    <div class="tagcloud">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['tema']->value)) {?>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['tema']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tema/<?php echo $_smarty_tpl->tpl_vars['t']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['nombre'];?>
</a>
                                            <?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
                                        <?php }?>
                                    </div>
                                </div> 

                            </div> 
                        </div>
                    </div>

                    <?php if (!empty($_smarty_tpl->tpl_vars['lista_seis']->value)) {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['lista_seis']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['li'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['li']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['li']->value) {
$_smarty_tpl->tpl_vars['li']->_loop = true;
$foreach_li_Sav = $_smarty_tpl->tpl_vars['li'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['li']->value['numero'] == 1) {?>
                                <div class="col-md-12">
                                    <div class="post post-variant-1">
                                        <div class="post-inner">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
thumbs/389/292/articulo-<?php echo $_smarty_tpl->tpl_vars['li']->value['imagen'];?>
" width="536" height="411" alt="" class="img-responsive post-image">

                                            <div class="post-caption">
                                                <ul class="ullinewnot">
                                                    <li>
                                                        <a href="#">
                                                            <span class="label label-warning lab-txtq1">
                                                                Recientes
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="divgs-new">
                                                    <div class="h4 text-normal font-accent-2">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['li']->value['url'];?>
" class="ahref1gs">
                                                            <?php echo $_smarty_tpl->tpl_vars['li']->value['titulo'];?>

                                                        </a>
                                                    </div>
                                                    <div class="post-meta post-meta-hidden-outer">
                                                        <div class="element-groups-custom veil reveal-md-block">


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="divider divider-dashed">
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['li']->value['numero'] == 2) {?>
                                <div class="col-md-12">
                                    <article class="ma-1at12">
                                        <figure><img class="img-responsive center-block" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
thumbs/389/292/articulo-<?php echo $_smarty_tpl->tpl_vars['li']->value['imagen'];?>
" alt="Image 7"></figure>
                                        <div class="blog-boxnot_2">
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
                                                    <a href="#"><span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['li']->value['fecha'];?>
6</a>
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
                                    </article>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['li']->value['numero'] > 2) {?>
                                <div class="col-md-12">
                                    <article class="no-1dtica1bg">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
thumbs/80/60/articulo-<?php echo $_smarty_tpl->tpl_vars['li']->value['imagen'];?>
" alt="..." style="max-width: 80px;">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="no-1dtica1"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articulo/<?php echo $_smarty_tpl->tpl_vars['li']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['li']->value['titulo'];?>
</a></h4>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['li'] = $foreach_li_Sav;
}
?>
                    <?php }?>                     

                </div>
            </div>
        </div>

    </div>
</section><?php }
}
?>