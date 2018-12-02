@extends('layouts.master')

@section('content')  
{!! Html::style('css/verStyle.css') !!} 
<div style="margin-top: -5px;max-width: 1220px;height:auto;display: inline-block;width: 100%;"> 
    <nav class="nav-deep-links">
        <div class="container" style="margin-left: 0px;padding-left: 0px;"> 
            <p>También puede interesarte:</p> <a href="https://listado.mercadolibre.com.mx/mustang">mustang</a> - <a href="https://listado.mercadolibre.com.mx/ford+mustang">ford mustang</a> - <a href="https://listado.mercadolibre.com.mx/harley+davidson">harley davidson</a> - <a href="https://listado.mercadolibre.com.mx/combi">combi</a> - <a href="https://listado.mercadolibre.com.mx/food+truck">food truck</a>
        </div>
    </nav>
</div> 
<section class="vip-section-navigation vip-bg-alt no-deep-links">
    <nav class="vip-container u-clearfix">
        <div class="vip-navigation-breadcrumb">
            <a id="backToCateg" class="navigation-back" href="{{route('publicaciones')}}" title="Volver al listado">Volver al listado</a>
            <ul class="vip-navigation-breadcrumb-list">
                <li>
                    <a class="breadcrumb " href="#" title="">
                    Autos, Motos y Otros
                    </a>
                    <svg width="22" height="22" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon--chevron-right">
                    <g fill="#000" fill-rule="evenodd">
                    <path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path>
                    <path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path>
                    </g>
                    </svg> 
                </li>
                <li>
                    <a class="breadcrumb " href="#" title="">
                    Camiones
                    </a>
                    <svg width="22" height="22" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon--chevron-right">
                    <g fill="#000" fill-rule="evenodd">
                    <path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path>
                    <path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path>
                    </g>
                    </svg>
                </li>
                <li>
                    <a class="breadcrumb " href="#" title="">
                    Chevrolet
                    </a>
                    <svg width="22" height="22" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon--chevron-right">
                    <g fill="#000" fill-rule="evenodd">
                    <path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path>
                    <path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path>
                    </g>
                    </svg>
                </li>
                <li>
                    <a class="breadcrumb " href="#" title="">
                    Otros Modelos
                    </a>
                    <svg width="22" height="22" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon--chevron-right">
                    <g fill="#000" fill-rule="evenodd">
                    <path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path>
                    <path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path>
                    </g>
                    </svg>
                </li>
            </ul>
        </div>
        <div class="secondary-actions">
            <input type="checkbox" class="ui-dropdown__input" id="share-btn">
            <div class="actions-secondary__btn actions-secondary__btn--share ui-dropdown">
                <label class="ui-dropdown__trigger" for="share-btn">
                <small>Compartir</small>
                </label>
                <div class="ui-dropdown__content">
                </div>
            </div>
            <div class="vip-navigation-solt">
                <a style="padding-left: 10px;" id="soltLink" rel="nofollow" href="https://vender.mercadolibre.com.mx?flowType=listEqual&amp;itemId=MLM646934777">Vender uno igual</a>
            </div>
        </div>
    </nav>
</section>
<section class="outline-section vip-section-navigation">
    <div class="vip-nav-bounds">
        <section class="item-status item-status--redirect">
            <div class="item-status-notification">
                <div class="ch-box-info">
                    <div class="ui-icon--content">
                        <svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--question-blocked">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--question-blocked"></use>
                            <svg viewBox="0 0 16 16" id="ui-icon--question-blocked" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><g fill="none" fill-rule="evenodd"><circle fill="#F57819" transform="rotate(-180 8 8)" cx="8" cy="8" r="8"></circle><path fill="#FFF" d="M7 3h1.882l-.235 5.176H7.235z"></path><ellipse fill="#FFF" cx="7.941" cy="10.941" rx=".941" ry=".941"></ellipse></g></svg>
                        </svg>
                    </div>
                    <p class="item-status-notification__title"></p>
                </div>
            </div>
        </section> 
        @if($errors->any()) 
            <div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Ups!</strong>{{$errors->first()}}</div>
        @endif

        @if($datos->estadoPublicacion===2)
        <section class="item-status bg-alt">
            <div class="item-status-notification">
                <div class="ch-box-info">
                    <div class="ui-icon--content">
                        <svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--question-blocked">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--question-blocked"></use>
                        </svg>
                    </div>
                    
                    <p class="item-status-notification__title">
                    Publicación pausada
                    </p> 
                </div>
            </div>
        </section>
        @endif
        <section class="carousel-common__section carousel-common--with-installments">
            <div id="similarItemsCarousel" class="vip-section-carousel"></div>
        </section>    
    </div>
