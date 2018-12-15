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
            if (data.res==0) {

            }else{
                if (data.numComentarios>0) { 
                    $('.ml-count').show();
                    $('.ml-count').html(data.numComentarios);
                    var contador=0;
                    $.each(data.res, function(i, item) {
                        $('#cont_notificaciones').html('<div class="col-md-12"  style="background: white;border-radius: 5px;text-align: left;"><a href="preguntas" title="" style="display: block;" style="padding-left:0px"><div class="col-md-4" style="height: 50px;" style="padding-left:0px"><img width="50" style="float:left" src="images/'+data.autor+'/'+data.art[contador].idPublicacion+'/'+data.art[contador].urlPrincipal+'" alt=""></div><div class="col-md-8" style="font-size:10px;"><b>'+data.art[contador].titulo+'</b></div><div class="col-md-12" style="font-size:15px;"><b>Pregunda:</b>'+item.pregunta+'</div></a></div><hr>');
                        contador++;
                    });
                }else{
                    $('.ml-count').hide();
                }
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
function abrirNotificaciones(){

        if (!$('#cont_notificaciones').is(':visible')) { 
            $('#cont_notificaciones').show();
        }else{
            $('#cont_notificaciones').hide();
        }
    } 