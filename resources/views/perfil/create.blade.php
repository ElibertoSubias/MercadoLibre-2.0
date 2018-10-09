@extends('layouts.masterAutenticado')


@section('content') 
	{!! Html::style('css/stylePerfil.css') !!}
	{!! Html::script('js/jquery-3.3.1.min.js') !!}



<script type="text/javascript">
	function openventana()
	{
		document.getElementById('openModal1').style.display = 'block';
	}

	function openventana2()
	{
		document.getElementById('openModal2').style.display = 'block';
	}
	function openventana3()
	{
		document.getElementById('openModal3').style.display = 'block';
		if ({{$usuario->telefono}} ==="") {
		
			$('#formTel').css({"height": "200px"});
			$('#GuardarTel').css({"margin-top": "-50px"});
			$('#ocultarTelLeyenda').css({"visibility":"hidden"});
			$('#ocultarTel').css({"visibility":"hidden"});

		}else{
			
			$('#ocultarTelLeyenda').css({"visibility":"visible"});
			$('#ocultarTel').css({"visibility":"visible"});
		}

	}
	function closeventana()
	{
		$(".ventana").slideUp("fast");
	}
	function btnCambiarnombreAP(){
		  var id = $("#id").val();
		  var nombre = $("#nombre").val();
		  var apellido = $("#apellido").val();
		  var route = "/MercadoLibre-2.0/public/cambiarnombre";
		  var token = $("#token").val();
		  var bandera="0";
		  	 if(nombre === "")
		    { 
		        bandera="1";  
		         $('#alertMsjinputNombre').css({"visibility":"visible"});     
		        $('#nombre').css({"border-color":"#ff5a5f"}); 
		    }else{
		    	$('#alertMsjinputNombre').css({"visibility":"hidden"});  
		    }

		    if(apellido === "")
		    {   
		        bandera="1";   
		         $('#alertMsjinputApellido').css({"visibility":"visible"}); 
		        $('#apellido').css({"border-color":"#ff5a5f"}); 
		    }else{
		    	 $('#alertMsjinputApellido').css({"visibility":"hidden"}); 
		    }


		    if(bandera==="0")
		    {
		      $.ajax({
		        url: route,
		        headers: {'X-CSRF-TOKEN': token},
		        type: 'POST',
		        dataType: 'json',
		        data: { apellido: apellido, id: id, nombre:nombre} 
		        }).done(function(data) {  
		          if (data.res!=1 && data.res!=0){
		          location.href ="/MercadoLibre-2.0/public/perfil";
		          }else if(data.res==1){  
		            $("#lblCorreoExistente").empty();
		            $("#lblCorreoExistente").append(data.email);
		          }
		        });
		    }
		}
        
        function guardarDocumento(){
		
	

		  var id = $("#id").val();
		  var dato = $("#dato").val();
		  var tipo = $('#documento').val();
		  var route = "/MercadoLibre-2.0/public/agregardocumento";
		  var token = $("#token").val();
		  var bandera="0";
		  
		  	if(dato === "")
		    { 
		        bandera="1";  
		         $('#alertMsjinputDato').css({"visibility":"visible"});     
		        $('#nombre').css({"border-color":"#ff5a5f"}); 
		    }else{
		    	$('#alertMsjinputDato').css({"visibility":"hidden"});  
		    }
		    if(bandera==="0")
		    {
		      $.ajax({
		        url: route,
		        headers: {'X-CSRF-TOKEN': token},
		        type: 'POST',
		        dataType: 'json',
		        data: { dato: dato, id:id, tipo: tipo} 
		        }).done(function(data) {  
		          if (data.res!=1 && data.res!=0){
		          	location.href ="/MercadoLibre-2.0/public/perfil";
		          }
		        });
		    }
		}

			function agregarTel(){
		  var id = $("#id").val();
		  var telefono = $("#telefono").val();
		  var telefono2= $("#telefono2").val();
		  var route = "/MercadoLibre-2.0/public/agregartelefono";
		  var token = $("#token").val();
		  var bandera="0";
		  	 if(telefono === "")
		    { 
		        bandera="1";  
		         $('#alertMsjinputTelefono').css({"visibility":"visible"});     
		        $('#telefono').css({"border-color":"#ff5a5f"}); 
		    }else{
		    	$('#alertMsjinputTelefono').css({"visibility":"hidden"});  
		    }

		    if(bandera==="0")
		    {
		      $.ajax({
		        url: route,
		        headers: {'X-CSRF-TOKEN': token},
		        type: 'POST',
		        dataType: 'json',
		        data: { telefono: telefono,telefono2: telefono2, id: id} 
		        }).done(function(data) {
		          if (data.res!=1 && data.res!=0){
		          	location.href ="/MercadoLibre-2.0/public/perfil";
		          }else if(data.res==1){  
		            $("#lblCorreoExistente").empty();
		            $("#lblCorreoExistente").append(data.email);
		          }
		        });
		    }
		}
