<script src="{$base_url}public/plugins/ckeditor/ckeditor.js"></script>
<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        {if $tipo == 'agregar'}
            <h1>Agregar Articulo</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="{$base_url}manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="{$base_url}manager/articulo/agregar"><i class="fa fa-plus"></i> Agregar Articulo</a></li>
            </ol>
        {else}
            <h1>Editar Articulo</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="{$base_url}manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="{$base_url}manager/articulo/editar/{$id}"><i class="fa fa-pencil"></i> Editar Articulo</a></li>
            </ol>
        {/if}
    </section>
    <section class="content">
        <div class="row">
            <form class="bform" action="{$base_url}manager/articulo/accion" method="post">
                <div class="col-md-6">
                    <div class="box box-default">
                        <div class="box-header">
                            <h3 class="box-title">Información de Articulo</h3>
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
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Titulo:</label>
                                <input type="text" class="form-control" name="titulo" value="{if isset($titulo)}{$titulo}{/if}" />
                                <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                            </div>  
                                <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Categoría:</label>
                                    {$categoria}
                            </div> 
                            <div class="form-group has-feedback">
                                <label> Descripcion:</label>
                                <textarea class="form-control" cols="50" rows="15" name="descripcion" id="descripcion">{if isset($descripcion)}{$descripcion}{/if}</textarea>
                                {literal}<script>CKEDITOR.replace('descripcion', {skin: 'office2013'});</script>{/literal}
                            </div>  
                             <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Fecha de Publicaciòn:</label>
                                <input type="text" class="form-control datepicker" name="fecha" value="{if isset($fecha)}{$fecha}{/if}" />
                                <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                            </div> 
                            
                        </div>
                        <div class="box-footer">
                            <div class="container-fluid">
                                <div class="social-auth-links text-center col-md-6">    
                                    <button class="save btn btn-social btn-block btn-primary btn-flat" data-toggle="tooltip" title="Guardar articulo">
                                        <i class="fa fa-save"></i> Guardar Articulo</button>
                                    <input type="hidden" name="id" value="{if isset($id)}{$id}{/if}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-default">
                        <div class="box-header">
                            <div class="form-group">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Imágen:</label>
                                <div class="input-group">
                                    <input type="file" name="imagen" multiple=""/>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label>Video:</label>
                                <input type="text" class="form-control" name="video" value="{if isset($video)}{$video}{/if}" />
                                <span class="glyphicon glyphicon-film form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Autor:</label>
                                    {$autor}
                            </div> 
                        <div class="form-group has-feedback">
                        <div class="form-group has-feedback">
                            <div class="row">
                                <div class="col-md-6">
                                    <label><i class="glyphicon glyphicon-asterisk text-red"></i> Temas:</label>
                                    {$tema}
                                </div>  
                                <div class="col-md-1">
                                    <a class="btn btn-primary item" data-toggle="tooltip" title="Agregar Item" style="margin-top: 23px"><i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-hover table-responsive" id="table-it">
                                <thead>
                                    <tr style="background-color: #D8D8D8;">
                                        <th>Categoria</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {if !empty($lista_cart)}
                                        {foreach $lista_cart as $l}
                                            <tr class="item-{$l.id}"> 
                                                <td>{$l.tema}<input type="hidden" name="e_tema[]" value="{$l.id}"></td>
                                                <td>
                                                    <a name="tema"class="btn btn-danger remove-item-id" data-url="{$base_url}manager/articulo/eliminar_item" data-id="{$l.id}" data-toggle="tooltip" title="Eliminar item"><i class="fa fa-trash"></i></a>
                                                    <input type="hidden" class="form-control" style="width: 70px;" name="e_id[]" value="{$l.id}">
                                                </td> 
                                            </tr>
                                        {/foreach} 
                                    {else}
                                        <tr class="none">
                                            <td colspan="4">No hay detalles...</td>
                                        </tr>
                                    {/if}
                                </tbody>
                            </table>                              
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