<?php /* Smarty version 3.1.27, created on 2017-01-07 17:04:12
         compiled from "/home/investiguemos25/public_html/application/views/templates/manager/page/ver_articulo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:171474325587165dc42c736_45400114%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a22b8575b5985a7fb0c77c0e0aa6b82334cde5e7' => 
    array (
      0 => '/home/investiguemos25/public_html/application/views/templates/manager/page/ver_articulo.tpl',
      1 => 1482470222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171474325587165dc42c736_45400114',
  'variables' => 
  array (
    'base_url' => 0,
    'id' => 0,
    'emp_today' => 0,
    'nombre' => 0,
    'imagen' => 0,
    'titulo' => 0,
    'descripcion' => 0,
    'video' => 0,
    'autor' => 0,
    'tema_id' => 0,
    'fecha_modificacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587165dc80f2d7_67453027',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587165dc80f2d7_67453027')) {
function content_587165dc80f2d7_67453027 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '171474325587165dc42c736_45400114';
?>
<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        <h1>Observar Articulo</h1>
        <ol class="breadcrumb">
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager"><i class="fa fa-home"></i> Inicio</a></li>
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/articulo/agregar"><i class="fa fa-plus"></i> Agregar Articulo</a></li>
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/articulo/observar/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="fa fa-search"></i> Observar Articulo</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-default">
                    <div class="box-body">
                        <div class="direct-chat-msg">
                            <div class='direct-chat-info clearfix'>
                                <span class='direct-chat-timestamp pull-right'><?php echo $_smarty_tpl->tpl_vars['emp_today']->value;?>
</span>
                                <legend style="margin-top: -20px;"><h1><small class="text-capitalize">Articulo: <?php if (isset($_smarty_tpl->tpl_vars['nombre']->value)) {
echo $_smarty_tpl->tpl_vars['nombre']->value;
}?></small></h1></legend>  
                            </div>
                        </div>
                        <table border='1' id="datatable" class="table table-bordered table-striped table-hover">
                            <tr>
                                <td align='center' rowspan="5"><?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: middle; text-align: left"><label>Articulo:</label></td>
                                <td  style="vertical-align: middle; text-align: left"><label><i><?php if (isset($_smarty_tpl->tpl_vars['titulo']->value)) {
echo $_smarty_tpl->tpl_vars['titulo']->value;
}?></i></label></td>
                            </tr>
                            <tr>
                                <td  style="vertical-align: middle; text-align: left"><label>Descripcion:</label></td>
                                <td  style="vertical-align: middle; text-align: left"><label><i><?php if (isset($_smarty_tpl->tpl_vars['descripcion']->value)) {
echo $_smarty_tpl->tpl_vars['descripcion']->value;
}?></i></label></td>
                            </tr>
                            <tr>
                                <td  style="vertical-align: middle; text-align: left"><label>Video:</label></td>
                                <td  style="vertical-align: middle; text-align: left"><label><i><?php if (isset($_smarty_tpl->tpl_vars['video']->value)) {
echo $_smarty_tpl->tpl_vars['video']->value;
}?></i></label></td>
                            </tr>
                            <tr>
                                <td  style="vertical-align: middle; text-align: left"><label>Autor:</label></td>
                                <td  style="vertical-align: middle; text-align: left"><label><i><?php if (isset($_smarty_tpl->tpl_vars['autor']->value)) {
echo $_smarty_tpl->tpl_vars['autor']->value;
}?></i></label></td>
                            </tr>
                            <tr>
                                <td  style="vertical-align: middle; text-align: left"><label>Categoria:</label></td>
                                <td colspan="2" style="vertical-align: middle; text-align: left"><label><i><?php if (isset($_smarty_tpl->tpl_vars['tema_id']->value)) {
echo $_smarty_tpl->tpl_vars['tema_id']->value;
}?></i></label></td>
                            </tr>
                            <tr>
                                <td  style="vertical-align: middle; text-align: left"><label>Fecha de Modificacion:</label></td>
                                <td colspan="2" style="vertical-align: middle; text-align: left"><label><i><?php if (isset($_smarty_tpl->tpl_vars['fecha_modificacion']->value)) {
echo $_smarty_tpl->tpl_vars['fecha_modificacion']->value;
}?></i></label></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/articulo/editar/<?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {
echo $_smarty_tpl->tpl_vars['id']->value;
}?>"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/manager/editar.png"></a>
            </div>
    </section>
</div><?php }
}
?>