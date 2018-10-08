@extends('layouts.masterRegistro')
{!! Html::style('css/styleEditar.css') !!} 

@section('content') 
 


<div style="background-color: #f7f7f7;padding: 90px 150px 170px 150px;">	
<center>
<div class="divp" style="height: 35%">
<form >
	<fieldset >
		<table align="left">
			<tr>
				<td style=" font-weight: 400;margin: 10px 0; font-size: 22px;">Modificar e-mail</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td width="20%"></td>
				<td>Clave nueva</td>
				<td colspan="2"><input type="text" name="nuevoPassword" class="CajaTex"></td>
			</tr>
				<tr>
				<td width="30px"></td>
				<td>Repetir clave nueva</td>
				<td colspan="2"><input type="text" name="repetirPassword" class="CajaTex"></td>
				
			</tr>

			<tr>
				<td colspan="3" style="width: 40%"></td>
				<td></td>
				<td><input type="button" name="Cambiar" class="boton-azul" value="Guardar" ><a href="#" style="padding-left: 9PX">Cancelar</a></td>
			</tr>
		</table>
		<br style="padding: 110px">
		
		
		
	</fieldset>
</form>
</div>
</center>
</div>

@stop