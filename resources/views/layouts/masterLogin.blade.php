<!DOCTYPE html>
<html>
<head>
	<title>Mercado Libre 2.0</title> 
	<link rel="shortcut icon" href="img/favicon.ed1a7e19.ico">
	{!! Html::style('css/style.css') !!} 
	{!! Html::style('css/bootstrap.css') !!}   
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width"/> 
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
					<label onclick="abrirMenuMovil()" id="lblMenuFlotante" for="nav-header-menu-switch" aria-controls="nav-header-menu" tabindex="3">
					<span class="hamburger-top-bread"></span>
					<span class="hamburger-patty"></span>
					<span class="hamburger-bottom-bread"></span>
				</label>
					<nav id="nav-header-menu-mobile" class="nav-header-menu-mobile-guest">
					<div id="nav-header-menu-mobile-content">
						@if(Auth::check()) 
						<ul>
							<li>
								<a href="{{route('publicaciones')}}"><i class="nav-icon-logout-mobile"></i>
									<p>Ventas</p>
								</a>
							</li>
							<li>
								<a href="{{route('perfil')}}">
									<i class="nav-icon-create-account-mobile"></i>
									<p>Mis datos</p>
								</a>
							</li>
							<li>
								<a href="{{route('logout')}}">
									<form style="padding-left: 15px;" action="{{ route('logout') }}" method="POST" accept-charset="utf-8">
									{{ csrf_field() }}
									<button class="btn-salir">Salir</button>
								</form>	
								</a>
							</li>
						</ul>
						@else
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
						@endif
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
		</div>
	</header>
	
		@yield('content') 

	{!! Html::script('js/jquery-3.3.1.min.js') !!}  
	{!! Html::script('js/bootstrap.min.js') !!}  
	{!! Html::script('js/validaciones.js') !!}
	{!! Html::script('js/script.js') !!}
	{!! Html::script('js/menusFlotantes.js') !!}
	{!! Html::script('js/formatearPrecio.js') !!}
	{!! Html::script('js/jquery.redirect.js') !!}
</body>
</html>