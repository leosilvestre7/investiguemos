<?php /* Smarty version 3.1.27, created on 2017-01-28 20:41:17
         compiled from "C:\wamp\www\investiguemos\application\views\templates\manager\page\form_blog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12253588d483d241f68_91178428%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddbf3f8bf84a3ad8d62586261e0852d11694d1b3' => 
    array (
      0 => 'C:\\wamp\\www\\investiguemos\\application\\views\\templates\\manager\\page\\form_blog.tpl',
      1 => 1485492033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12253588d483d241f68_91178428',
  'variables' => 
  array (
    'base_url' => 0,
    'tipo' => 0,
    'id' => 0,
    'emp_fullname' => 0,
    'emp_today' => 0,
    'emp_imagen' => 0,
    'descripcion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588d483d40b190_33525029',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588d483d40b190_33525029')) {
function content_588d483d40b190_33525029 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12253588d483d241f68_91178428';
?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'agregar') {?>
            <h1>Agregar blog</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/blog/agregar"><i class="fa fa-plus"></i> Agregar blog</a></li>
            </ol>
        <?php } else { ?>
            <h1>Editar blog</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/blog/editar/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="fa fa-pencil"></i> Editar blog</a></li>
            </ol>
        <?php }?>
    </section>
    <section class="content">
        <div class="row">
            <form class="bform" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/blog/accion" method="post">
                <div class="col-md-6">
                    <div class="box box-default">
                        <div class="box-header">
                            <h3 class="box-title">Información de blog</h3>
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
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Descripcion:</label>
                                <textarea class="form-control" cols="50" rows="15" name="descripcion" id="descripcion"><?php if (isset($_smarty_tpl->tpl_vars['descripcion']->value)) {
echo $_smarty_tpl->tpl_vars['descripcion']->value;
}?></textarea>
                                <?php echo '<script'; ?>
>CKEDITOR.replace('descripcion', {skin: 'office2013'});<?php echo '</script'; ?>
>
                            </div>

                        </div>
                        <div class="box-footer">
                            <div class="container-fluid">
                                <div class="social-auth-links text-center col-md-6">
                                    <button class="save btn btn-social btn-block btn-primary btn-flat" data-toggle="tooltip" title="Guardar blog">
                                        <i class="fa fa-save"></i> Guardar blog</button>
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

</div>
<?php }
}
?>