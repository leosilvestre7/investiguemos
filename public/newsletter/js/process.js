$(document).on('submit', '.bform', function() {
    frm = $(this);
    btn = frm.find('.save');
    btn_dis = btn.attr('disabled');
    if(!btn_dis) {
        method = frm.attr('method');
        btn.attr('disabled', 'disabled');
        
        $.ajax({
                url: frm.attr('action'),
                type: method,
                data: frm.serialize(),
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
            })
            .done(function(data)
            {
                btn.removeAttr('disabled');
                frm.find('.response').html(data).hide().slideDown();
            })
            .error(function(data, msg)
            {
                btn.removeAttr('disabled');
                frm.find('.response').html('Ha ocurrido un error interno');
            });
    }
    return false;
});