</section> 
        <div class="vip-nav-bounds" style="text-align: left;">
                <a id="contactAnchor"></a>
                <div class="layout-main u-clearfix">
                    <div class="layout-col layout-col--left">
                        


    

    <div class="vip-gallery-container ">
        <div id="productGalleryCollection" class="vip-gallery" data-gallery="">
            


<span class="product-gallery-nav" data-direction="previous" style="">
    <svg width="50" height="50" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon--chevron--left"><g fill="#3483fa" fill-rule="evenodd"><path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path><path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path></g></svg>
</span>
<span class="product-gallery-nav" data-direction="next" style="">
    <svg width="50" height="50" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon--chevron--right"><g fill="#3483fa" fill-rule="evenodd"><path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path><path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path></g></svg>
</span>

            <div id="gallery_dflt" class="product-gallery thumbs-col-1 ch-enlarge ch-points-ltrt" style="min-height: 350px">
                







<div class="gallery-content item-gallery__wrapper" data-gallery-id="default" data-full-images="[{&quot;src&quot;:&quot;&quot;,&quot;w&quot;:&quot;1118&quot;,&quot;h&quot;:&quot;698&quot;}]">
    
        
            
            
            
                
                <label for="thumbgallery_default-0" class="gallery__thumbnail gallery__thumbnail--selected" data-imgindex="0">
                    
                        <span class="ch-icon ch-icon-search"></span>
                    
                    
                    <img src="images/{{ $datos->idUser }}/{{$datos->idPublicacion}}/{{$imagen->url}}" width="70" height="70">
                    
                </label>
           
            
                <input type="radio" id="thumbgallery_default-0" class="thumbgallery_default-0" name="product-gallery-thumbnail_default" checked="">
            
            <figure class="gallery-image-container thumbgallery_default-0" data-side="right" data-align="top">
                
                <a href="images/{{ $datos->idUser }}/{{$datos->idPublicacion}}/{{$imagen->url}}" class="gallery-trigger gallery-item--landscape ch-zoom-trigger ch-shownby-pointerenter" data-imgindex="0" data-size="1118x698" style="height: 312px; width: 500px;" data-uid="1" aria-owns="ch-zoom-1" aria-haspopup="true">
                    <img src="images/{{ $datos->idUser }}/{{$datos->idPublicacion}}/{{$imagen->url}}" width="500" height="312" data-srcset="images/{{ $datos->idUser }}/{{$datos->idPublicacion}}/{{$imagen->url}} 2x" alt="alfa romeo" data-imgindex="0" srcset="images/{{ $datos->idUser }}/{{$datos->idPublicacion}}/{{$imagen->url}}">
                <div class="ch-zoom-loading ch-hide" style="left: 201px; top: 107px;"><div class="ch-loading-large"></div><p>Cargando zoom...</p></div><div class="ch-zoom-seeker ch-hide" style="width: 186px; height: 169px; left: 0px; top: 45.4063px;"></div></a>
            </figure>
        
    

    
        
            <label for="thumbgallery_default-1" class="gallery__thumbnail">
                <img class="icon-video__img" src="#" data-imgindex="2" data-video-id="DCJCazILkCE" width="70" height="70">
                <div class="icon-video ui-icon--content ui-icon__video">
                    <svg viewBox="0 0 60 60" id="ui-icon--video" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><g fill="none" fill-rule="evenodd"><rect fill-opacity=".7" fill="#FFF" width="60" height="60" rx="30"></rect><path fill="#3483FA" d="M23 20v20.395l17.709-10.191z"></path></g></svg>
                </div>
            </label>
        
        
            <input type="radio" id="thumbgallery_default-1" class="thumbgallery_default-1" name="product-gallery-thumbnail_default">
         
    
