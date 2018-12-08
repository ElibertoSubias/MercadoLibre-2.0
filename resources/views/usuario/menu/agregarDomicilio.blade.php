@extends('layouts.master')
@section('titulo')
    <title>Nuevo domicilio - MercadoLibre</title>    
@stop
@section('content')
{!! Html::style('css/styleDomicilio.css') !!}   
<script type="text/javascript">
    
 
</script>
                
        <a href="#" id="modalSeller" style="display:none" aria-label="ch-modal-5"></a>
        <a href="#" id="modalDeleteInfo" style="display:none" aria-label="ch-modal-6"></a>

     <main role="main">

    <section class=" ml-addresses-section">
        

        <h1 class="ml-addresses-main-title">Nuevo domicilio</h1>
    <h2 class="ml-addresses-main-subtitle "></h2>




<form style="margin-bottom:0px;" class="ui-form form-with-floating-labels" id="addresses-form" action="" name="addresses-form" method="post">
    <input type="hidden" name="latitude" id="latitude" value=""><input type="hidden" name="longitude" id="longitude" value=""><input type="hidden" name="locationType" id="locationType" value=""><input type="hidden" name="formId" id="formId" value="ce86e2344591f29a66b866c76d924d3419662143ae6feab741d29f2bd078dd6a"><input type="hidden" name="appName" id="appName" value="generic">
    
    
     <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
        <div class="ml-addresses-card">
            <p>Datos del domicilio</p>
                 <fieldset class="ml-addresses-fieldset">
    <legend class="ml-addresses-hidden">Dirección</legend>
    <div class="u-clearfix">
        <div class="ml-addresses-grid ml-addresses-grid--first-column">
            <div class="ui-form__row ">
                <input id="inputCalle" type="text" data-required="true" class="ui-form__input " name="inputCalle" value="" aria-describedby="streetMessage" data-valid="true" maxlength="70" data-min-length="1">
                <label id="lblMsjinputCalle" for="inputCalle" class="ui-form__label">Calle</label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="alertMsjinputCalle" style="color: red" role="alert">Complete este dato</div>
            </div>
        </div>
        <div class="ml-addresses-grid ml-addresses-grid--second-column ml-addresses-grid--half-column">
            <div class="ui-form__row ">
                <input id="inputNumExt" type="number" data-required="true" class="ui-form__input " name="inputNumExt" value="" data-valid="true" aria-describedby="numberMessage" min="0" data-min-length="1">
                <label id="lblMsjinputNumExt" for="inputNumExt" class="ui-form__label">Nº Ext.</label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="alertMsjinputNumExt" role="alert">error_place_holder</div>
            </div>

            <div class="ml-addresses-embeded-action">
                <label class="ui-checkbox ui-checkbox--embedded ui-checkbox--label-after" style="    position: relative;
    top: 35px;left: -10px;
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
        <div class="ml-addresses-grid ml-addresses-grid--second-column ml-addresses-grid--half-column">
            <div class="ui-form__row ">
                <input id="inputNumInt" type="number" class="ui-form__input " name="inputNumInt" value="" aria-describedby="commentMessage" data-valid="true" min="0" data-required="false" data-min-length="-1">

                <label id="lblMsjinputNumInt" for="inputNumInt" class="ui-form__label">Nº Int. (opcional)</label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="alertMsjinputNumInt" role="alert">error_place_holder</div>
            </div>
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

            
                
<fieldset class="ml-addresses-fieldset">
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
    <legend class="ml-addresses-hidden">Ubicación</legend>
    <fieldset id="neighborhoodField" class="ml-addresses-fieldset">
        <div class="ml-addresses-grid ml-addresses-grid--first-column">
            <div class="ui-form__row ">
                <input id="inputAcentamiento" name="inputAcentamiento" type="text" data-required="true" class="ui-form__input " autocomplete="off" value="" aria-describedby="neighborhoodMessage" data-valid="true" maxlength="50" data-min-length="3">
                <label for="inputAcentamiento" id="lblMsjinputAcentamiento"  class="ui-form__label">Asentamiento</label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="alertMsjinputAcentamiento" style="color: red" role="alert">Complete este dato</div>
            </div>
        </div>
    </fieldset>
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

            
        </div>
    <div class="ml-addresses-card">
        <p>Datos de contacto</p>
        <div class="u-clearfix">
        <div class="ml-addresses-grid ml-addresses-grid--first-column col-md-5">
            <div class="ui-form__row ">
                <input id="inputContacto" type="text" data-required="true" class="ui-form__input " name="inputContacto" value="" aria-describedby="contactMessage" data-valid="true" maxlength="150" data-min-length="3">
                <label id="lblMsjinputContacto" for="inputContacto" class="ui-form__label">Contacto</label>
                <span class="ui-form__status-bar"></span>
                <div class="ui-form__message" id="alertMsjinputContacto" style="color: red" role="alert">Complete este dato</div>
            </div>
        </div>
        <div class="ml-addresses-grid ml-addresses-grid--second-column ui-telephone  col-md-5">
            <div class="ui-telephone__number ui-form__row">
                    <input id="inputTelefono" class="ui-telephone__input " data-js="telephone" name="inputTelefono" type="tel" value="" maxlength="22" placeholder="">
                    <label id="lblMsjinputTelefono" for="inputTelefono" class="ui-form__label">Teléfono</label>
                    <span class="ui-form__status-bar"></span>
                <span class="ui-telephone__focus-line"></span>

            </div>
            
         <div class="ui-form__message" id="alertMsjinputinputTelefono" style="color: red" role="alert">Complete este dato</div>
    </div>
    </div>

    
 </div>       
    <div class="ml-addresses-actions ml-addresses-actions--align-left" style="text-align: left;margin-bottom: 0px;padding: 0px 0px 40px;">

    <a href="javascript:continuar()"  name="guardar"  id="continueButton" class="ui-button ui-button--primary">Guardar</a>
    <a id="cancelButton" href="perfil" class="ui-button ui-button--tertiary">Cancelar</a>


    
</form> 




    </section>
    
		
	</main>
    
</form>

    @stop