</script>	

<div class="padre">
	<div class="menu">
		menu
	</div>
	<div class="formulario">
		<form>
			
		 		<div><p class="h2">Mis datos</p>
			 		<p class="H3_1">Datos de la cuenta <a href="" style="padding-left: 270px; font-size: 12px">Necesito ayuda</a> </p>
			 	</div>
			 <table>
			 	<tr>
			 		<td>Usuario</td>
			 		<td>{{ auth()->user()->alias }}</td>
			 		<td><a href="editarusuario"> Modificar</a> </td>
			 	</tr>
			 	<tr>
			 		<td>E-mail</td>
			 		<td>{{ auth()->user()->email }}</td>
			 		<td><a href="editarcorreo"> Modificar</a> </td>
			 	</tr>
			 	<tr>
			 		<td>Clave</td>
			 		<td>********</td>
			 		<td><a href=editarpassword> Modificar</a> </td>
			 	</tr>
			 </table>
			 <p class="H3_1">Datos personales <a href="#" style="padding-left: 270px; font-size: 12px">Necesito ayuda</a> </p>
			  
			 <table>
			 	<tr>
			 		<td>Nombre y apellido</td>
			 		<td>{{ auth()->user()->nombre }} {{$usuario->apellido}}</td>
			 		<td><a href="javascript:openventana()"> Modificar</a> </td>
			 	</tr>
			 	<tr>
			 		<td>documentos</td>
			 		<td></td>
			 		<td><a href="javascript:openventana2()"> Agregar</a> </td>
			 	</tr>
			 	<tr>
			 		<td>Telefono</td>
			 		<td style="width: 60%"><label style="margin-right: 6px; font-size: 12px">{{$usuario->telefono}}</label>/<label style="margin-left: 2px; margin-right: 100px; font-size: 12px; text-align: right;" id="tel">  {{$usuario->telefono2}}</label> 
			 			<a href='javascript:openventana3()' style='margin-right: 10px'> Agregar</a>
			 		</td>
			 	</tr>
			 </table>
			  <p class="H3_1">Tarjetas de credito <a href="#" style="padding-left: 270px; font-size: 12px">Necesito ayuda</a> </p>

		<table>
			<tr>
			<td></td>	
				<td><a href="#"> </a> </td>
			</tr>
		</table>
		<p class="H3_1">Domicilios <a href="#" style="padding-left: 350px; font-size: 12px; ">Necesito ayuda</a> </p>
		<table>
			
			<tr>
				<td><td> Agregar </td></td>
			</tr>
			
		</table>
		</form>
	</div>
</div>
	
			
	


