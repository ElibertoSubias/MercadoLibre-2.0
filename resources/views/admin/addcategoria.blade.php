@extends('layouts.masterRegistro')

@section('content')
<div id="msjAlert">
</div>
<div class="row col-md-10 col-md-offset-1" style="height: 100%">  
	<div class="col-md-3">
		<form action="{{route('guardarCategoria')}}" method="post" accept-charset="utf-8">
			<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
			<div class="form-group">
			<label for="venta">Ventas:</label> 
				<select class="form-control" name="tipoVenta" id="tipoVenta">
					<option value="">Seleccione...</option>
					<option value="VEHI">Vehículo</option>
					<option value="INMU">Inmuebles</option>
					<option value="SERV">Servicios</option>
					<option value="PROD">Productos y otros</option>
				</select> 
			</div> 
				<div id="contenedor"> 
					<label style="margin-top:20px;">Nombre de la categoria:</label>
					<input class="form-control" type="text" name="nombreCategoria" id="nombreCategoria" autocomplete="off">
					<a href="#" id="btnAgregar" class="btn btn-primary btn-block" oncclick="agregarCategoria()">Guardar</a>
				</div> 
		</form>  
	</div> 
	<div class="col-md-3">
		<form action="{{route('guardarMarca')}}" method="post" accept-charset="utf-8">
			<div class="form-group">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
				<label for="">Categorias Disponibles:</label> 
				<select name="categoria" id="categoria" class="form-control">
					
				</select>
				<div id="btnOpcion"></div>
			</div> 
			<div id="cont-guardar-cat" style="display: none;"> 
					<label style="margin-top:20px;">Nombre de la Marca:</label>
					<input class="form-control" type="text" name="nombreMarca" id="nombreMarca" autocomplete="off">
					<a href="#" id="btnAgregarMarca" class="btn btn-primary btn-block">Guardar</a>
			</div> 
		</form> 
	</div> 
</div> 
<!-- Modal -->
  <div class="modal fade in" id="idExistente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 350px;">
      <div class="modal-content" style="margin: 60% auto;">
        <div class="modal-header" style="border-bottom: 0px;padding-bottom:0px;">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h3 style="font-size: 17px;padding: 20px;" class="modal-title">Ya te habias registrado con <b>
          	<label id="lblCorreoExistente"></label></b></h3>
        </div>
        <div class="modal-body" style="border-bottom: 0px;">
        	<a href="https://www.mercadolibre.com/jms/mlm/lgz/login?user_id=eliberto.subias.ortega%40gmail.com">
        		<button type="button" class="col-md-10 col-md-offset-1 btn btn-primary btn-lg" style="background-color: #3483fa;border: 0px;">Ingresa a tu cuenta</button>
        	</a>
        	<button type="button" class="btn btn-lg" style="background-color: #fff;color: rgba(52,131,250,.65);margin-top: 5px;">Registrarme usando otro e-mail</button>
        </div> 
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
@stop