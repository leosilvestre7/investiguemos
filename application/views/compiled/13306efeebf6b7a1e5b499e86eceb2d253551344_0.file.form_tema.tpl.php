<?php /* Smarty version 3.1.27, created on 2016-12-21 01:20:30
         compiled from "C:\wamp\www\Blog_V2\application\views\templates\manager\page\form_tema.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6362585a1f2ea20701_48813220%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13306efeebf6b7a1e5b499e86eceb2d253551344' => 
    array (
      0 => 'C:\\wamp\\www\\Blog_V2\\application\\views\\templates\\manager\\page\\form_tema.tpl',
      1 => 1481091233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6362585a1f2ea20701_48813220',
  'variables' => 
  array (
    'tipo' => 0,
    'base_url' => 0,
    'id' => 0,
    'emp_fullname' => 0,
    'emp_today' => 0,
    'emp_imagen' => 0,
    'nombre' => 0,
    'lista' => 0,
    'l' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585a1f2edb4fd2_19864550',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585a1f2edb4fd2_19864550')) {
function content_585a1f2edb4fd2_19864550 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6362585a1f2ea20701_48813220';
?>
<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'agregar') {?>
            <h1>Agregar Tema</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/tema/agregar"><i class="fa fa-plus"></i> Agregar categoría</a></li>
            </ol>
        <?php } else { ?>
            <h1>Editar Tema</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/tema/editar/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="fa fa-pencil"></i> Editar categoría</a></li>
            </ol>
        <?php }?>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Información de Categoría</h3>
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="direct-chat-msg">
                        <div class='direct-chat-info clearfix'>
                            <span class='direct-chat-name pull-left'><?php if (isset($_smarty_tpl->tpl_vars['emp_fullname']->value)) {
echo $_smarty_tpl->tpl_vars['emp_fullname']->value;
}?></span>
                            <span class='direct-chat-timestamp pull-right'><?php if (isset($_smarty_tpl->tpl_vars['emp_today']->value)) {
echo $_smarty_tpl->tpl_vars['emp_today']->value;
}?></span>
                        </div>
                        <img class="direct-chat-img" src="<?php echo $_smarty_tpl->tpl_vars['emp_imagen']->value;?>
"/>
                        <div class="direct-chat-text">
                            Recuerda... 
                            los campos con <i class="glyphicon glyphicon-asterisk text-red"></i> son obligatorios...
                        </div>
                    </div>
                    <form class="bform" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/tema/accion" method="post">
                        <span class="col-md-12 response"></span>
                        <div class="form-group has-feedback">
                            <label><i class="glyphicon glyphicon-asterisk text-red"></i> Nombre:</label>
                            <input type="text" class="form-control" name="nombre" value="<?php if (isset($_smarty_tpl->tpl_vars['nombre']->value)) {
echo $_smarty_tpl->tpl_vars['nombre']->value;
}?>" />
                            <!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <button class="btn btn-social btn-primary" data-toggle="tooltip" title="Guardar tema">
                                    <i class="fa fa-save"></i> Guardar tema
                                </button>
                                <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {
echo $_smarty_tpl->tpl_vars['id']->value;
}?>" />
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 table-responsive">
                    <?php if (empty($_smarty_tpl->tpl_vars['lista']->value)) {?>
                        <h1><small>No hay registros</small></h1>
                    <?php } else { ?>
                        <div class="input-group col-md-5 pull-right" style="margin-bottom: 10px">
                            <input type="search" class="form-control query6" data-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/tema/filtrar" placeholder="Buscar...">
                        </div>
                        <table class="table table-bordered table-hover table-responsive">
                            <tr style="background-color: #D8D8D8;">
                                <th>N°</th>
                                <th>Tema</th>
                                <th>Acción</th>
                            </tr>
                            <?php
$_from = $_smarty_tpl->tpl_vars['lista']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?>
                                <tr class="resultado">
                                    <td><?php echo $_smarty_tpl->tpl_vars['l']->value['numero'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['l']->value['nombre'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['l']->value['accion'];?>
</td>
                                </tr>
                            <?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
                        </table>
                        <?php echo $_smarty_tpl->tpl_vars['paginacion']->value;?>

                    <?php }?>
                </div>
                <legend></legend>
            </div>
        </div>
    </section>
</div><?php }
}
?>