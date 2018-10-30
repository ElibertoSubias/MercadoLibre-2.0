@extends('layouts.masterRegistro')

@section('content') 
 {!! Html::style('css/styleEditar.css') !!} 
{!! Html::style('css/app.css') !!}
{!! Html::script('js/jquery-3.3.1.min.js') !!}



<script type="text/javascript">
function btncambiarCorreo(){
  var id = $("#id").val();
  var email = $("#email").val();
  var email2 = $("#email2").val();
  var route = "/MercadoLibre-2.0/public/cambiarcorreo";
  var token = $("#token").val();
  var bandera="0";
    if(email === "")
    { 
        bandera="1";   
        $('#alertMsjinputCorreo').css({"visibility":"visible"});  
        $('#email').css({"border-color":"#ff5a5f"}); 
    }else{ 
      $('#alertMsjinputCorreo').css({"visibility":"hidden"}); 
    }
    if(email2 === "")
    {   
        bandera="1";  
        $('#alertMsjinputCorreo2').css({"visibility":"visible"});  
        $('#email2').css({"border-color":"#ff5a5f"}); 
    }
    else{ 
      $('#alertMsjinputCorreo2').css({"visibility":"hidden"}); 
    }
    if(email2 != email)
    {
      bandera="1"
      $('#alertMsjinputCorreoNoCoicende').css({"visibility":"visible"}); 
    }else{
      $('#alertMsjinputCorreoNoCoicende').css({"visibility":"hidden"}); 
    }

 
    if (bandera==="0") { 
       $.ajax({
         url: route,
         headers: {'X-CSRF-TOKEN': token},
         type: 'POST',
         dataType: 'json',
         data: { email: email, id: id, email2:email2} 
        }).done(function(data) {  
          if (data.res!=1 && data.res!=0){
              $('#formulario').css({"visibility":"hidden"});
              $('#listo').css({"visibility":"visible"}); 
          
           }else if(data.res==1){  
             $("#alertMsjinputCorreoEnUso").css({"visibility":"visible"});  
           }
         });
    }
}

</script>

<div  id="formulario" style="background-color: #f7f7f7;padding: 90px 150px 170px 150px; ">	
<center>
<div class="divp" style="height: 36%">
<form  method="post" action="{{route('cambiarcorreo')}}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
	 <input type="hidden" name="id" value="{{ auth()->user()->id }}" id="id">
	
				<table  style="width: 100%;">
					<tr>
						<td colspan="3" style="width: 100%"> <div style=" font-weight: 400;margin: 10px 0; font-size: 22px; margin-right:75%">Modificar e-mail</div></td>
					</tr>
					<tr>
						<td colspan="2" style="width: 20%">E-mail nuevo</td>
						<td style="width: 30%"><input type="email" name="email" id="email" style=" width:100%; height:30px; border: 1px solid rgb(205, 205, 205)    ;border-radius: 4px 4px 4px 4px;"></td>
						<td style="width: 20%">  <input type="" id="alertMsjinputCorreo" value="Completa este dato."  style="width: 130px ;margin-right: 10px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden">  </td>
						<td style="width: 0%">	<input type="" id="alertMsjinputCorreoEnUso"  value="El correo ya esta en uso"  style="width: 150px ; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden;margin-left: -233px ;"></td>
					</tr>
					<tr>
						<td colspan="2" style="width: 20%; margin-top: 15px">Repetir e-mail nuevo</td>
						<td style="width: 30%; margin-top: 15px"><input type="email" name="email2" id="email2" style=" width:100%; height:30px; border: 1px solid rgb(205, 205, 205)    ;border-radius: 4px 4px 4px 4px;"></td>
						<td > <input  value="Completa este dato." id="alertMsjinputCorreo2"  style="width: 130px ;margin-right: 10px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden">  </td>
							<td style="width: 0%"><input  value="No coinciden los correos" id="alertMsjinputCorreoNoCoicende"  style="width: 150px ; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden;margin-left: -233px ;"> </td>
					</tr>
					<tr>
						<td colspan="2" style="width: 33%; margin-top: 13px ; height: 44px"><a href="javascript:btncambiarCorreo()" name="btncambiarCorreo" style="padding:6px" class="boton-azul" id="btncambiaarCorreo">Guardar</a></td>
						<td><a href="{{route('perfil')}}" style="padding-left: 9PX">Cancelar</a></td>
					</tr>
				</table>
</form>
</div>
</center>
</div>


<div  id="listo" style="background-color: #f7f7f7;padding: 90px 150px 170px 150px; margin-top: -455px ;visibility: hidden; ">	
<center>
<div style="background-color: white; width: 60% ; height: 200px;padding: 1px 15px 5px; border-radius: 5px;border: 1px solid #DEDEDE;"  >
	<fieldset >
		<table  style="width: 100%" align="left">
			<tr>
				<td style=" margin: 10px ;width: 55%; height: 40px "> <img src="{{ asset('img/palomita.png') }}"> </td>
			</tr>
			<tr>
				<td style="width: 69%; margin-top: 19px"><h2> ¡Listo! Modificaste tu Correo</h2></td>
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

