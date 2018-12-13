$(document).ready(function() {
    function loadMsjs() { 
        var token = $("#token").val();
        var codigoCompra = $('input[name=idCompra]').val();
        var route = "verMensajes";
        $.ajax({
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            data: {idCompra:codigoCompra} 
        }).done(function(data){
            $('.sc-messages').html('');
            $('.sc-messages').html(data);
        });
    }
    setInterval(loadMsjs, 3000);
});