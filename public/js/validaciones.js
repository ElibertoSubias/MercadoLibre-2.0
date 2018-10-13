$('#continuar').click(function(){
  var email = $("#inputEmail").val(); 
  var route = "/MercadoLibre-2.0/public/checkemail";
  var token = $("#token").val();
  if (email != "") {
      $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {email: email} 
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
  var nombre = $("#inputNombre").val();
  var apellido = $("#inputApellido").val();
  var email = $("#inputEmail").val();
  var clave = $("#inputClave").val();
  var route = "/MercadoLibre-2.0/public/usuario";
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
        $('#alertMsjinputClave').css({"visibility":"visible"});  
        $('#inputClave').css({"border-color":"#ff5a5f"}); 
    }
    else{ 
      $('#alertMsjinputClave').css({"visibility":"hidden"}); 
    }
    if (bandera==="0") { 
      //verificarCorreo()
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
    }
});

 
 
$('#tipoVenta').change(function(){ 
  var tipoVenta = $("#tipoVenta").val();
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
            $('#categoria').html('<option value="">Seleccione...</option>');
            var htmlString = $('#categoria').html();
            $('#categoria').html(data.res);
              $.each(data.categorias, function(i, fila){
                   
              //$('#categoria').html(htmlString+"<option value='"+Object.keys(fila.categoria[0])+"'>"+Object.keys(fila.categoria[0])+"</option>"); 
              }); 
              $('#btnOpcion').html('<input type="text" value='+tipoVenta+' id="tipoVentaMarca" hidden><a href="#" id="btnCategoria" class="btn btn-primary btn-xs btn-block" onclick="btnAgregarMarca()">Agregar Marca</a>');
          }
        });
  }
});

function btnAgregarMarca() {
  $('#cont-guardar-cat').css('display','block');
  $('#btnCategoria').css('display','none');

}

$('#btnAgregar').click(function(){ 
  var tipoVenta = $("#tipoVenta").val();
  var nombreCategoria = $("#nombreCategoria").val(); 
  var route = "/MercadoLibre-2.0/public/guardarCategoria";
  var token = $("#token").val();
  if (tipoVenta != "" && nombreCategoria != "") {
      $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {nombreCategoria: nombreCategoria, tipoVenta: tipoVenta} 
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

$('#btnAgregarMarca').click(function(){
  var nombreMarca = $('#nombreMarca').val();
  var tipoVenta = $('#tipoVentaMarca').val();
  var categoria = $('#categoria').val();
  var route = "/MercadoLibre-2.0/public/guardarMarca";
  var token = $("#token").val();
  if (categoria != "" && nombreMarca != "") {
      $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {nombreMarca: nombreMarca, categoria: categoria, tipoVenta: tipoVenta} 
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
  var route = "/MercadoLibre-2.0/public/cargarMarcas";
  var tipoVenta = $("#tipoVenta").val();
  var token = $("#token").val();
  if (categoria != "") {
      $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {tipoVenta: tipoVenta, categoria: categoria} 
        }).done(function(data) {  
          $('#car-marca').html(""); 
          $('.menu-marcas').hide();
        try {     
            $('#car-marca').html(data.res); 
            $('.menu-marcas').show();    
        }
        catch(err) {
        }
        });
  }
});

$('#car-marca').change(function(){ 
  var categoria = $("#categoria").val();
  var route = "/MercadoLibre-2.0/public/cargarModelos";
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
          $('#car-modelo').html(""); 
          $('.menu-modelo').hide();
          try {     
              $('#car-modelo').html(""); 
              $('#car-modelo').html(data.res); 
              $('.menu-modelo').show();    
          }
          catch(err) {
          }
        });
  }
});

$('#car-modelo').change(function(){  
  var route = "/MercadoLibre-2.0/public/cargarAnios";
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
          $('#car-anio').html(""); 
          $('.menu-anio').hide();
          try {     
              $('#car-anio').html(data.res); 
              $('.menu-anio').show();    
          }
          catch(err) {
          }
        });
  }
});


$('#car-marca').change(function(){
  $('.menu-publicar').show();
});