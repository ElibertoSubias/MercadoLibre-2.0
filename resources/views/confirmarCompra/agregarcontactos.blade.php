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
height: 500px;
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
       <a href="#" id="modalSeller" style="display:none" aria-label="ch-modal-5"></a>
        <a href="#" id="modalDeleteInfo" style="display:none" aria-label="ch-modal-6"></a>

     <main role="main">

    <section class=" ml-addresses-section">
        

        <h1 class="ml-addresses-main-title">Modificar domicilio</h1>
    <h2 class="ml-addresses-main-subtitle "></h2>




<form style="margin-bottom:0px;" class="ui-form form-with-floating-labels" id="form_modificarDomicilio" action="{{route('agregarcontacto')}}" name="addresses-form" method="post">
    <input type="hidden" name="latitude" id="latitude" value=""><input type="hidden" name="longitude" id="longitude" value=""><input type="hidden" name="locationType" id="locationType" value=""><input type="hidden" name="formId" id="formId" value="ce86e2344591f29a66b866c76d924d3419662143ae6feab741d29f2bd078dd6a">
    <input type="hidden" name="appName" id="appName" value="generic">
    
    
  
            
    
    <div class="ml-addresses-card">
        <p>Datos de contacto</p>
        <div class="u-clearfix">
        <div class="ml-addresses-grid ml-addresses-grid--first-column col-md-5">
            <div class="ui-form__row ">
                <input id="inputContacto" type="text" data-required="true" class="ui-form__input " name="inputContacto" aria-describedby="contactMessage" data-valid="true" maxlength="150" data-min-length="3">
                <label id="lblMsjinputContacto" for="inputContacto" class="ui-form__label">Contacto</label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="alertMsjinputContacto" style="color: red" role="alert">Complete este dato</div>
            </div>
        </div>
        <div class="ml-addresses-grid ml-addresses-grid--second-column ui-telephone  col-md-5">
            <div class="ui-telephone__number ui-form__row">
                    <input id="inputTelefono" class="ui-telephone__input " data-js="telephone" name="inputTelefono" type="tel" maxlength="22" placeholder="">
                    <label id="lblMsjinputTelefono" for="inputTelefono" class="ui-form__label">Teléfono</label>
                    <span class="ui-form__status-bar"></span>
                <span class="ui-telephone__focus-line"></span>
            </div>
            
         <div class="ui-form__message" id="alertMsjinputinputTelefono" style="color: red" role="alert">Complete este dato</div>
    </div>
    </div>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                  <input type="hidden" name="idPaquete" value="{{$idPaquete}}">
                  <input type="hidden" name="titulo" value="{{$titulo}}" id="titulo"> 
                  <input type="hidden" name="precio" value="{{$precio}}">
                  <input type="hidden" name="urlImagen" value="{{$urlImagen}}">
            
    
 </div>       
    <div class="ml-addresses-actions ml-addresses-actions--align-left" style="text-align: left;margin-bottom: 0px;padding: 0px 0px 40px;">

    <input type="submit"  name="actualizar"  id="continueButton" class="ui-button ui-button--primary" value="Guardar">
</form> 




    </section>
    
        
    </main>
    
</form>

</div>
    <div class="col2" style="width: 30%">
         <div id="aside-container" class="cart-aside"><div><div data-component="aside">
    <aside class="cart-aside__content cart-aside__content--item cart-aside--static" data-aside="target" style="height: 500px !important ">
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
                 <div class="overview-component__amounts">
                    <div class="overview-component__table">
                            <div class="overview-component__row">
                                <div data-id="overview-items-quantity" class="overview-component__column" style="text-align: left;">
                                    Envio
                                </div>
                                <div data-id="overview-items-price" class="overview-component__column">
                                    <span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                        <meta itemprop="price" content="18999"> 
                                        <span class="price-tag-fraction">-</span>
    
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
