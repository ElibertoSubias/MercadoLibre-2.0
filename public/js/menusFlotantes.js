
function mostrarPrimerMenu(){
	if (!$('#primerMenuUL').hasClass('bandera')) {
		$('#primerMenuUL').removeClass("ch-hide"); 
		$('#primerMenuUL').addClass( "bandera" ); 
	}else{
		$('#primerMenuUL').addClass( "ch-hide" ); 
		$('#primerMenuUL').removeClass("bandera");  
	}
}    
 
function mostrarSegundoMenu(id){ 
	if (!$('#segundoMenu'+id).hasClass('bandera')) { 
		$('#segundoMenu'+id).removeClass("ch-hide"); 
		$('#segundoMenu'+id).addClass( "bandera" ); 
	}else{
		$('#segundoMenu'+id).addClass( "ch-hide" ); 
		$('#segundoMenu'+id).removeClass("bandera");  
	}
}