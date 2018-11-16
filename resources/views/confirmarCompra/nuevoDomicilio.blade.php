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
        <a href="#" id="modalSeller" style="display:none" aria-label="ch-modal-5"></a>
        <a href="#" id="modalDeleteInfo" style="display:none" aria-label="ch-modal-6"></a>

     <main role="main">

    <section class=" ml-addresses-section">
        

        <h1 class="ml-addresses-main-title">¿Dónde quieres recibirlo?</h1>
    <h2 class="ml-addresses-main-subtitle "></h2>




<form style="margin-bottom:0px; " class="ui-form form-with-floating-labels" id="addresses-form" action="{{route('agregarDomicilio2')}}" name="addresses-form" method="post">
    <input type="hidden" name="latitude" id="latitude" value=""><input type="hidden" name="longitude" id="longitude" value=""><input type="hidden" name="locationType" id="locationType" value=""><input type="hidden" name="formId" id="formId" value="ce86e2344591f29a66b866c76d924d3419662143ae6feab741d29f2bd078dd6a"><input type="hidden" name="appName" id="appName" value="generic">
    
    
     <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
        <div class="ml-addresses-card">
            
<fieldset class="ml-addresses-fieldset"><fieldset class="ml-addresses-fieldset">
    <legend class="ml-addresses-hidden">Zipcode</legend>
    <div class="ml-addresses-grid ml-addresses-grid--first-column">
        <div class="ui-form__row ">
            <input id="inputCodigoPostal" type="tel" data-required="true" onkeypress="calcular(this.value)" class="ui-form__input " name="inputCodigoPostal" value="" aria-describedby="zipcodeMessage" data-valid="true" maxlength="5" data-min-length="5">
            <label id="lblMsjinputCodigoPostal" for="inputCodigoPostal" class="ui-form__label">Código postal</label>
            <span class="ui-form__status-bar"></span>
            <div class="ui-form__message" id="alertMsjinputCodigoPostal" style="color: red" role="alert">Complete este dato</div>
        </div>
        <div class="ml-addresses-embeded-action">
            
                <a href="http://www.sepomex.gob.mx/ServiciosLinea/Paginas/ccpostales.aspx" id="searchCP" class="ml-addresses-link" target="_blank">No sé mi código</a>
            
            <div id="searchZipcodeLoading" class="ui-loading ml-addresses-hidden">
                <div class="ui-loading__container">
                    <svg class="ui-loading__spinner ui-loading__spinner--small" viewBox="25 25 50 50">
                        <circle class="ui-loading__spinner-path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</fieldset>
 <fieldset id="locationField" class="ml-addresses-fieldset">
   
    <div class="ml-addresses-fieldset__inline-container">
        <div class="ml-addresses-grid ml-addresses-grid--first-column">
            <div class="ui-form__row "> 
                <input type="text" id="inputMunicipio" name="inputMunicipio" value="" data-required="true" data-valid="true" class="ui-form__input ">
                <label for="inputMunicipio" id="lblMsjinputMunicipio" class="ui-form__label">Municipio</label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="alertMsjinputMunicipio" role="alert">error_place_holder</div>
            <div class="ml-addresses-suggest"><ul class="ml-addresses-suggest-list"></ul></div></div>
        </div>

        <div class="ml-addresses-grid ml-addresses-grid--second-column">
            <div class="ui-form__row  "> 
                <input type="text" id="inputEstado" value="" data-required="true" name="inputEstado" data-valid="true" class="ui-form__input ">
                <label id="lblMsjinputEstado" for="inputEstado" class="ui-form__label">Estado</label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="alertMsjinputEstado" role="alert">error_place_holder</div>
            </div>
        </div>
    </div>
