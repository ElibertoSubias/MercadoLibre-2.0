@extends('layouts.masterRegistro')

@section('content')  

{!! Html::style('css/styleDomicilio.css') !!} 
{!! Html::style('css/styleDondeRecibir.css') !!}
 
<style type="text/css">

.cols {
  width: 100%;
}



.col1 {
    float:left;

  width: 65%;
}

.col2 {
    float:left;
    width: 27%;
    margin-top: 2px;
    background: #e6e6e6;
    margin-right: 2px;
}

p {
  margin: 1em;
}
</style>

<div class="cols" >
<div  class="col1">                
       
</div>
    <div class="col2" style="width: 30%">
         <div id="aside-container" class="cart-aside"><div><div data-component="aside">
    <aside class="cart-aside__content cart-aside__content--item cart-aside--static" data-aside="target">
            <div class="overview-component__item u-block-center">
                <span class="ui-badge ui-badge--small ui-badge--picture item__image--circular">
                      <img src="images/{{$urlImagen}}/principal.jpg" style="width: 100%; margin-top: 6px" alt="" title="" > 
                </span>
                <h3 class="overview-component__item-title">
                {{$titulo}}
                </h3>
                      <span class="overview-component__item-quantity-text" style="color: blue">Cantidad: 1</span>
            </div>

        <div class="overview__table-container">
                <div class="overview-component__amounts">
                    <div class="overview-component__table">
                            <div class="overview-component__row">
                                <div data-id="overview-items-quantity" class="overview-component__column" style="text-align: left;">
                                    Producto
                                </div>
                                <div data-id="overview-items-price" class="overview-component__column">
                                    <span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                        <meta itemprop="price" content="18999"> 
                                        <span class="price-tag-symbol" itemprop="priceCurrency">$</span>
                                        <span class="price-tag-fraction">{{$precio}}</span>
                                            <span class="price-tag-decimal-separator"></span> 
                                            <span class="price-tag-cents">00</span>
                                        
                                    </span>
                                </div>
                            </div>
                        
                    </div>
                </div>
                    <div class="overview-component__total">
                        <div class="overview-component__table">
                            <div class="overview-component__column" style="text-align: left;">
                                Total
                            </div>
                            <div class="overview-component__column">
                                        <span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                            <meta itemprop="price" content="18999">
                                            
                                            
                                            <span class="price-tag-symbol" itemprop="priceCurrency">$</span>
                                            <span class="price-tag-fraction">{{$precio}}</span>
                                                <span class="price-tag-decimal-separator"></span>
                                                
                                                <span class="price-tag-cents">00</span>
                                            
                                        </span>
                            </div>
                        </div>
                    </div>
        </div>
    </aside>
</div>
</div>

    </div>
</div>                

@stop
