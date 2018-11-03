<!DOCTYPE html>
<html>
<head>
	<title></title> 
	{!! Html::style('css/style.css') !!} 
	{!! Html::style('css/bootstrap.css') !!}   
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width"/>
</head>
<body style="background-color: #ebebeb !important;">
	<header id="cabecera_principal">
		<div class="nav_registro"> 
			<div id="cont_cabecera_movil">
				<div class="col-1">
					<a  href="{{ route('dashboard') }}"> 
						<div class="nav-logo" style="margin-left: 0px;"></div>
					</a>
				</div>
				<form class="nav-buscar" action="{{route('resultados')}}" method="get" role="search" id="buscador-articulos">
					<input type="text" class="nav-buscar-input" name="busqueda" placeholder="Buscar productos, marcas y más..." maxlength="120" autofocus="" autocapitalize="off" autocorrect="off" spellcheck="false" tabindex="2" autocomplete="off" id="caja_busqueda">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
					<button class="nav-buscar-limpiar-btn" type="button" title="Limpiar"></button>
					<button class="nav-buscar-cerrar-btn" type="button" title="Cerrar"></button>
					<button type="submit" class="nav-search-btn" tabindex="3">
						<i class="nav-icon-search">
							<img src="img/icon_buscar.png" alt="" style="width: 50%;height: 80%;margin-left: 10px;">
							<span class="buscar-icono">Buscar</span>
						</i>
					</button> 
				</form>
				<div id="resultados" style="z-index: 122222;display: none;border-top: 1px solid #e6e6e6;border-bottom-right-radius: 2px;border-bottom-left-radius: 2px;">
						<ul id="cont-resultado"></ul>
				</div> 
				<a href="" class="exhibitor__picture"><img src="img/mlm-menu-desktop-notification-picture.png" title="Tutoriales"></a>
			</div>
			<div class="nav-header-menu-wrapper">
				<label onclick="abrirMenu()" id="lblMenuFlotante" for="nav-header-menu-switch" aria-controls="nav-header-menu" tabindex="3">
					<span class="hamburger-top-bread"></span>
					<span class="hamburger-patty"></span>
					<span class="hamburger-bottom-bread"></span>
				</label>
				<a href="{{route('carrito')}}" title="Carrito" class="nav-cart nav-cart-full" id="nav-cart"><img src="img/icon_car.png" alt="" width="19">
					<span class="nav-icon-cart-quantity">1</span>
				</a>
				<nav id="nav-header-menu-mobile" class="nav-header-menu-mobile-guest">
					<div id="nav-header-menu-mobile-content">
						<ul>
							<li>
								<a href="{{route('crearcuentapersonal')}}">
									<i class="nav-icon-create-account-mobile"></i>
									<p>Crea tu cuenta</p>
								</a>
							</li>
							<li>
								<a href="{{route('autenticar')}}"><i class="nav-icon-logout-mobile"></i>
									<p>Ingresa</p>
								</a>
							</li>
						</ul>
						<ul>
							<li>
								<a href="#"><i class="nav-icon-purchases-mobile"></i>
									<p>Tus compras</p>
								</a>
							</li>
							<li>
								<a href="#"><i class="nav-icon-history-mobile"></i>
									<p>Tu historial</p>
								</a>
							</li>
						</ul>
						<ul>
							<li>
								<a href="#"><i class="nav-icon-categories-mobile"></i>
									<p>Categorías</p>
								</a>
							</li>
							<li>
								<a href="#"><i class="nav-icon-points-discounts-mobile"></i><p>Descuentos Mercado Puntos</p>
								</a>
							</li>
							<li>
								<a href="#"><i class="nav-icon-supermercado"></i><p>Supermercado</p>
								</a>
							</li>
							<li>
								<a href="#"><i class="nav-icon-stores-mobile"></i><p>Tiendas oficiales</p></a>
							</li>
							<li>
								<a href="#"><i class="nav-icon-deals-mobile"></i><p>Ofertas de la semana</p>
								</a>
							</li>
						</ul>
						<ul>
							<li>
								<a href="#"><i class="nav-icon-vender-mobile"></i><p>Vender</p>
								</a>
							</li>
							<li>
								<a href="#"><i class="nav-icon-help-mobile"></i><p>Ayuda</p>
								</a>
							</li>
						</ul> 
					</div>
				</nav>
			</div> 
		</div>
		<div class="nav-menu">
			<div style="width: 70%;display: inline-block;
    float: left;height: 35px;">
				<ul class="nav-menu-lista">
					<li class="nav-menu-categorias" style="text-align: left;    margin-right: 0px;">
						<a href="#" class="nav-menu-categories-link" rel="nofollow" data-js="nav-menu-categories-trigger">Categorías</a>
					</li>
					<li class="nav-menu-elementos">
						<a href="#" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Ofertas de la semana</a>
					</li>
					<li class="nav-menu-elementos">
						<a href="#" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Descuentos Mercado Puntos</a>
					</li>
					<li class="nav-menu-elementos"><a href="#" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Tu historial</a></li>
					<li class="nav-menu-elementos">
						<a href="#" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Tus compras</a>
					</li>
					<li class="nav-menu-elementos">
						<a href="{{route('vender')}}" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Vender</a>
					</li>
				</ul> 
			</div>  
			@if(Auth::check()) 
        		<div style="width: 30%;display: inline-block;text-align: right;">
					<nav id="nav-menu-cabecera"> 
						<label onmouseover="abrirMenu()" id="userswitch" class="nav-header-user-switch" tabindex="4"><span><span class="nav-header-avatar-user" data-js="user-menu:nav-header-avatar-user"><img src="svg/user.svg" srcset="svg/user.svg 2x" class="nav-header-avatar-user-img" height="20" width="20"></span><span class="nav-header-username">{{ auth()->user()->nombre }}</span><span class="nav-header-username-chevron"></span></span></label>
						<input type="check" id="nav-header-user-switch">
						<span id="detonador"><div id="info_user" onmouseleave="cerrarMenu()">
							<div id="info_perfil">
								<div class="user-menu__user-info-inner-container">
									<div class="user-menu__user-badge" style="text-align: center;">
										<div class="user-menu__user-badge-image">
											<div class="user-menu__loyalty-components">
												<svg class="user-menu__user-progress user-menu--level-1" viewBox="0 0 100 100">
												<path class="base" stroke-linecap="round" stroke-width="3" stroke="#eee" fill="none" d="M50 10
												a 40 40 0 0 1 0 80
												a 40 40 0 0 1 0 -80">
												</path>
												<path class="progress" stroke-linecap="round" stroke-width="3" percentage="60" stroke-dasharray="223,999" fill="none" d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80"></path>
												</svg>
											</div>
											<form data-js="user-menu:avatar-form" method="POST" action="" enctype="multipart/form-data" class="user-menu__avatar-form">
												<label class="user-menu__avatar-label">
												<span class="user-menu__avatar-text">Cambiar foto</span> 
												<img data-js="user-menu:avatar-picture" src="svg/user.svg" class="user-menu__avatar-picture">
												<input data-js="user-menu:avatar-control" name="file" type="file" class="user-menu__avatar-control" accept="image/jpeg,.jpg,image/gif,.gif,image/png,.png,.jpeg,image/webp,.webp">
												</label>
											</form>
										</div>
										<p class="user-menu__user-badge-title">¡Hola, {{ auth()->user()->alias }}!</p>
										<p class="user-menu__user-badge-email">Nivel 1 - Inicial</p>
										<p class="user-menu__loyalty-goal">Te faltan 12 puntos para ser Aficionado</p>
									</div>
									<a style="color:white;" href="" class="btn btn-primary btn-md btn-block" data-id="my-account" rel="nofollow">Mi cuenta</a>
								</div> 
							</div>
							<div id="info_menu" style="float: right;margin-right: 100px;">       
								<a href="" data-id="points" rel="nofollow">Mercado Puntos</a>
								<a href="" data-id="purchases" rel="nofollow">Compras</a>
								<a href="{{route('publicaciones')}}" data-id="sales" rel="nofollow">Ventas</a>
								<a href="{{ route('perfil') }}" data-id="personal-info" rel="nofollow">Mis datos</a>
								<a href="" data-id="security" rel="nofollow">Seguridad</a> 
								<form action="{{ route('logout') }}" method="POST" accept-charset="utf-8">
									{{ csrf_field() }}
									<button class="btn-salir">Salir</button>
								</form>	
							</div>
							<span class="user-menu__chevron" style="right: 202px;"></span>
						</div></span>
						<a href="#" class="option-help" rel="nofollow">Ayuda</a>
						<a style="padding-right: 0px" href="{{route('carrito')}}" title="Carrito de compras" class="nav-cart nav-cart-empty" id="nav-cart"><img style="vertical-align: baseline;" src="img/icon_car.png" alt="" width="19"></a>
					</nav>		
				</div>
        	@else
        		<div style="width: 30%;width: 30%;display: inline-block;text-align: right;">
					<nav id="nav-menu-cabecera">
						<a href="{{route('crearcuentapersonal')}}" class="opcion-registrar" rel="nofollow">Crea tu cuenta</a>
						<a href="{{route('autenticar')}}" class="opcion-login" rel="nofollow">Ingresa</a>
						<a href="#" class="option-help" rel="nofollow">Ayuda</a>
						<a style="padding-right: 0px" href="{{route('carrito')}}" title="Carrito de compras" class="nav-cart nav-cart-empty" id="nav-cart"><img style="vertical-align: baseline;" src="img/icon_car.png" alt="" width="19"></a>
					</nav>		
				</div>
        	@endif
			
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
				<small class="nav-footer-copyright"> 
					Copyright © 1999-2018 DeRemate.com de México S. de R.L. de C.V. 
			</small>  
			</div>
			 	{!! Html::script('js/jquery-3.3.1.min.js') !!}  
				{!! Html::script('js/bootstrap.min.js') !!}  
				{!! Html::script('js/operaciones.js') !!}  
				{!! Html::script('js/script.js') !!}  
				{!! Html::script('js/ubicacion.js') !!}
				{!! Html::script('js/buscador.js') !!} 
				{!! Html::script('js/menusFlotantes.js') !!}
				{!! Html::script('js/modificarPublicacion.js') !!}
				{!! Html::script('js/editCarrito.js') !!}
				{!! Html::script('js/formatearPrecio.js') !!}
		</div> 
	</footer>
</body>
</html>