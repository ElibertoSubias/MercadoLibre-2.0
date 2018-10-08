function abrirMenu(){ 
	document.getElementById('info_user').style.display = "block";
}

function cerrarMenu(){ 
	document.getElementById('info_user').style.display = "none";
}

 
$('#userswitch').click(function(){
	$("#info_user").css("display", "none");
}); 
$( "#inputNombre" ).blur(function() {
	var id = "inputNombre";
	desactivarInput(id);
});


$("#btn_ven_mot").click(function(){
	$("#ven_mot").submit();
});

$("#btn_ven_mot").hover(function(){
	$("#ven_mot").css('border','1px solid #f0ad4e');
});
$( "#btn_ven_mot" ).mouseout(function() {
	$("#ven_mot").css('border','1px solid #dedede');
});

$( "#lblMsjinputNombre" ).click(function() {
	var id = "inputNombre";
	$('#'+id).focus();
	activarInput(id);
});
$( "#inputNombre" ).focus(function(){
	var id = "inputNombre";
	activarInput(id);
});
/////////////////////////////////
$( "#inputApellido" ).blur(function() {
	var id = "inputApellido";
	desactivarInput(id);
});
$( "#lblMsjinputApellido" ).click(function() {
	var id = "inputApellido";
	$('#'+id).focus();
	activarInput(id);
});
$( "#inputApellido" ).focus(function(){
	var id = "inputApellido";
	activarInput(id);
});
//////////////////////////////////
$( "#inputEmail" ).blur(function() {
	var id = "inputEmail";
	desactivarInput(id);
});
$( "#lblMsjinputEmail" ).click(function() {
	var id = "inputEmail";
	$('#'+id).focus();
	activarInput(id);
});
$( "#inputEmail" ).focus(function(){
	var id = "inputEmail";
	activarInput(id);
});
///////////////////////////////////
$( "#inputClave" ).blur(function() {
	var id = "inputClave";
	desactivarInput(id);
});
$( "#lblMsjinputClave" ).click(function() {
	var id = "inputClave";
	$('#'+id).focus();
	activarInput(id);
});
$( "#inputClave" ).focus(function(){
	var id = "inputClave";
	activarInput(id);
});
///////////////////////////////////

function activarInput(id){
	$('#lblMsj'+id).css({"margin-top":"-60px", "font-size":"13px"});
	$( "#alertMsj"+id ).css({"margin-top":"35px"});
	 
 
    var colorBorde = $('#'+id).css("border-bottom-color");  
    if (colorBorde == "rgb(255, 90, 95)") { 
        
    }else if (colorBorde == "rgb(204, 204, 204)") {
    	$('#'+id).css({"transition":"border 100ms ease-out","border-bottom":"2 px solid rgb(0, 0, 255)"}); 
    }
}

function desactivarInput(id){ 
	var valor = $('#'+id).val();
	if (valor==="") {
		$('#lblMsj'+id).css({"margin-top":"-30px", "font-size":"18px"});
		$( "#alertMsj"+id ).css({"margin-top":"5px"}); 
	 
	    var colorBorde = $('#'+id).css("border-bottom-color");  
	    if (colorBorde == "rgb(0, 0, 255)") { 
	        $('#'+id).css({"transition":"border 100ms ease-out","border-bottom":"1px solid rgb(204, 204, 204)"}); 
	    }
	}else{
		var colorBorde = $('#'+id).css("border-bottom-color");  
		$('#alertMsj'+id).css({"visibility":"hidden"}); 
	    if (colorBorde == "rgb(0, 0, 255)") { 
	        $('#'+id).css({"transition":"border 100ms ease-out","border-bottom":"1px solid rgb(204, 204, 204)"}); 
	    }else if(colorBorde == "rgb(255, 90, 95)"){
	    	$('#'+id).css({"transition":"border 100ms ease-out","border-bottom":"1px solid rgb(204, 204, 204)"}); 
	    }
	}
} 