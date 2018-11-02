@extends('layouts.master')

@section('content')
	<div id="inicio" class="carousel_cell">
		<section class="exhibitor" type="exhibitor">
			<div class="scene">  
				  <div class="carousel"> 
				    <div class="carousel__cell">
				    	<a class="exhibitor-item" href="#">
							<div class="exhibitor-holder">
								<img src="https://http2.mlstatic.com/optimize/o:f_webp/resources/deals/exhibitors_resources/mlm-home-desktop-slider-picture-4116e4e7-bb5e-43fc-9c02-e00543cacc75.jpg" alt="canon">
							</div>
						</a>
				    </div>
				    <div class="carousel__cell">
				    	<a class="exhibitor-item" href="#">
							<div class="exhibitor-holder">
								<img src="https://http2.mlstatic.com/optimize/o:f_webp/resources/deals/exhibitors_resources/mlm-home-desktop-slider-picture-675da44b-4f8c-45f2-b40e-889133e8b6f8.jpg" alt="Feria del bebé ">
							</div>
						</a>
				    </div>
				    <div class="carousel__cell">
				    	<a class="exhibitor-item" href="#">
							<div class="exhibitor-holder">
								<img src="https://http2.mlstatic.com/optimize/o:f_webp/resources/exhibitors/MLM-halloween/d255a920-ccbb-11e8-8edf-15d4004258d3-home-slider_desktop.jpg" alt="Festejemos México ">
							</div>
						</a>
				    </div> 
				    <div class="carousel__cell">
				    	<a class="exhibitor-item" href="#">
							<div class="exhibitor-holder">
								<img src="https://http2.mlstatic.com/optimize/o:f_webp/resources/deals/exhibitors_resources/mlm-home-desktop-slider-picture-53a0fec3-1d81-42de-a5b7-9c6cbd080b6e.jpg" alt="marcas mexicanas">
							</div>
						</a>
				    </div>
				    <div class="carousel__cell">
				    	<a class="exhibitor-item" href="#">
							<div class="exhibitor-holder">
								<img src="https://http2.mlstatic.com/optimize/o:f_webp/resources/deals/exhibitors_resources/mlm-home-desktop-slider-picture-9b289967-c228-4e93-9ca1-2940be2cc6a1.jpg" alt="canon">
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
				      <input class="cells-range" type="range" min="3" max="15" value="5" style="display: none;"/> 
				      <input type="radio" name="orientation" value="horizontal" checked hidden />  
				</div> 
		</section>
		     
		<section class="metodo_pago">

			<h1>Metodos de Pago</h1>
			
		</section>
	</div> 
@stop
