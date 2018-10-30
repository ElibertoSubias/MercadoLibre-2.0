@extends('layouts.master')

@section('content')
{!! Html::style('css/styleCarrito.css') !!}
<script type="text/javascript">

</script> 
<div style="margin: 30px auto 20px;max-width: 1220px;background-color: #fff;border: 1px solid #e2e2e2;border-radius: 5px;height:auto;display: inline-block;width: 100%;">
    
    <div style="position: relative;">
    <div style="width: 99%;height: 100%;text-align: left;margin:20px;"> 
 
    <div data-region="tabs" class="cart__tabs"><div><ul class="ui-tabs" role="tablist" data-tabs="" id="Total" style="width: 96.5%;">
    <li data-tab="cart" class="ui-tabs__item ui-tabs__item--selected"><a class="ui-tabs__item-link" href="/gz/cart" role="tab">Carrito ({{$totalArticulos}}) <label id="totalArticulos" value=""></label> </a></li>
    <li data-tab="saved" class="ui-tabs__item"><a class="ui-tabs__item-link" href="/gz/cart/saved" role="tab">Guardados (0)</a></li>
</ul>
</div></div>
        <div data-region="disclaimers">
        </div>

    <div data-region="free-shipping-progress"><div></div></div>


    <div data-region="items" class="cart__items-container" role="tabpanel" itemscope="" itemtype="http://schema.org/ItemList" style="width: 95%;"><div><div><div data-component="item-cart" class="ui-panel" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/Product">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
    <div class="ui-panel__content" id="contenedor_articulos">
            <?php
                for($i=0; $i<count($articulos); $i++){ 
                    ?>
                    <article class="item  ">
                <div data-region="item-loading"></div>
                    <figure class="item__image item__image--dimmer">
                   <img src="/MercadoLibre-2.0/public/images/{{ $articulo[$i]->idUser}}/{{$articulo[$i]->idPublicacion}}/{{$articulo[$i]->urlPrincipal}}" width="80" height="80px" style="margin-bottom: -25px"> 
                    </figure>
                    <div class="item__information">
                        <div class="u-float-left item__description">
                        <h2 class="item__title" itemprop="name">
                            <a class="item__title--link" href="https://articulo.mercadolibre.com.mx/MLM-572083257-playera-polo-club-america-nike-utileria-original-mediana-_JM?variation=22751685920" itemprop="url"> {{$articulo[$i]->titulo}}</a>
                        </h2>
                       
                        
                            <div class="item__information-main u-clearfix">
                                <p class="item__information-detail item__payment-installments  u-float-left ">
                                
                                    <span class="item__payment-installments__label">Hasta 3 meses sin interés</span>
                                </p>
                                <p class="item__information-detail item__shipping-info  u-float-left " style="display: contents;">
                                    <svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--shipping-outline ">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--shipping-outline"></use>
                                    </svg>
                                    <span class="item__shipping-info__label">Envío gratis</span>
                                </p>
                            </div>
                            <ul class="item__action-menu">
                                    <li>
                                        <a data-action="buy-item" class=" item__action-menu-link " href="/gz/checkout/cart/buy?items=MLM572083257-Q1-VAR22751685920&amp;destination_type=address_id&amp;destination_value=902260096&amp;unchecked=false&amp;context=cart_item&amp;siteId=MLM">Comprar ahora</a>
                                    </li>
                                    <li>
                                        <form data-action="save-for-later" action="/gz/cart/saved/item" method="POST">
                                            <input type="hidden" name="id" value="MLM572083257_22751685920">
                                            <input type="submit" class="u-button-reset  u-link item__action-menu-link " value="Guardar para después">
                                        </form>
                                    </li>
                                    <li>
                                        <form data-action="remove-from-cart" action="/gz/cart/item/delete" method="POST">
                                            <input type="hidden" name="id" value="MLM572083257_22751685920">
                                            <a href="javascript:eliminar('{{$articulo[$i]->_id}}')">Eliminar</a>
                                        </form>
                                    </li>
                            </ul>
                        </div>
                            <div data-quantity="container" class="ui-quantity-selector u-float-left">
                                <div class="ui-quantity-selector__container">
                                    <form class="u-float-left" action="#" method="POST">
                                        <input data-quantity="pop" type="submit" value="-" class="u-button-reset ui-quantity-selector__button" name="pop" id="pop" disabled="">
                                    </form>
                            
                                    <input autocomplete="off" data-quantity="input" id="idCantidad_{{$articulos[$i]->_id}}" type="tel" value="{{$articulos[$i]->cantidad}}" class="u-button-reset ui-quantity-selector__input" name="quantity" disabled="" style="    width: 50px;">
                            
                                    <form class="u-float-left" action="#" method="POST">
                                        <input data-quantity="push" type="submit" value="+" class="u-button-reset ui-quantity-selector__button" name="push" id="{{$articulos[$i]->_id}}" <?php if($articulo[$i]->cantidad > 1) {}else{echo "disabled=''";} ?>>
                                    </form>
                                    <div class="cart-inline-loading__quantity-selector" data-region="quantity-loading"></div>
                                </div>
                                <div data-quantity="error" class="ui-quantity-selector__stock">Último disponible</div>
                            </div>
                            <div class="item__price" style="font-size: 32px !important;">
                            
                            
                                    <span class="price-tag item__price-tag" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                        <meta itemprop="price" content="1,499">
                                        
                                        
                                        <span class="price-tag-symbol" itemprop="priceCurrency">$</span>
                                        <span class="price-tag-fraction"> {{$articulo[$i]->precio}}</span>
                                        
                                    </span>
                            <input id="idPublicacion_{{$articulos[$i]->_id}}" hidden="" value="{{$articulo[$i]->_id}}">
                            
                            </div>
                    </div>
            </article>
                    <?php
                } 
            ?>  
    </div>
   
