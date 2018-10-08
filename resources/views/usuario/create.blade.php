@extends('layouts.masterRegistro')

@section('content') 

<div class="row col-md-8 col-md-offset-2"> 
			<div class="col-md-10 col-md-offset-1"> 
				<h3 style="font-weight: 600;display: inline-block;float: left;">Completa tus datos</h3> 
				<a href="#" title="" style="float: right;margin-top: 25px;text-decoration: none; display: inline-block;color: #3483fa;">Crear una cuenta de empresa</a> 
			</div>
			<?php if(isset($data)){echo $data[0]->id;}else{}?>
			<div class="col-md-10 col-md-offset-1"> 
				{!! Form::open(['route'=>'usuario.store', 'method'=>'POST', 'id'=>'frmInsertarUsuario', 'name'=>'frmInsertarUsuario','autocomplete'=>'off']) !!} 
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
					<div id="cont-form1" style="background: #fff;    display: table;padding: 1px 32px 60px;box-shadow: 0 1px 3px 0 rgba(0,0,0,.3);-webkit-border-radius: 0 0 4px 4px;border-radius: 0 0 4px 4px;">
						<div class="col-md-6" style="height: 30px;"> 
							{!!Form::text('nombre',null,['class'=>'form-control','id'=>'inputNombre'])!!}
							{!!Form::label('Nombre', null, array('id' => 'lblMsjinputNombre'))!!}
							<div id="alertMsjinputNombre" class="ch-validation-message ui-form__message">Completa este dato.</div>
						</div>
						<div class="col-md-6" style="height: 30px;">
							{!!Form::text('apellido',null,['class'=>'form-control','id'=>'inputApellido','autocomplete'=>'new-apellido'])!!}
							{!!Form::label('Apellido', null, array('id' => 'lblMsjinputApellido'))!!}  
							<div id="alertMsjinputApellido" class="ch-validation-message ui-form__message">Completa este dato.</div>
						</div>
						<div class="col-md-6" style="height: 30px;">
							{!!Form::text('email',null,['class'=>'form-control','id'=>'inputEmail','autocomplete'=>'new-mail'])!!}
							{!!Form::label('E-mail', null, array('id' => 'lblMsjinputEmail'))!!} 
							<div id="alertMsjinputEmail" class="ch-validation-message ui-form__message">Completa este dato.</div>
						</div>
						<div class="col-md-6" style="height: 30px;">
							{!!Form::password('clave',['class'=>'form-control','id'=>'inputClave'])!!} 
							{!!Form::label('Clave', null, array('id' => 'lblMsjinputClave'))!!}  
							<div id="alertMsjinputClave" class="ch-validation-message ui-form__message">Completa este dato.</div>
						</div>
					</div>  
			</div> 
			<div class="col-md-10 col-md-offset-1" style="margin-top: 30px"> 
				<div class="col-md-4" style="text-align: -webkit-left;padding-left: 0px;"> 
					{!!link_to('#', $title='Crear cuenta', $attributes = ['id'=>'crearCuenta','class'=>'col-md-12 btn btn-primary btn-lg','name'=>'crearUsuario','style'=>'outline: 0px;background: #3483fa;border-color: #3483fa;'], $secure = null)!!} 
				</div>
				<div class="col-md-7" style="font-size: 11px;text-align: -webkit-left;padding-right:30px;color: #999;">
					<p>Al registrarme, declaro que soy mayor de edad y acepto las <a style="text-decoration: none;cursor: pointer;">Políticas de privacidad</a> y los <a style="text-decoration: none;cursor: pointer;">Términos y condiciones de Mercado Libre</a> y <a style="text-decoration: none;cursor: pointer;">Mercado Pago</a>.</p>
				</div>
			</div> 
			{!! Form::close() !!} 
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

</div>			

@stop