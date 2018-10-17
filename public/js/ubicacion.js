$(document).ready(function() { 
	// Obtener estados
	$.ajax({
		type: "POST",
		url: "../public/procesar-estados.php",
		data: { estados : "Mexico" } 
	}).done(function(data){
		$("#estado").html(data);
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
		});
	}); 
	// Obtener estados
	$.ajax({
		type: "POST",
		url: "../public/procesar-estados.php",
		data: { estados : "Mexico" } 
	}).done(function(data){
		$("#estado").html(data);
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
		});
	});
});