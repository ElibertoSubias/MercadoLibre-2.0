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
	}
	function closeventana()
	{
		$(".ventana").slideUp("fast");
	}
</script>	

<div class="padre">
	<div class="menu">
		menu
	</div>
	<div class="formulario" ">
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
			 		<td>{{ auth()->user()->nombre }}</td>
			 		<td><a href="javascript:openventana()"> Modificar</a> </td>
			 	</tr>
			 	<tr>
			 		<td>documentos</td>
			 		<td></td>
			 		<td><a href="javascript:openventana2()"> Agregar</a> </td>
			 	</tr>
			 	<tr>
			 		<td>Telefono</td>
			 		<td></td>
			 	<td><a href="javascript:openventana3()"> Agregar</a> </td>
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
		<form >
			<table align="left">
				<p style=" font-size: 22px; text-align-last: left;">Modificar nombre y apellidos</p>
				
				<tr>
					
					<td style="padding: 20px 15px 10px 10px">Nombre *</td>
					<td colspan="2"><input type="text" name="nombre" class="CajaTex" style="width: 200%"></td>
				</tr>
					<tr>
					
					<td style="padding: 20px 15px 10px 10px">Apellido *</td>
					<td colspan="2"><input type="text" name="apellido" class="CajaTex" style="width: 200%"></td>
					
				</tr>

				<tr>
					<td></td>
					<td><input type="button" name="Cambiar" class="boton-azul" style="margin-top: 5px" value="Guardar" ></td>
					<td style="margin-top: 10px; margin-left: -40px"><a href="javascript:closeventana()">Cancelar</a></td>
				</tr>
			</table>
	</form>
	</div>
</div>

<div id="openModal2" class="ventana">
		<div class="form">
		<form >
			<table align="left">
				<p style=" font-size: 22px; text-align-last: left;">Agrega mi documento</p>
				<tr>
				    <td style="padding: 20px 2px 1px 0px">
					 Documento *
				   </td>
					<td style="padding: 20px 9px 10px 10px">
						<select>
							<option value="1">RFC</option>
							<option value="2">CURP</option>
							<option value="3">IFE</option>
							<option value="4">Otro</option>
						</select>
					</td>
					<td >
						<input type="text" name="documento" class="CajaTex" required="" style="width: 100%">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="Cambiar" class="boton-azul" style="margin-top: 1px" value="Guardar" ></td>
					<td style="margin-top: 10px; margin-left: -40px"><a href="javascript:closeventana()">Cancelar</a></td>
				</tr>
			</table>
	</form>
	</div>
</div>


<div id="openModal3" class="ventana">
		<div class="form">
		<form >
			<table align="left">
				<p style=" font-size: 22px; text-align-last: left;">Agrega Telefono</p>
				<tr>
				    <td style="padding-left: 30px" >
					 Telefono *
				   </td>
					
					<td colspan="2">
						<input type="text" name="documento" class="CajaTex" style="width: 200%">
					</td>
				</tr>
				<tr>
					<td></td>
					<td colspan="3" style="width: 300px;padding-top: 35PX; color: #D5D5D3" >Código de área + Nº. Ejemplo: (11) 4323-4556.</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="Cambiar" class="boton-azul" style="margin-top: 10px" value="Guardar" ></td>
					<td><a href="javascript:closeventana()">Cancelar</a></td>
				</tr>
			</table>
	</form>
	</div>
</div>

@stop