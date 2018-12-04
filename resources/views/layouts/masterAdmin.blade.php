<!DOCTYPE html>
<html>
<head> 
	@yield('contentTitulo')
	<style type="text/css" media="screen">
		.navbar-default {
			background: #fff059;
		}
		.navbar-brand {
			padding: 0px;margin-right: 5px;
		}
		.nav-logo {
			margin-top: -5px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default"> 
		<div class="container-fluid"> 
			<div class="navbar-header"> 
				<button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6" aria-expanded="false"> 
					<span class="sr-only">Toggle navigation</span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
				</button> 
				<a href="#" class="navbar-brand">
					<div class="nav-logo" style="margin-left: 0px;">
						
					</div>
				</a> 
			</div> 
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6"> 
				<ul class="nav navbar-nav"> 
					<li class="active"><a href="#">Categorias</a></li> 
					<li><a href="#">Publicidad</a></li> 
					<li><a href="{{route('logout')}}">Salir</a></li> 
				</ul> 
			</div> 
		</div>
	</nav>
	@yield('contenidoMain')
</body>
{!! Html::script('js/jquery-3.3.1.min.js') !!}  
{!! Html::script('js/bootstrap.min.js') !!}  
{!! Html::script('js/operaciones.js') !!}  
{!! Html::script('js/script.js') !!}  
{!! Html::script('js/ubicacion.js') !!} 
{!! Html::script('js/menusFlotantes.js') !!}
{!! Html::script('js/modificarPublicacion.js') !!}
{!! Html::script('js/editCarrito.js') !!}
{!! Html::script('js/venderJS.js') !!} 
{!! Html::script('js/validaciones.js') !!}
{!! Html::script('js/formatearPrecio.js') !!}
{!! Html::script('js/jquery.redirect.js') !!}
</html>