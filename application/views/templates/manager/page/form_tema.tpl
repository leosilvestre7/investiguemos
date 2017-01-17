<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        {if $tipo == 'agregar'}
            <h1>Agregar Tema</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="{$base_url}manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="{$base_url}manager/tema/agregar"><i class="fa fa-plus"></i> Agregar categoría</a></li>
            </ol>
        {else}
            <h1>Editar Tema</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="{$base_url}manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="{$base_url}manager/tema/editar/{$id}"><i class="fa fa-pencil"></i> Editar categoría</a></li>
            </ol>
        {/if}
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Información de Categoría</h3>
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="direct-chat-msg">
                        <div class='direct-chat-info clearfix'>
                            <span class='direct-chat-name pull-left'>{if isset($emp_fullname)}{$emp_fullname}{/if}</span>
                            <span class='direct-chat-timestamp pull-right'>{if isset($emp_today)}{$emp_today}{/if}</span>
                        </div>
                        <img class="direct-chat-img" src="{$emp_imagen}"/>
                        <div class="direct-chat-text">
                            Recuerda... 
                            los campos con <i class="glyphicon glyphicon-asterisk text-red"></i> son obligatorios...
                        </div>
                    </div>
                    <form class="bform" action="{$base_url}manager/tema/accion" method="post">
                        <span class="col-md-12 response"></span>
                        <div class="form-group has-feedback">
                            <label><i class="glyphicon glyphicon-asterisk text-red"></i> Nombre:</label>
                            <input type="text" class="form-control" name="nombre" value="{if isset($nombre)}{$nombre}{/if}" />
                            <!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <button class="btn btn-social btn-primary" data-toggle="tooltip" title="Guardar tema">
                                    <i class="fa fa-save"></i> Guardar tema
                                </button>
                                <input type="hidden" name="id" value="{if isset($id)}{$id}{/if}" />
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 table-responsive">
                    {if empty($lista)}
                        <h1><small>No hay registros</small></h1>
                    {else}
                        <div class="input-group col-md-5 pull-right" style="margin-bottom: 10px">
                            <input type="search" class="form-control query6" data-url="{$base_url}manager/tema/filtrar" placeholder="Buscar...">
                        </div>
                        <table class="table table-bordered table-hover table-responsive">
                            <tr style="background-color: #D8D8D8;">
                                <th>N°</th>
                                <th>Tema</th>
                                <th>Acción</th>
                            </tr>
                            {foreach $lista as $l}
                                <tr class="resultado">
                                    <td>{$l.numero}</td>
                                    <td>{$l.nombre}</td>
                                    <td>{$l.accion}</td>
                                </tr>
                            {/foreach}
                        </table>
                        {$paginacion}
                    {/if}
                </div>
                <legend></legend>
            </div>
        </div>
    </section>
</div>