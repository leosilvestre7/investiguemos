<body style="background-image: url('{$base_url}public/img/fondo/fondo.jpg') ;background-size: 100% 100%; background-repeat: no-repeat; ">

    <div class="login-box">
        <div class="login-logo">
        </div>
        <div class="login-box-body">
            <legend>Panel de acceso</legend>
            <form action="{$base_url}manager/login/ingresar" class="bform" method="post">
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
                                {$html_captcha}  
 
                                <a href="javascript:;" style="background:white;color:#D0F200;position: relative;height:36;  width:41px;    left: 270px;top: -72px;" class="btn btn-danger" data-widget="collapse" data-toggle="tooltip">
                                    
                                    <img class="img-responsive" src="{$base_url}public/img/favicon.png" alt="favicon exportandonline">
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
</body>