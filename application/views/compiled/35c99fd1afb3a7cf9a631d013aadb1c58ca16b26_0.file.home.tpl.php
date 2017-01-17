<?php /* Smarty version 3.1.27, created on 2016-12-21 01:27:41
         compiled from "C:\wamp\www\Blog_V2\application\views\templates\manager\page\home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12016585a20dd062f67_27503130%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35c99fd1afb3a7cf9a631d013aadb1c58ca16b26' => 
    array (
      0 => 'C:\\wamp\\www\\Blog_V2\\application\\views\\templates\\manager\\page\\home.tpl',
      1 => 1482301657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12016585a20dd062f67_27503130',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585a20dd0ee6e8_46755769',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585a20dd0ee6e8_46755769')) {
function content_585a20dd0ee6e8_46755769 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12016585a20dd062f67_27503130';
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
manager/articulo/agregar" style="color: #fff !important;"><p>Listar Articulos</p></a>
                    
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