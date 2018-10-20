$('.mymlDropdownMassiveActions').click(function(){ 
	ocultar();
}); 

function ocultar(){
	if (!$('.ch-dropdown-content').hasClass('bandera')) {
		$('.ch-dropdown-content').removeClass("ch-hide"); 
		$('.ch-dropdown-content').addClass( "bandera" ); 
	}else{
		$('.ch-dropdown-content').addClass( "ch-hide" ); 
		$('.ch-dropdown-content').removeClass("bandera");  
	}
}   