</fieldset>
    <legend class="ml-addresses-hidden">Dirección</legend>
    <div class="u-clearfix">
        <div class="ml-addresses-grid ml-addresses-grid--first-column">
            <div class="ui-form__row ">
                <input id="inputCalle1" type="text" data-required="true" class="ui-form__input " name="inputCalle1" value="" aria-describedby="streetMessage" data-valid="true" maxlength="70" data-min-length="1">
                <label id="lblMsjinputCalle1" for="inputCalle1" class="ui-form__label">Calle</label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="alertMsjinputCalle" style="color: red" role="alert">Complete este dato</div>
            </div>
        </div>
        <div class="ml-addresses-grid ml-addresses-grid--second-column ml-addresses-grid--half-column">
            <div class="ui-form__row " >
                <input id="inputNumExt" type="number" data-required="true" class="ui-form__input " style="width: 250%;" name="inputNumExt" value="" data-valid="true" aria-describedby="numberMessage" min="0" data-min-length="1">
                <label id="lblMsjinputNumExt" for="inputNumExt" class="ui-form__label" style="width: 200px">Numero Externo.</label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="alertMsjinputNumExt" role="alert">error_place_holder</div>
            </div>

            <div class="ml-addresses-embeded-action">
                <label class="ui-checkbox ui-checkbox--embedded ui-checkbox--label-after" style="    position: relative;
    top: 35px;left: 68px;
    width: 25px;
    height: 35px;">
                    <span class="ui-checkbox__label" style="left: 5px;
    position: absolute;">s/n</span>
                    <input class="ui-checkbox__input" type="checkbox" id="sn" name="address.sn">
                    <span class="ui-checkbox__mimic"></span>
                    <div class="ui-form__message" id="numberMessage" role="alert">error_place_holder</div>
                </label>
            </div>
        </div>
       
    </div>
     <div class="ml-addresses-grid ml-addresses-grid--second-column ml-addresses-grid--half-column">
            <div class="ui-form__row ">
                <input id="inputNumInt" type="number" class="ui-form__input " name="inputNumInt"  value="" aria-describedby="commentMessage" data-valid="true" min="0" data-required="false" data-min-length="-1">
                <label id="lblMsjinputNumInt" for="inputNumInt" class="ui-form__label">Numero interno. (opcional)</label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="alertMsjinputNumInt" role="alert">error_place_holder</div>
            </div>
        </div>
    <div class="u-clearfix">
        <div class="ml-addresses-grid ml-addresses-grid--second-column">
            <div class="ui-form__row ">
                <input id="inputEntreCalles" type="text" class="ui-form__input " name="inputEntreCalles" value="" aria-describedby="referencesMessage" data-valid="true" maxlength="150" data-required="false" data-min-length="-1">
                <label id="lblMsjinputEntreCalles" for="inputEntreCalles" class="ui-form__label">Entre calles (opcional)</label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="alertMsjinputEntreCalles"  role="alert">Complete este dato</div>
            </div>
        </div>
    </div>
    <div class="ml-addresses-grid ml-addresses-grid--full-column">
        <div class="ui-form__row ">
            <input id="inputReferencias" type="text" class="ui-form__input " name="inputReferencias" value="" aria-describedby="extraReferencesMessage" data-valid="true" data-required="true" maxlength="150" data-min-length="3">
            <label id="lblMsjinputReferencias" for="inputReferencias" class="ui-form__label">Referencias</label>
            <span class="ui-form__status-bar"></span>
            <div class="ui-form__message" id="alertMsjinputReferencias"  style="color: red" role="alert">omplete este dato</div>
        </div>
    </div>
</fieldset>
 <legend class="ml-addresses-hidden">Ubicación</legend>
    <fieldset id="neighborhoodField" class="ml-addresses-fieldset">
        <div class="ml-addresses-grid ml-addresses-grid--first-column">
            <div class="ui-form__row ">
                <input id="inputAcentamiento" name="inputAcentamiento" type="text" data-required="true" class="ui-form__input " autocomplete="off" value="" aria-describedby="neighborhoodMessage" data-valid="true" maxlength="50" data-min-length="3">
                <label for="inputAcentamiento" id="lblMsjinputAcentamiento"  class="ui-form__label">Colonia </label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="alertMsjinputAcentamiento" style="color: red" role="alert">Complete este dato</div>
            </div>
        </div>
    </fieldset>

            
                


            
   

            
</div>
    <div class="ml-addresses-actions ml-addresses-actions--align-left" style="text-align: left;margin-bottom: 0px;padding: 0px 0px 40px;">

    <a href="javascript:continuarDomicilio()"  name="guardar"  id="continueButton" class="ui-button ui-button--primary">Guardar</a>
</form> 




    </section>
    
        
    </main>
    
</form>
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
