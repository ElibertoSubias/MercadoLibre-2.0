<!DOCTYPE html>
<html>
<head>
	<title></title> 
	<link rel="shortcut icon" href="img/favicon.ed1a7e19.ico">
	{!! Html::style('css/style.css') !!} 
	{!! Html::style('css/bootstrap.css') !!}  
	<meta charset="UTF-8"> 
</head>
<body style="background-color: #f5f5f5!important;">
	<header id="cabecera_principal">
		<div class="nav_registro"> 
			<div class="col-1">
				<a  href="{{ route('dashboard') }}"> 
					<div class="nav-logo">
					</div>
				</a>
			</div>
			<form class="nav-buscar" action="{{route('buscar')}}" method="post" role="search" id="buscador-articulos">
				<input type="text" class="nav-buscar-input" name="as_word" placeholder="Buscar productos, marcas y más..." maxlength="120" autofocus="" autocapitalize="off" autocorrect="off" spellcheck="false" tabindex="2" autocomplete="off" id="caja_busqueda">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
				<button class="nav-buscar-limpiar-btn" type="button" title="Limpiar"></button>
				<button class="nav-buscar-cerrar-btn" type="button" title="Cerrar"></button>
				<button type="submit" class="nav-search-btn" tabindex="3">
					<i class="nav-icon-search">
						<img src="img/icon_buscar.png" alt="" style="width: 50%;height: 80%;">
						<span class="buscar-icono">Buscar</span>
					</i>
				</button>
				<div id="resultados" style="z-index: 122222;display: none;border-top: 1px solid #e6e6e6;border-bottom-right-radius: 2px;border-bottom-left-radius: 2px;">
					<ul id="cont-resultado">
						
					</ul>
				</div>
			</form>
			<a href="https://www.mercadolibre.com.mx/tutoriales" class="exhibitor__picture"><img src="img/mlm-menu-desktop-notification-picture.png" title="Tutoriales"></a>
		</div>
		<div class="nav-menu">
			<div style="width: 70%;display: inline-block;
    float: left;">
				<ul class="nav-menu-lista">
					<li class="nav-menu-categorias">
						<a href="#" class="nav-menu-categories-link" rel="nofollow" data-js="nav-menu-categories-trigger">Categorías</a>
					</li>
					<li class="nav-menu-elementos">
						<a href="#" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Ofertas de la semana</a>
					</li>
					<li class="nav-menu-elementos">
						<a href="https://www.mercadolibre.com.mx/mercadopuntos/descuentosexclusivos" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Descuentos Mercado Puntos</a>
					</li>
					<li class="nav-menu-elementos"><a href="https://www.mercadolibre.com.mx/gz/home/navigation/" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Tu historial</a></li>
					<li class="nav-menu-elementos">
						<a href="#" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Tus compras</a>
					</li>
					<li class="nav-menu-elementos">
						<a href="{{route('autenticar')}}" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Vender</a>
					</li>
				</ul> 
			</div> 
			<div style="width: 30%;width: 30%;display: inline-block;">
				<nav id="nav-menu-cabecera">
					<a href="{{route('crearcuenta')}}" class="opcion-registrar" rel="nofollow">Crea tu cuenta</a>
					<a href="{{route('autenticar')}}" class="opcion-login" rel="nofollow">Ingresa</a>
					<a href="#" class="option-help" rel="nofollow">Ayuda</a>
				</nav>		
			</div>
		</div>
	</header>
	<main id="main_principal">
		@yield('content')
	</main> 
	<footer id="pie_pagina"> 
		<div class="politicas-pie" >
			<div class="col-md-12">
				<a href="" title="">Trabaja con nosotros</a>
			<a href="" title="">Términos y condiciones</a>
			<a href="" title="">Politicas de privacidad</a>
			<a href="" title="">Ayuda</a> 
			</div>
			<div class="col-md-12">
				<small class="nav-footer-copyright" style="text-align: left;color: black;"> 
					<strong>Sitio no oficial de Mercado Libre.</strong> <br>
					Proyecto estudiantil el cual busca emular las características del sitio de Mercado Libre, solo con <b>fines educativos</b>.
					Para ir al sitio oficial de Mercado Libre de click <p style="display: inline-block;"><a style="float: none;    margin-left: 0px;" href="http://www.mercadolibre.com.mx"><b>aquí</b></a></p>.
				</small>
			</div>
			 	{!! Html::script('js/jquery-3.3.1.min.js') !!}  
				{!! Html::script('js/bootstrap.min.js') !!}  
				{!! Html::script('js/operaciones.js') !!}  
				{!! Html::script('js/script.js') !!}  
				{!! Html::script('js/ubicacion.js') !!} 
				{!! Html::script('js/buscador.js') !!} 
		</div> 
	</footer>
</body>
</html>