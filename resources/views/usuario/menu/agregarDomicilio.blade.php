@extends('layouts.master')

@section('content')
{!! Html::style('css/styleDomicilio.css') !!}   
                
        <a href="#" id="modalSeller" style="display:none" aria-label="ch-modal-5"></a>
        <a href="#" id="modalDeleteInfo" style="display:none" aria-label="ch-modal-6"></a>

     <main role="main">

    <section class=" ml-addresses-section">
        

        <h1 class="ml-addresses-main-title">Nuevo domicilio</h1>
    <h2 class="ml-addresses-main-subtitle "></h2>




<form class="ui-form form-with-floating-labels" id="addresses-form" action="" name="addresses-form" method="post">
    <input type="hidden" name="latitude" id="latitude" value=""><input type="hidden" name="longitude" id="longitude" value=""><input type="hidden" name="locationType" id="locationType" value=""><input type="hidden" name="formId" id="formId" value="ce86e2344591f29a66b866c76d924d3419662143ae6feab741d29f2bd078dd6a"><input type="hidden" name="appName" id="appName" value="generic">
    
    
    
        <div class="ml-addresses-card">
            
                 <fieldset class="ml-addresses-fieldset">
    <legend class="ml-addresses-hidden">Dirección</legend>
    <div class="u-clearfix">
        <div class="ml-addresses-grid ml-addresses-grid--first-column">
            <div class="ui-form__row ">
                <input id="inputEmail" type="text" data-required="true" class="ui-form__input " name="calle" value="" aria-describedby="streetMessage" data-valid="true" maxlength="70" data-min-length="1">
                <label id="lblMsjinputEmail" for="street" class="ui-form__label">Calle</label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="alertMsjinputEmail" role="alert">error_place_holder</div>
            </div>
        </div>
        <div class="ml-addresses-grid ml-addresses-grid--second-column ml-addresses-grid--half-column">
            <div class="ui-form__row ">
                <input id="inputEmail" type="tel" data-required="true" class="ui-form__input " name="numExterior" value="" data-valid="true" aria-describedby="numberMessage" maxlength="8" data-min-length="1">
                <label id="lblMsjinputEmail" for="number" class="ui-form__label">Nº Ext.</label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="alertMsjinputEmail" role="alert">error_place_holder</div>
            </div>
            <div class="ml-addresses-embeded-action">
                <label class="ui-checkbox ui-checkbox--embedded ui-checkbox--label-after">
                    <span class="ui-checkbox__label">s/n</span>
                    <input class="ui-checkbox__input" type="checkbox" id="sn" name="address.sn">
                    <span class="ui-checkbox__mimic"></span>
                    <div class="ui-form__message" id="numberMessage" role="alert">error_place_holder</div>
                </label>
            </div>
        </div>
        <div class="ml-addresses-grid ml-addresses-grid--second-column ml-addresses-grid--half-column">
            <div class="ui-form__row ">
                <input id="info" type="text" class="ui-form__input " name="address.comment" value="" aria-describedby="commentMessage" data-valid="true" maxlength="150" data-required="false" data-min-length="-1">

                <label for="info" class="ui-form__label">Nº Int. (opcional)</label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="numberMessage" role="alert">error_place_holder</div>
            </div>
        </div>
    </div>
    <div class="u-clearfix">
        <div class="ml-addresses-grid ml-addresses-grid--second-column">
            <div class="ui-form__row ">
                <input id="references" type="text" class="ui-form__input " name="address.references" value="" aria-describedby="referencesMessage" data-valid="true" maxlength="150" data-required="false" data-min-length="-1">
                <label for="references" class="ui-form__label">Entre calles (opcional)</label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="numberMessage" role="alert">error_place_holder</div>
            </div>
        </div>
    </div>
    <div class="ml-addresses-grid ml-addresses-grid--full-column">
        <div class="ui-form__row ">
            <input id="extraReferences" type="text" class="ui-form__input " name="address.extraReferences" value="" aria-describedby="extraReferencesMessage" data-valid="true" data-required="true" maxlength="150" data-min-length="3">
            <label for="extraReferences" class="ui-form__label">Referencias</label>
            <span class="ui-form__status-bar"></span>
            <div class="ui-form__message" id="numberMessage" role="alert">error_place_holder</div>
        </div>
    </div>
</fieldset>

            
                
<fieldset class="ml-addresses-fieldset">
    <legend class="ml-addresses-hidden">Zipcode</legend>
    <div class="ml-addresses-grid ml-addresses-grid--first-column">
        <div class="ui-form__row ">
            <input id="zipCode" type="tel" data-required="true" class="ui-form__input " name="address.zip_code" value="" aria-describedby="zipcodeMessage" data-valid="true" maxlength="5" data-min-length="5">
            <label for="zipCode" class="ui-form__label">Código postal</label>
            <span class="ui-form__status-bar"></span>
            <div class="ui-form__message" id="numberMessage" role="alert">error_place_holder</div>
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
    <legend class="ml-addresses-hidden">Ubicación</legend>
    <fieldset id="neighborhoodField" class="ml-addresses-fieldset">
        <div class="ml-addresses-grid ml-addresses-grid--first-column">
            <div class="ui-form__row ">
                <input id="neighborhood" name="address.neighborhood.name" type="text" data-required="true" class="ui-form__input " autocomplete="off" value="" aria-describedby="neighborhoodMessage" data-valid="true" maxlength="50" data-min-length="3">
                <label for="neighborhood" id="neighborhoodLabel" class="ui-form__label">Asentamiento</label>
                <span class="ui-form__status-bar"></span>

            </div>
        </div>
    </fieldset>
    <div class="ml-addresses-fieldset__inline-container">
        <div class="ml-addresses-grid ml-addresses-grid--first-column">
            <div class="ui-form__row ">
                <input type="hidden" id="cityTemporary" name="address.city.id" value="">
                <input type="text" id="city" name="address.city.name" value="" disabled="disabled" data-required="true" data-valid="true" class="ui-form__input ">
                <label for="city" id="cityLabel" class="ui-form__label">Municipio</label>
                <span class="ui-form__status-bar"></span>

            <div class="ml-addresses-suggest"><ul class="ml-addresses-suggest-list"></ul></div></div>
        </div>

        <div class="ml-addresses-grid ml-addresses-grid--second-column">
            <div class="ui-form__row  ">
                <input type="hidden" id="stateTemporary" name="address.state.id" value="">
                <input type="text" id="state" value="" disabled="disabled" data-required="true" data-valid="true" class="ui-form__input ">
                <label for="state" class="ui-form__label">Estado</label>
                <span class="ui-form__status-bar"></span>

            </div>
        </div>
    </div>
</fieldset>

            
        </div>
    

    
        
    <div class="ml-addresses-actions ml-addresses-actions--align-left">
    <input id="continueButton" type="submit" class="ui-button ui-button--primary" value="Guardar">
    <a id="cancelButton" href="https://myaccount.mercadolibre.com.mx/profile/" class="ui-button ui-button--tertiary">Cancelar</a>
</div>

    
</form>

    <!-- Hotjar Tracking Code for Addresses -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:452650,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>




    </section>
    
		
	</main>
    
</form>

    @stop