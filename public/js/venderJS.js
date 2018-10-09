window.onload = catDisponibles;
function catDisponibles() {
    var tipoVenta = "vehiculos";
	var route = "/MercadoLibre-2.0/public/cargarCategorias";
	var token = $("#token").val();
	if (tipoVenta != "") {
	  $.ajax({
	    url: route,
	    headers: {'X-CSRF-TOKEN': token},
	    type: 'POST',
	    dataType: 'json',
	    data: {tipoVenta: tipoVenta} 
	    }).done(function(data) {   
	      if (data.res==1) {
	        $('#categoria').html("");
	      }else{
	          $.each(data.categorias, function(i, fila){
	              var htmlString = $('#categoria').html(); 
	          $('#categoria').html(htmlString+"<option class='category-option' value='"+Object.keys(fila.categoria[0])+"'>"+Object.keys(fila.categoria[0])+"</option>"); 
	          }); 
	      }
	    });
	}
}