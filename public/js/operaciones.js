function cargarPagina (url) {
	$('#contenedor').load(url);
}
function agregarUsuario(){
	var formData = new FormData(document.getElementById('frmInsertarUsuario'));
	formData.append("opcion", 1);
	$.ajax({
		url : "ctrUsuario.php",
		type : "post", 
		dataType : "html",
		data : formData,
		cache : false,
		contentType : false,
		processData : false
	}).done(function(data) { 
		var informacion = JSON.parse(data); 
		if (informacion.res!="1" && informacion!="0"){
			location.href ="../index.php?id="+informacion.datos;
		}else if(informacion.res=="1"){  
			$("#lblCorreoExistente").empty();
			$("#lblCorreoExistente").append(informacion.datos);
			$("#idExistente").modal();
		}
		
	});
}

function actualizarActividad(){
	var formData = new FormData(document.getElementById('frmActualizar'));
	formData.append("opcion", 2);
	$.ajax({
		url : "ctrPersona.php",
		type : "post", 
		dataType : "html",
		data : formData,
		cache : false,
		contentType : false,
		processData : false
	}).done(function(data) {
		alert(data);
		cargarPagina('Interfaz/gui_MostrarActividades.php');
	});
}

function eliminarActividad(){
	var formData = new FormData(document.getElementById('idEliminar').value);
	formData.append("opcion", 3);
	formData.append("id",document.getElementById('idEliminar').value);
	$.ajax({
		url : "ctrPersona.php",
		type : "post", 
		dataType : "html",
		data : formData,
		cache : false,
		contentType : false,
		processData : false
	}).done(function(data) {
		alert(data);
		cargarPagina('Interfaz/gui_MostrarActividades.php');
	});
}

function mostrarActualizar(actividad, fecha, id){
	cancelarOperacion();
	document.getElementById('contenedorActualizar').style.display="";
	document.getElementById('txtActividad').value=actividad;
	document.getElementById('fechaAct').value=fecha;
	document.getElementById('idActualizar').value=id;
	document.getElementById('fechaAct').value=fecha;
}
function mostrarEliminar(id){
	cancelarOperacion();
	document.getElementById('mensaje').innerHTML="¿Está seguro que desea realizar esta operación?";
	document.getElementById('contenedorConfirmacionEliminar').style.display="";
	document.getElementById('idEliminar').value=id;
}

function confirmarOperacionEliminar(id){
	cancelarOperacion();
	document.getElementById('idEliminar').value=id;
	document.getElementById('mensaje').innerHTML="¿Está seguro que desea realizar esta operación?";
}

function confirmarOperacionActualizar(id){ 
	document.getElementById('mensaje').innerHTML="¿Está seguro que desea realizar esta operación?";
	document.getElementById('contenedorConfirmacionActualizar').style.display=""; 
}

function cancelarOperacion(){
	document.getElementById('contenedorConfirmacionEliminar').style.display="none";
	document.getElementById('contenedorActualizar').style.display="none";  
	document.getElementById('contenedorConfirmacionActualizar').style.display="none"; 
	document.getElementById('mensaje').innerHTML="";
}
  


