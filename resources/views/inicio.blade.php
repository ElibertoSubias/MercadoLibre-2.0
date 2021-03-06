@extends('layouts.masterAutenticado')

@section('content')
	<div id="inicio" class="carousel_cell">
		<section class="exhibitor" type="exhibitor">
			<div class="scene">  
				  <div class="carousel"> 
				    <div class="carousel__cell">
				    	<a class="exhibitor-item" href="#">
							<div class="exhibitor-holder">
								<img src="img/1.jpg" alt="canon">
							</div>
						</a>
				    </div>
				    <div class="carousel__cell">
				    	<a class="exhibitor-item" href="#">
							<div class="exhibitor-holder">
								<img src="img/2.jpg" alt="Feria del bebé ">
							</div>
						</a>
				    </div>
				    <div class="carousel__cell">
				    	<a class="exhibitor-item" href="#">
							<div class="exhibitor-holder">
								<img src="img/3.jpg" alt="Festejemos México ">
							</div>
						</a>
				    </div> 
				    <div class="carousel__cell">
				    	<a class="exhibitor-item" href="#">
							<div class="exhibitor-holder">
								<img src="img/4.jpg" alt="marcas mexicanas">
							</div>
						</a>
				    </div>
				    <div class="carousel__cell">
				    	<a class="exhibitor-item" href="#">
							<div class="exhibitor-holder">
								<img src="img/5.jpg" alt="canon">
							</div>
						</a>
				    </div>
				    <div class="carousel__cell">7</div>
				    <div class="carousel__cell">8</div>
				    <div class="carousel__cell">9</div>
				    <div class="carousel__cell">10</div>
				    <div class="carousel__cell">11</div>
				    <div class="carousel__cell">12</div>
				    <div class="carousel__cell">13</div>
				    <div class="carousel__cell">14</div>
				    <div class="carousel__cell">15</div>
				  </div>
				  
				</div>
				<div class="nav-carrucel">
					<button class="previous-button"><</button>
					<button class="next-button">></button>
					<ul class="slick-dots" style="display: block;">
						<li onclick="rotateCarousel(0)" class="slick-active"><button>1</button></li>
						<li onclick="rotateCarousel(-72)" class=""><button>2</button></li>
						<li  onclick="rotateCarousel(-144)" class=""><button>3</button></li>
						<li onclick="rotateCarousel(-216)" class=""><button>4</button></li>
						<li onclick="rotateCarousel(-288)" class=""><button>5</button></li>
					</ul>
				</div>
				<div class="carousel-options"> 
				      <input class="cells-range" type="range" min="3" max="15" value="5" style="display: none;" /> 
				      <input type="radio" name="orientation" value="horizontal" checked hidden />  
				</div> 
		</section>
		<section class="metodo_pago">
			<h3>Esto es nuevo</h3>
			<h1>Metodos de Pago</h1>
            <h2>hi</h2>
		</section>
	</div>  
@stop
