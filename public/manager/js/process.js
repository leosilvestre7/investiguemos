$(document).on('submit', '.bform', function() {
    frm = $(this);
    btn = frm.find(".save");
    method = frm.attr("method");
    btn.attr("disabled", "disabled");
//    dt=frm.serialize();
//    alert(dt);
    $.ajax({
        url: frm.attr('action'),
        type: method,
        data: frm.serialize(),
        data: new FormData(this),
                contentType: false,
        cache: false,
        processData: false,
    })
            .done(function(data)
            {
                console.log(data);
                btn.removeAttr("disabled");
                frm.find('.response').html(data).hide().slideDown();
            })
            .error(function(data, msg)
            {
                btn.removeAttr("disabled");
                response.html("Ha ocurrido un error interno");
            });
    return false;
});

/*----------------------------------------------------------------------------*/

$('.query11').keyup(function(e) {
    url = $(this).attr("data-url");
    filtro = $(this).val();
    if (filtro == "") {
        $(".table").find('.resultado').show();
        $(".table").find('.ajax').remove();
        $(".pagination").show();
    } else {
        $(".pagination").hide();
        $.post(url,
                {filtro: filtro},
        function(response) {
            $(".table").find('.resultado').hide();
            $(".table").find('.ajax').remove();
            var total = Object.keys(response).length;
            for (var i = 0; i < total; i++) {
                if (response[i].id != null) {
                    $(".table").append('<tr class="ajax table-bordered table-hover table-responsive"><td>' + response[i].numero + '</td>\n\
                            <td>' + response[i].nombre + '</td><td>' + response[i].usuario + '</td><td>' + response[i].cargo + '</td>\n\
                            <td>' + response[i].telefono + '</td><td>' + response[i].f_registro + '</td><td>' + response[i].accion + '</td></tr>');
                } else
                    $(".table").append('<tr class="ajax"><td>¡Lo sentimos! No se encontraron resultados para su busqueda</td></tr>');
            }
        }, 'json');
    }
});


$('.query4').keyup(function(e) {
    url = $(this).attr("data-url");
    filtro = $(this).val();
    if (filtro == "") {
        $(".table").find('.resultado').show();
        $(".table").find('.ajax').remove();
        $(".pagination").show();
    } else {
        $(".pagination").hide();
        $.post(url,
                {filtro: filtro},
        function(response) {
            $(".table").find('.resultado').hide();
            $(".table").find('.ajax').remove();
            var total = Object.keys(response).length;
            for (var i = 0; i < total; i++) {
                if (response[i].id != null) {
                    $(".table").append('<tr class="ajax table-bordered table-hover table-responsive"><td>' + response[i].numero + '</td>\n\
                            <td>' + response[i].marcanombre + '</td><td>' + response[i].modelonombre + '</td><td>' + response[i].anio + '</td>\n\
                            <td>' + response[i].valor + '</td><td>' + response[i].accion + '</td></tr>');
                } else
                    $(".table").append('<tr class="ajax"><td>¡Lo sentimos! No se encontraron resultados para su busqueda</td></tr>');
            }
        }, 'json');
    }
});





$('.query3').keyup(function(e) {
    url = $(this).attr("data-url");
    filtro = $(this).val();
    if (filtro == "") {
        $(".table").find('.resultado').show();
        $(".table").find('.ajax').remove();
        $(".pagination").show();
    } else {
        $(".pagination").hide();
        $.post(url,
                {filtro: filtro},
        function(response) {
            $(".table").find('.resultado').hide();
            $(".table").find('.ajax').remove();
            var total = Object.keys(response).length;
            for (var i = 0; i < total; i++) {
                if (response[i].id != null) {
                    $(".table").append('<tr class="ajax table-bordered table-hover table-responsive"><td>' + response[i].numero + '</td>\n\
                            <td>' + response[i].nombre + '</td><td>' + response[i].descripcion + '</td><td>' + response[i].correo + '</td>\n\
                            <td>' + response[i].f_modificacion + '</td><td>' + response[i].accion + '</td></tr>');
                } else
                    $(".table").append('<tr class="ajax"><td>¡Lo sentimos! No se encontraron resultados para su busqueda</td></tr>');
            }
        }, 'json');
    }
});

$('.query5').keyup(function(e) {
    url = $(this).attr("data-url");
    filtro = $(this).val();
    if (filtro == "") {
        $(".table").find('.resultado').show();
        $(".table").find('.ajax').remove();
        $(".pagination").show();
    } else {
        $(".pagination").hide();
        $.post(url,
                {filtro: filtro},
        function(response) {
            $(".table").find('.resultado').hide();
            $(".table").find('.ajax').remove();
            var total = Object.keys(response).length;
            for (var i = 0; i < total; i++) {       
                if (response[i].id != null) {
                    $(".table").append('<tr class="ajax table-bordered table-hover table-responsive"><td>' + response[i].numero + '</td>\n\
                            <td>' + response[i].nombre + '</td><td>' + response[i].descripcion + '</td><td><img style="width: 100px;" src="http://iecafer001:81/Proyectos/Web_Administrable/InmobiliariosPeru/versiones/InmobiliariosPeru_V3/public/imagen/libro/' + response[i].imagen + '" /></td>\n\
                            <td>' + response[i].link + '</td><td>' + response[i].correo + '</td><td>' + response[i].f_modificacion + '</td>\n\
\n\                         <td>' + response[i].accion + '</td></tr>');
                } else
                    $(".table").append('<tr class="ajax"><td>¡Lo sentimos! No se encontraron resultados para su busqueda</td></tr>');
            }
        }, 'json');
    }
});

