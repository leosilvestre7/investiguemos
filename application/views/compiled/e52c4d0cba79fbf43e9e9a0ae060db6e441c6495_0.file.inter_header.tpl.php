<?php /* Smarty version 3.1.27, created on 2017-01-28 20:41:11
         compiled from "C:\wamp\www\investiguemos\application\views\templates\manager\structure\inter_header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26548588d48374439b6_06867154%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e52c4d0cba79fbf43e9e9a0ae060db6e441c6495' => 
    array (
      0 => 'C:\\wamp\\www\\investiguemos\\application\\views\\templates\\manager\\structure\\inter_header.tpl',
      1 => 1485654049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26548588d48374439b6_06867154',
  'variables' => 
  array (
    'emp_imagen' => 0,
    'emp_fullname' => 0,
    'emp_gdescription' => 0,
    'emp_today' => 0,
    'base_url' => 0,
    'emp_id' => 0,
    'empleado_activo' => 0,
    'articulo_activo' => 0,
    'categoria_activo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588d483785e831_80063445',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588d483785e831_80063445')) {
function content_588d483785e831_80063445 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26548588d48374439b6_06867154';
?>
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
                                <img src="<?php echo $_smarty_tpl->tpl_vars['emp_imagen']->value;?>
" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['emp_fullname']->value;?>
</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['emp_imagen']->value;?>
" class="img-circle" alt="User Image">
                                    <p>
                                        <?php echo $_smarty_tpl->tpl_vars['emp_fullname']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['emp_gdescription']->value;?>

                                        <small><?php echo $_smarty_tpl->tpl_vars['emp_today']->value;?>
</small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/empleado/editar/<?php echo $_smarty_tpl->tpl_vars['emp_id']->value;?>
" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/login/salir" class="btn btn-default btn-flat">Salir</a>
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
                        <img src="<?php echo $_smarty_tpl->tpl_vars['emp_imagen']->value;?>
" class="img-circle" alt="User Image">
                    </div>

                    <div class="pull-left info">
                        <p>Administrador</p>
                        <a href="#"><i class="fa fa-circle text-success" style="color: #B9D900;"></i> Online</a>
                    </div>
                </div>
                <ul class="sidebar-menu" >
                    <li class="header" style="background-color:#326482 !important;">Menú de Navegación</li>
                    <li class="treeview">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/home">
                            <i class="fa fa-home"></i> <span>Inicio</span>
                        </a>
                    </li>

                    <li class="treeview <?php if (isset($_smarty_tpl->tpl_vars['empleado_activo']->value)) {
echo $_smarty_tpl->tpl_vars['empleado_activo']->value;
}?>">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Usuario</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="background-color:#326482 !important;">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/empleado/agregar"><i class="fa fa-plus"></i> Agregar</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/empleado/listar"><i class="fa fa-list"></i> Listar</a></li>
                        </ul>
                    </li>
                    <li class="treeview <?php if (isset($_smarty_tpl->tpl_vars['articulo_activo']->value)) {
echo $_smarty_tpl->tpl_vars['articulo_activo']->value;
}?>">
                        <a href="#">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            <span>¿Qué es Investiguemos.net?</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="background-color:#326482 !important;">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/blog/editar/1"><i class="fa fa-plus"></i> Editar</a></li>
                        </ul>
                    </li>
                     <li class="treeview <?php if (isset($_smarty_tpl->tpl_vars['empleado_activo']->value)) {
echo $_smarty_tpl->tpl_vars['empleado_activo']->value;
}?>">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Autor</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="background-color:#326482 !important;">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/autor/agregar"><i class="fa fa-plus"></i> Agregar</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/autor/listar"><i class="fa fa-list"></i> Listar</a></li>
                        </ul>
                    </li>
                     <li class="treeview <?php if (isset($_smarty_tpl->tpl_vars['categoria_activo']->value)) {
echo $_smarty_tpl->tpl_vars['categoria_activo']->value;
}?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/tema/agregar">
                            <i class="fa fa-edit"></i>
                            <span>Temas</span>
                            <i class=""></i>
                        </a>
                    </li>
                    <li class="treeview <?php if (isset($_smarty_tpl->tpl_vars['articulo_activo']->value)) {
echo $_smarty_tpl->tpl_vars['articulo_activo']->value;
}?>">
                        <a href="#">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            <span>Articulo</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="background-color:#326482 !important;">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/articulo/agregar"><i class="fa fa-plus"></i> Agregar</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/articulo/listar"><i class="fa fa-list"></i> Listar</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>
<?php }
}
?>