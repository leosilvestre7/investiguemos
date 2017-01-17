<?php /* Smarty version 3.1.27, created on 2016-12-21 01:33:15
         compiled from "C:\wamp\www\Blog_V2\application\views\templates\manager\page\listar_empleado.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9743585a222b1ee5c7_48322346%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53c0bddb4853aba01bc00c6b072059acccc52c2c' => 
    array (
      0 => 'C:\\wamp\\www\\Blog_V2\\application\\views\\templates\\manager\\page\\listar_empleado.tpl',
      1 => 1461206517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9743585a222b1ee5c7_48322346',
  'variables' => 
  array (
    'base_url' => 0,
    'lista' => 0,
    'l' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585a222b34d861_30557534',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585a222b34d861_30557534')) {
function content_585a222b34d861_30557534 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9743585a222b1ee5c7_48322346';
?>
<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        <h1>Listar Usuario</h1>
        <ol class="breadcrumb">
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager"><i class="fa fa-home"></i> Inicio</a></li>
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/empleado/listar"><i class="fa fa-plus"></i> Listar Usuario</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body table-responsive">
                <?php if (empty($_smarty_tpl->tpl_vars['lista']->value)) {?>
                    <h1><small>No hay registros</small></h1>
                <?php } else { ?>
                    <div class="input-group col-md-3 pull-right" style="margin-bottom: 10px">
                        <input type="search" class="form-control query11" data-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/empleado/filtrar" placeholder="Buscar...">
                    </div>
                    <table class="table table-bordered table-hover table-responsive">
                        <tr style="background-color: #D8D8D8;">
                            <th>N°</th>
                            <th>Nombres & Apellidos</th>
                            <th>Usuario</th>
                            <th>Nivel</th>
                            <th>Teléfono</th>
                            <th>Fecha Registro</th>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['usuario'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['cargo'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['telefono'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['f_registro'];?>
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
        </div>
    </section>
</div><?php }
}
?>