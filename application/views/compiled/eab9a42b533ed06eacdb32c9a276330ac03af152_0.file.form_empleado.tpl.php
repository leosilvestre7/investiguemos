<?php /* Smarty version 3.1.27, created on 2016-12-21 01:33:25
         compiled from "C:\wamp\www\Blog_V2\application\views\templates\manager\page\form_empleado.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30364585a22351b5cf1_84607575%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eab9a42b533ed06eacdb32c9a276330ac03af152' => 
    array (
      0 => 'C:\\wamp\\www\\Blog_V2\\application\\views\\templates\\manager\\page\\form_empleado.tpl',
      1 => 1461206519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30364585a22351b5cf1_84607575',
  'variables' => 
  array (
    'tipo' => 0,
    'base_url' => 0,
    'id' => 0,
    'emp_fullname' => 0,
    'emp_today' => 0,
    'emp_imagen' => 0,
    'usuario' => 0,
    'niveles' => 0,
    'nombre' => 0,
    'apellido' => 0,
    'correo' => 0,
    'documento' => 0,
    'f_nac' => 0,
    'telefono' => 0,
    'celular' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585a2235364fa9_87339148',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585a2235364fa9_87339148')) {
function content_585a2235364fa9_87339148 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30364585a22351b5cf1_84607575';
?>
<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'agregar') {?>
            <h1>Agregar Usuario</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/empleado/agregar"><i class="fa fa-plus"></i> Agregar empleado</a></li>
            </ol>
        <?php } else { ?>
            <h1>Editar Usuario</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/empleado/editar/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="fa fa-pencil"></i> Editar empleado</a></li>
            </ol>
        <?php }?>
    </section>
    <section class="content">
        <div class="row">
            <form class="bform" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/empleado/accion" method="post">
                <div class="col-md-6">
                    <div class="box box-default">
                        <div class="box-header">
                            <h3 class="box-title">Información de usuario</h3>
                        </div>
                        <div class="box-body">
                            <div class="direct-chat-msg">
                                <div class='direct-chat-info clearfix'>
                                    <span class='direct-chat-name pull-left'><?php echo $_smarty_tpl->tpl_vars['emp_fullname']->value;?>
</span>
                                    <span class='direct-chat-timestamp pull-right'><?php echo $_smarty_tpl->tpl_vars['emp_today']->value;?>
</span>
                                </div>
                                <img class="direct-chat-img" src="<?php echo $_smarty_tpl->tpl_vars['emp_imagen']->value;?>
" />
                                <div class="direct-chat-text">
                                    Recuerda... 
                                    los campos con <i class="glyphicon glyphicon-asterisk text-red"></i> son obligatorios...
                                </div>
                            </div>
                            <span class="response"></span>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Usuario:</label>
                                <input type="text" class="form-control" name="usuario" value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value;
}?>" />
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label> Contraseña:</label>
                                <input type="password" class="form-control" name="contrasena"/>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label> Repetir contraseña:</label>
                                <input type="password" class="form-control" name="re_contrasena"/>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Nivel:</label>
                                <div class="input-group"><?php if (isset($_smarty_tpl->tpl_vars['niveles']->value)) {
echo $_smarty_tpl->tpl_vars['niveles']->value;
}?></div>
                            </div>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Nombres:</label>
                                <input type="text" class="form-control" name="nombre" value="<?php if (isset($_smarty_tpl->tpl_vars['nombre']->value)) {
echo $_smarty_tpl->tpl_vars['nombre']->value;
}?>" />
                                <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Apellidos:</label>
                                <input type="text" class="form-control" name="apellido" value="<?php if (isset($_smarty_tpl->tpl_vars['apellido']->value)) {
echo $_smarty_tpl->tpl_vars['apellido']->value;
}?>" />
                                <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="container-fluid">
                                <div class="social-auth-links text-center col-md-6">    
                                    <button class="save btn btn-social btn-block btn-primary btn-flat" data-toggle="tooltip" title="Guardar usuario">
                                        <i class="fa fa-save"></i> Guardar usuario</button>
                                    <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {
echo $_smarty_tpl->tpl_vars['id']->value;
}?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-default">
                        <div class="box-header">
                            <h3 class="box-title">Información de usuario</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Correo electronico:</label>
                                <input type="text" class="form-control" name="correo" value="<?php if (isset($_smarty_tpl->tpl_vars['correo']->value)) {
echo $_smarty_tpl->tpl_vars['correo']->value;
}?>" />
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Imágen:</label>
                                <div class="input-group">
                                    <input type="file" name="imagen" multiple=""/>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Documento:</label>
                                <input type="text" class="form-control" name="documento" value="<?php if (isset($_smarty_tpl->tpl_vars['documento']->value)) {
echo $_smarty_tpl->tpl_vars['documento']->value;
}?>" />
                                <span class="glyphicon glyphicon-bullhorn form-control-feedback"></span>
                            </div>
                            <!--<div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Fecha de Nacimiento:</label>
                                <input type="text" class="form-control" id="datepicker" name="f_nac" value="<?php if (isset($_smarty_tpl->tpl_vars['f_nac']->value)) {
echo $_smarty_tpl->tpl_vars['f_nac']->value;
}?>" />
                                <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                            </div>-->
                            <div class="form-group has-feedback">
                                <label> Teléfono:</label>
                                <input type="text" class="form-control" name="telefono" value="<?php if (isset($_smarty_tpl->tpl_vars['telefono']->value)) {
echo $_smarty_tpl->tpl_vars['telefono']->value;
}?>" />
                                <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label> Celular:</label>
                                <input type="text" class="form-control" name="celular" value="<?php if (isset($_smarty_tpl->tpl_vars['celular']->value)) {
echo $_smarty_tpl->tpl_vars['celular']->value;
}?>" />
                                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.10.2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//code.jquery.com/ui/1.11.4/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function() {
            $("#datepicker").datepicker({
                dateFormat: 'dd-mm-yy',
                showOtherMonths: true,
                selectOtherMonths: true,
                changeMonth: true,
                changeYear: true,
                yearRange: '1900:2015'
            });
        });
    <?php echo '</script'; ?>
>

</div><?php }
}
?>