<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        <h1>Listar Usuario</h1>
        <ol class="breadcrumb">
            <li class="active"><a href="{$base_url}manager"><i class="fa fa-home"></i> Inicio</a></li>
            <li class="active"><a href="{$base_url}manager/empleado/listar"><i class="fa fa-plus"></i> Listar Usuario</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body table-responsive">
                {if empty($lista)}
                    <h1><small>No hay registros</small></h1>
                {else}
                    <div class="input-group col-md-3 pull-right" style="margin-bottom: 10px">
                        <input type="search" class="form-control query11" data-url="{$base_url}manager/empleado/filtrar" placeholder="Buscar...">
                    </div>
                    <table class="table table-bordered table-hover table-responsive">
                        <tr style="background-color: #D8D8D8;">
                            <th>N°</th>
                            <th>Nombres & Apellidos</th>
                            <th>Usuario</th>
                            <th>Nivel</th>
                            <th>Teléfono</th>
                            <th>Fecha Registro</th>
                            <th>Acción</th>
                        </tr>
                        {foreach $lista as $l}
                            <tr class="resultado">
                                <td>{$l.numero}</td>
                                <td>{$l.nombre}</td>
                                <td>{$l.usuario}</td>
                                <td>{$l.cargo}</td>
                                <td>{$l.telefono}</td>
                                <td>{$l.f_registro}</td>
                                <td>{$l.accion}</td>
                            </tr>
                        {/foreach}
                    </table>
                    {$paginacion}
                {/if}
            </div>
        </div>
    </section>
</div>