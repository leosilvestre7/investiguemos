<?php /* Smarty version 3.1.27, created on 2016-12-21 01:24:23
         compiled from "C:\wamp\www\Blog_V2\application\views\templates\manager\page\form_autor.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29510585a2017ccb411_38221907%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b05e3c6e85b017186f8c40e4292502cf3790474' => 
    array (
      0 => 'C:\\wamp\\www\\Blog_V2\\application\\views\\templates\\manager\\page\\form_autor.tpl',
      1 => 1481091648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29510585a2017ccb411_38221907',
  'variables' => 
  array (
    'base_url' => 0,
    'tipo' => 0,
    'id' => 0,
    'emp_fullname' => 0,
    'emp_today' => 0,
    'emp_imagen' => 0,
    'nombre' => 0,
    'apellido_paterno' => 0,
    'apellido_materno' => 0,
    'descripcion' => 0,
    'correo' => 0,
    'web' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585a2017e422b9_54076644',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585a2017e422b9_54076644')) {
function content_585a2017e422b9_54076644 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29510585a2017ccb411_38221907';
?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'agregar') {?>
            <h1>Agregar Autor</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/autor/agregar"><i class="fa fa-plus"></i> Agregar Autor</a></li>
            </ol>
        <?php } else { ?>
            <h1>Editar Autor</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/autor/editar/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="fa fa-pencil"></i> Editar Autor</a></li>
            </ol>
        <?php }?>
    </section>
    <section class="content">
        <div class="row">
            <form class="bform" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/autor/accion" method="post">
                <div class="col-md-6">
                    <div class="box box-default">
                        <div class="box-header">
                            <h3 class="box-title">Información de Autor</h3>
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
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Nombre:</label>
                                <input type="text" class="form-control" name="nombre" value="<?php if (isset($_smarty_tpl->tpl_vars['nombre']->value)) {
echo $_smarty_tpl->tpl_vars['nombre']->value;
}?>" />
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon "></i> Apellido Paterno:</label>
                                <input type="text" class="form-control" name="apellido_paterno" value="<?php if (isset($_smarty_tpl->tpl_vars['apellido_paterno']->value)) {
echo $_smarty_tpl->tpl_vars['apellido_paterno']->value;
}?>" />
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon "></i> Apellido Materno:</label>
                                <input type="text" class="form-control" name="apellido_materno" value="<?php if (isset($_smarty_tpl->tpl_vars['apellido_materno']->value)) {
echo $_smarty_tpl->tpl_vars['apellido_materno']->value;
}?>" />
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                           <div class="form-group">
                                <label>Foto:</label>
                                <div class="input-group">
                                    <input type="file" name="imagen" multiple=""/>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label> Descripcion:</label>
                                <textarea class="form-control" cols="50" rows="15" name="descripcion" id="descripcion"><?php if (isset($_smarty_tpl->tpl_vars['descripcion']->value)) {
echo $_smarty_tpl->tpl_vars['descripcion']->value;
}?></textarea>
                                <?php echo '<script'; ?>
>CKEDITOR.replace('descripcion', {skin: 'office2013'});<?php echo '</script'; ?>
>
                            </div> 
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon "></i> Correo electronico:</label>
                                <input type="text" class="form-control" name="correo" value="<?php if (isset($_smarty_tpl->tpl_vars['correo']->value)) {
echo $_smarty_tpl->tpl_vars['correo']->value;
}?>" />
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon "></i> web:</label>
                                <input type="text" class="form-control" name="web" value="<?php if (isset($_smarty_tpl->tpl_vars['web']->value)) {
echo $_smarty_tpl->tpl_vars['web']->value;
}?>" />
                                <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="container-fluid">
                                <div class="social-auth-links text-center col-md-6">    
                                    <button class="save btn btn-social btn-block btn-primary btn-flat" data-toggle="tooltip" title="Guardar Autor">
                                        <i class="fa fa-save"></i> Guardar Autor</button>
                                    <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {
echo $_smarty_tpl->tpl_vars['id']->value;
}?>" />
                                </div>
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