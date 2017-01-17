$(document).on('submit', '.bform', function() {
    frm = $(this);
    btn = frm.find(".save");
    method = frm.attr("method");
    btn.attr("disabled", "disabled");
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


$("#buscar").on("click", function() {
    var buscar = $("#buscardor").val();
    var url_buscar = buscar.replace(/\s/g, "_");
    location.href = base_url + "buscar/" + url_buscar;
});

$("#buscardor").on('keypress', function(e) {
  //  alert("hola");
    if (e.which == 13) {
        $("#buscar").trigger("click");
    }
});




