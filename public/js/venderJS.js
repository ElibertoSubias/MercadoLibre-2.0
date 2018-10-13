window.onload = catDisponibles;

function catDisponibles() {
	document.getElementById('cont-scroller').scrollBy(5, 5);
	var tipoCategoria = $('#tipoCategoria').val();
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
	          //$.each(Object.keys(data.categorias.categoria[0]), function(i, fila){
	          	//alert(Object.keys(fila)); 
	          	//alert(Object.keys(data.categorias.categoria[0]));
	            var htmlString = $('#categoria').html(); 
	          //$('#categoria').html(htmlString+"<option class='category-option' value='"+fila+"'>"+fila+"</option>"); 
	          //}); 
	      }
	    });
	}
}
