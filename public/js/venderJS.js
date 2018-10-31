window.onload = catDisponibles;

function catDisponibles() { 
	var tipoCategoria = $('#tipoVenta').val();
	var route = "/MercadoLibre-2.0/public/cargarCategorias";
	var token = $("#token").val();
	if (tipoCategoria != "") {
	  $.ajax({
	    url: route,
	    headers: {'X-CSRF-TOKEN': token},
	    type: 'POST',
	    dataType: 'json',
	    data: {tipoVenta: tipoCategoria} 
	    }).done(function(data) {   
	      if (data.res==1) {
	        $('#categoria').html("");
	      }else{
	      	$('#categoria').html("");
	      	var htmlString = $('#categoria').html();
            $('#categoria').html(data.res); 
	            var htmlString = $('#categoria').html();  
	      }
	    });
	}
}  