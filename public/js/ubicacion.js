$(document).ready(function() { 
	// Obtener estados
	$.ajax({
		type: "POST",
		url: "../public/procesar-estados.php",
		data: { estados : "Mexico" } 
	}).done(function(data){
		$("#estado").html(data);
		if ($('#estadoSelected').val()!=null) {
			var estado = $('#estadoSelected').val(); 
			$('#estado').val(estado).trigger("change");
		}
	});
	// Obtener municipios
	$("#estado").change(function(){
		var estado = $("#estado option:selected").val();
		$.ajax({
			type: "POST",
			url: "../public/procesar-estados.php",
			data: { municipios : estado } 
		}).done(function(data){
			$("#municipio").html(data);
			if ($('#municipioSelected').val()!=null) {
				var estado = $('#municipioSelected').val(); 
				$('#municipio').val(estado).trigger("change");
			}
		});
	}); 
	// Obtener estados
	$.ajax({
		type: "POST",
		url: "../public/procesar-estados.php",
		data: { estados : "Mexico" } 
	}).done(function(data){
		$("#estado").html(data);
		if ($('#estadoSelected').val()!=null) {
			var estado = $('#estadoSelected').val(); 
			$('#estado').val(estado).trigger("change");
		}
	});
	// Obtener municipios
	$("#estado").change(function(){
		var estado = $("#estado option:selected").val();
		$.ajax({
		type: "POST",
		url: "../public/procesar-estados.php",
		data: { municipios : estado } 
	}).done(function(data){
		$("#municipio").html(data);
		if ($('#municipioSelected').val()!=null) {
				var estado = $('#municipioSelected').val(); 
				$('#municipio').val(estado).trigger("change");
			}
		});
	});

	$("#municipio").change(function(){ 
		var municipio = $("#municipio option:selected").val();
		$.ajax({
			url: "../public/js/colonias.php",
			type: "POST",
			data: {municipio:municipio}
		}).done(function(data){
			$("#colonia").html(data);
			if ($('#coloniaSelected').val()!=null) {
				var estado = $('#coloniaSelected').val(); 
				$('#colonia').val(estado).trigger("change");
			}
		});
	}); 
	if ($('#anioM').val()!=null) {
		$('#anio').val($('#anioM').val());
	} 
	if ($('tipoCombustibleM').val()!=null) {
		$('tipoCombustible').val($('#tipoCombustibleM').val());
	}
});