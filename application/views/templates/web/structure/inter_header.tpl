<body id="page-top">
    <!-- Start Navigation -->
  
      
            <div class="container" style="background: #00bffe;">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mn-fecha1">
                            <span>Fecha:</span> 
                        {if isset($fecha2)}{$fecha2}{/if}
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
                    <img class="img-responsive" src="{$base_url}public/img/portada/banner.jpg">
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
                        <li class="blog-mnhvr"><a href="{$base_url}home">Home</a></li>                    
                        <!--<li class="blog-mnhvr"><a href="#">Sobre mí</a></li>-->
                        <li class="blog-mnhvr"><a href="{$base_url}categoria/ambiente">Ambiente</a></li>
                        <li class="blog-mnhvr"><a href="{$base_url}categoria/educacion">Educación</a></li>
                        <li class="blog-mnhvr"><a href="{$base_url}categoria/informacion">Información</a></li>
                        <li class="blog-mnhvr"><a href="{$base_url}categoria/investigacion">Investigación</a></li>
                        <li class="blog-mnhvr"><a href="{$base_url}categoria/actividades">Actividades</a></li>

                    </ul>
                </div>
            </div>   
        </nav>
    </section>
     </div>
<!-- End Navigation -->
<div class="clearfix"></div>