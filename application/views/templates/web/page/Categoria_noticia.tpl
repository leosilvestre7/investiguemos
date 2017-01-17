<section>
    <div class="container bg-todoh1m1">
        <div class="row" style="overflow: hidden;">
            <div class="col-sm-7 col-md-7" style="padding-top: 15px;">
                <h4 class="tg-todo1ll1"><span>{$nombre}</span></h4>
                <div class="main-post-large-style">
                    {if !empty($lista_siete_ult)}
                        {foreach $lista_siete_ult as $s}
                            <ul class="list-category1">
                                <li>
                                    <div class="blog-boxnot_2">
                                        <div class="blog-putleft_1"><img src="{$base_url}thumbs/240/180/articulo-{$s.imagen}" alt="Image 7"></div>
                                        <div class="caption">
                                            <div class="txt_blog2">
                                                <h3 class="">
                                                    <a href="{$base_url}articulo/{$s.url}">
                                                        {$s.titulo}
                                                    </a>
                                                </h3>
                                            </div>
                                            <p class="txt_blog4">
                                                <a href="#"><span class="fa fa-calendar"></span> {$s.f_creacion}</a>
                                                <a href="#"><i class="fa fa-eye"></i> {$s.visto}</a>
                                            </p>
                                            <div class="txt_blog3">
                                                {$s.descripcion}
                                            </div>
                                            <div class="more-link">
                                                <a href="{$base_url}articulo/{$s.url}" class="read-more" title="">
                                                    Leer más
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            {/foreach}
                        </ul>
                    {/if}
                </div>
            </div>

            <div class="col-sm-5 col-md-5">
                <div class="row divcontncol2">
                    <div class="col-md-12">
                        <ul class="red-to1afgs1">
                            <li><a href="#"><img src="{$base_url}public/img/icono/facebook.png"></a></li>
                            <li><a href="#"><img src="{$base_url}public/img/icono/twitter.png"></a></li>
                            <li><a href="#"><img src="{$base_url}public/img/icono/youtube.png"></a></li>
                            <li><a href="#"><img src="{$base_url}public/img/icono/flickr.png"></a></li>
                            <li><a href="#"><img src="{$base_url}public/img/icono/linkedin.png"></a></li>
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
                                        {if !empty($vistos)}
                                            <ul class="home-page-tab">
                                                {foreach $vistos as $vi}
                                                    <li class="post-tab-home">
                                                        <div class="image_rvw_wpr1">
                                                            <a href="#"> 
                                                                <img class="main" src="{$base_url}thumbs/100/75/articulo-{$vi.imagen}">                
                                                            </a>
                                                        </div> 
                                                        <div class="feature-text">
                                                            <div class="post-title">
                                                                <h3>
                                                                    <a class="title alinkref" href="{$base_url}articulo/{$vi.url}" title="">
                                                                       {$vi.titulo}                      
                                                                    </a>
                                                                </h3>
                                                            </div> 
                                                            <p class="post-meta">
                                                                <span class="meta-date">
                                                                    <i class="fa fa-calendar"></i> 
                                                                   {$vi.fecha}
                                                                </span>

                                                                <span class="meta-comment last-meta">
                                                                    <a href="#">
                                                                        <i class="fa fa-eye"></i> 
                                                                        {$vi.visto}
                                                                    </a>
                                                                </span>
                                                            </p>
                                                            <!--<p class="noti-gscnt1">
                                                                Vestibulum molestie risus non mauris tincidunt iaculis id non elit. Sed id odio dui. In accumsan accumsan turpis, a lacinia nibh rhoncus eu. Class aptent taciti sociosqu ad litora torquent per...
                                                            </p>-->
                                                            <div class="more-link">
                                                                <a href="{$base_url}articulo/{$vi.url}" class="read-more" title="">
                                                                    Leer más
                                                                </a>
                                                            </div>                          
                                                        </div>
                                                    </li>
                                                {/foreach}
                                            </ul>
                                        {/if}

                                    </div>
                                </div> 

                                <div role="tabpanel" class="tab-pane fade" id="it3" aria-labelledby="it3-tab"> 
                                    <div class="tagcloud">
                                          {if !empty($tema)}
                                            {foreach $tema as $t}
                                                <a href="{$base_url}tema/{$t.url}">{$t.nombre}</a>
                                            {/foreach}
                                        {/if}
                                    </div>
                                </div> 

                            </div> 
                        </div>
                    </div>
    {if !empty($lista_seis)}
        {foreach $lista_seis as $li}
            {if $li.numero==1}
                    <div class="col-md-12">
                        <div class="post post-variant-1">
                            <div class="post-inner">
                                <img src="{$base_url}thumbs/389/292/articulo-{$li.imagen}" width="536" height="411" alt="" class="img-responsive post-image">

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
                                           <a href="{$base_url}articulo/{$li.url}" class="ahref1gs">
                                               {$li.titulo}
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
             {/if}
             {if $li.numero==2}
                    <div class="col-md-12">
                        <article class="ma-1at12">
                            <figure><img class="img-responsive center-block" src="{$base_url}thumbs/389/292/articulo-{$li.imagen}" alt="Image 7"></figure>
                            <div class="blog-boxnot_2">
                                <div class="caption">
                                    <div class="txt_blog2">
                                        <h3 class="">
                                             <a href="{$base_url}articulo/{$li.url}">
                                               {$li.titulo}
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="txt_blog4">
                                        <a href="#"><span class="fa fa-calendar"></span> {$li.fecha}6</a>
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
                        </article>
                    </div>
                            {/if}
                            {if $li.numero>2}
                    <div class="col-md-12">
                        <article class="no-1dtica1bg">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{$base_url}thumbs/80/60/articulo-{$li.imagen}" alt="..." style="max-width: 80px;">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="no-1dtica1"><a href="{$base_url}articulo/{$li.url}">{$li.titulo}</a></h4>
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

    </div>
</section>