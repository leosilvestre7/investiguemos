<?php /* Smarty version 3.1.27, created on 2017-01-17 00:19:20
         compiled from "C:\wamp\www\investiguemos\application\views\templates\web\structure\inter_footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16667587da9580837a8_76793214%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17ec73c270a95e69814b7daf2ba3f42fce99fa25' => 
    array (
      0 => 'C:\\wamp\\www\\investiguemos\\application\\views\\templates\\web\\structure\\inter_footer.tpl',
      1 => 1484497438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16667587da9580837a8_76793214',
  'variables' => 
  array (
    'base_url' => 0,
    'tema' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587da958139a34_62527412',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587da958139a34_62527412')) {
function content_587da958139a34_62527412 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16667587da9580837a8_76793214';
?>
<section>
    <div class="">
        <div class="container footer-bg">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <!--<h6 class="fotitluo-gas">Ultimos Artículos</h6>
                    <ul class="foot-ulli">
                        <li>
                            <a href="#">
                                Sobre mí
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Investigación Básica
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Investigación Aplicada
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Tecnociencia
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Contacto
                            </a>
                        </li>
                    </ul>-->
                </div>
                <div class="col-md-3">
                    <h6 class="fotitluo-gas">Categorias</h6>
                    <ul class="foot-ulli">
                        <!--  <li>
                              <a href="#">
                                  Sobre mí
                              </a>
                          </li>-->
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/ambiente">
                                Ambiente
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/educacion">
                                Educación
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/informacion">
                                Información
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/investigacion">
                                Investigacion
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categoria/actividades">
                                Actividades
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacto">
                                Contacto
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h6 class="fotitluo-gas">Tags</h6>
                    <ul class="gropu-cust">
                        <?php if (!empty($_smarty_tpl->tpl_vars['tema']->value)) {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['tema']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
                                <li>
                                    <a  class="btn boton-1gstag" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tema/<?php echo $_smarty_tpl->tpl_vars['t']->value['url'];?>
"><span class="fa fa-tag"></span><?php echo $_smarty_tpl->tpl_vars['t']->value['nombre'];?>
</a>

                                </li>
                            <?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container footer-bgbot">
            <div class="row">
                <div class="col-md-12">
                    <p class="footer-copyp"><a href="#"><span class="fa fa-envelope-o"></span> sabinomunoz@yahoo.com </a> | © 2017 <b><a href="http://system-geek.com/" target="_blank">SYSTEM GEEK</a></b>. Todos los derechos reservados.</p>
                </div>  
            </div>
        </div>
    </div>
</section><?php }
}
?>