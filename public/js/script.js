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
$('#form_precio').on('submit', function(){
	if ($('#precio').val()==="") {
		$('#precio').focus();
		return false;
	}else{
		event.preventDefault();
		$('#btnContinuarPrecio').addClass('btnOff');
		$('#modalMsjPago').modal();
	} 
});
$('#btnEntendi').click(function(){
	$('#form_precio').submit();
});

var idLIFoto;
function clickbtn(id){
	idLIFoto=id;
	document.getElementById('select_file').click();
}  
$("#upload_form").on("submit", function(){ 
	if ($('#estado').val()==="") {
		$('#estado').focus();
		return false;
	}else if($('#municipio').val()===""){
		$('#municipio').focus();
		return false;
	}else if($('#colonia').val()===""){
		$('#colonia').focus();
		return false;
	}else if($('#telefono').val()===""){
		$('#telefono').focus();
		return false;
	}else if($('#modelo').val()===""){
		$('#modelo').focus();
		return false;
	}else if($('#anio').val()===""){
		$('#anio').focus();
		return false;
	}else if($('#numPuertas').val()===""){
		$('#numPuertas').focus();
		return false;
	}else if($('#kilometros').val()===""){
		$('#kilometros').focus();
		return false;
	}else if($('#titulo').val()===""){
		$('#titulo').focus();
		return false;
	}else{
		return true;
	}
	
 })
$('#select_file').change(function(){
	if ($('#'+idLIFoto).hasClass('on')){
        $('#upload_form').submit();
    }else{ 
    	var token = $("#token").val();
    	var idPublicacion = $('#idPublicacion').val();
    	var idUser = $('#idUser').val();
    	event.preventDefault(); 
    	var data = new FormData(this);
    	data.append('idImg', idLIFoto);
    	data.append('idPublicacion', idPublicacion);
    	data.append('idUser', idUser);
    	var propiedades = document.getElementById('select_file').files[0];
    	data.append('select_file', propiedades);
        
	  $.ajax({
	   url:"/MercadoLibre-2.0/public/loadimage",
	   headers: {'X-CSRF-TOKEN': token},
	   method:"POST",
	   data:data,
	   dataType:'JSON',
	   contentType: false,
	   cache: false,
	   processData: false,
	   success:function(data)
	   {
	    $('#message').css('display', 'block');
	    $('#message').html(data.message);
	    $('#'+idLIFoto).addClass('on');
	    $('#'+idLIFoto).html(data.uploaded_image);
	    $('#select_file').val("");
	   }
	  })
    }
});

function delateImg(id,tipo){
	var token = document.getElementsByTagName('_token').value;
	var route = "/MercadoLibre-2.0/public/detaleImg";
	$.ajax({
	url: route, 
	headers: {'X-CSRF-TOKEN': token},
	type: 'get',
	dataType: 'json',
	data: {link: id,tipo:tipo} 
	}).done(function(data) {  
		  
    });
}

$('#btn_MostrarMas').click(function(){
	event.preventDefault();
	document.getElementById('masCaracteriticas').style.display="block";
	document.getElementById('btn_MostrarMas').style.display="none";
	document.getElementById('btn_MostrarMenos').style.display="block"; 
});
$('#btn_MostrarMenos').click(function(){
	event.preventDefault();
	document.getElementById('masCaracteriticas').style.display="none";
	document.getElementById('btn_MostrarMenos').style.display="none";
	document.getElementById('btn_MostrarMas').style.display="block"; 
});