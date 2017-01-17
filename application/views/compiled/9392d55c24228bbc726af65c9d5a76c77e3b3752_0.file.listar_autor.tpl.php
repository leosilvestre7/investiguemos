<?php /* Smarty version 3.1.27, created on 2016-12-21 01:24:19
         compiled from "C:\wamp\www\Blog_V2\application\views\templates\manager\page\listar_autor.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11081585a20137cb6c4_35641382%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9392d55c24228bbc726af65c9d5a76c77e3b3752' => 
    array (
      0 => 'C:\\wamp\\www\\Blog_V2\\application\\views\\templates\\manager\\page\\listar_autor.tpl',
      1 => 1461206517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11081585a20137cb6c4_35641382',
  'variables' => 
  array (
    'base_url' => 0,
    'lista' => 0,
    'l' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585a20138fba18_35791228',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585a20138fba18_35791228')) {
function content_585a20138fba18_35791228 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11081585a20137cb6c4_35641382';
?>
<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        <h1>Listar Autor</h1>
        <ol class="breadcrumb">
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager"><i class="fa fa-home"></i> Inicio</a></li>
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/autor/listar"><i class="fa fa-plus"></i> Listar Autor</a></li>
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
                        <input type="search" class="form-control query3" data-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/autor/filtrar" placeholder="Buscar...">
                    </div>
                    <table class="table table-bordered table-hover table-responsive">
                        <tr style="background-color: #D8D8D8;">
                            <th>N°</th>
                            <th>Nombre & Apellido</th>
                            <th>Descripcion</th>
                            <th>Correo</th>
                            <th>Fecha Modificacion</th>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['descripcion'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['correo'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['f_modificacion'];?>
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