</div>



            </div>
        </div>
    </div>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
         It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
            PhotoSwipe keeps only 3 of them in DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container" style="transform: translate3d(-1511px, 0px, 0px);">
            <div class="pswp__item" style="display: block; transform: translate3d(3022px, 0px, 0px);"></div>
            <div class="pswp__item" style="transform: translate3d(0px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(258px, 44px, 0px) scale(0.744986);"><img class="pswp__img" src="#" style="backface-visibility: hidden; opacity: 1; display: block;"></div></div>
            <div class="pswp__item" style="display: block; transform: translate3d(1511px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(0px, 0px, 0px) scale(1);"></div></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--fit pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter">2 / 2</div>

                
                  <span class="pswp__button pswp__button--close ch-icon-remove" title="Cerrar (Esc)">
                    <svg width="22" height="22" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon-remove">
    <g fill="#000" fill-rule="evenodd">
        <path d="M1.646 2.354l14 14 .708-.708-14-14z"></path>
        <path d="M15.646 1.646l-14 14 .708.708 14-14z"></path>
    </g>
</svg>

                  </span>
                
                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            

            
                <button class="pswp__button pswp__button--arrow--left" title="Anterior (arrow left)">
                  <svg width="22" height="22" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon">
    <g fill="#000" fill-rule="evenodd">
        <path d="M10.646 4.646l-4 4L6.293 9 7 9.707l.354-.353 4-4L11.707 5 11 4.293z"></path>
        <path d="M11.354 12.646l-4-4L7 8.293 6.293 9l.353.354 4 4 .354.353.707-.707z"></path>
    </g>
</svg>

                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Siguiente (arrow right)">
                  <svg width="22" height="22" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon--chevron-right">
    <g fill="#000" fill-rule="evenodd">
        <path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path>
        <path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path>
    </g>
</svg>

                </button>
            

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>


                            <section class="ui-view-more vip-section-specs main-section">
    <h2 class="main-section__title">
       Ficha técnica
    </h2>
    
    <div class="description-content-main-group attribute-content">
        
        <div class="card-section">
            
    <div class="specs-wrapper">
        <section class="specs-container specs-layout-alternate">
            <ul class="specs-list">
                    @if($datos->motor!=null)
                    <li class="specs-item">
                    <strong>Marca del motor</strong>
                    <span>2</span>
                    </li>
                    @endif
                    @if($datos->kilometros!=null)
                    <li class="specs-item">
                    <strong>Kilómetros</strong>
                    <span>{{$datos->kilometros}} km</span>
                    </li>
                    @endif
                    @if($datos->marca!=null)
                    <li class="specs-item">
                    <strong>Marca</strong>
                    <span>{{$datos->marca}}</span>
                    </li>
                    @endif
                    @if($datos->modelo!=null)
                    <li class="specs-item">
                    <strong>Modelo</strong>
                    <span>{{$datos->modelo}}</span>
                    </li>
                    @endif
                    @if($datos->anio!=null)
                    <li class="specs-item">
                    <strong>Año</strong>
                    <span>{{$datos->anio}}</span>
                    </li>
                    @endif
            </ul>
        </section>
    </div>



        </div>

    </div>


    

    <div class="description-content-secondary-group attribute-content">
        
            
    <input type="checkbox" class="ui-dropdown__input" id="ui-dropdown-0">
    <div class="ui-dropdown">
        <label class="ui-view-more__title ui-dropdown__trigger" role="button" for="ui-dropdown-0">
            <span>Adicionales</span>
            <span class="ui-view-more__arrow"></span>
        </label>
        <div class="ui-dropdown__content">
            <div class="item-details__content ui-view-more__content">
                <ul class="attribute-list">
                    
                        <li>
    Dirección
    
        : <span>Hidráulica</span>
    
</li>


                    
                        <li>
    Transmisión
    
        : <span>Manual</span>
    
</li>


                    
                        
                    
                </ul>
            </div>
        </div>
    </div>


        
        
    </div>

</section>
    


    
        <section class="main-section item-description ">
            
                <h2 class="main-section__title item-description__title">Descripción</h2>
            

            
            
    <div id="description-includes" class="item-description__content ">

    

    
    <div class="item-description__text">
        <p>{{$datos->descripcion}}</p>
    </div>



    
</div>

        </section>

                        
                    </div>
                    <div class="layout-col layout-col--right">
                        <div class="layout-description-wrapper" data-js-desc-wrap="">
                            
                                <section class="short-description transition short-description--blocked down-payment" data-js-short-desc="" id="short-desc">
    <div class="short-description__floating">

        <article class="vip-classified-info">
    <dl>
        
            <dt>Año</dt>
            <dd>{{$datos->anio}}</dd>
            @if($datos->kilometros!=null)
            <dt>Kilómetros</dt>
            <dd>{{$datos->kilometros}} km</dd>
            @endif
        
    </dl>