function cambiarlbl(id){ 
  var obj1 = document.getElementById("inputNombre");
  var obj2 = document.getElementById("inputApellido");
  var obj3 = document.getElementById("inputEmail");   
  var obj4 = document.getElementById("inputClave");

  $('#'+id).css({"margin-top":"-60px", "font-size":"13px"});
  switch(id){
    case "lblNombre":
      $( "#inputNombre" ).focus(); 
      if (obj1.value === "") {
          $( "#msjNombre" ).css({"margin-top":"35px"});
          var colorBorde = $('#inputNombre').css("border-bottom-color"); 
          if (colorBorde == "rgb(255, 90, 95)") { 
            $('#inputNombre').css({"transition":"border 100ms ease-out","border-bottom":"2px solid #ff5a5f"}); 
          }
          else{
            $('#inputNombre').css({"transition":"border 100ms ease-out","border-bottom":"2px solid blue"}); 
          } 
      }else{
        $( "#msjNombre" ).css({"margin-top":"35px"});
        $('#inputNombre').css({"transition":"border 100ms ease-out","border-bottom":"2px solid blue"}); 
      }
      
    break;
    case "lblApellido":
      $( "#inputApellido" ).focus();
      if (obj2.value === "") {
        $( "#msjApellido" ).css({"margin-top":"35px"});
        $( "#msjApellido" ).css({"margin-top":"35px"});
          var colorBorde = $('#inputApellido').css("border-bottom-color"); 
          if (colorBorde == "rgb(255, 90, 95)") { 
            $('#inputApellido').css({"transition":"border 100ms ease-out","border-bottom":"2px solid #ff5a5f"}); 
          }
          else{
            $('#inputApellido').css({"transition":"border 100ms ease-out","border-bottom":"2px solid blue"}); 
          } 
      }else{
        $( "#msjApellido" ).css({"margin-top":"35px"});
      }
    break;
    case "lblEmail":
      $( "#inputEmail" ).focus(); 
      if (obj3.value === "") {
        $( "#msjEmail" ).css({"margin-top":"35px"});
        $( "#msjEmail" ).css({"margin-top":"35px"});
          var colorBorde = $('#inputEmail').css("border-bottom-color"); 
          if (colorBorde == "rgb(255, 90, 95)") { 
            $('#inputEmail').css({"transition":"border 100ms ease-out","border-bottom":"2px solid #ff5a5f"}); 
          }
          else{
            $('#inputEmail').css({"transition":"border 100ms ease-out","border-bottom":"2px solid blue"}); 
          } 
      }else{
        $( "#msjEmail" ).css({"margin-top":"35px"});
      }
    break;
    case "lblClave":
      $( "#inputClave" ).focus();
      if (obj4.value === "") {
        $( "#msjClave" ).css({"margin-top":"35px"});
        $( "#msjClave" ).css({"margin-top":"35px"});
          var colorBorde = $('#inputClave').css("border-bottom-color"); 
          if (colorBorde == "rgb(255, 90, 95)") { 
            $('#inputClave').css({"transition":"border 100ms ease-out","border-bottom":"2px solid #ff5a5f"}); 
          }
          else{
            $('#inputClave').css({"transition":"border 100ms ease-out","border-bottom":"2px solid blue"}); 
          } 
      }else{
        $( "#msjClave" ).css({"margin-top":"35px"});
      }
    break;
  } 
}
function regresarlbl(id){  
  var obj1 = document.getElementById("inputNombre");
  var obj2 = document.getElementById("inputApellido");
  var obj3 = document.getElementById("inputEmail");   
  var obj4 = document.getElementById("inputClave");
  switch(id){
    case "inputNombre":
      if (obj1.value==="") {
        $('#lblNombre').css({"margin-top":"-30px", "font-size":"18px"});
        $( "#msjNombre" ).css({"margin-top":"5px"}); 
          var colorBorde = $('#inputNombre').css("border-bottom-color");  
          if (colorBorde == "rgb(255, 90, 95)") { 
            $('#inputNombre').css({"transition":"border 100ms ease-out","border-bottom":"2px solid #ff5a5f"}); 
          }
          else if (colorBorde == "rgb(0, 0, 255)"){
            $('#inputNombre').css({"transition":"border 100ms ease-out","border-bottom":"1px solid #ccc"}); 
          } 
      } 
      else{
        $( "#msjNombre" ).css({"visibility":"hidden"}); 
        $('#inputNombre').css({"transition":"border 100ms ease-out","border-bottom":"1px solid #ccc"}); 
      }
    break;
    case "inputApellido":
      if (obj2.value==="") {
        $('#lblApellido').css({"margin-top":"-30px", "font-size":"18px"});
        $( "#msjApellido" ).css({"margin-top":"5px"});
          var colorBorde = $('#inputApellido').css("border-bottom-color");  
          if (colorBorde == "rgb(255, 90, 95)") { 
            $('#inputApellido').css({"transition":"border 100ms ease-out","border-bottom":"2px solid #ff5a5f"}); 
          }
          else if (colorBorde == "rgb(0, 0, 255)"){
            $('#inputApellido').css({"transition":"border 100ms ease-out","border-bottom":"1px solid #ccc"}); 
          } 
      } 
      else{
          $( "#msjApellido" ).css({"visibility":"hidden"}); 
          $('#inputApellido').css({"transition":"border 100ms ease-out","border-bottom":"1px solid #ccc"}); 
        }
    break;
    case "inputEmail":
      if (obj3.value==="") {
        $('#lblEmail').css({"margin-top":"-30px", "font-size":"18px"});
        $( "#msjEmail" ).css({"margin-top":"5px"});
          var colorBorde = $('#inputEmail').css("border-bottom-color");  
          if (colorBorde == "rgb(255, 90, 95)") { 
            $('#inputEmail').css({"transition":"border 100ms ease-out","border-bottom":"2px solid #ff5a5f"}); 
          }
          else if (colorBorde == "rgb(0, 0, 255)"){
            $('#inputEmail').css({"transition":"border 100ms ease-out","border-bottom":"1px solid #ccc"}); 
          } 
      }
      else{
        $( "#msjEmail" ).css({"visibility":"hidden"});
        $('#inputEmail').css({"transition":"border 100ms ease-out","border-bottom":"1px solid #ccc"}); 
      }
    break;
    case "inputClave":
      if (obj4.value==="") {
        $('#lblClave').css({"margin-top":"-30px", "font-size":"18px"});
        $( "#msjClave" ).css({"margin-top":"5px"});
        var colorBorde = $('#inputClave').css("border-bottom-color");  
          if (colorBorde == "rgb(255, 90, 95)") { 
            $('#inputClave').css({"transition":"border 100ms ease-out","border-bottom":"2px solid #ff5a5f"}); 
          }
          else if (colorBorde == "rgb(0, 0, 255)"){
            $('#inputClave').css({"transition":"border 100ms ease-out","border-bottom":"1px solid #ccc"}); 
          } 
      }
      else{
        $( "#msjClave" ).css({"visibility":"hidden"});
        $('#inputClave').css({"transition":"border 100ms ease-out","border-bottom":"1px solid #ccc"}); 
      }
    break;
  }  
}
function validarCampos(){
  var obj1 = document.getElementById("inputNombre");
  var obj2 = document.getElementById("inputApellido");
  var obj3 = document.getElementById("inputEmail");   
  var obj4 = document.getElementById("inputClave");
  var bandera="0";
    if(obj1.value === "")
    {
      bandera="1"; 
        $('#msjNombre').css({"visibility":"visible"}); 
        $('#inputNombre').css({"border-color":"#ff5a5f"});  
    }else{ 
      $('#msjNombre').css({"visibility":"hidden"}); 
    }
    if(obj2.value === "")
    {  
        bandera="1";  
        $('#msjApellido').css({"visibility":"visible"});   
        $('#inputApellido').css({"border-color":"#ff5a5f"}); 
    }else{ 
      $('#msjApellido').css({"visibility":"hidden"});  
    }
    if(obj3.value === "")
    { 
        bandera="1";   
        $('#msjEmail').css({"visibility":"visible"});  
        $('#inputEmail').css({"border-color":"#ff5a5f"}); 
    }else{ 
      $('#msjEmail').css({"visibility":"hidden"}); 
    }
    if(obj4.value === "")
    {   
        bandera="1";  
        $('#msjClave').css({"visibility":"visible"});  
        $('#inputClave').css({"border-color":"#ff5a5f"}); 
    }
    else{ 
      $('#msjClave').css({"visibility":"hidden"}); 
    }
    if (bandera==="0") { 
      //verificarCorreo()
       if(true){ 
          var obj1 = document.getElementsByTagName('registro');
          obj1.value = 'I';
          agregarUsuario();  
        }
    } 
}
