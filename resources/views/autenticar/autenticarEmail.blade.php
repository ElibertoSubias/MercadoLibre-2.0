@extends('layouts.masterLogin')

@section('content') 
<main class="main_aut_email col-md-12" style="margin: 0px;padding: 0px;font-family: Proxima Nova,-apple-system,Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;    font-size: 16px;    font-weight: 300;    line-height: 1.35;    -webkit-text-size-adjust: 100%;-webkit-tap-highlight-color: rgba(0,0,0,.1);height: 47.1%;">
	<div style="width: 100%;height:350px;background-color:#fff059;position: absolute;margin-top: -15px;">
		
	</div>
	<div class="cont_padre_login row col-md-4 col-md-offset-4" style="position: relative;z-index: 1;">  
		<div class="cont_encabezado_login row col-md-12" style="margin-top: -260px;height: 120px; position:relative;z-index: 0;width: 546px;max-width: 456px;"> 
			<img src="svg/user.svg" alt="">
			<h2 style="line-height: 1.5;letter-spacing: 2px;color: #333;font-size:2rem;font-weight: 300;">¡Hola! Para seguir, ingresa tu e-mail
			o usuario</h2>
		</div> 
		<div class="cont_form_login row col-md-12" style="position:relative;z-index: 0;background-color: #fff;margin-top: -85px;width: 546px;max-width: 456px;     padding: 40px 65px 54px;    -webkit-border-radius: 4px;    border-radius: 4px;-webkit-box-shadow: 0 1px 2px 0 rgba(0,0,0,.15);box-shadow: 0 1px 2px 0 rgba(0,0,0,.15);"> 
			<div id="msjForMovil" style="display: none;">
			<h2 style="line-height: 1.5;letter-spacing: 2px;color: #333;font-size:2rem;font-weight: 300;">¡Hola! Para seguir, ingresa tu e-mail
			o usuario</h2>
		</div>
			{!! Form::open(array('url'=>'validar', 'id'=>'frmValidar')) !!}  
			<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
				<div id="cont-form1" style="margin-top: -18px;"> 
					<div class="col-md-6" style="height: 30px;width: 100%;">
						{!!Form::text('login',null,['class'=>'form-control','id'=>'inputEmail','autocomplete'=>'new-mail'])!!}
						{!!Form::label('E-mail o usuario', null, array('id' => 'lblMsjinputEmail'))!!} 
						<div id="alertMsjinputEmail" class="ch-validation-message ui-form__message" style="float: left;color: #f04449;font-weight:600;font-size: 14px;line-height: 1em;">Completa este dato.</div>
					</div> 
				</div> 
				<div class="col-md-12" style="margin-top: 30px;width: 100%;">   

						{!!link_to('#', $title='Continuar', $attributes = ['id'=>'continuar','class'=>'col-md-12 btn btn-primary btn-lg','name'=>'continuar','style'=>'outline: 0px;background: #3483fa;border-color: #3483fa;'], $secure = null)!!} 
				</div> 
				<div class="col-md-12" style="margin-top: 20px;width: 100%;">  
						<a href="{{route('crearcuentapersonal')}}" class="btn btn-default" style="background:none;border:none;text-decoration: none;color: #3483fa;">Crear Cuenta</a> 
				</div>  
			{!! Form::close() !!} 	
		</div>
	</div>		 
	<!-- Modal -->
	<div class="modal fade in" id="modalloading" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="background-color: rgba(0,0,0,0.7);">
	    <div class="modal-dialog" style="width: 46%;height: auto;">
	      <img src="img/icon_loading.gif" alt="" width="100" height="100" style="margin: 50% auto">
	    </div><!-- /.modal-dialog -->
	 </div><!-- /.modal -->   
 </main>
@stop