</article>
        <header class="item-title" data-js-item-title="">
    <h1 class="item-title__primary ">
        {{$datos->titulo}}
    </h1>
</header> 
        <fieldset class="item-price "> 
    <span class="price-tag price-tag-motors"> 
            
            <span class="price-tag-symbol" content="100000.0">$</span>
<span class="price-tag-fraction">{{$datos->precio}}</span> 
    </span> 
</fieldset>   
@if($datos->estadoPublicacion===2)
    <div class="ch-box-info">  
        <div class="ui-icon--content">
            <svg viewBox="0 0 16 16" id="ui-icon--question-blocked" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><g fill="none" fill-rule="evenodd"><circle fill="#F57819" transform="rotate(-180 8 8)" cx="8" cy="8" r="8"></circle><path fill="#FFF" d="M7 3h1.882l-.235 5.176H7.235z"></path><ellipse fill="#FFF" cx="7.941" cy="10.941" rx=".941" ry=".941"></ellipse></g></svg>
        </div>
        
            <p class="item-status-notification__title">
                
                    Publicación pausada
                
            </p> 
    </div> 
@endif
    </div> 
</section> 
    <section class="ui-view-more vip-section-seller-info">
        <p class="card-title">
            
                Información sobre el vendedor
            
        </p> 

    <p class="card-subtitle name">Nombre</p>
    <p class="card-description card-description--bold">
        <span>{{$vendedor}}</span>
    </p> 

    <div class="card-section"> 

<div class="card-section seller-thermometer">
    <div class="reputation reputation-level-newbie null mesh-row ">
        <div class="vip-reputation-info">
            <ol class="reputation-thermometer">
                <li class="reputation-thermometer-1">Rojo</li>
                <li class="reputation-thermometer-2">Naranja</li>
                <li class="reputation-thermometer-3">Amarillo</li>
                <li class="reputation-thermometer-4">Verde claro</li>
                <li class="reputation-thermometer-5">Verde</li>
            </ol> 
        </div>
    </div>
