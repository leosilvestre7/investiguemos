<?php /* Smarty version 3.1.27, created on 2016-12-13 05:03:35
         compiled from "C:\wamp\www\Blog_V2\application\views\templates\web\structure\inter_footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24813584fc777f1dd38_42259640%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9f40b4401e92cc2cd9a4f183e57f815a52ae1d8' => 
    array (
      0 => 'C:\\wamp\\www\\Blog_V2\\application\\views\\templates\\web\\structure\\inter_footer.tpl',
      1 => 1481623390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24813584fc777f1dd38_42259640',
  'variables' => 
  array (
    'base_url' => 0,
    'tema' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584fc778108891_51053088',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584fc778108891_51053088')) {
function content_584fc778108891_51053088 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24813584fc777f1dd38_42259640';
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
                    <p class="footer-copyp"><a href="#"><span class="fa fa-envelope-o"></span> namemail@mail.com</a> | © 2015 <b>LOREM IPSUM</b>. Todos los derechos reservados.</p>
                </div>  
            </div>
        </div>
    </div>
</section><?php }
}
?>