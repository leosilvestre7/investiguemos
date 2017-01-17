<?php /* Smarty version 3.1.27, created on 2016-12-24 12:18:26
         compiled from "/home/investiguemos25/public_html/application/views/templates/manager/page/listar_articulo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1186667174585eade2105384_86790467%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b8f29b6af426c05fd7ef18eb4f9a3958d35a29c' => 
    array (
      0 => '/home/investiguemos25/public_html/application/views/templates/manager/page/listar_articulo.tpl',
      1 => 1482470221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1186667174585eade2105384_86790467',
  'variables' => 
  array (
    'base_url' => 0,
    'lista' => 0,
    'l' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585eade2179c56_35419663',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585eade2179c56_35419663')) {
function content_585eade2179c56_35419663 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1186667174585eade2105384_86790467';
?>
<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        <h1>Listar </h1>
        <ol class="breadcrumb">
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager"><i class="fa fa-home"></i> Inicio</a></li>
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/articulo/listar"><i class="fa fa-plus"></i> Listar Articulo</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
                <span class="response"></span>
            <div class="box-body table-responsive">
                <?php if (empty($_smarty_tpl->tpl_vars['lista']->value)) {?>
                    <h1><small>No hay registros</small></h1>
                <?php } else { ?>
                    <div class="input-group col-md-3 pull-right" style="margin-bottom: 10px">
                        <input type="search" class="form-control query7" data-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/articulo/filtrar" placeholder="Buscar...">
                    </div>
                    <table class="table table-bordered table-hover table-responsive">
                        <tr style="background-color: #D8D8D8;">
                            <th>N°</th>
                            <th>Articulo</th>
                            <th>Autor</th>
                            <th>Imagen</th>
                            <th>Fecha de Creación</th>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['titulo'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['autor'];?>
</td>
                                <td>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['l']->value['imagen'])) {?>
                                    <img style="width: 100px;" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/imagen/articulo/<?php echo $_smarty_tpl->tpl_vars['l']->value['imagen'];?>
"/>
                                    <?php } else { ?>
                                    <img style="width: 100px;" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/imagen/articulo/empty.png"/>
                                    <?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['f_creacion'];?>
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