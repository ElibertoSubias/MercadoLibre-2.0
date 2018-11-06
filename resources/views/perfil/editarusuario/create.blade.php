@extends('layouts.masterRegistro')


@section('content') 
{!! Html::style('css/styleEditar.css') !!} 
{!! Html::style('css/app.css') !!}
{!! Html::script('js/validaciones.js') !!}

<script type="text/javascript">



function cambiarUs(){
	$('#alertMsjinputaliasYaExiste').css({"visibility":"hidden"}); 
  var id = $("#id").val();
  var alias = $("#alias").val();
  var route = "cambiarusuario";
  var token = $("#token").val();
  var bandera="0";
    if(alias === "")
    {   
        bandera="1";  
        $('#alertMsjinputalias').css({"visibility":"visible"});  
        $('#alias').css({"border-color":"#ff5a5f"}); 
    }
    else{ 
      $('#alertMsjinputalias').css({"visibility":"hidden"}); 
    }

    if (bandera==="0") { 
      $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: { alias: alias, id: id} 
        }).done(function(data) {  
          if (data.res!=1 && data.res!=0){
          	$('#alertMsjinputaliasYaExiste').css({"visibility":"hidden"}); 
             $('#formulario').css({"visibility":"hidden"}); 
            $('#listo').css({"visibility":"visible"}); 
          }else if(data.res==1){  
            $('#alertMsjinputaliasYaExiste').css({"visibility":"visible"}); 
          
          }
        });
    }
}	

</script>


<div  id="formulario" style="background-color: #f7f7f7;padding: 90px 150px 170px 150px;">	
<center>
<div style="background-color: white; width: 60%;padding: 1px 15px 5px; border-radius: 5px;border: 1px solid #DEDEDE;"  >
<form method="post" action="{{route('cambiarusuario')}}" >
	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
	<input type="hidden" name="id" value="{{ auth()->user()->id }}" id="id">
	<fieldset >
		<table   style="width: 100%" align="left">
			<tr>
				<td style=" font-weight: 400;margin: 10px 0; font-size: 22px;">Modificar usuario</td>
			</tr>
			<tr>
				<td width="30px"></td>
				<td>Usuario nuevo</td>
				<td colspan="1"><input type="text" name="alias"  id="alias" class="CajaTexa" style="width: 150px"></td>
				<td width="23%">
					<input  value="Completa este dato."  id="alertMsjinputalias" style="width: 124px ;margin-right: 120px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding:4px; visibility: hidden; position: relative; "></td>
				<td width="15%">	<input id="alertMsjinputaliasYaExiste" value="El nombre de usuario ya esta en uso."   style="width: 220px ;margin-right: 10px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden;margin-left: -233px ;  top: 33%"> </td>
			</tr>
			<tr>
				<td style="width: 44%; margin-top: 9px">
					<a href="javascript:cambiarUs()" name="cambiarUs"  class="boton-azul" id="cambiarUs"  style="padding: 4px" >Modificar </a><a href="{{route('perfil')}}" style="padding-left: 9PX">Cancelar</a></td>
			</tr>
		</table>
	</fieldset>
</form>
</div>
</center>
</div>

<div  id="listo" style="background-color: #f7f7f7;padding: 90px 150px 170px 150px; visibility: hidden; margin-top: -400px">	
<center>
<div style="background-color: white; width: 60% ; height: 200px;padding: 1px 15px 5px; border-radius: 5px;border: 1px solid #DEDEDE;"  >
	<fieldset >
		<table  style="width: 100%" align="left">
			<tr>
				<td style=" margin: 10px ;width: 55%; height: 40px "> <img src="{{ asset('img/palomita.png') }}"> </td>
			</tr>
			<tr>
				<td style="width: 70% ; padding-top: 14px"><h2> ¡Listo! Modificaste tu usuario</h2></td>
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
