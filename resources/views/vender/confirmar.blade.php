@extends('layouts.masterRegistro')

@section('content')  
{!! Html::style('css/descripStyle.css') !!}  
{!! Html::style('css/confirStyle.css') !!}  
<div style="margin: 30px auto 20px;max-width: 1220px;background-color: #fff;border: 1px solid #e2e2e2;border-radius: 5px;height:auto;display: inline-block;width: 100%;">
    <div style="" class="cont-ruta" style="width: 100%z">
        <ol class="syi-ui-wizard__breadcrumb syi-ui-wizard__step--4" data-reactid="7" style="display: block;list-style: none;    overflow: hidden;padding: 0;margin: 0 0 30px;">
            <li class="syi-ui-wizard__step syi-ui-wizard__step--current" data-reactid="8" style="background: #F0F0F0;"><span data-reactid="9"><a href="{{ URL::previous() }}" style="background: #F0F0F0;">Elige qué quieres publicar</a></span></li>
            <li class="syi-ui-wizard__step" data-reactid="10" style="background: #F0F0F0;"><span data-reactid="11"><a href="#" title="">Describe tu producto</a></span></li>
            <li class="syi-ui-wizard__step" data-reactid="12"><span data-reactid="13" style="background: #F0F0F0;"><a href="#" title="">Ingrese un precio</a></span></li>
            <li class="syi-ui-wizard__step" data-reactid="14"><span data-reactid="15" style="font-weight: 700;color: #333;border-bottom: 0;">Confirma tu publicación</span></li>
        </ol>
    </div>
    <div style="position: relative;">
            <div style="width: 100%;height: 100%;text-align: left;">
                <div class="ch-box-container"> 
                    <form action="{{route('agregar')}}" method="post" accept-charset="utf-8" class="ch-form">
                        <fieldset id="ListingTypesGroup"><legend class="{2}">Elige un tipo de publicación</legend>
                        <table id="ltstep" class="ch-datagrid listingtypes-container ch-form-options ch-form-required radios class " data-js="listingtypes">
                            {{ csrf_field() }}
                        <thead>
                            <tr>
                                <th></th>
                                <th class="features">Exposición</th>
                                <th class="features">Exposición en la Página principal de vehículos</th>
                                <th class="cost">Costo por publicar</th>
                            </tr>
                        </thead>