$('.query6').keyup(function(e) {
    url = $(this).attr("data-url");
    filtro = $(this).val();
    if (filtro == "") {
        $(".table").find('.resultado').show();
        $(".table").find('.ajax').remove();
        $(".pagination").show();
    } else {
        $(".pagination").hide();
        $.post(url,
                {filtro: filtro},
        function(response) {
            $(".table").find('.resultado').hide();
            $(".table").find('.ajax').remove();
            var total = Object.keys(response).length;
            for (var i = 0; i < total; i++) {
                if (response[i].id != null) {
                    $(".table").append('<tr class="ajax table-bordered table-hover table-responsive"><td>' + response[i].numero + '</td>\n\
                            <td>' + response[i].nombre + '</td><td>' + response[i].accion + '</td></tr>');
                } else
                    $(".table").append('<tr class="ajax"><td>¡Lo sentimos! No se encontraron resultados para su busqueda</td></tr>');
            }
        }, 'json');
    }
});

$('.query7').keyup(function(e) {
    url = $(this).attr("data-url");
    filtro = $(this).val();
    if (filtro == "") {
        $(".table").find('.resultado').show();
        $(".table").find('.ajax').remove();
        $(".pagination").show();
    } else {
        $(".pagination").hide();
        $.post(url,
                {filtro: filtro},
        function(response) {
            $(".table").find('.resultado').hide();
            $(".table").find('.ajax').remove();
            var total = Object.keys(response).length;
            for (var i = 0; i < total; i++) {       
                if (response[i].id != null) {
                    $(".table").append('<tr class="ajax table-bordered table-hover table-responsive"><td>' + response[i].numero + '</td>\n\
                            <td>' + response[i].titulo + '</td><td>' + response[i].autor + '</td><td>' + response[i].descripcion + '</td>\n\
                            <td><img style="width: 100px;" src="http://iecafer001:81/Proyectos/Web_Administrable/InmobiliariosPeru/versiones/InmobiliariosPeru_V3/public/imagen/articulo/' + response[i].imagen + '</td><td>' + response[i].f_modificacion + '</td><td>' + response[i].accion + '</td></tr>');
                }else
                    $(".table").append('<tr class="ajax"><td>¡Lo sentimos! No se encontraron resultados para su busqueda</td></tr>');
            }
        }, 'json');
    }
});
//para la confirmacion del cambiar de estado
$(document).on('click', '.denegar', function(e) {
//    alert("llego");
    e.preventDefault();
    url = $(this).attr("data-url");
    entidad = $(this).attr("data-id");

    alertify.confirm('<h3>¿Esta seguro que desea bloquear este registro?</h3>')
            .set('title', 'Importante')
            .set('labels', {ok: 'Confirmar', cancel: 'Cancelar'})
            .set('onok', function(closeEvent) {
                $.post(url,
                        {},
                        function(response) {
                            $('.response').html(response);
                        });
            })
});

//para la confirmacion de la eliminacion de un registro
$(document).on('click', '.eliminar', function(e) {
    e.preventDefault();
    url = $(this).attr("data-url");
    alertify.confirm('<h3>¿Esta seguro que desea eliminar este registro?</h3><h4>recuerde que la eliminacion sera permantente</h4>')
            .set('title', 'Importante')
            .set('labels', {ok: 'Confirmar', cancel: 'Cancelar'})
            .set('onok', function(closeEvent) {
                $.post(url,
                        {},
                        function(response) {
                            $('.response').html(response);
                        });
            })
});


/*----------------------------------------------------------------------------*/

$(document).on('click', '.remove-item-id', function(e) {
   // alert("hola");
    e.preventDefault();
    url = $(this).attr("data-url");
    id = $(this).attr("data-id");
   // alert(url);
    //alert(id);
    alertify.confirm('<h3>¿Esta seguro que desea eliminar este registro?</h3>')
            .set('title', 'Importante')
            .set('labels', {ok: 'Confirmar', cancel: 'Cancelar'})
            .set('onok', function(closeEvent) {
                $.post(url,
                        {id: id},
                function(response) {
                    $('.response').html(response);
                });
            })
});


/*------------------------------------------------------------------------------*/

$(document).on('click', '.item', function() {
    tema = $('#tema').val();
    url = $(this).attr('data-url');
    if (tema == '') {
        alertify.alert('<h4>Verifique que los campos esten completos</h4>')
                .set('title', 'Importante');
    } else {

            TBL = $('#table-it');
            TBL.find('.none').hide();
         
            html = '<tr class="item-' + tema + '">';
            html += '<td>' + $('#tema option:selected').text() + '<input type="hidden" name="a_tema[]" value="' + tema + '"></td>';
            html += '<td><a class="btn btn-danger remove-item" data-toggle="tooltip" title="eliminar Item"><i class="fa fa-trash"></i></a></td>';
            html += '</tr>';
            TBL.append(html);
            $("#tema").val("");
    }
});
//Eliminar item de Categoria-Articulo
/*------------------------------------------------------*/

$(document).on('click', '.remove-item', function() {
    $(this).parent().parent().remove();
    return false;
});




