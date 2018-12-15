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
            scrollToBottom();
        });
    }
    function loadComentarios() { 
        var token = $("#token").val(); 
        var route = "cargarComentarios";
        $.ajax({
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            data: {} 
        }).done(function(data){ 
            if (data.numComentarios>0) { 
                $('.ml-count').show();
                $('.ml-count').html(data.numComentarios);
            }else{
                $('.ml-count').hide();
            }
        });
    }
    if ($(".sc-messages").length) {
        scrollToBottom();
        setInterval(loadMsjs, 3000);
        scrollingElement = document.getElementById('cont_scroll');
        function scrollToBottom () {
           scrollingElement.scrollTop = scrollingElement.scrollHeight;
        }
    }
    
    setInterval(loadComentarios, 3000);
});
