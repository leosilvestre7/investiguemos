<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        <h1>Listar Libros</h1>
        <ol class="breadcrumb">
            <li class="active"><a href="{$base_url}manager"><i class="fa fa-home"></i> Inicio</a></li>
            <li class="active"><a href="{$base_url}manager/libro/listar"><i class="fa fa-plus"></i> Listar Usuario</a></li>
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
                        <input type="search" class="form-control query5" data-url="{$base_url}manager/libro/filtrar" placeholder="Buscar...">
                    </div>
                    <table class="table table-bordered table-hover table-responsive">
                        <tr style="background-color: #D8D8D8;">
                            <th>N°</th>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Imagen</th>
                            <th>Link</th>
                            <th>Correo</th>
                            <th>Fecha Modificacion</th>
                            <th>Acción</th>
                        </tr>
                        {foreach $lista as $l}
                            <tr class="resultado">
                                <td>{$l.numero}</td>
                                <td>{$l.nombre}</td>
                                <td>{$l.descripcion}</td>
                                <td>
                                    {if !empty($l.imagen)}
                                    <img style="width: 100px;" src="{$base_url}public/imagen/libro/{$l.imagen}"/>
                                    {else}
                                      <img style="width: 100px;" src="{$base_url}public/imagen/libro/empty.png"/>
                                    {/if}
                                </td>
                                <td>{$l.link}</td>
                                <td>{$l.correo}</td>
                                <td>{$l.fecha_modificacion}</td>
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