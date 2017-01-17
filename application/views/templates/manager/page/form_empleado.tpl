<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        {if $tipo == 'agregar'}
            <h1>Agregar Usuario</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="{$base_url}manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="{$base_url}manager/empleado/agregar"><i class="fa fa-plus"></i> Agregar empleado</a></li>
            </ol>
        {else}
            <h1>Editar Usuario</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="{$base_url}manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="{$base_url}manager/empleado/editar/{$id}"><i class="fa fa-pencil"></i> Editar empleado</a></li>
            </ol>
        {/if}
    </section>
    <section class="content">
        <div class="row">
            <form class="bform" action="{$base_url}manager/empleado/accion" method="post">
                <div class="col-md-6">
                    <div class="box box-default">
                        <div class="box-header">
                            <h3 class="box-title">Información de usuario</h3>
                        </div>
                        <div class="box-body">
                            <div class="direct-chat-msg">
                                <div class='direct-chat-info clearfix'>
                                    <span class='direct-chat-name pull-left'>{$emp_fullname}</span>
                                    <span class='direct-chat-timestamp pull-right'>{$emp_today}</span>
                                </div>
                                <img class="direct-chat-img" src="{$emp_imagen}" />
                                <div class="direct-chat-text">
                                    Recuerda... 
                                    los campos con <i class="glyphicon glyphicon-asterisk text-red"></i> son obligatorios...
                                </div>
                            </div>
                            <span class="response"></span>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Usuario:</label>
                                <input type="text" class="form-control" name="usuario" value="{if isset($usuario)}{$usuario}{/if}" />
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label> Contraseña:</label>
                                <input type="password" class="form-control" name="contrasena"/>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label> Repetir contraseña:</label>
                                <input type="password" class="form-control" name="re_contrasena"/>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Nivel:</label>
                                <div class="input-group">{if isset($niveles)}{$niveles}{/if}</div>
                            </div>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Nombres:</label>
                                <input type="text" class="form-control" name="nombre" value="{if isset($nombre)}{$nombre}{/if}" />
                                <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Apellidos:</label>
                                <input type="text" class="form-control" name="apellido" value="{if isset($apellido)}{$apellido}{/if}" />
                                <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="container-fluid">
                                <div class="social-auth-links text-center col-md-6">    
                                    <button class="save btn btn-social btn-block btn-primary btn-flat" data-toggle="tooltip" title="Guardar usuario">
                                        <i class="fa fa-save"></i> Guardar usuario</button>
                                    <input type="hidden" name="id" value="{if isset($id)}{$id}{/if}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-default">
                        <div class="box-header">
                            <h3 class="box-title">Información de usuario</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Correo electronico:</label>
                                <input type="text" class="form-control" name="correo" value="{if isset($correo)}{$correo}{/if}" />
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Imágen:</label>
                                <div class="input-group">
                                    <input type="file" name="imagen" multiple=""/>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Documento:</label>
                                <input type="text" class="form-control" name="documento" value="{if isset($documento)}{$documento}{/if}" />
                                <span class="glyphicon glyphicon-bullhorn form-control-feedback"></span>
                            </div>
                            <!--<div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Fecha de Nacimiento:</label>
                                <input type="text" class="form-control" id="datepicker" name="f_nac" value="{if isset($f_nac)}{$f_nac}{/if}" />
                                <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                            </div>-->
                            <div class="form-group has-feedback">
                                <label> Teléfono:</label>
                                <input type="text" class="form-control" name="telefono" value="{if isset($telefono)}{$telefono}{/if}" />
                                <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label> Celular:</label>
                                <input type="text" class="form-control" name="celular" value="{if isset($celular)}{$celular}{/if}" />
                                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker({
                dateFormat: 'dd-mm-yy',
                showOtherMonths: true,
                selectOtherMonths: true,
                changeMonth: true,
                changeYear: true,
                yearRange: '1900:2015'
            });
        });
    </script>

</div>