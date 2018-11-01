@extends('layouts.masterRegistro')
{!! Html::style('css/styleEditar.css') !!} 

{!! Html::style('css/app.css') !!}
@section('content') 
 

<script type="text/javascript">
	
function cambiarPass(){

  var id = $("#id").val();
  var password = $("#password").val();
   var password2 = $("#password2").val();
  var route = "../public/cambiarclave";
  var token = $("#token").val();
  var bandera="0";
    if(password === "")
    {  
        bandera="1";   
        $('#alertMsjinputPassword').css({"visibility":"visible"});  
        $('#password').css({"border-color":"#ff5a5f"}); 
    }else{ 
      $('#alertMsjinputPassword').css({"visibility":"hidden"}); 
    }
    if(password2 === "")
    {   
        bandera="1";  
        $('#alertMsjinputPassword2').css({"visibility":"visible"});  
        $('#epassword2').css({"border-color":"#ff5a5f"}); 
    }
    else{
      $('#alertMsjinputPassword2').css({"visibility":"hidden"}); 
    }
    if (password != password2) {
       $('#alertMsjinputPasswordNoIgual').css({"visibility":"visible"});  
        $('#epassword2').css({"border-color":"#ff5a5f"});
    }

    if (bandera==="0") { 
      $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: { password: password, id: id, password2: password2} 
        }).done(function(data) {  
          if (data.res!=1 && data.res!=0){ 
          $('#formulario').css({"visibility":"hidden"});
            $('#listo').css({"visibility":"visible"});
          }
        });
    }
}
</script>


<div id="formulario" style="background-color: #f7f7f7;padding: 50px 100px 170px 150px;">	
<center>
<div class="divp" style="height: 35%">
<form method="post" action="{{route('cambiarclave')}}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
	 <input type="hidden" name="id" value="{{ auth()->user()->id }}" id="id">
	
		<table  align="left" style="width: 100%; ">
			<tr>
				<td style=" font-weight: 400;margin: 10px 0; font-size: 22px;">Modificar Clave</td>
				
			</tr>
			<tr>
				<td style="width: 20%">Clave nueva:</td>
				<td colspan="2" style="width: 30%"><input type="password" name="nuevoPassword" id="password" style="width: 100%; border-radius: 4px; border: 1px solid #999" class="CajaTex"></td>
			
				<td><input type="" value="Completa este dato." id="alertMsjinputPassword" style="width: 130px ;margin-right: 10px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden;"></td>
			</tr>
			<tr>
				<td style="width: 20%">Repetir clave nueva:</td>
				<td colspan="2" style="width: 30%; margin-top: 10px"><input type="password" name="repetirPassword" id="password2" style="width: 100%; border-radius: 4px; border: 1px solid #999" class="CajaTex"></td>
				<td><input type="" value="Completa este dato." id="alertMsjinputPassword2" style="width: 130px ;margin-right: 10px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden;">
					<input type="hidden" value="Las claves no coinciden." id="alertMsjinputPasswordNoIgual" style="width: 150px ;margin-right: 10px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px"></td>
			</tr>
			<tr>
				<td style="width: 40%; margin-top: 15px"><a href="javascript:cambiarPass()" name="Guardar" class="boton-azul" id="cambiarPass" style="padding:5px">Guardar</a><a href="{{route('perfil')}}" style="padding-left: 9PX">Cancelar</a></td>
			</tr>
		</table>
		
		

</form>
</div>
</center>
</div>

<div id="listo" style="background-color: #f7f7f7;padding: 90px 150px 170px 150px; visibility: hidden; margin-top: -400px">	
<center>
<div style="background-color: white; width: 60% ; height: 200px;padding: 1px 15px 5px; border-radius: 5px;border: 1px solid #DEDEDE;"  >
	<fieldset >
		<table  style="width: 100%" align="left">
			<tr>
				<td style=" margin: 10px ;width: 55%; height: 40px "> <img src="{{ asset('img/palomita.png') }}"> </td>			</tr>
			<tr>
				<td style="width: 84%"><h2> ¡Listo! Modificaste tu clave</h2></td>
			<tr>
				<td style="width: 60%; margin-top: 9px">
					<a href="{{route('perfil')}}" name="cambiarUs"  class="boton-azul" id="cambiarUs"  style="padding: 4px" >Ir a Mi cuenta </a></td>
			</tr>
		</table>
	</fieldset>
</div>
</center>
</div>

@stop
