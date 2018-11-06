@extends('layouts.masterRegistro')

@section('content')  
{!! Html::style('css/listStyle.css') !!} 
<main id="main_venta" class="col-md-12" style="background: #f5f5f5 !important;font-family: Proxima Nova,-apple-system,Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;    font-size: 16px;    font-weight: 300;    line-height: 1.35;
    -webkit-text-size-adjust: 100%;-webkit-tap-highlight-color: rgba(0,0,0,.1);height: 100%;">
    <div class="alert_movil_estado" style="display: none;">
        <h1>Ops! Para vender es necesario la app...</h1>
    </div>

<div id="cont_main_venta" style="margin: 30px auto 20px;max-width: 1220px;background-color: #fff;
    border: 1px solid #e2e2e2;border-radius: 5px;">
    
    <div style="">
    	<ol class="syi-ui-wizard__breadcrumb syi-ui-wizard__step--4" data-reactid="7" style="display: block;list-style: none;    overflow: hidden;padding: 0;margin: 0 0 30px;">
    		<li class="syi-ui-wizard__step syi-ui-wizard__step--current" data-reactid="8"><span data-reactid="9" style="font-weight: 700;
    	color: #333;">Elige qué quieres publicar</span></li>
    		<li class="syi-ui-wizard__step" data-reactid="10"><span data-reactid="11">Describe tu producto</span></li>
    		<li class="syi-ui-wizard__step" data-reactid="12"><span data-reactid="13">Ingresa precio y cantidad</span></li>
    		<li class="syi-ui-wizard__step" data-reactid="14"><span data-reactid="15">Confirma tu publicación</span></li>
    	</ol>
    </div>
    <div style="position: relative;" id="cont_lista">
        <nav class="hub-nav" style="    border-collapse: separate;
    border-spacing: 1em;
    max-width: 841px;
    margin: 55px auto 0;
    overflow: auto;margin-bottom: 200px;">
            <form id="ven_mot" class="hub-card syi-hub__image--mot" action="{{route('categorias')}}" method="get"> 
                <input type="hidden" name="tipoCategoria" id="tipoCategoria" value="VEHI">
                <button id="btn_ven_mot" type="submit" form="MOTORS">
                    <span class="hub-car-titulo">Vehículos</span>
                    <span class="syi-hub__image syi-hub__image--mot"> </span></button>
            </form> 
            <form id="ven_res" class="hub-card syi-hub__image--res" action="{{route('categorias')}}" method="get" accept-charset="utf-8"> 
                <input type="hidden" name="tipoCategoria" id="tipoCategoria" value="INMU">
                <button type="submit" form="ven_res">
                    <span class="hub-car-titulo" data-reactid="24">Inmuebles</span>
                    <span class="syi-hub__image syi-hub__image--res" data-reactid="25"> </span></button>
            </form>
            <form id="ven_srv" class="hub-card syi-hub__image--srv" action="{{route('categorias')}}" method="get" accept-charset="utf-8"> 
                <input type="hidden" name="tipoCategoria" id="tipoCategoria" value="SERV">
                <button type="submit" form="ven_srv">
                    <span class="hub-car-titulo" data-reactid="28">Servicios</span>
                    <span class="syi-hub__image syi-hub__image--srv"> </span></button>
            </form>
            <div id="ve_mas" class="hub-card " style="color: #5cb85c;">
                <div>
                    <span class="syi-hub__title" data-reactid="32">Productos y otros</span>
                    <span class="syi-hub__image syi-hub__image--mas"> </span>
                </div>
                <form action="{{route('categorias')}}" method="get" accept-charset="utf-8" style="display:none;border: none !important;" id="frmProducto">
                    <input type="hidden" name="tipoCategoria" id="tipoCategoria" value="PROD">
                     <div class="ui-box syi-title-wrapper" style="margin-left: 16% !important;width: 66.6%;">
                        <div class="syi-title-text">
                            <h3 class="syi-title-text__title">Escribe un título para tu publicación. Cuanta más información, ¡mejor!</h3>
                        </div>
                        <div class="syi-title" style="float: left;">
                            <div class="ui-form-row syi-title__form">
                                <div class="syi-input-countdown">
                                    <span>
                                        <label class="syi-title__label u--arrange-fit ">Título:</label>
                                        <input type="text" data-hj-whitelist="true" maxlength="60" label="Título:" placeholder="Ejemplo: camisa Lacoste hombre manga larga" class="syi-title__field syi-title__icon-tooltip u--arrange-fill" id="nombreProducto" name="nombreProducto">
                                    </span>
                                    <p class="ui-countdown" style="font-size: 11px;margin-left: 9%;">Restan 60 caracteres.</p>
                                </div>
                            </div>
                        </div>
                        <div class="syi-action-button">
                            <input type="submit" value="Continuar" class="btn-azul syi-action-button__primary ui-btn " style="margin-left: 10px;
    padding: 5px 10px;
    padding-left: 30px;
    font-size: 18px;
    padding-right: 30px;
    margin-top: 3px;margin-bottom: 50px;">
                        </div>
                    </div>

                </form>
            </div>
        </nav>
    </div>
   <p class="syi-terms-conditions" data-reactid="39">Asegúrate de que tu publicación cumpla con las <a href="https://ayuda.mercadolibre.com.mx/ayuda/Politicas-de-Publicacion_1011" target="_blank">Políticas de Mercado Libre</a>.</p> 
</div> 
</main> 
@stop