@extends('layouts.masterRegistro')
{!! Html::style('css/styleEditar.css') !!} 

@section('content') 
 


<div style="background-color: #f7f7f7;padding: 90px 150px 170px 150px;">	
<center>
<div class="divp">
<form >
	<fieldset >
		<table align="left">
			<tr>
				<td style=" font-weight: 400;margin: 10px 0; font-size: 22px;">Modificar usuario</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td width="30px"></td>
				<td>Usuario nuevo</td>
				<td colspan="2"><input type="text" name="nuevoUsuario" class="CajaTex"></td>
				
			</tr>
			<tr>
				<td colspan="3" style="width: 120px"></td>
				<td></td>
				<td><input type="submit" name="Cambiar" class="boton-azul" value="Modificar" ><a href="#" style="padding-left: 9PX">Cancelar</a></td>
			</tr>
		</table>
		<br style="padding: 110px">
		
		
		
	</fieldset>
</form>
</div>
</center>
</div>

@stop