<div id="openModal1" class="ventana">
		<div class="form">
		<form method="post" action="{{route('cambiarnombre')}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
	 		<input type="hidden" name="id" value="{{ auth()->user()->id }}" id="id">
			<table  align="left" style="width: 100%">
				<p style=" font-size: 22px; text-align-last: left;">Modificar nombre y apellidos</p>
				<tr>
					<td style="padding: 20px 15px 10px 10px">Nombre *</td>
					<td colspan="2"><input type="text" name="nombre" id="nombre" class="CajaTex" value="{{ auth()->user()->nombre }}" style="width: 130%"></td>
					<td><input type="" value="Completa este dato." id="alertMsjinputNombre"  style="width: 150px ;margin-left:  40px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden;">
					</td>
				</tr>
				<tr>
					<td style="padding: 20px 15px 10px 10px" >Apellido *</td>
					<td colspan="2"><input type="text"  id="apellido" name="apellido" class="CajaTex" value="{{$usuario->apellido}}" style="width: 130%"  style="width: 200%"></td>
					<td><input type="" value="Completa este dato." id="alertMsjinputApellido"  style="width: 150px ;margin-left: 40px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden;">
					</td>
				</tr>
				<tr>
					
					<td style="width: 40%; margin-top: 9px">
					<a href="javascript:btnCambiarnombreAP()" class="boton-azul" style="padding-left: 9PX">Actualizar</a> <a href="{{route('perfil')}}" style="padding-left: 9PX">Cancelar</a></td>
					
			</tr>
			</table>
	</form>
	</div>
</div>

<div id="openModal2" class="ventana">
		<div class="form">
		<form method="post" action="{{route('agregardocumento')}}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
	 	<input type="hidden" name="id" value="{{ auth()->user()->id }}" id="id">
		
				<p style=" font-size: 22px; text-align-last: left;">Agrega mi documento</p>
				<div>
					 Documento *
				   
						<select id="documento" name="documento">
							<option value="RFC">RFC</option>
							<option value="CURP">CURP</option>
							<option value="IFE">IFE</option>
							<option value="Otro">Otro</option>
						</select>
					
						<input type="text" id="dato" class="CajaTex" style="width: 40%"  style="width: 100%">
						<input type="" value="Completa este dato." id="alertMsjinputDato"  style="width: 130px ;margin-left: 10px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden;">
				</div>
				<div style="margin-top: 15px; width: 100%">
					<a href="javascript:guardarDocumento()" name="Cambiar" class="boton-azul" style="margin-top: 1px" >Guardar</a>
					<a href="javascript:closeventana()">Cancelar</a>
				</div>
	</form>
	</div>
</div>


<div id="openModal3" class="ventana">
		<div class="form" style="height: 250px" id="formTel">
		<form  method="post" action="">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
	 	<input type="hidden" name="id" value="{{ auth()->user()->id }}" id="id">
			
				
				<p style=" font-size: 22px; text-align-last: left;">Agrega Telefono</p>
				<div style="width: 100%">
					<label style="margin-right: 10px;  font-size: 13px; ">Telefono * </label> 
					<input type="number" value="{{$usuario->telefono}}" name="tel" id="telefono" style="width: 25%; padding-left: 2px; margin-left: 30px" class="CajaTex">
					<input type="" value="Completa este dato." id="alertMsjinputTelefono"  style="width: 130px ;margin-left: 10px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden;">
				</div>	
				<div style="margin-top: 10px;margin-left: 50px; color: #999; width: 93%; font-size: 12px">
					Código de área + Nº. Ejemplo: (11) 4323-4556.
				</div>

				<div style="width: 100%; visibility: hidden;" id="ocultarTel" >
					  Telefono Alternativo*
					<input type="number" value="" name="tel" id="telefono2" style="width: 25%" class="CajaTex">
					<input type="" value="Completa este dato." id="alertMsjinputTelefono"  style="width: 130px ;margin-left: 10px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden;">
				</div>	
				<div id="ocultarTelLeyenda" style="margin-top: 15px;margin-left: 50px; color: #999; width: 93%; font-size: 12px">
					Código de área + Nº. Ejemplo: (11) 4323-4556.
				</div>
				<div style="margin-top: 15px; margin-left: 50px width: 65%" id="GuardarTel">
					 <a href="javascript:agregarTel()" class="boton-azul" style="height: 35px"  >Guardar</a>
					<a href="javascript:closeventana()">Cancelar</a>
				</div>	
	</form>
	</div>
</div>

@stop
