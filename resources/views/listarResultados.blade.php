@extends('layouts.master')
@section('titulo')
    <title>Resultados - MercadoLibre</title>    
@stop
@section('content')  
{!! Html::style('css/verStyle.css') !!} 
{!! Html::style('css/menuStyle.css') !!} 
{!! Html::style('css/listaResulStyle.css') !!} 
{!! Html::style('css/publiStyle.css') !!} 
{!! Html::style('css/estilosParra.css') !!} 
<main role="main" style="background: #eee;"> 
<!-- Div para mostrar banner de publicidad -->	
	<div class="row" style="margin: 0px;">
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
        <div id="cont_filtros" style="width: 25%;float: left;text-align: left;"> 
            <form action="resultados" method="get" id="frmFiltros">    
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">        
                <div class="breadcrumb"> 
                    <!-- <ol> 
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrumb__path"> 
                            <a title="Hogar, Muebles y Jardín" href="https://home.mercadolibre.com.mx/hogar-muebles-jardin/"> 
                                <span itemprop="title">Hogar, Muebles y Jardín</span> 
                            </a> 
                        </li> 
                        <div class="breadcrumb-chevron"></div> 
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrumb__path"> 
                            <a class="" style="" itemprop="url" title="Jardín y Exterior" href="https://hogar.mercadolibre.com.mx/jardin-y-exterior/">
                                <span itemprop="title">Jardín y Exterior</span>
                            </a> 
                        </li> 
                        <div class="breadcrumb-chevron"></div> 
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrumb__path"> 
                            <a class="" style="" itemprop="url" title="Asadoras y Accesorios" href="https://hogar.mercadolibre.com.mx/jardin-exterior-asadoras-accesorios/"><span itemprop="title">Asadoras y Accesorios</span></a> 
                        </li> 
                        <div class="breadcrumb-chevron"></div> 
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrumb__path"> 
                            <a class="" style="" itemprop="url" title="Asadoras" href="https://hogar.mercadolibre.com.mx/jardin-exterior-asadoras/"><span itemprop="title">Asadoras</span></a> 
                        </li>
                    </ol>  -->
                    <h1 class="breadcrumb__title">{{$busqueda}}</h1>
                </div>
                <div class="quantity-results"> {{$total}}@if($total==1) resultado @else resultados @endif</div>
                <section class="applied-filters clearfix"> 
                    
                </section>
                <section class="view-options">  
                    <dl> 
                        <dt>Ordenar publicaciones</dt>
                        <div class="sort-by"> 
                            <div class="ui-dropdown custom"> 
                                <input type="checkbox" id="sort-by-options-trigger" class="dropdown-trigger sort-by-options-trigger" autocomplete="off" hidden=""> 
                                <label for="sort-by-options-trigger" class="ui-dropdown__link"> <span class="tituloOpcion">Más relevantes</span> 
                                    <div class="ui-dropdown__indicator">
                                        <img style="    transform: rotate(90deg);height: 15px;" src="img/less.png" alt="insertar SVG con la etiqueta image">
                                    </div> 
                                </label> 
                                <div id="id-dropdown__content" class="ui-dropdown__content sorty-by-ui-dropdown__content"> 
                                    <div class="ui-list"> 
                                        <ul class="ui-list__content"> 
                                            <input type="checkbox" hidden  name="ORDEN" id="ORDEN" value="masRe">
                                            <li class="ui-list__item">  
                                                <a class="ui-list__item-option" href="#" id="masRe">Más relevantes</a> 
                                            </li> 
                                            <li class="ui-list__item">  
                                                <a class="ui-list__item-option" href="#" id="menorPre"> Menor precio </a> 
                                            </li> 
                                            <li class="ui-list__item">  
                                                <a class="ui-list__item-option" href="#" id="mayorPre"> Mayor precio </a> 
                                            </li> 
                                        </ul> 
                                    </div> 
                                </div> 
                            </div>
                        </div> 
                        <ul class="view-options-buttons"> 
                            <li> 
                                <a href="#" title="Listado" class="ico stack"> 
                                    <div class="ico view-option-stack"></div> 
                                </a> 
                            </li> 
                            <li> 
                                <div class="ico view-option-grid selected"></div> 
                            </li>
                        </ul> 
                    </dl>
                </section>
                <!--<section class="filters__groups">
                    <dl class="filters__group filters__official_store " id="id_official_store" role="listbox"> 
                        <dt class="dt-title" role="presentation">Tiendas oficiales</dt> 
                        <dd class="filters__group__option" role="option"> 
                            <a class="qcat-truncate " style="max-width:137px;" title="Solo tiendas oficiales" href="https://hogar.mercadolibre.com.mx/jardin-exterior-asadoras/asador_DisplayType_G_Tienda_all" rel="nofollow"> 
                                <span class="filter-name">Solo tiendas oficiales</span> 
                                <span class="filter-results-qty">(483)</span> 
                            </a> 
                        </dd>
                    </dl>
                </section>-->
                 <!--CATEGORIAS-->
                <section class="filters__group">
                    <dl class="filters__group filters__category " id="id_category" role="listbox">
                        <input type="hidden" id="categoria_selected" value="">
                        <dt class="dt-title" role="presentation">Categorías</dt>
                        <?php 
                            $categoriasRes = array();
                            $todasCategorias = array();
                            function cuenta_veces_valor($array, $valor) {
                                $contadores = array_count_values($array);
                                return $contadores[$valor];
                            } 
                            for ($x=0; $x < count($datos); $x++) {  
                                array_push($todasCategorias, $datos[$x]['categoria']);   
                            }   
                            function buscar($categoria, $categoriasRes){ 
                                for ($i=0; $i < count($categoriasRes); $i++) { 
                                    if($categoriasRes[$i]==$categoria){
                                        return true;
                                    }
                                }
                                return false;
                            }
                             
                                for ($x=0; $x < count($datos); $x++) {   
                                    if (!buscar($datos[$x]['categoria'],$categoriasRes)) {
                                        array_push($categoriasRes, $datos[$x]['categoria']); 
                                    } 
                                }  
                                for ($i=0; $i < count($categoriasRes); $i++) { 
                                    echo '<dd class="filters__group__option list-castegoria" role="option"> 
                                                <h3>
                                                    <a class="qcat-truncate " style="max-width:137px;" title="A Carbón" href="#" id="'.$categoriasRes[$i].'"> 
                                                        <span class="filter-name">'.$categoriasRes[$i].'</span>
                                                        <span class="filter-results-qty">('.cuenta_veces_valor($todasCategorias,$categoriasRes[$i]).')</span> 
                                                    </a> 
                                                </h3> 
                                        </dd>';
                                } 
                        ?> 
                    </dl>
                </section>
                <br>
                <br>
                <!--COSTO DE ENVIO-->
                <section class="filters__group">
                    <dl class="filters__group filters__shipping_cost " id="id_shipping_cost" role="listbox">
                        <dt class="dt-title" role="presentation">Costo de envío</dt>
                        <dd class="filters__group__option" role="option"> 
                            <a class="qcat-truncate " style="max-width:137px;" title="Gratis" href="#" rel="nofollow"> 
                                <span class="filter-name">Gratis</span> 
                                <span class="filter-results-qty">(
                                <?php 
                                    $contador = 0;
                                    foreach($datos as $articulo){
                                        if($articulo->precio > 549){
                                            $contador++;
                                        }
                                    }
                                    echo $contador;
                                ?>
                                )</span> 
                            </a> 
                        </dd>
                    </dl>
                </section>

                <!--TIPO DE ENVIO-->
                <!-- <section class="filters__group">
                    <dl class="filters__group filters__shipping " id="id_shipping" role="listbox">
                        <dt class="dt-title" role="presentation">Tipo de envío</dt>
                        <dd class="filters__group__option" role="option"> 
                            <a class="qcat-truncate filter--is-full" style="max-width:151px;" title="Full" href="https://hogar.mercadolibre.com.mx/jardin-exterior-asadoras/asador_Envio_Full" rel="nofollow"> <span class="filter-name">Full</span> <span class="filter-results-qty">(4)</span> 
                            </a> 
                                <input type="checkbox" id="filter-full-tooltip" class="search-alerts-tooltip-input modal-trigger js-modal-trigger" autocomplete="off" hidden="">
                                <div class="search-alerts-tooltip filter-full-tooltip"> 
                                    <div class="wrapper"> 
                                        <div class="text-container"> 
                                            <div class="description"> ¡Te da el envío más rápido y seguro de Mercado Libre! </div> 
                                        </div> 
                                        <label class="tooltip-close js-local-storage-close" for="filter-full-tooltip" data-local-storage="filter-full-tooltip"></label> 
                                    </div>
                                </div> 
                        </dd>                
                    </dl>        
                </section> --> 
                <!--PAGO
                <section class="filters__group">
                    <dl class="filters__group filters__installments " id="id_installments" role="listbox">
                        <dt class="dt-title" role="presentation">Pago</dt>
                        <dd class="filters__group__option" role="option"> 
                            <a class="qcat-truncate " style="max-width:130px;" title="Meses sin intereses" href="https://hogar.mercadolibre.com.mx/jardin-exterior-asadoras/asador_Installments_NoInterest" rel="nofollow"> 
                                <span class="filter-name">Meses sin intereses</span> 
                                <span class="filter-results-qty">(1,117)</span> 
                            </a> 
                        </dd>

                        <dd class="filters__group__option" role="option"> 
                            <a class="qcat-truncate " style="max-width:130px;" title="En mensualidades" href="https://hogar.mercadolibre.com.mx/jardin-exterior-asadoras/asador_Installments_YES" rel="nofollow"> 
                                <span class="filter-name">En mensualidades</span> 
                                <span class="filter-results-qty">(4,646)</span> 
                            </a> 
                        </dd>
                    </dl>
                </section>--> 

                <!--CONDICION
                <section class="filters__group">
                    <dl class="filters__group filters__condition " id="id_condition" role="listbox">
                        <dt class="dt-title" role="presentation">Condición</dt>
                        <dd class="filters__group__option" role="option"> 
                            <a class="qcat-truncate " style="max-width:130px;" title="Nuevo" href="https://hogar.mercadolibre.com.mx/jardin-exterior-asadoras/asador_ItemTypeID_N" rel="nofollow"> 
                                <span class="filter-name">Nuevo</span> 
                                <span class="filter-results-qty">(4,442)</span> 
                            </a> 
                        </dd>

                        <dd class="filters__group__option" role="option"> 
                            <a class="qcat-truncate " style="max-width:137px;" title="Usado" href="https://hogar.mercadolibre.com.mx/jardin-exterior-asadoras/usados/asador" rel="nofollow"> 
                                <span class="filter-name">Usado</span> 
                                <span class="filter-results-qty">(182)</span> 
                            </a> 
                        </dd>
                    </dl>
                </section>-->
            

                <!--UBICACION-->
                <section class="filters__group">
                    
                </section> 
                <br>
                <br>
                <!--PRECIO-->
                <section class="filters__group">        
                    <dl class="filters__group filters__price " id="id_price" role="listbox">
                        <dt class="dt-title" role="presentation">Precio</dt>
                        <dd class="filters__group__option" role="option"> 
                            <input type="hidden" name="precio" id="precio">
                            <a class="qcat-truncate " style="max-width:130px;" title="Hasta $1,500" href="#" id="1500" rel="nofollow"> 
                                <span class="filter-name">Hasta $1,500</span> 
                                <span class="filter-results-qty">(1,416)</span> 
                            </a> 
                        </dd>

                        <dd class="filters__group__option" role="option">  
                            <a class="qcat-truncate " style="max-width:130px;" title="$1,500 a $4,000" href="#" id="1500-4000" rel="nofollow"> 
                                <span class="filter-name">$1,500 a $4,000</span> 
                                <span class="filter-results-qty">(1,591)</span> 
                            </a> 
                        </dd>

                        <dd class="filters__group__option" role="option">  
                            <a class="qcat-truncate " style="max-width:130px;" title="Más de $4,000" href="#" id="4000" rel="nofollow"> 
                                <span class="filter-name">Más de $4,000</span> 
                                <span class="filter-results-qty">(1,646)</span> 
                            </a> 
                        </dd>

                        <fieldset class="price-filter__fieldset"> 
                            <div class="price-filter__column"> 
                                <label class="price-filter__label" for="fromPrice"> 
                                    <input type="number" name="fromPrice" id="fromPrice" class="price-filter__value" value="" placeholder="Mínimo" tabindex="93"> 
                                </label> 
                            </div> 
                            <div class="price-filter__column"> 
                                <label class="price-filter__label" for="toPrice"> 
                                    <input type="number" name="toPrice" id="toPrice" class="price-filter__value" value="" placeholder="Máximo" tabindex="94"> 
                                </label> 
                            </div> 
                        </fieldset>
                    </dl>
                </section>

                <br>
                <br>
                <!--MAS ESPECIFICACIONES-->
                <section class="filters__group">
                    <dl class="filters__group">
                        <dt class="dt-title">Más especificaciones</dt>
                        <dd> 
                            <a class="qcat-truncate" style="max-width:130px;" title="Compra inmediata" href="https://hogar.mercadolibre.com.mx/jardin-exterior-asadoras/asador_AuctTypeID_AFP" rel="nofollow"> Compra inmediata 
                            </a> 
                            <span>(4,652)</span> 
                        </dd>
                    </dl>
                </section>  
            </form> 
    </div>
    <div id="cont_resultados_busqueda" style="width: 80%;margin-left: 25%;">
    	<!-- Div para mostrar Modelos o tipos de subcategorias -->	
    	<div class="">     		
    	</div>
    	<!-- Div para listar los resultados de la busqueda -->	
        <div class="row cont-resultados-busqueda">
        	<ol id="searchResults" class="section search-results list-view grid search-results-mot list--has-row-logos " imgtype="listingLightweight">
                @foreach($datos as $articulo)
                    <li class="results-item article grid "> 
                        <a href="{{route('verpublicacion', ['id' => $articulo->_id,'user'=>$articulo->idUser])}}" class="item-link item__js-link"> 
                        <div class="rowItem item item--grid item--has-row-logo new" id="MLM645463946">
                            <div class="item__image item__image--grid"> 
                                <div class="images-viewer" item-url=#" item-id="MLM645463946">
                                    <div class="carousel" style="overflow: hidden;">
                                        <div class="ch-carousel-prev ch-carousel-disabled ch-user-no-select" role="button" aria-hidden="true">
                                            
                                        </div>
                                        <div class="ch-carousel-mask ch-carousel-adaptive" role="tabpanel" style="height:209px"> 
                                            <ul class="ch-carousel-list" role="list"> 
                                                <li class="ch-carousel-item" role="listitem" aria-hidden="false" aria-setsize="13" aria-posinset="1" aria-label="page1" style="width: 284px;  margin-right: 0px;"> 
                                                    
                                                        <img width="284" height="284" alt="Bmw Z4 Convertible Mt 2003 Autos Puebla" src="images/{{$articulo->idUser}}/{{$articulo->idPublicacion}}/{{$articulo->urlPrincipal}}" class="lazy-load" srcset="images/{{$articulo->idUser}}/{{$articulo->idPublicacion}}/{{$articulo->urlPrincipal}} 1x, images/{{$articulo->idUser}}/{{$articulo->idPublicacion}}/{{$articulo->urlPrincipal}} 2x"> 
                                                     
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
                                <div class="item__info ">
                                    <div class="item__price item__price-discount"> 
                                        <span class="price__symbol">$</span> <span class="price__fraction"><label class="precioUnitario">{{$articulo->precio}}</label></span>
                                    </div> 

                                    <!-- <span class="price-old" itemprop="price-old"> <del> $&nbsp;145,000 </del> </span>  -->

                                    <!-- <div class="item__discount ">5% OFF</div> -->
                                    @if($articulo->tipoVenta=='VEHI') 
                                    <div class="item__attrs"> {{$articulo->anio}} | {{$articulo->kilometros
}} km</div>
                                    @endif
                                    <h2 class="item__title list-view-item-title"> <span class="main-title">{{$articulo->titulo}} {{$articulo->marca}} {{$articulo->modelo}} {{$articulo->transmicion}}  {{$articulo->anio}}  </span></h2> 
                                    <div class="item__location">
                                        {{$articulo->estado}}  
                                    </div> 
                                </div> 
                            <form class="item__bookmark-form" action="#" method="post" id="bookmarkForm">         <button type="submit" class="bookmarks favorite " data-id="MLM645463946"> 
                                    <div class="item__bookmark"> 
                                        <div class="icon"></div> 
                                    </div>
                                 </button> 
                                 <input type="hidden" name="method" value="add"> 
                                 <input type="hidden" name="itemId" value="MLM645463946">
                            </form> 
                        </div>
                        </a>
                    </li>  
                @endforeach 
            </ol> 
        </div>
    </div>
    </div>	
</div>
</main>
@stop