</div>
</div></div></div>
    <div data-region="summary" class="cart__summary" style="    width: 95%;"><div>    <footer class="summary summary--static" aria-label="Resumen de tu carrito" data-summary="footer">
        <div class="summary__row-content">
                <div class="summary__row summary__row--shipping summary__row--subtotal">
                    <span class="summary__label">Producto</span>
                    <span class="summary__price">
                        <span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                            <meta itemprop="price" content="1,499.00">
                            
                            
                            <span class="price-tag-symbol" itemprop="priceCurrency">$</span>
                            <span class="price-tag-fraction"> {{$i}}</span>
                                <span class="price-tag-decimal-separator">.</span>
                                
                                <span class="price-tag-cents">00</span>
                            
                        </span>
                    </span>
                 </div>
                <div class="summary__row summary__row--shipping">
                    <span class="summary__label ">
                            <div class="ui-dropdown">
                                <div class="cart-inline-loading__dropdown" data-region="dropdown-loading"></div>
                                <a href="/gz/cart/shipping?id=addresses&amp;free_shipping=true" class="ui-dropdown__link" data-summary="dropdown-trigger">
                                    <span class="ui-dropdown__label">
                                        Envío a
                                        C.P.: 80184, Culiacán
                                    </span>
                                        <span class="ui-dropdown__indicator">
                                            <svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--chevron ">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--chevron"></use>
                                            </svg>
                                        </span>
                                </a>
                                <span data-region="dropdown-content"></span>
                            </div>
                    </span>

                        <span class="summary__price summary__price--free">
                            Gratis
                        </span>
                </div>
        </div>

        <div class="summary__row summary__row--total">
            <span class="summary__label">Total</span>
            <span class="summary__price">
                <span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                    <meta itemprop="price" content="1,499.00">
                    
                    <span class="price-tag-symbol" itemprop="priceCurrency">$</span>
                    <span class="price-tag-fraction">{{$i}}</span>
                        <span class="price-tag-decimal-separator">.</span>
                        
                        <span class="price-tag-cents">00</span>
                    
                </span>
            </span>
        </div>
        <div class="summary__actions">
            <a href="/gz/checkout/cart/buy?items=MLM572083257-Q1-VAR22751685920&amp;destination_type=address_id&amp;destination_value=902260096&amp;unchecked=false&amp;context=cart&amp;siteId=MLM" data-summary="buy-action" class="ui-button ui-button--primary">Comprar todo</a>
        </div>
    </footer>
</div></div> 
</div></div>
            </div>
    </div> 
</div>
@stop
