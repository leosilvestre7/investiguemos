<?php /* Smarty version 3.1.27, created on 2016-12-21 01:46:50
         compiled from "C:\wamp\www\Blog_V2\application\views\templates\manager\page\form_articulo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:846585a255a7bf701_83115905%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e550a8374a697ddf60ac2109a1ad053a2d95d2b9' => 
    array (
      0 => 'C:\\wamp\\www\\Blog_V2\\application\\views\\templates\\manager\\page\\form_articulo.tpl',
      1 => 1481090937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '846585a255a7bf701_83115905',
  'variables' => 
  array (
    'base_url' => 0,
    'tipo' => 0,
    'id' => 0,
    'emp_fullname' => 0,
    'emp_today' => 0,
    'emp_imagen' => 0,
    'titulo' => 0,
    'categoria' => 0,
    'descripcion' => 0,
    'fecha' => 0,
    'video' => 0,
    'autor' => 0,
    'tema' => 0,
    'lista_cart' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585a255a9ebc67_07205164',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585a255a9ebc67_07205164')) {
function content_585a255a9ebc67_07205164 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '846585a255a7bf701_83115905';
?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'agregar') {?>
            <h1>Agregar Articulo</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/articulo/agregar"><i class="fa fa-plus"></i> Agregar Articulo</a></li>
            </ol>
        <?php } else { ?>
            <h1>Editar Articulo</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/articulo/editar/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="fa fa-pencil"></i> Editar Articulo</a></li>
            </ol>
        <?php }?>
    </section>
    <section class="content">
        <div class="row">
            <form class="bform" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/articulo/accion" method="post">
                <div class="col-md-6">
                    <div class="box box-default">
                        <div class="box-header">
                            <h3 class="box-title">Información de Articulo</h3>
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
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Titulo:</label>
                                <input type="text" class="form-control" name="titulo" value="<?php if (isset($_smarty_tpl->tpl_vars['titulo']->value)) {
echo $_smarty_tpl->tpl_vars['titulo']->value;
}?>" />
                                <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                            </div>  
                                <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Categoría:</label>
                                    <?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>

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
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Fecha de Publicaciòn:</label>
                                <input type="text" class="form-control datepicker" name="fecha" value="<?php if (isset($_smarty_tpl->tpl_vars['fecha']->value)) {
echo $_smarty_tpl->tpl_vars['fecha']->value;
}?>" />
                                <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                            </div> 
                            
                        </div>
                        <div class="box-footer">
                            <div class="container-fluid">
                                <div class="social-auth-links text-center col-md-6">    
                                    <button class="save btn btn-social btn-block btn-primary btn-flat" data-toggle="tooltip" title="Guardar articulo">
                                        <i class="fa fa-save"></i> Guardar Articulo</button>
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
                            <div class="form-group">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Imágen:</label>
                                <div class="input-group">
                                    <input type="file" name="imagen" multiple=""/>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label>Video:</label>
                                <input type="text" class="form-control" name="video" value="<?php if (isset($_smarty_tpl->tpl_vars['video']->value)) {
echo $_smarty_tpl->tpl_vars['video']->value;
}?>" />
                                <span class="glyphicon glyphicon-film form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Autor:</label>
                                    <?php echo $_smarty_tpl->tpl_vars['autor']->value;?>

                            </div> 
                        <div class="form-group has-feedback">
                        <div class="form-group has-feedback">
                            <div class="row">
                                <div class="col-md-6">
                                    <label><i class="glyphicon glyphicon-asterisk text-red"></i> Temas:</label>
                                    <?php echo $_smarty_tpl->tpl_vars['tema']->value;?>

                                </div>  
                                <div class="col-md-1">
                                    <a class="btn btn-primary item" data-toggle="tooltip" title="Agregar Item" style="margin-top: 23px"><i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-hover table-responsive" id="table-it">
                                <thead>
                                    <tr style="background-color: #D8D8D8;">
                                        <th>Categoria</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                            <tr class="item-<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
"> 
                                                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['tema'];?>
<input type="hidden" name="e_tema[]" value="<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
"></td>
                                                <td>
                                                    <a name="tema"class="btn btn-danger remove-item-id" data-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/articulo/eliminar_item" data-id="<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
" data-toggle="tooltip" title="Eliminar item"><i class="fa fa-trash"></i></a>
                                                    <input type="hidden" class="form-control" style="width: 70px;" name="e_id[]" value="<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
">
                                                </td> 
                                            </tr>
                                        <?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?> 
                                    <?php } else { ?>
                                        <tr class="none">
                                            <td colspan="4">No hay detalles...</td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>                              
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