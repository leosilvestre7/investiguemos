<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        <h1>Listar Autor</h1>
        <ol class="breadcrumb">
            <li class="active"><a href="{$base_url}manager"><i class="fa fa-home"></i> Inicio</a></li>
            <li class="active"><a href="{$base_url}manager/autor/listar"><i class="fa fa-plus"></i> Listar Autor</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <span class="response"></span>
            <div class="box-body table-responsive">
                {if empty($lista)}
                    <h1><small>No hay registros</small></h1>
                {else}
                    <div class="input-group col-md-3 pull-right" style="margin-bottom: 10px">
                        <input type="search" class="form-control query3" data-url="{$base_url}manager/autor/filtrar" placeholder="Buscar...">
                    </div>
                    <table class="table table-bordered table-hover table-responsive">
                        <tr style="background-color: #D8D8D8;">
                            <th>N°</th>
                            <th>Nombre & Apellido</th>
                            <th>Descripcion</th>
                            <th>Correo</th>
                            <th>Fecha Modificacion</th>
                            <th>Acción</th>
                        </tr>
                        {foreach $lista as $l}
                            <tr class="resultado">
                                <td>{$l.numero}</td>
                                <td>{$l.nombre}</td>
                                <td>{$l.descripcion}</td>
                                <td>{$l.correo}</td>
                                <td>{$l.f_modificacion}</td>
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