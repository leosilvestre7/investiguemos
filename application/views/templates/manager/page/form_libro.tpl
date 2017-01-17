<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        {if $tipo == 'agregar'}
            <h1>Agregar Libro</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="{$base_url}manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="{$base_url}manager/libro/agregar"><i class="fa fa-plus"></i> Agregar libro</a></li>
            </ol>
        {else}
            <h1>Editar libro</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="{$base_url}manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="{$base_url}manager/libro/editar/{$id}"><i class="fa fa-pencil"></i> Editar libro</a></li>
            </ol>
        {/if}
    </section>
    <section class="content">
        <div class="row">
            <form class="bform" action="{$base_url}manager/libro/accion" method="post">
                <div class="col-md-6">
                    <div class="box box-default">
                        <div class="box-header">
                            <h3 class="box-title">Información de Libro</h3>
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
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Nombre:</label>
                                <input type="text" class="form-control" name="nombre" value="{if isset($nombre)}{$nombre}{/if}" />
                                <span class="glyphicon glyphicon-book form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Descripcion:</label>
                                <input type="text" class="form-control" name="descripcion" value="{if isset($descripcion)}{$descripcion}{/if}" />
                                <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                            </div>
                             <div class="form-group">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Imágen:</label>
                                <div class="input-group">
                                    <input type="file" name="imagen" multiple=""/>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label> link:</label>
                                <input type="text" class="form-control" name="link" value="{if isset($link)}{$link}{/if}" />
                                <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Correo:</label>
                                <input type="text" class="form-control" name="correo" value="{if isset($correo)}{$correo}{/if}" />
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            
                        </div>
                        <div class="box-footer">
                            <div class="container-fluid">
                                <div class="social-auth-links text-center col-md-6">    
                                    <button class="save btn btn-social btn-block btn-primary btn-flat" data-toggle="tooltip" title="Guardar Libro">
                                        <i class="fa fa-save"></i> Guardar libro</button>
                                    <input type="hidden" name="id" value="{if isset($id)}{$id}{/if}" />
                                </div>
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