<?php /* Smarty version 3.1.27, created on 2016-12-24 08:19:34
         compiled from "/home/investiguemos25/public_html/application/views/templates/manager/page/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:138541839585e75e6b74664_38980244%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '732660a73d3fdfe63b27592eddbfcf63896be5ab' => 
    array (
      0 => '/home/investiguemos25/public_html/application/views/templates/manager/page/home.tpl',
      1 => 1482470220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138541839585e75e6b74664_38980244',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585e75e6b98451_28884509',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585e75e6b98451_28884509')) {
function content_585e75e6b98451_28884509 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '138541839585e75e6b74664_38980244';
?>
<div class="content-wrapper" style="min-height: 698px;">

    <section class="content">
        <div class="row">
            <div class="col-sm-offset-6 col-sm-6 col-md-offset-3 col-md-9">
                <h1><strong>MÓDULOS PRINCIPALES</strong></h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-green " style="background: #3c8dbc !important">
                    <div class="inner color">
                        <h3>Autores</h3>
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/autor/agregar" style="color: #fff !important;">Agregar Autor</a></p>
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/autor/listar" style="color: #fff !important;">Ver Autores</a></p>
                    </div>

                    <a href="#" class="small-box-footer">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-green" style="background: #3c8dbc !important">
                    <div class="inner color">
                        <h3>Temas</h3>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/tema/agregar" style="color: #fff !important;"><p>Agregar Tema</p></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/tema/agregar" style="color: #fff !important;"><p>Listar Temas</p></a>
                    </div>

                    <a href="#" class="small-box-footer">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-green" style="background: #3c8dbc !important">
                    <div class="inner color">
                        <h3>Articulos</h3>
                         <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/articulo/agregar" style="color: #fff !important;"><p>Agregar Articulo</p></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/articulo/listar" style="color: #fff !important;"><p>Listar Articulos</p></a>
                    
                    </div>

                    <a href="#" class="small-box-footer">
                    </a>
                </div>
            </div>
        </div>
    </section>
</div><?php }
}
?>