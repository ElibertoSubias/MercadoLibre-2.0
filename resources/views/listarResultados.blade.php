@extends('layouts.master')

@section('content')  
{!! Html::style('css/verStyle.css') !!} 
{!! Html::style('css/menuStyle.css') !!} 
{!! Html::style('css/listaResulStyle.css') !!} 
{!! Html::style('css/publiStyle.css') !!} 
<!-- Div para mostrar banner de publicidad -->	
	<div class="row">
		<div class="banner-container">	<a rel="nofollow" href="#" class="top-banner">	</a>	</div>
	</div>
<div style="width: 90%;margin: 0 auto;">
	
	<!-- Div para mostrar camino que se recorrio para llegar a ese reultado, categoria,modelo,serie,etc -->	
	<div class="row" style="margin: 0;text-align: left;">
		<section id="related-searches-section" class="related-searches"> 
			<p> Búsquedas relacionadas:&nbsp; </p> 
			<ul class="related-searches__list"> 
				<li> 
					<a href="#"> jeep compass </a> <span class="separator">-</span> 
				</li> 
				<li> 
					<a href="#"> jeep patriot 2008 </a> 
					<span class="separator">-</span> 
				</li> 
				<li> 
					<a href="#"> dodge nitro </a> 
					<span class="separator">-</span> 
				</li> 
				<li> 
					<a href="#"> chevrolet equinox </a> 
					<span class="separator">-</span> 
				</li> 
				<li> 
					<a href="#"> ford edge </a> </li> 
				</ul> 
			</section>
	</div>
	<!-- Div para mostrar Menu de Filtros -->
	<div class="row" style="margin:0px">
    <div style="width: 25%;float: left;">
        <h2>Filtros</h2> 
    </div>
    <div style="width: 80%;margin-left: 25%;">
    	<!-- Div para mostrar Modelos o tipos de subcategorias -->	
    	<div class="">     		
    	</div>
    	<!-- Div para listar los resultados de la busqueda -->	
        <div class="row cont-resultados-busqueda">
        	<ol id="searchResults" class="section search-results list-view grid search-results-mot list--has-row-logos " imgtype="listingLightweight">
                @foreach($datos as $articulo)
                    <li class="results-item article grid "> 
                        <div class="rowItem item item--grid item--has-row-logo new" id="MLM645463946">
                            <div class="item__image item__image--grid"> 
                                <div class="images-viewer" item-url=#" item-id="MLM645463946">
                                    <div class="carousel" style="overflow: hidden;">
                                        <div class="ch-carousel-prev ch-carousel-disabled ch-user-no-select" role="button" aria-hidden="true">
                                            
                                        </div>
                                        <div class="ch-carousel-mask ch-carousel-adaptive" role="tabpanel" style="height:209px"> 
                                            <ul class="ch-carousel-list" role="list"> 
                                                <li class="ch-carousel-item" role="listitem" aria-hidden="false" aria-setsize="13" aria-posinset="1" aria-label="page1" style="width: 284px;  margin-right: 0px;"> 
                                                    <a href="{{route('verpublicacion', ['id' => $articulo->_id])}}" class="item-link item__js-link"> 
                                                        <img width="284" height="284" alt="Bmw Z4 Convertible Mt 2003 Autos Puebla" src="/MercadoLibre-2.0/public/images/{{$articulo->idUser}}/{{$articulo->idPublicacion}}/{{$articulo->urlPrincipal}}" class="lazy-load"> 
                                                    </a> 
                                                </li> 
                                            </ul>
                                        </div>
                                        <div class="ch-carousel-next ch-user-no-select" role="button" aria-hidden="false">
                                            
                                        </div>
                                        <div class="ch-carousel-pages ch-user-no-select" role="tablist">
                                            <span role="tab" aria-selected="true" aria-controls="page1" data-page="1" class="ch-carousel-selected">Page 1</span>
                                            <span role="tab" aria-selected="false" aria-controls="page2" data-page="2" class="">Page 2</span>
                                            <span role="tab" aria-selected="false" aria-controls="page3" data-page="3" class="">Page 3</span><span role="tab" aria-selected="false" aria-controls="page4" data-page="4" class="">Page 4</span><span role="tab" aria-selected="false" aria-controls="page5" data-page="5" class="">Page 5</span><span role="tab" aria-selected="false" aria-controls="page6" data-page="6" class="">Page 6</span><span role="tab" aria-selected="false" aria-controls="page7" data-page="7" class="">Page 7</span><span role="tab" aria-selected="false" aria-controls="page8" data-page="8" class="">Page 8</span><span role="tab" aria-selected="false" aria-controls="page9" data-page="9" class="">Page 9</span><span role="tab" aria-selected="false" aria-controls="page10" data-page="10" class="">Page 10</span><span role="tab" aria-selected="false" aria-controls="page11" data-page="11" class="">Page 11</span><span role="tab" aria-selected="false" aria-controls="page12" data-page="12" class="">Page 12</span><span role="tab" aria-selected="false" aria-controls="page13" data-page="13" class="">Page 13</span>
                                        </div>
                                    </div> 
                                </div>
                            </div> 
                            <span class="item-loading__status-bar item-loading__hide"></span>
                            <a href="#" class="item__info-link item__js-link "> 
                                <div class="item__info ">
                                    <div class="item__price item__price-discount"> 
                                        <span class="price__symbol">$</span> <span class="price__fraction">{{$articulo->precio}}</span>
                                    </div> 

                                    <!-- <span class="price-old" itemprop="price-old"> <del> $&nbsp;145,000 </del> </span>  -->

                                    <!-- <div class="item__discount ">5% OFF</div> --> 
                                    <div class="item__attrs"> 2003 | 90000 km</div>
                                    <h2 class="item__title list-view-item-title"> <span class="main-title"> {{$articulo->marca}} {{$articulo->modelo}} {{$articulo->transmicion}}  {{$articulo->anio}}  </span></h2> 
                                    <div class="item__location">
                                        {{$articulo->estado}}  
                                    </div> 
                                </div>
                            </a>
                            <form class="item__bookmark-form" action="#" method="post" id="bookmarkForm">         <button type="submit" class="bookmarks favorite " data-id="MLM645463946"> 
                                    <div class="item__bookmark"> 
                                        <div class="icon"></div> 
                                    </div>
                                 </button> 
                                 <input type="hidden" name="method" value="add"> 
                                 <input type="hidden" name="itemId" value="MLM645463946">
                            </form> 
                        </div>
                    </li>  
                @endforeach 
            </ol> 
        </div>
    </div>
    </div>	
</div>
@stop