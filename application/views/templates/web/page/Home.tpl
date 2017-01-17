<section>
    <div class="container bg-todoh1m1">

        <div class="row" style="overflow: hidden;">
            <div class="col-sm-7 col-md-7" style="padding-top: 15px;">
                <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider">
                        {if isset($slider)}
                            {foreach $slider as $s}
                                <img src="{$base_url}thumbs/599/336/articulo-{$s.imagen}" alt="" title="#{$s.numero}"/>
                            {/foreach}
                        {/if}
                    </div>
                    <!-- TEXTOS DE SLIDER-->
                    {if isset($slider)}
                        {foreach $slider as $s}
                            <div id="{$s.numero}" class="nivo-html-caption">
                                <h1><a href="{$base_url}articulo/{$s.url}">{$s.titulo}</a></h1>
                                <p>
                                    {$s.descripcion}
                                </p>
                                <p class="fecha-slider">
                                    <span>
                                        <i class="fa fa-calendar"></i> 
                                        {$s.fecha}
                                    </span>
                                </p>
                            </div>
                        {/foreach}
                    {/if}

                </div>
                <div class="main-post-large-style">
                    <ul class="list-category1">
                        {if isset($lista_tres_ult)}
                            {foreach $lista_tres_ult as $li}    
                                <li>
                                    <div class="blog-boxnot_2">
                                        <div class="blog-putleft_1"><img src="{$base_url}thumbs/240/135/articulo-{$li.imagen}" alt=""></div>
                                        <div class="caption">
                                            <div class="txt_blog2">
                                                <h3 class="">
                                                    <a href="{$base_url}articulo/{$li.url}">
                                                        {$li.titulo}
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="txt_blog4">
                                                <a href="#"><span class="fa fa-calendar"></span> {$li.f_creacion}</a>
                                                <a href="#"><i class="fa fa-eye"></i> {$li.visto}</a>
                                            </p>
                                            <div class="txt_blog3">
                                                {$li.descripcion}
                                            </div>
                                            <div class="more-link">
                                                <a href="{$base_url}articulo/{$li.url}" class="read-more" title="">
                                                    Leer más
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            {/foreach}
                        {/if}
                    </ul>
                </div>
            </div>

            <div class="col-sm-5 col-md-5">
                <div class="row divcontncol2">
                    <div class="col-md-12">
                        <ul class="red-to1afgs1">
                            <li><a href="https://www.facebook.com/Investiguemosnet-1018872178224649/"><img src="{$base_url}public/img/icono/facebook.png"></a></li>
                            <li><a href="#"><img src="{$base_url}public/img/icono/twitter.png"></a></li>
                            <li><a href="#"><img src="{$base_url}public/img/icono/youtube.png"></a></li>
                            <li><a href="https://www.linkedin.com/in/sabino-mu%C3%B1oz-1b0443109" target="_blank"><img src="{$base_url}public/img/icono/linkedin.png"></a></li>
                        </ul>

                        <div class="post post-variant-1">
                            <div class="post-inner">
                                {if !empty($vistos)}
                                    {foreach $vistos as $v}
                                        {if $v.numero==1}
                                            <img src="{$base_url}thumbs/536/411/articulo-{$v.imagen}" width="536" height="411" alt="" class="img-responsive post-image">

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
                                                        <a href="{$base_url}articulo/{$li.url}" class="ahref1gs">
                                                            {$v.titulo}
                                                        </a>
                                                    </div>
                                                    <div class="post-meta post-meta-hidden-outer">
                                                        <div class="element-groups-custom veil reveal-md-block">
                                                            <a href="#" class="post-meta-author ahref1gs1">
                                                                <span>Por</span>
                                                                {$li.autor}
                                                            </a>
                                                            <a href="#" class="post-meta-time ahref1gs2">
                                                                <span class="fa fa-clock-o"></span>
                                                                <time datetime="2016-06-06">{$li.fecha}</time>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        {/if}
                                    {/foreach}
                                {/if}
                            </div>
                        </div>
                        <hr class="divider divider-dashed">
                    </div>

                    <div class="col-md-12">
                        {if !empty($vistos)}
                            {foreach $vistos as $v}
                                {if $v.numero==2}
                                    <article class="ma-1at12">
                                        <figure><img class="img-responsive center-block" src="{$base_url}thumbs/536/411/articulo-{$v.imagen}" alt="Image 7"></figure>
                                        <div class="blog-boxnot_2">
                                            <div class="caption">
                                                <div class="txt_blog2">
                                                    <h3 class="">
                                                        <a href="{$base_url}articulo/{$li.url}">
                                                             {$v.titulo}
                                                        </a>
                                                    </h3>
                                                </div>
                                                <p class="txt_blog4">
                                                    <a href="#"><span class="fa fa-calendar"></span>{$v.fecha}</a>
                                                    <a href="#"><i class="fa fa-eye"></i> {$v.visto}</a>
                                                </p>
                                                <div class="txt_blog3">
                                                   {$v.descripcion}
                                                </div>
                                                <div class="more-link">
                                                    <a href="{$base_url}articulo/{$li.url}" class="read-more" title="">
                                                        Leer más
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                {/if}
                            {/foreach}
                        {/if}
                    </div>
                      {if !empty($vistos)}
                            {foreach $vistos as $v}
                                {if $v.numero>2}
                    <div class="col-md-12">
                        <article class="no-1dtica1bg">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{$base_url}thumbs/80/60/articulo-{$v.imagen}" alt="..." style="max-width: 80px;">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="no-1dtica1"><a href="{$base_url}articulo/{$li.url}">{$v.titulo}</a></h4>
                                </div>
                            </div>
                        </article>
                    </div>
                                {/if}
                            {/foreach}
                        {/if}      
                  
                  
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 bor-car1selq">
                <div class="slider responva">
                    {foreach $lista_articulos as $l}
                        <div>
                            <div class="post-titletwo">
                                <h3>
                                    <a class="title-gs" href="#" title="">
                                        <img class="center-block img-responsive" src="{$base_url}public/imagen/articulo/{$l.imagen}">
                                        {$l.titulo}                   
                                    </a>
                                </h3>
                            </div>
                            <p class="post-meta">
                                <span class="meta-date">
                                    <i class="fa fa-calendar"></i> {$l.f_creacion}
                                </span>

                            </p>
                        </div>
                    {/foreach}

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h1 class="blog-sect3titag1"><a href="#">Ambiente</a></h1>
                <ul class="list-category1">
                    {if !empty($lista_ambiente)}
                        {foreach $lista_ambiente as $am}
                            {if $am.numero == 1}
                                <li>
                                    <div class="blog-boxnot_2">
                                        <div class="blog-putcntr_2"><img src="{$base_url}thumbs/329/247/articulo-{$am.imagen}" alt="Image 7"></div>
                                        <div class="caption">
                                            <div class="txt_blog2">
                                                <h3 class="">
                                                    <a href="{$base_url}articulo/{$am.url}">
                                                        {$am.titulo}
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="txt_blog4">
                                                <a href="#"><span class="fa fa-calendar"></span> {$am.f_creacion}</a>
                                                <a href="#"><i class="fa fa-eye"></i> {$am.visto}</a>
                                            </p>
                                            <div class="txt_blog3">
                                                {$am.descripcion}
                                            </div>
                                            <div class="more-link">
                                                <a href="{$base_url}articulo/{$am.url}" class="read-more" title="">
                                                    Leer más
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            {/if}
                        {/foreach}
                    {/if}
                </ul>
                <div>
                    <ul class="home-page-tab">
                        {if !empty($lista_ambiente)}
                            {foreach $lista_ambiente as $am}
                                {if $am.numero > 1}
                                    <li class="post-tab-home pst-bord-1">
                                        <div class="image_rvw_wpr1">
                                            <a href="#"> 
                                                <img class="main" src="{$base_url}thumbs/100/75/articulo-{$am.imagen}">                
                                            </a>
                                        </div> 
                                        <div class="feature-text">
                                            <div class="post-title">
                                                <h3>
                                                    <a class="title alinkref" href="{$base_url}articulo/{$am.url}" title="">
                                                        {$am.titulo}                  
                                                    </a>
                                                </h3>
                                            </div> 
                                            <div class="more-link">
                                                <a href="{$base_url}articulo/{$am.url}" class="read-more" title="">
                                                    Leer más
                                                </a>
                                            </div>                          
                                        </div>
                                    </li>
                                {/if}
                            {/foreach}
                        {/if}
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <h1 class="blog-sect3titag1"><a href="#">Educación</a></h1>
                <ul class="list-category1">
                    {if !empty($lista_educacion)}
                        {foreach $lista_educacion as $am}
                            {if $am.numero == 1}
                                <li>
                                    <div class="blog-boxnot_2">
                                        <div class="blog-putcntr_2"><img src="{$base_url}thumbs/329/247/articulo-{$am.imagen}" alt="Image 7"></div>
                                        <div class="caption">
                                            <div class="txt_blog2">
                                                <h3 class="">
                                                    <a href="{$base_url}articulo/{$am.url}">
                                                        {$am.titulo}
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="txt_blog4">
                                                <a href="#"><span class="fa fa-calendar"></span> {$am.f_creacion}</a>
                                                <a href="#"><i class="fa fa-eye"></i> {$am.visto}</a>
                                            </p>
                                            <div class="txt_blog3">
                                                {$am.descripcion}
                                            </div>
                                            <div class="more-link">
                                                <a href="{$base_url}articulo/{$am.url}" class="read-more" title="">
                                                    Leer más
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            {/if}
                        {/foreach}
                    {/if}
                </ul>
                <div>
                    <ul class="home-page-tab">
                        {if !empty($lista_educacion)}
                            {foreach $lista_educacion as $am}
                                {if $am.numero > 1}
                                    <li class="post-tab-home pst-bord-1">
                                        <div class="image_rvw_wpr1">
                                            <a href="#"> 
                                                <img class="main" src="{$base_url}thumbs/100/75/articulo-{$am.imagen}">                
                                            </a>
                                        </div> 
                                        <div class="feature-text">
                                            <div class="post-title">
                                                <h3>
                                                    <a class="title alinkref" href="{$base_url}articulo/{$am.url}" title="">
                                                        {$am.titulo}                  
                                                    </a>
                                                </h3>
                                            </div> 
                                            <div class="more-link">
                                                <a href="{$base_url}articulo/{$am.url}" class="read-more" title="">
                                                    Leer más
                                                </a>
                                            </div>                          
                                        </div>
                                    </li>
                                {/if}
                            {/foreach}
                        {/if}
                    </ul>

                </div>
            </div>
            <div class="col-md-4">
                <h1 class="blog-sect3titag1"><a href="#">Información</a></h1>
                <ul class="list-category1">
                    {if !empty($lista_informacion)}
                        {foreach $lista_informacion as $am}
                            {if $am.numero == 1}
                                <li>
                                    <div class="blog-boxnot_2">
                                        <div class="blog-putcntr_2"><img src="{$base_url}thumbs/329/247/articulo-{$am.imagen}" alt="Image 7"></div>
                                        <div class="caption">
                                            <div class="txt_blog2">
                                                <h3 class="">
                                                    <a href="{$base_url}articulo/{$am.url}">
                                                        {$am.titulo}
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="txt_blog4">
                                                <a href="#"><span class="fa fa-calendar"></span> {$am.f_creacion}</a>
                                                <a href="#"><i class="fa fa-eye"></i> {$am.visto}</a>
                                            </p>
                                            <div class="txt_blog3">
                                                {$am.descripcion}
                                            </div>
                                            <div class="more-link">
                                                <a href="{$base_url}articulo/{$am.url}" class="read-more" title="">
                                                    Leer más
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            {/if}
                        {/foreach}
                    {/if}

                </ul>
                <div>
                    <ul class="home-page-tab">
                        {if !empty($lista_informacion)}
                            {foreach $lista_informacion as $am}
                                {if $am.numero > 1}
                                    <li class="post-tab-home pst-bord-1">
                                        <div class="image_rvw_wpr1">
                                            <a href="#"> 
                                                <img class="main" src="{$base_url}thumbs/100/75/articulo-{$am.imagen}">               
                                            </a>
                                        </div> 
                                        <div class="feature-text">
                                            <div class="post-title">
                                                <h3>
                                                    <a class="title alinkref" href="{$base_url}articulo/{$am.url}" title="">
                                                        {$am.titulo}                  
                                                    </a>
                                                </h3>
                                            </div> 
                                            <div class="more-link">
                                                <a href="{$base_url}articulo/{$am.url}" class="read-more" title="">
                                                    Leer más
                                                </a>
                                            </div>                          
                                        </div>
                                    </li>
                                {/if}
                            {/foreach}
                        {/if}

                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>