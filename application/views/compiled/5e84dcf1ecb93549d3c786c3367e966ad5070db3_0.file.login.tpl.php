<?php /* Smarty version 3.1.27, created on 2017-01-25 05:54:18
         compiled from "C:\wamp\www\investiguemos\application\views\templates\manager\page\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:342958882f7a223c27_37408091%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e84dcf1ecb93549d3c786c3367e966ad5070db3' => 
    array (
      0 => 'C:\\wamp\\www\\investiguemos\\application\\views\\templates\\manager\\page\\login.tpl',
      1 => 1484497418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '342958882f7a223c27_37408091',
  'variables' => 
  array (
    'base_url' => 0,
    'html_captcha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58882f7a2915e3_23022678',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58882f7a2915e3_23022678')) {
function content_58882f7a2915e3_23022678 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '342958882f7a223c27_37408091';
?>
<body style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/fondo/fondo.jpg') ;background-size: 100% 100%; background-repeat: no-repeat; ">

    <div class="login-box">
        <div class="login-logo">
        </div>
        <div class="login-box-body">
            <legend>Panel de acceso</legend>
            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/login/ingresar" class="bform" method="post">
                <span class="response"></span>
                <div class="form-group has-feedback">
                    <input type="text" name="login_username" class="form-control" placeholder="Usuario" autocomplete="off" />
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                
                <div class="form-group has-feedback">
                    <input type="password" name="login_password" class="form-control" placeholder="Contraseña" autocomplete="off" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                
         <!--       <div class="row">
                        <div class="col-sm-1 col-md-10">
                            <div id="div-captcha2" style="margin-bottom: -32px;">                             
                                <?php echo $_smarty_tpl->tpl_vars['html_captcha']->value;?>
  
 
                                <a href="javascript:;" style="background:white;color:#D0F200;position: relative;height:36;  width:41px;    left: 270px;top: -72px;" class="btn btn-danger" data-widget="collapse" data-toggle="tooltip">
                                    
                                    <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/favicon.png" alt="favicon exportandonline">
                                </a>
                            </div>
                        </div>
                                
                                
                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <input type="text" name="login_captcha" class="form-control" placeholder="Codigo de Seguridad" autocomplete="off" />
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                        </div>
                </div>      -->
                
                <div class="social-auth-links text-center">
                    <button href="#"  class="save btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-thumbs-up"></i> Loguear</button>
                    <button type="reset" style="background: #03AF50 !important;" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-times"></i> Limpiar</button>
                </div>
            </form>
        </div>
    </div>
</body><?php }
}
?>