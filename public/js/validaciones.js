function probarConsecutivos(cadena) {
  if (cadena.length == 1)
    return true;
  else if (cadena == "")
    return false;
  
  for (var i = 0; i < cadena.length - 1; i++) {
    var valor1 = cadena.charAt(i);
    
    var valor2 = cadena.charAt(parseInt(i) + parseInt(1));
     
    if ((parseInt(valor1)+parseInt(1)) != valor2)
      return true; 
  } 
  
  return false;   
}

function validarEmail(valor) { 
    if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)){
     return true;
    } else {
     return false;
    }
}

function llamarValidar(tipoRegistro){ 
  if (tipoRegistro=="personal") { 
      var nombre = $("#inputNombre").val();
      var apellido = $("#inputApellido").val();
      var email = $("#inputEmail").val();
      var clave = $("#inputClave").val();
      var route = "aggcuentapersonal";
      var token = $("#token").val();
      var bandera="0";
      if(nombre === "")
        {
          bandera="1"; 
            $('#alertMsjinputNombre').css({"visibility":"visible"}); 
            $('#inputNombre').css({"border-color":"#ff5a5f"});  
        }else{ 
          $('#alertMsjinputNombre').css({"visibility":"hidden"}); 
        }
        if(apellido === "")
        {  
            bandera="1";  
            $('#alertMsjinputApellido').css({"visibility":"visible"});   
            $('#inputApellido').css({"border-color":"#ff5a5f"}); 
        }else{ 
          $('#alertMsjinputApellido').css({"visibility":"hidden"});  
        }
        if(email === "")
        { 
            bandera="1";   
            $('#alertMsjinputEmail').css({"visibility":"visible"});  
            $('#inputEmail').css({"border-color":"#ff5a5f"}); 
        }else{ 
          $('#alertMsjinputEmail').css({"visibility":"hidden"}); 
        }
        if(clave === "")
        {   
            bandera="1";  
            $('#alertMsjinputClave').html("Completa este dato.");
            $('#alertMsjinputClave').css({"visibility":"visible"});  
            $('#inputClave').css({"border-color":"#ff5a5f"}); 
        }
        else{ 
          $('#alertMsjinputClave').css({"visibility":"hidden"}); 
        }
        if (bandera==="0") { 
          if(clave.length<6){ 
            $('#alertMsjinputClave').html("Ingrese almenos 6 caracteres.");
            $('#alertMsjinputClave').css({"visibility":"visible"});   
            $('#inputClave').css({"border-color":"#ff5a5f"}); 
          }else{
            if (validarEmail(email)) { 
                  //verificarCorreo()
                  if (probarConsecutivos(clave)) {
                    $.ajax({
                    url: route,
                    headers: {'X-CSRF-TOKEN': token},
                    type: 'POST',
                    dataType: 'json',
                    data: {nombre: nombre, apellido: apellido, email: email, clave: clave} 
                    }).done(function(data) {  
                      if (data.res!=1 && data.res!=0){
                        $( "#frmInsertarUsuario" ).submit();
                      }else if(data.res==1){  
                        $("#lblCorreoExistente").empty();
                        $("#lblCorreoExistente").append(data.email);
                        $("#idExistente").modal();
                      }
                    }); 
                  }else{
                      $('#alertMsjinputClave').html("La clave no puede tener caracteres correlativos.");
                      $('#alertMsjinputClave').css({"visibility":"visible"}); 
                      $('#inputClave').css({"border-color":"#ff5a5f"}); 
                  } 
            }else{  
              $('#alertMsjinputEmail').html('Usa el formato nombre@ejemplo.com.');
              $('#alertMsjinputEmail').css({"visibility":"visible"});  
              $('#inputEmail').css({"border-color":"#ff5a5f"});
            }
          } 
      }
  }else if(tipoRegistro=="empresarial"){
      var rfc = $("#inputNombre").val();
      var razonSocial = $("#inputApellido").val();
      var email = $("#inputEmail").val();
      var clave = $("#inputClave").val();
      var route = "aggcuentaempresarial";
      var token = $("#token").val();
      var bandera="0";
      if(rfc === "")
        {
          bandera="1"; 
            $('#alertMsjinputNombre').css({"visibility":"visible"}); 
            $('#inputNombre').css({"border-color":"#ff5a5f"});  
        }else{ 
          $('#alertMsjinputNombre').css({"visibility":"hidden"}); 
        }
        if(razonSocial === "")
        {  
            bandera="1";  
            $('#alertMsjinputApellido').css({"visibility":"visible"});   
            $('#inputApellido').css({"border-color":"#ff5a5f"}); 
        }else{ 
          $('#alertMsjinputApellido').css({"visibility":"hidden"});  
        }
        if(email === "")
        { 
            bandera="1";   
            $('#alertMsjinputEmail').css({"visibility":"visible"});  
            $('#inputEmail').css({"border-color":"#ff5a5f"}); 
        }else{ 
          $('#alertMsjinputEmail').css({"visibility":"hidden"}); 
        }
        if(clave === "")
        {   
            $('#alertMsjinputClave').html("Completa este dato.");
            $('#alertMsjinputClave').css({"visibility":"visible"});  
            $('#inputClave').css({"border-color":"#ff5a5f"});  
        }
        else{ 
          $('#alertMsjinputClave').css({"visibility":"hidden"}); 
        }
        if (bandera==="0") { 
          if(clave.length<6){
            $('#alertMsjinputClave').html("Ingrese almenos 6 caracteres.");
            $('#alertMsjinputClave').css({"visibility":"visible"});   
            $('#inputClave').css({"border-color":"#ff5a5f"}); 
          }else{
              //verificarCorreo()
              if (validarEmail(email)) {  
                  if (probarConsecutivos(clave)) {
                      $.ajax({
                      url: route,
                      headers: {'X-CSRF-TOKEN': token},
                      type: 'POST',
                      dataType: 'json',
                      data: {rfc: rfc, razonSocial: razonSocial, email: email, clave: clave} 
                      }).done(function(data) {  
                        if (data.res!=1 && data.res!=0){
                          $( "#frmInsertarEmpresa" ).submit();
                        }else if(data.res==1){  
                          $("#lblCorreoExistente").empty();
                          $("#lblCorreoExistente").append(data.email);
                          $("#idExistente").modal();
                        }
                      });
                  }else{
                      $('#alertMsjinputClave').html("La clave no puede tener caracteres correlativos.");
                      $('#alertMsjinputClave').css({"visibility":"visible"}); 
                      $('#inputClave').css({"border-color":"#ff5a5f"}); 
                  }
              }else{
                  $('#alertMsjinputEmail').html('Usa el formato nombre@ejemplo.com.');
                  $('#alertMsjinputEmail').css({"visibility":"visible"});  
                  $('#inputEmail').css({"border-color":"#ff5a5f"});
              }
          }           
        }
  }
}





