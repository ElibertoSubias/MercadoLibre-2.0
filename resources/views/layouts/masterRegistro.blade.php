<!DOCTYPE html>
<html>
<head>
	<title>Regístrate en Mercado Libre</title>
	<meta charset="utf-8">
	{!! Html::style('css/style.css') !!} 
	{!! Html::style('css/bootstrap.css') !!}  
</head>
<body>
	<header role="banner" id="cabecera_principal">
		<div class="nav_registro"> 
			<div class="col-1">
				<a  href="{{ route('dashboard') }}">  
					<div class="nav-logo">
					
					</div>
				</a> 
			</div>
			@if(isset(auth()->user()->nombre))
				<div class="col-2" style="padding: 15px;width: 20%;"> 
					<div class="col-md-8" style="padding: 0px;    text-align: right;">
						<label for="nav-header-user-switch" style="font-weight:normal !important;text-transform: uppercase;font-size: 11px;">
							{{auth()->user()->alias}}
							
						</label>
					</div>
					<div class="col-md-3" style="padding: 0px;padding-top: 2px;border-right: 1px solid #ccc;">
						<img src="/MercadoLibre-2.0/public/img/user_icon.png" alt="" width="15" height="15" style="    vertical-align: initial;">	
					</div>
					<div class="col-md-1" style="padding: 0px;padding-left: 15px;">
						<img src="/MercadoLibre-2.0/public/img/icon_help.png" alt="" width="20" height="20">	
					</div> 
				</div>	
			@else
				<div class="col-2"> 				 		
					<a tabindex="4" class="option-help" href="#">Ayuda</a> 
				</div>	
			@endif 
		</div>
	</header>
	<main class="col-md-12" style="    font-family: Proxima Nova,-apple-system,Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;    font-size: 16px;    font-weight: 300;    line-height: 1.35;
    -webkit-text-size-adjust: 100%;-webkit-tap-highlight-color: rgba(0,0,0,.1);height: 100%;">
		@yield('content')
	</main>
	
	{!! Html::script('js/jquery-3.3.1.min.js') !!}  
	{!! Html::script('js/bootstrap.min.js') !!}   
	{!! Html::script('js/script.js') !!}  
	{!! Html::script('js/validaciones.js') !!}  
	{!! Html::script('js/ubicacion.js') !!} 
	{!! Html::script('js/arrayCaracteristicas.js') !!} 
</body>
</html>