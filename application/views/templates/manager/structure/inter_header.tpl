<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header" style="background-color:#326482 !important;">
            <a href="#" class="logo" style="background-color:#326482 !important;">
                <span class="logo-mini"><b>BLOG</b></span>
                <span class="logo-lg"><b>BLOG</b></span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation" style="background-color:#326482 !important;" >
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                     
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{$emp_imagen}" class="user-image" alt="User Image">
                                <span class="hidden-xs">{$emp_fullname}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="{$emp_imagen}" class="img-circle" alt="User Image">
                                    <p>
                                        {$emp_fullname} - {$emp_gdescription}
                                        <small>{$emp_today}</small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{$base_url}manager/empleado/editar/{$emp_id}" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{$base_url}manager/login/salir" class="btn btn-default btn-flat">Salir</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar" style="background-color:#326482 !important;">            
            <section class="sidebar" style="background-color:#3c8dbc !important;">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{$emp_imagen}" class="img-circle" alt="User Image">
                    </div>
                    
                    <div class="pull-left info">
                        <p>Administrador</p>
                        <a href="#"><i class="fa fa-circle text-success" style="color: #B9D900;"></i> Online</a>
                    </div>
                </div>
                <ul class="sidebar-menu" >
                    <li class="header" style="background-color:#326482 !important;">Menú de Navegación</li>
                    <li class="treeview">
                        <a href="{$base_url}manager/home">
                            <i class="fa fa-home"></i> <span>Inicio</span>
                        </a>
                    </li>
         
                    <li class="treeview {if isset($empleado_activo)}{$empleado_activo}{/if}">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Usuario</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="background-color:#326482 !important;">
                            <li><a href="{$base_url}manager/empleado/agregar"><i class="fa fa-plus"></i> Agregar</a></li>
                            <li><a href="{$base_url}manager/empleado/listar"><i class="fa fa-list"></i> Listar</a></li>
                        </ul>
                    </li>
                     <li class="treeview {if isset($empleado_activo)}{$empleado_activo}{/if}">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Autor</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="background-color:#326482 !important;">
                            <li><a href="{$base_url}manager/autor/agregar"><i class="fa fa-plus"></i> Agregar</a></li>
                            <li><a href="{$base_url}manager/autor/listar"><i class="fa fa-list"></i> Listar</a></li>
                        </ul>
                    </li>
                     <li class="treeview {if isset($categoria_activo)}{$categoria_activo}{/if}">
                        <a href="{$base_url}manager/tema/agregar">
                            <i class="fa fa-edit"></i>
                            <span>Temas</span>
                            <i class=""></i>
                        </a>
                    </li>
                    <li class="treeview {if isset($articulo_activo)}{$articulo_activo}{/if}">
                        <a href="#">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            <span>Articulo</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="background-color:#326482 !important;">
                            <li><a href="{$base_url}manager/articulo/agregar"><i class="fa fa-plus"></i> Agregar</a></li>
                            <li><a href="{$base_url}manager/articulo/listar"><i class="fa fa-list"></i> Listar</a></li>
                        </ul>
                    </li> 
                </ul>
            </section>
        </aside>