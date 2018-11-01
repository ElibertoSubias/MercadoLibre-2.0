$(buscar_publicaciones());

function buscar_publicaciones(consulta){
	var route = "../public/buscar";
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
$('#buscador-articulos').on('submit', function(){
    if ($('#caja_busqueda').val()==="") {
        $('#precio').focus();
        return false;
    }
});
$(document).on('keyup','#caja_busqueda', function(){ 
	var valor = $(this).val(); 
	if (valor != "") {
		buscar_publicaciones(valor);
	}
});
$(document).on('click','body *',function(){
   document.getElementById('resultados').style.display="none";
});