$('#continuar').click(function(){
  var email = $("#inputEmail").val(); 
  var route = "checkemail";
  var token = $("#token").val();
  if (email != "") {
      $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {login: email} 
        }).done(function(data) {  
          if (data.res==200){ 
            $( "#frmValidar" ).submit();
          }else if(data.res==1){   
            $("#alertMsjinputEmail").empty();
            $("#alertMsjinputEmail").append(data.msj); 
            $('#alertMsjinputEmail').css({"visibility":"visible"}); 
          }
        });
  }else{
    $("#alertMsjinputEmail").empty();
    $("#alertMsjinputEmail").append("Camplete este dato.");
    $('#alertMsjinputEmail').css({"visibility":"visible"}); 
  }
});

$('#crearCuenta').click(function(){
  var tipoRegistro="personal";
  llamarValidar(tipoRegistro); 
});

$('#crearCuentaEmpresarial').click(function(){
  var tipoRegistro="empresarial";
  llamarValidar(tipoRegistro);
});

function cargarCategorias(){
  var tipoCategoria = $('#tipoVenta').val();
  var route = "cargarCategorias";
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
          $('#categoria').html(data.res);  
          $('#contenedor-addCat').show();
          $('#categoria').removeAttr("disabled");
        }
      });
  }
}
 
$('#tipoVenta').change(function(){  
  $('#car-marca').attr("disabled", true);
  $('#categoria').attr("disabled", true);
  $('#car-marca').html("");
  $('#categoria').html(""); 
  cargarCategorias();
});

function btnAgregarMarca() {
  $('#cont-guardar-cat').css('display','block');
  $('#btnCategoria').css('display','none');

} 