</div> 
    </div> 
    <div class="reputation-info block">
        <p class="card-subtitle reputation-title">Este vendedor <strong>aún no tiene suficientes ventas</strong> para calcular su reputación.</p> 
            <div class="feedback-title">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                
                    Paga el apartado con Mercado Pago. Si cambias de opinión, te devolvemos el 100% de tu dinero.
                    <br>
        
                    <div>
                @if($idVendedor!=auth()->user()->_id) 
                    <div class="row" >
                        <div class="col-md-6 cont-btn-comprar">
                            <form action="{{route('recibirPor')}}" method="post" accept-charset="utf-8"> 
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                <input type="hidden" name="titulo" id="titulo" value="{{$datos->titulo}}">
                                <input type="hidden" name="precio" id="precio" value="{{$datos->precio}}">
                                <input type="hidden" name="color" id="color" value="{{$datos->color}}">
                                <input type="hidden" name="idArticulo" id="idArticulo" value="{{$datos->_id}}">
                                <input type="hidden" name="idPublicacion" id="idPublicacion" value="{{$datos->idPublicacion}}">
                                <input type="hidden" name="idUser" id="idUser" value="{{$datos->idUser}}"> 
                                <input type="hidden" name="cantidadDisponibles" id="cantidadDisponibles" value="{{$datos->cantidad}}">
                                <input type="hidden" name="urlPrincipal" id="urlPrincipal" value="{{$datos->urlPrincipal}}">
                                <input type="hidden" name="cantidadArticulos" value="1">
                                <input type="submit"  class="ui-button ui-button--secondary " style="font-size: 15px!important;min-width: 0;padding: 15px 16px;border: 1px solid #3483fa; color: white ;background: #3483fa;border-radius: 4px; margin-top: 40px; margin-right: 5px" value="      Comprar  ahora   ">
                            </form> 

                        </div>
                        <div class="col-md-6 cont-btn-agregar">
                            <form action="agregaralCarrito" method="post" accept-charset="utf-8">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                <input type="hidden" name="titulo" id="titulo" value="{{$datos->titulo}}">
                                <input type="hidden" name="precio" id="precio" value="{{$datos->precio}}">
                                <input type="hidden" name="color" id="color" value="{{$datos->color}}">
                                <input type="hidden" name="idArticulo" id="idArticulo" value="{{$datos->_id}}">
                                <input type="hidden" name="idPublicacion" id="idPublicacion" value="{{$datos->idPublicacion}}">
                                <input type="hidden" name="idUser" id="idUser" value="{{$datos->idUser}}"> 
                                <input type="hidden" name="cantidadDisponibles" id="cantidadDisponibles" value="{{$datos->cantidad}}">
                                <input type="hidden" name="urlPrincipal" id="urlPrincipal" value="{{$datos->urlPrincipal}}">
                                <input type="hidden" name="cantidadArticulos" value="1">
                                <input type="submit"  class="ui-button ui-button--secondary " style="font-size: 15px!important;min-width: 0;    margin-top: 40px;padding: 12px 16px;border: 1px solid #3483fa;    color: #3483fa;background: none;border-radius: 4px;" value="Agregar al carrito">
                            </form> 
                        </div>
                    </div> 
                @endif
                </div>
            </div> 
    </div> 
    <p class="card-subtitle">Ubicación del vehículo</p>
    <p class="card-description">
        <span> 
    </span></p><div class="location-info">
        <div class="ui-icon--content">
            <svg viewBox="0 0 14 19" id="ui-icon--location-mark" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><path d="M6.984.003C3.162.003.053 3.198.053 7.125c0 5.84 6.28 10.799 6.547 11.007a.622.622 0 0 0 .78-.01c.266-.218 6.536-5.416 6.536-10.997 0-3.927-3.11-7.122-6.932-7.122zm-.009 16.762c-1.341-1.159-5.652-5.228-5.652-9.64 0-3.208 2.54-5.818 5.66-5.818 3.123 0 5.663 2.61 5.663 5.818 0 4.21-4.335 8.437-5.671 9.64zm.009-12.494c-1.531 0-2.777 1.28-2.777 2.854 0 1.573 1.246 2.853 2.777 2.853 1.53 0 2.777-1.28 2.777-2.853 0-1.574-1.246-2.854-2.777-2.854zm0 4.403c-.831 0-1.507-.695-1.507-1.549s.676-1.55 1.507-1.55c.83 0 1.507.696 1.507 1.55 0 .854-.676 1.549-1.507 1.549z" fill-rule="nonzero" fill="#333"></path></svg>
        </div> 
            {{$datos->colonia}} - {{$datos->municipio}} - {{$datos->estado}} 
    </div> 
    <p></p> 
                <span class="seller-info-link"> 
                </span> 
    </section> 
                            <section class="vip-section-related-services">
    <div id="related-services-container"></div>
</section> 
                            <section class="ui-view-more vip-section-security">
    <h3 class="card-title">
        Consejos de seguridad
    </h3> 
    <div class="card-section borderless">
    <ul>
        
            <li>Aparta el vehículo solamente por Mercado Libre. No reserves con envíos de dinero. No recibas cupones de pago del vendedor.</li>
        
            <li>Mercado Libre no tiene vehículos bajo su custodia.</li>
        
            <li>Revisa el remitente de los e-mails que envía Mercado Libre. Ante cualquier duda, entra en <a id="guide" rel="nofollow" href="https://ayuda.mercadolibre.com.mx/ayuda/Creo-que-recibi-un-e-mail-falso_947">Creo que recibí un e-mail falso</a>.</li>
        
            <li>Desconfía de ofertas debajo del precio de mercado. Mira nuestra <a id="guide" rel="nofollow" href="http://www.mercadolibre.com.mx/precios_de_autos">guía de precios</a>.</li>
        
    </ul> 
        <a id="guide" rel="nofollow" href="https://www.mercadolibre.com.mx/ayuda/3835" class="ui-view-more__link">Más consejos de seguridad</a> 
</div> 
</section> 
        <section class="vip-section-display ch-hide">
            <div class="vip-section-display__wrapper">
                <div class="vip-section-display__container" id="motorsMiddleAdvertising"></div>
                <p class="vip-section-display__text">Publicidad</p>
            </div>
        </section> 
                        </div>
                        <div class="layout-anchor"></div>
                    </div>
                </div> 
<section class="item-info">
    <p class="item-info__id">Publicación <span class="item-info__id-number">#646934777</span></p> 
    <p class="item-info__denounce"><a href="#" id="denounce" rel="nofollow">Denunciar</a></p> 
</section> 
            </div> 
 
@stop