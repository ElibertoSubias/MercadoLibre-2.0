<!DOCTYPE html>
<html>
<head>
	<title>Regístrate en Mercado Libre</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width"/>
	{!! Html::style('css/style.css') !!} 
	{!! Html::style('css/bootstrap.css') !!}  
</head>
<body>
	<header role="banner" id="cabecera_principal" class="cabecera_principal_login" style="height: 52.9%">
		<div class="nav_registro"> 
			<div id="cont_cabecera_movil">
				<div class="col-1">
					<a  href="{{ route('dashboard') }}">  
						<div class="nav-logo">
						
						</div>
					</a> 
				</div>
				<div class="col-2"> 				 		
					<a tabindex="4" class="option-help_login" href="#">Ayuda</a> 
					<label onclick="abrirMenu()" id="lblMenuFlotante_login" for="nav-header-menu-switch" aria-controls="nav-header-menu" tabindex="3">
						<span class="hamburger-top-bread"></span>
						<span class="hamburger-patty"></span>
						<span class="hamburger-bottom-bread"></span>
					</label>
				</div>	
			</div> 
		</div>
	</header>
	
		@yield('content') 

	{!! Html::script('js/jquery-3.3.1.min.js') !!}  
	{!! Html::script('js/bootstrap.min.js') !!}  
	{!! Html::script('js/validaciones.js') !!}
	{!! Html::script('js/script.js') !!}
</body>
</html>