function agregarCategoria(){
  var tipoVenta = $("#tipoVenta").val();
  var nombreCategoria = $("#nombreCategoria").val(); 
  var route = "guardarCategoria";
  var token = $("#token").val();
  if (nombreCategoria != "") {
    if (tipoVenta != "") {
      $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {nombreCategoria: nombreCategoria, tipoVenta: tipoVenta} 
        }).done(function(data) {  
          
          if (data.res==1){
            cargarCategorias();
              $('#nombreCategoria').val("");
              $('#msjAlert').html(
            '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Listo!</strong> Categoria agregada con exito.</div>'
            );
            $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
                $(".alert-success").alert('close');
            });
            $('#nombre').val('');
          }else if(data.res==0){   
              $('#msjAlert').html(
            '<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Ups!</strong> No fue posible agregar la categoria.</div>'
            );

          }
        });
    }else{
      $('#tipoVenta').focus();
    }
  }else{
    $('#nombreCategoria').focus();
  }
}
$('#btnAgregar').click(function(){ 
  agregarCategoria();
});
$('#frm_agregarCategoria').on('submit', function(){
  event.preventDefault();
  agregarCategoria();
}); 

$('#btnAgregarMarca').click(function(){
  var nombreMarca = $('#nombreMarca').val();
  var categoria = $('#categoria').val(); 
  var route = "guardarMarca";
  var token = $("#token").val();
  if (categoria != "" && nombreMarca != "") {
      $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {nombreMarca: nombreMarca, categoria: categoria} 
        }).done(function(data) {  
          
          if (data.res==1){
              $('#msjAlert').html(
            '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Listo!</strong> Categoria agregada con exito.</div>'
            );
            $('#nombre').val('');
          }else if(data.res==0){  
              $('#msjAlert').html(
            '<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Ups!</strong> No fue posible agregar la categoria.</div>'
            );

          }
        });
  }
});

$('#categoria').change(function(){  
  var categoria = $("#categoria").val();
  var route = "cargarMarcas";
  var tipoVenta = $("#tipoVenta").val();
  var token = $("#token").val();
  $('#car-marca').html("");
  $('#2').hide(); 
  if (categoria != "") {
      $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {tipoVenta: tipoVenta, categoria: categoria} 
        }).done(function(data) {   
          if (data.res!=1 || data.res == "") { 
              $('#car-marca').html(""); 
              $('.menu-marcas').hide();
              $('.menu-publicar').hide();
              try {
                  document.getElementById('cont-guardar-cat').style.display="block";
              }
              catch(err) { 
                
              }   
            try {     
                $('#car-marca').html(data.res); 
                $('.menu-marcas').show();  
                $('#2').show();
                $('#car-marca').removeAttr("disabled");  
            }
            catch(err) {
            } 
          }else{ 
            if ($('#car-marca').val()===null){
              $('.menu-publicar').show();
            }else{
              $('#car-marca').html(""); 
              $('.menu-marcas').hide();
            }              
          }
          
        });
  }
});

$('#car-marca').change(function(){ 
  if ($('#car-modelo').val()==null)
    $('.menu-publicar').show(); 
  var categoria = $("#categoria").val();
  var route = "cargarModelos";
  var marca = $("#car-marca").val();
  var token = $("#token").val();
  if (categoria != "") {
      $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {marca: marca, categoria: categoria} 
        }).done(function(data) {  
          try {     

            if (data.res==1 || data.res == "") {
              $('#car-modelo').html(""); 
              $('.menu-modelo').hide();
              document.getElementsByClassName('menu-modelo').style.display="none";
              document.getElementsByClassName('menu-anio').style.display="none";
            }else{
              $('#car-modelo').html(""); 
              $('#car-modelo').html(data.res); 
              $('.menu-modelo').show();    
            }
          }
          catch(err) {
          }
        });
  }
});

$('#car-modelo').change(function(){  
  if ($('#car-anio').val()==null)
    $('.menu-publicar').show(); 
  var route = "cargarAnios";
  var marca = $("#car-marca").val();
  var modelo = $('#car-modelo').val();
  var token = $("#token").val();
  if (categoria != "") {
      $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {marca: marca, modelo: modelo} 
        }).done(function(data) {   
          try {     
            if(data.res == 1 || data.res == ""){
              $('#car-anio').html(""); 
              $('.menu-anio').hide();
              document.getElementsByClassName('menu-anio').style.display="none";
            }else{
              $('#car-anio').html(data.res); 
              $('.menu-anio').show();  
            } 
          }
          catch(err) {
          }
        });
  }
}); 
 
