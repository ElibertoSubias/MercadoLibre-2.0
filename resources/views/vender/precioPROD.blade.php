

@extends('layouts.masterRegistro')

@section('content')  
{!! Html::style('css/descripStyle.css') !!}  
<div style="margin: 30px auto 20px;max-width: 1220px;background-color: #fff;border: 1px solid #e2e2e2;border-radius: 5px;height:auto;display: inline-block;width: 100%;">
    <div style="" class="cont-ruta" style="width: 100%z">
        <ol class="syi-ui-wizard__breadcrumb syi-ui-wizard__step--4" data-reactid="7" style="display: block;list-style: none;    overflow: hidden;padding: 0;margin: 0 0 30px;">
            <li class="syi-ui-wizard__step syi-ui-wizard__step--current" data-reactid="8" style="background: #F0F0F0;"><span data-reactid="9"><a href="{{ route('categorias') }}" style="background: #F0F0F0;">Elige qué quieres publicar</a></span></li>
            <li class="syi-ui-wizard__step" data-reactid="10" style="background: #F0F0F0;"><span data-reactid="11"><a href="{{route('backdescripcion')}}" title="">Describe tu producto</a></span></li>
            <li class="syi-ui-wizard__step" data-reactid="12"><span data-reactid="13" style="font-weight: 700;color: #333;border-bottom: 0;">Ingrese un precio</span></li>
            <li class="syi-ui-wizard__step" data-reactid="14"><span data-reactid="15">Confirma tu publicación</span></li>
        </ol>
    </div>
    <div style="position: relative;">
            <div style="width: 100%;height: 100%;text-align: left;margin:20px;">
                <form method="post" id="form_precio" action="{{route('confirmarventa')}}"> 
                {{ csrf_field() }}
                    <div class="row col-md-12" style="text-align: left;">
                        <fieldset id="upload_form">
                            <legend>Tipo y condiciones de venta</legend>
                            <span class="ch-form-hint">*Datos obligatorios</span>
                            <div class="ui-form-row syi-buying-mode__container" data-reactid="25">
                            	<label class="syi-buying-mode__label" data-reactid="26"><!-- react-text: 27 -->Tipo de venta<!-- /react-text --><!-- react-text: 28 -->: <!-- /react-text -->
                            		<em data-reactid="29">*</em>
                            	</label>
                            	<ul class="syi-buying-mode-option" data-reactid="30">
                            		<li style="    display: block;
    float: left;
    margin-right: 5%;" class="ui-form-row syi-buying-mode-option" data-reactid="31">
                            			<input type="radio" name="list-0.item.buying_mode" id="buy_it_now" value="buy_it_now" data-reactid="32" checked="">
                            			<span data-reactid="33">
                            				<label for="buy_it_now" class="syi-buying-mode-option__label" data-reactid="34">
                            					<span data-reactid="35">Precio fijo</span>
                            				</label>
                            				<span class="ui-form-hint syi-buying-mode__text" data-reactid="36">Eliges el precio al que quieres vender tu producto.</span>
                            			</span>
                            		</li>
                            		<li style="    display: block;
    float: left; " class="ui-form-row syi-buying-mode-option" data-reactid="37">
                            			<input type="radio" name="list-0.item.buying_mode" id="auction" value="auction" data-reactid="38">
                            			<span data-reactid="39">
                            				<label for="auction" class="syi-buying-mode-option__label" data-reactid="40">
                            					<span data-reactid="41">Subasta</span>
                            				</label>
                            				<span class="ui-form-hint syi-buying-mode__text" data-reactid="42">Ingresas el precio inicial a partir del que quieres comenzar a recibir ofertas.</span>
                            			</span>
                            		</li>
                            	</ul>
                            </div>
                            <div class="col-md-12" style="padding-left: 6%;padding-top: 1%;">
                                <div class="ui-form-row" data-reactid="43" style="margin-bottom: 2%;">
                                	<span data-reactid="44">
                                		<label class="syi-quantity__label u--bold" data-reactid="45">Cantidad:<em>*</em>
                                		</label>
                                		<input style="width: 5%;" type="text" data-hj-whitelist="true" label="Cantidad:<em>*</em>" required="" value="1" maxlength="5" class="syi-quantity__field" id="list-0.item.available_quantity" name="list-0.item.available_quantity" data-reactid="46">
                                	</span>
                                </div>
                                <div class="col-md-4">
                                    <label class="font-min">Precio:*</label>
                                    <select name="moneda" id="moneda">
                                        <option value="pesos">$&nbsp;&nbsp;&nbsp;</option>
                                        <option value="dolares">U$S</option> 
                                    </select>
                                    <input type="number" name="precio" id="precio" style="position: absolute;margin-top: -2%;margin-left: 1%;
    width: 40%;">
                                </div>
                            </div>

                        </fieldset> 
                        <fieldset class="syi-fieldset" id="list-0.item.shippingFieldset" data-reactid="61"><legend class="syi-fieldset__legend" data-reactid="62">Formas de entrega</legend><div class="syi-shipping__method syi-shipping" data-reactid="67"><div data-reactid="68"><fieldset class="ui-form-row syi-shipping__box syi-shipping-fieldset-checked"><svg class="ui-icon syi-shipping__icon--checked" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"><path fill="#487210" d="M0 12.555c0-0.349 0.12-0.638 0.359-0.867l2.719-2.734c0.24-0.24 0.534-0.357 0.883-0.352s0.638 0.122 0.867 0.352l5.703 5.703c0.24 0.24 0.534 0.359 0.883 0.359s0.638-0.12 0.867-0.359l11.656-11.641c0.24-0.24 0.534-0.359 0.883-0.359s0.643 0.12 0.883 0.359l2.719 2.719c0.24 0.24 0.357 0.534 0.352 0.883s-0.122 0.638-0.352 0.867l-14.219 14.219c-0.24 0.24-0.565 0.443-0.977 0.609s-0.789 0.25-1.133 0.25h-1.375c-0.365 0-0.755-0.086-1.172-0.258s-0.74-0.372-0.969-0.602l-8.219-8.266c-0.24-0.24-0.359-0.534-0.359-0.883z"></path></svg><legend class="syi-shipping__legend syi-shipping__legend--checked"><span>Ofrecerás Mercado Envíos</span><!-- react-empty: 100 --></legend><div class="ui-form-row syi-shipping__option"><input type="radio" id="me2_buyer" name="list-0.item.shipping.free_methods" value="[]"><label for="me2_buyer"><span>Envío a cargo del comprador</span><!-- react-text: 105 --><!-- /react-text --></label></div><div><div class="ui-form-row syi-shipping__option"><input type="radio" id="free_shipping_501245_country" name="list-0.item.shipping.free_methods" value="[{&quot;id&quot;:501245,&quot;rule&quot;:{&quot;free_mode&quot;:&quot;country&quot;,&quot;value&quot;:null,&quot;free_shipping_flag&quot;:true,&quot;default&quot;:true}}]"><label for="free_shipping_501245_country"><span></span><span><span class="syi-shipping__free--text">Envío gratis. </span><span><span>Pagarás <span class="syi-shipping-price">$ 105 <sup> 00 </sup></span> por envío.</span></span></span></label></div></div></fieldset></div><!-- react-empty: 69 --></div></fieldset>
                        <fieldset class="syi-fieldset" data-reactid="70"><legend class="syi-fieldset__legend" data-reactid="71">Garantía</legend><ul class="ui-form-options ui-box-list syi-warranty" data-reactid="72"><li class="ui-form-row " data-reactid="73"><span data-reactid="74"><input type="radio" data-hj-whitelist="true" value="" maxlength="80" class="" id="warranty-0" name="list-0.item.warranty" data-reactid="75"></span><label for="warranty-0" class="ui-form-options__label" data-reactid="76">Con garantía</label></li><li class="ui-form-row " data-reactid="77"><span data-reactid="78"><input type="radio" data-hj-whitelist="true" value="" maxlength="80" class="" id="warranty-1" name="list-0.item.warranty" data-reactid="79" checked=""></span><label for="warranty-1" class="ui-form-options__label" data-reactid="80">Sin garantía</label></li></ul></fieldset>                   
                    </div>     
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

                    <div class="row col-md-12" id="footer-descripcion"> 
                        <input type="submit"  class="btn-azul" name="btnContinuarPrecio" id="btnContinuarPrecio" value="Continuar" style="font-size: 18px;padding: 6px 12px;margin-top:0px">
                        <a href="{{ URL::previous() }}" title="">Volver</a>
                    </div>
                </form>
            </div>
    </div> 
</div> 
 <!-- Modal -->
  <div class="modal fade in" id="modalMsjPago" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 46%;height: auto;">
      <div class="modal-content" style="margin: 30% auto;">
        <div class="modal-header" style="border-bottom: 0px;padding-bottom:0px;">
          <img src="../img/reservation-icon_medium.png" alt="">
          <h1 style="font-size: 20px;padding: 20px;" class="modal-title"><b>Te lo pueden apartar por $ 1500</b></h1>
        </div>
        <div class="modal-body" style="border-bottom: 0px;padding: 0px 50px 30px;">
            <p>Te pagan una parte del precio y acuerdas el resto del pago. Cuando el comprador nos confirme la entrega, tendrás el dinero disponible en tu <a href="#">cuenta de Mercado Pago</a>.</p>

            <p style="margin:15px 0 20px;">Es sin costo y <b>cada apartado exitoso te posiciona mejor en los listados</b>.</p>

            <input type="submit"  class="btn-azul" name="btnEntendi" id="btnEntendi" value="Entendí" style="font-size: 18px;padding: 6px 12px;margin-top:0px">
        </div> 
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

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