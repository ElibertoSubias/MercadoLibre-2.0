@extends('layouts.masterAdmin')

@section('contentTitulo')  
<title>Admin Dashboard</title>
{!! Html::style('css/bootstrap.css') !!}  
{!! Html::style('css/style.css') !!} 
<meta name="viewport" content="width=device-width"/>
@stop
@section('contenidoMain')
<main class="col-md-12" style="    font-family: Proxima Nova,-apple-system,Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;    font-size: 16px;    font-weight: 300;    line-height: 1.35;
    -webkit-text-size-adjust: 100%;-webkit-tap-highlight-color: rgba(0,0,0,.1);height: 100%;">
<div id="msjAlert">
</div>
<div class="row col-md-10 col-md-offset-1 cont-addCategoria" style="height: 100%">  
	<h4>Edición de Categorias</h4>
	<div class="col-md-3">   
		<div class="form-group">
		<label for="venta">Tipo de Venta:</label> 
			<select class="form-control" name="tipoVenta" id="tipoVenta">
				<option value="">Seleccione...</option>
				<option value="VEHI">Vehículo</option>
				<option value="INMU">Inmuebles</option>
				<option value="SERV">Servicios</option>
				<option value="PROD">Productos y otros</option>
			</select> 
		</div>   
	</div> 
	<div class="col-md-3">
		<form action="{{route('guardarCategoria')}}" method="post" accept-charset="utf-8" id="frm_agregarCategoria"> 
			<div class="form-group">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
				<label for="">Categorias Disponibles:</label> 
				<select name="categoria" id="categoria" class="form-control" disabled>
					
				</select>
				<div id="btnOpcion"></div>
			</div> 
			<div id="contenedor-addCat" style="display:none;"> 
				<label>Nombre de la categoria:</label>
				<input class="form-control" type="text" name="nombreCategoria" id="nombreCategoria" autocomplete="off">
				<a href="#" id="btnAgregar" class="btn btn-primary btn-block" oncclick="agregarCategoria()">Guardar</a>
			</div>  
		</form> 
	</div> 
	<div class="col-md-3"> 
		<form action="{{route('guardarMarca')}}" method="post" accept-charset="utf-8">
			<div class="form-group">
				<label for="">Marcas Disponibles:</label> 
				<select name="car-marca" id="car-marca" class="form-control" disabled>
						
				</select>
			</div>
			<div class="form-group">
				<div id="cont-guardar-cat" style="display: none;"> 
					<label>Nombre de la Marca:</label>
					<input class="form-control" type="text" name="nombreMarca" id="nombreMarca" autocomplete="off">
					<a href="#" id="btnAgregarMarca" class="btn btn-primary btn-block">Guardar</a>
				</div> 
			</div> 
		</form>
	</div>
</div> 
</main>
@stop
