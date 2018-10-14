$(buscar_publicaciones());

function buscar_publicaciones(consulta){
	var route = "/MercadoLibre-2.0/public/buscar";
	var token = $("#token").val();   
      $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'post',
        dataType: 'html',
        data: {consulta: consulta} 
        }).done(function(data) {  
        	if (data!="") { 
        		document.getElementById('cont-resultado').innerHTML=data;
				document.getElementById('resultados').style.display="flex";
        	}else{
        		document.getElementById('resultados').style.display="none";
        	}          	
        }) 
        .fail(function(data){
        	document.getElementById('resultados').style.display="none";
        })
}

$(document).on('keyup','#caja_busqueda', function(){
	var valor = $(this).val();
	document.getElementById('resultados').style.display="flex";
	if (valor != "") {
		buscar_publicaciones(valor);
	}
});
$(document).on('click','body *',function(){
   document.getElementById('resultados').style.display="none";
});