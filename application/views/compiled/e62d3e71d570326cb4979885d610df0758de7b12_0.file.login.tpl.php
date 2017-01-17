<?php /* Smarty version 3.1.27, created on 2016-12-24 13:15:36
         compiled from "/home/investiguemos25/public_html/application/views/templates/manager/page/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1897314766585e74f8422ce7_70367146%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e62d3e71d570326cb4979885d610df0758de7b12' => 
    array (
      0 => '/home/investiguemos25/public_html/application/views/templates/manager/page/login.tpl',
      1 => 1482470222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1897314766585e74f8422ce7_70367146',
  'variables' => 
  array (
    'base_url' => 0,
    'html_captcha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585e74f843b261_23042755',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585e74f843b261_23042755')) {
function content_585e74f843b261_23042755 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1897314766585e74f8422ce7_70367146';
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