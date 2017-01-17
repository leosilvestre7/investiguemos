<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        <h1>Observar Cliente</h1>
        <ol class="breadcrumb">
            <li class="active"><a href="{$base_url}manager"><i class="fa fa-home"></i> Inicio</a></li>
            <li class="active"><a href="{$base_url}manager/empleado/agregar"><i class="fa fa-plus"></i> Agregar empleado</a></li>
            <li class="active"><a href="{$base_url}manager/empleado/observar/{$id}"><i class="fa fa-search"></i> Observar empleado</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-default">
                    <div class="box-body">
                        <div class="direct-chat-msg">
                            <div class='direct-chat-info clearfix'>
                                <span class='direct-chat-timestamp pull-right'>{$emp_today}</span>
                                <legend style="margin-top: -20px;"><h1><small class="text-capitalize">Usuario: {if isset($nombre)}{$nombre}{/if}</small></h1></legend>  
                            </div>
                        </div>
                        <table border='1' id="datatable" class="table table-bordered table-striped table-hover">
                            <tr>
                                <td align='center' rowspan="5">{$imagen}</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: middle; text-align: left"><label>Usuario:</label></td>
                                <td  style="vertical-align: middle; text-align: left"><label><i>{if isset($usuario)}{$usuario}{/if}</i></label></td>
                            </tr>
                            <tr>
                                <td  style="vertical-align: middle; text-align: left"><label>Grado:</label></td>
                                <td  style="vertical-align: middle; text-align: left"><label><i>{if isset($nivel)}{$nivel}{/if}</i></label></td>
                            </tr>
                            <tr>
                                <td  style="vertical-align: middle; text-align: left"><label>Nombre:</label></td>
                                <td  style="vertical-align: middle; text-align: left"><label><i>{if isset($nombre)}{$nombre}{/if}</i></label></td>
                            </tr>
                            <tr>
                                <td  style="vertical-align: middle; text-align: left"><label>Apellido:</label></td>
                                <td  style="vertical-align: middle; text-align: left"><label><i>{if isset($apellido)}{$apellido}{/if}</i></label></td>
                            </tr>
                            <tr>
                                <td  style="vertical-align: middle; text-align: left"><label>Documento:</label></td>
                                <td colspan="2" style="vertical-align: middle; text-align: left"><label><i>{if isset($documento)}{$documento}{/if}</i></label></td>
                            </tr>
                            <tr>
                                <td  style="vertical-align: middle; text-align: left"><label>Email:</label></td>
                                <td colspan="2" style="vertical-align: middle; text-align: left"><label><i>{if isset($correo)}{$correo}{/if}</i></label></td>
                            </tr>
                            <tr>
                                <td  style="vertical-align: middle; text-align: left"><label>Teléfono:</label></td>
                                <td colspan="2" style="vertical-align: middle; text-align: left"><label><i>{if isset($telefono)}{$telefono}{/if}</i></label></td>
                            </tr>
                            <tr>
                                <td  style="vertical-align: middle; text-align: left"><label>Celular:</label></td>
                                <td colspan="2" style="vertical-align: middle; text-align: left"><label><i>{if isset($celular)}{$celular}{/if}</i></label></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="{$base_url}manager/empleado/editar/{if isset($id)}{$id}{/if}"><img src="{$base_url}public/img/manager/editar.png"></a>
            </div>
    </section>
</div>