<input type="hidden" name="videoURL" id="videoURL" value="{{$objectArticulo->videoURL}}">
<input type="hidden" name="marca" id="marca" value="{{$objectArticulo->marca}}">
<input type="hidden" name="categoria" id="categoria" value="{{$objectArticulo->categoria}}">
<input type="hidden" name="estado" id="estado" value="{{$objectArticulo->estado}}">
<input type="hidden" name="municipio" id="municipio" value="{{$objectArticulo->municipio}}">
<input type="hidden" name="colonia" id="colonia" value="{{$objectArticulo->colonia}}">
<input type="hidden" name="telefono" id="telefono" value="{{$objectArticulo->telefono}}">
<input type="hidden" name="modelo" id="modelo" value="{{$objectArticulo->modelo}}">
<input type="hidden" name="anio" id="anio" value="{{$objectArticulo->anio}}">
<input type="hidden" name="numPuertas" id="numPuertas" value="{{$objectArticulo->numPuertas}}">
<input type="hidden" name="kilometros" id="kilometros" value="{{$objectArticulo->kilometros}}">
<input type="hidden" name="titulo" id="titulo" value="{{$objectArticulo->titulo}}">
<input type="hidden" name="moneda" id="moneda" value="{{$objectArticulo->moneda}}">
<input type="hidden" name="precio" id="precio" value="{{$objectArticulo->precio}}">
<input type="hidden" name="idPublicacion" id="idPublicacion" value="{{$objectArticulo->idPublicacion}}">
<input type="hidden" name="descripcion" id="descripcion" value="{{$objectArticulo->descripcion}}">
<input type="hidden" name="horarioContacto" id="horarioContacto" value="{{$objectArticulo->horarioContacto}}">
<input type="hidden" name="color" id="color" value="{{$objectArticulo->color}}">
<input type="hidden" name="tipoCombustible" id="tipoCombustible" value="{{$objectArticulo->tipoCombustible}}">
<input type="hidden" name="motor" id="motor" value="{{$objectArticulo->motor}}">
<input type="hidden" name="direccionAuto" id="direccionAuto" value="{{$objectArticulo->direccionAuto}}">
<input type="hidden" name="transmicion" id="transmicion" value="{{$objectArticulo->transmicion}}">
<input type="hidden" name="version" id="version" value="{{$objectArticulo->version}}"> 
<input type="hidden" name="arrayCaracteristicas" id="arrayCaracteristicas" value="{{$objectArticulo->arrayCaracteristicas}}">
                        <tbody>   
                            <tr class="ch-form-row true true  listingtypes-exposition exposition-gold_premium" data-listid="gold_premium">
                                <td class="listingtypes-exposition-data gold_premium">
                                    <div class="exposition-visual ">
                                        <input type="hidden" name="gold_premium_hasToPay" value="true" id="gold_premium_hasToPay">
                                        <input type="radio" name="listingTypes" checked="checked" value="gold_premium" calss="listingType" id="gold_premium">
                                        <label for="gold_premium">
                                            <strong>Oro Premium</strong>
                                            <span>¡Republica gratis hasta que lo vendas!</span>
                                        </label>
                                    </div>
                                    <div class="conditions-phqlv">
                                        Duración: 60 días.Al finalizar, tendrás 30 días para republicarlo gratis, todas las veces que quieras.               
                                    </div> 
                                </td>
                                <td class="listingtypes-features"> 
                                        <span class="listingtypes-exposition-level gold_premium" title="Exposición: Máxima"></span>
                                        <span class="exposition">
                                            Máxima
                                        </span> 
                                </td> 
                                <td class="listingtypes-features"> 
                                    <i class="ch-icon-ok"></i> 
                                </td> 
                                <td class="cost"> 
                                    <span class="ch-price">$ 499<sup>00</sup></span>  
                                    <div class="sell-inform">
                                                
                                    </div> 
                                </td>
                            </tr> 
                            <tr class="ch-form-row true true  listingtypes-exposition exposition-gold" data-listid="gold"> 
                                <td class="listingtypes-exposition-data gold">
                                    <div class="exposition-visual "> 
                                        <input type="hidden" name="gold_hasToPay" value="true" id="gold_hasToPay"> 
                                        <input type="radio" name="listingTypes" value="gold" calss="listingType" id="gold">
                                        <label for="gold"> 
                                            <strong>Oro</strong> 
                                            <span>¡Republica gratis hasta que lo vendas!</span> 
                                        </label>
                                    </div> 
                                    <div class="conditions-phqlv">
                                        Duración: 60 días.
                                        
                                            Al finalizar, tendrás 30 días para republicarlo gratis, todas las veces que quieras. 
                                    </div> 
                                </td>
                                <td class="listingtypes-features"> 
                                    <span class="listingtypes-exposition-level gold" title="Exposición: Alta"></span>
                                    <span class="exposition">
                                        Alta
                                    </span> 
                                </td> 
                                <td class="listingtypes-features"> 
                                   <i class="ch-icon-ok"></i> 
                                </td> 
                                <td class="cost"> 
                                    <span class="ch-price">$ 349<sup>00</sup></span> 
                                    <div class="sell-inform"> 
                                    </div> 
                                </td> 
                            </tr> 
                            <tr class="ch-form-row true true  listingtypes-exposition exposition-silver" data-listid="silver"> 
                                <td class="listingtypes-exposition-data silver">
                                    <div class="exposition-visual "> 
                                        <input type="hidden" name="silver_hasToPay" value="true" id="silver_hasToPay"> 
                                        <input type="radio" name="listingTypes" value="silver" calss="listingType" id="silver">
                                        <label for="silver"> 
                                            <strong>Plata</strong> 
                                            <span>¡Republica gratis hasta que lo vendas!</span> 
                                        </label>
                                    </div>
                                     <div class="conditions-phqlv">
                                        Duración: 60 días. 
                                            Al finalizar, tendrás 30 días para republicarlo gratis, todas las veces que quieras. 
                                    </div> 
                                </td>
                                <td class="listingtypes-features"> 
                                    <span class="listingtypes-exposition-level silver" title="Exposición: Media"></span>
                                    <span class="exposition">
                                        Media
                                    </span> 
                                </td> 
                                <td class="listingtypes-features"> 
                                    <i class="ch-icon-remove"></i> 
                                </td> 
                                <td class="cost"> 
                                    <span class="ch-price">$ 219<sup>00</sup></span> 
                                    <div class="sell-inform"> 
                                    </div> 
                                </td> 
                            </tr> 
                            <tr class="ch-form-row true true  listingtypes-exposition exposition-free" data-listid="free"> 
                                <td class="listingtypes-exposition-data free">
                                    <div class="exposition-visual "> 
                                        <input type="hidden" name="free_hasToPay" value="false" id="free_hasToPay"> 
                                        <input type="radio" name="listingTypes" value="free" calss="listingType" id="free">
                                        <label for="free"> 
                                                <strong>Gratuita 
                                                </strong> 
                                        </label>
                                    </div> 
                                    <div class="conditions-free">
                                        Duración: 30 días. 
                                            Puedes tener sólo una publicación gratuita por vez. 
                                    </div> 
                                </td>
                                <td class="listingtypes-features"> 
                                    <span class="listingtypes-exposition-level free" title="Exposición: Mínima"></span>
                                    <span class="exposition">
                                        Mínima
                                    </span>
                                    
                                </td> 
                                <td class="listingtypes-features"> 
                                    <i class="ch-icon-remove"></i> 
                                </td> 
                                <td class="cost"> 
                                    ¡Gratis!
                                </td>
                            </tr>
                        </tbody>
                        </table>
                            <div class="payment-methods">
                                    Puedes pagar con
                                <ul>
                                    <li class="mp"><img src="https://www.mercadopago.com/org-img/MP3/API/logos/mercadopago.gif" alt="MercadoPago"></li>
                                    <li><img src="https://www.mercadopago.com/org-img/MP3/API/logos/visa.gif" alt="Visa"></li>
                                    <li><img src="https://www.mercadopago.com/org-img/MP3/API/logos/master.gif" alt="Mastercard"></li>
                                    <li><img src="https://www.mercadopago.com/org-img/MP3/API/logos/2017.gif" alt="OXXO"></li> 
                                </ul> 
                                    <a href="#" class="all-methods ch-shownby-pointertap" aria-owns="ch-layer-2" aria-haspopup="true">Más opciones</a>
                                <div class="all-methods-off-payments ch-hide">
                                    <ul style="display: none;">
                                        <li><img src="https://www.mercadopago.com/org-img/MP3/API/logos/visa.gif" alt="Visa"></li>
                                        <li><img src="https://www.mercadopago.com/org-img/MP3/API/logos/amex.gif" alt="American Express"></li>
                                        <li><img src="https://www.mercadopago.com/org-img/MP3/API/logos/master.gif" alt="Mastercard"></li>
                                        <li><img src="https://www.mercadopago.com/org-img/MP3/API/logos/debvisa.gif" alt="Visa Débito"></li>
                                        <li><img src="https://www.mercadopago.com/org-img/MP3/API/logos/debvisa.gif" alt="Visa Débito"></li>
                                        <li><img src="https://www.mercadopago.com/org-img/MP3/API/logos/debmaster.gif" alt="Mastercard Débito"></li>
                                        <li><img src="https://www.mercadopago.com/org-img/MP3/API/logos/debmaster.gif" alt="Mastercard Débito"></li>
                                        <li><img src="https://www.mercadopago.com/org-img/MP3/API/logos/mercadopagocard.gif" alt="Tarjeta MercadoPago"></li>
                                        <li><img src="https://www.mercadopago.com/org-img/MP3/API/logos/2017.gif" alt="OXXO"></li>
                                        <li><img src="https://www.mercadopago.com/org-img/MP3/API/logos/2014.gif" alt="BBVA Bancomer"></li>
                                        <li><img src="https://www.mercadopago.com/org-img/MP3/API/logos/2016.gif" alt="Santander"></li>
                                        <li><img src="https://www.mercadopago.com/org-img/MP3/API/logos/2015.gif" alt="Banamex"></li>
                                    </ul>
                                </div>
                            </div>
                        <input type="hidden" value="3" id="mercadopagoIsOn">
                        <input type="hidden" value="" id="isMktplace">
                        </fieldset>
                        <div id="footer-descripcion" style="margin-left:0px;"> 
                            <input type="submit"  class="btn-azul" name="des-continuar2" id="btn-continuar2" value="Continuar publicación" style="font-size: 18px;padding: 6px 12px;margin-top:0px">
                            <a href="{{ URL::previous() }}" title="">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
    </div> 
</div> 
<footer role="contentinfo" class="nav-footer" style="    margin-top: 5rem;">
    <div class="nav-bounds">
        <div class="nav-footer-info-wrapper">
            <div class="nav-footer-primaryinfo">
                <small class="nav-footer-copyright">Copyright ©&nbsp;1999-2018 DeRemate.com de México S. de R.L. de C.V.</small>
                <nav class="nav-footer-navigation">
                    <a href="http://www.mercadolibre.com/empleos">Trabaja con nosotros</a>
                    <a href="https://www.mercadolibre.com.mx/ayuda/terminos-y-condiciones-uso-del-sitio_2090">Términos y condiciones</a>
                    <a href="https://www.mercadolibre.com.mx/ayuda/Aviso-de-privacidad_1167">Políticas de privacidad</a><a href="https://www.mercadolibre.com.mx/ayuda">Ayuda</a>
                </nav>
            </div>
        </div> 
    </div>
</footer>
@stop


