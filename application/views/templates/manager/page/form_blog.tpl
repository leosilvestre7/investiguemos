<script src="{$base_url}public/plugins/ckeditor/ckeditor.js"></script>
<div class="content-wrapper" style="min-height: 698px;">
    <section class="content-header">
        {if $tipo == 'agregar'}
            <h1>Agregar blog</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="{$base_url}manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="{$base_url}manager/blog/agregar"><i class="fa fa-plus"></i> Agregar blog</a></li>
            </ol>
        {else}
            <h1>Editar blog</h1>
            <ol class="breadcrumb">
                <li class="active"><a href="{$base_url}manager"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active"><a href="{$base_url}manager/blog/editar/{$id}"><i class="fa fa-pencil"></i> Editar blog</a></li>
            </ol>
        {/if}
    </section>
    <section class="content">
        <div class="row">
            <form class="bform" action="{$base_url}manager/blog/accion" method="post">
                <div class="col-md-6">
                    <div class="box box-default">
                        <div class="box-header">
                            <h3 class="box-title">Información de blog</h3>
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
                                <label><i class="glyphicon glyphicon-asterisk text-red"></i> Descripcion:</label>
                                <textarea class="form-control" cols="50" rows="15" name="descripcion" id="descripcion">{if isset($descripcion)}{$descripcion}{/if}</textarea>
                                {literal}<script>CKEDITOR.replace('descripcion', {skin: 'office2013'});</script>{/literal}
                            </div>

                        </div>
                        <div class="box-footer">
                            <div class="container-fluid">
                                <div class="social-auth-links text-center col-md-6">
                                    <button class="save btn btn-social btn-block btn-primary btn-flat" data-toggle="tooltip" title="Guardar blog">
                                        <i class="fa fa-save"></i> Guardar blog</button>
                                        <input type="hidden" name="id" value="{if isset($id)}{$id}{/if}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</div>
