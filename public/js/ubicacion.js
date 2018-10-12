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
});