@extends('layouts.masterRegistro')

@section('content')   
{!! Html::style('css/vehiStyle.css') !!}
<div style="margin: 30px auto 20px;max-width: 1220px;background-color: #fff;
    border: 1px solid #e2e2e2;
    border-radius: 5px; ">

    <div>
    	<ol class="syi-ui-wizard__breadcrumb syi-ui-wizard__step--4" data-reactid="7" style="display: block;list-style: none;    overflow: hidden;padding: 0;margin: 0 0 30px;">
    		<li class="syi-ui-wizard__step syi-ui-wizard__step--current" data-reactid="8"><span data-reactid="9" style="font-weight: 700;
    	color: #333;">Elige qué quieres publicar</span></li>
    		<li class="syi-ui-wizard__step" data-reactid="10"><span data-reactid="11">Describe tu producto</span></li>
    		<li class="syi-ui-wizard__step" data-reactid="12"><span data-reactid="13">Ingresa precio y cantidad</span></li>
    		<li class="syi-ui-wizard__step" data-reactid="14"><span data-reactid="15">Confirma tu publicación</span></li>
    	</ol>
    </div> 
    <div>
        <nav class="hub-nav" style="border-collapse: separate;border-spacing: 1em;margin: 45px;
    overflow: auto;">
    @if($tipoCategoria!="") 
        @if($tipoCategoria=="VEHI")
                <div class="col-md-12">
                    <a href="{{route('vender')}}" style="display: block;float: left;"> < volver atras</a><br>
                </div>
                <div class="col-md-3 hub-card syi-hub__image--mot" style="cursor: auto !important;">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                            <span class="hub-car-titulo" data-reactid="20">Vehículos</span>
                            <span class="syi-hub__image syi-hub__image--mot" data-reactid="21"> </span></button> 
                   
                </div> 
                <div class="col-md-9">
                    <form id="frmCategoria" name="frmCategoria" action="{{route('descripcion')}}" method="post">
                        <input type="hidden" name="tipoVenta" id="tipoVenta" value="{{$tipoCategoria}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                        <div class="col-md-12 testimonial-group" id="cont-scroller">
                          <div class="row text-center" >
                            <div class="col-xs-4">
                                <div id="cont-categorias" class="category-column">
                                    <input type="text" name="tipo" id="tipo" value="vehiculos" hidden>
                                    <select name="categoria" id="categoria" size="15" style="height:260px;font-size: 14px"> 
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div id="cont-categorias" class="category-column menu-marcas" hidden>
                                    <select name="car-marca" id="car-marca" size="15" style="height:260px;font-size: 14px"> 
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-4" style="display:none;">
                                <div id="cont-categorias" class="category-column menu-modelo" hidden>
                                    <select name="car-modelo" id="car-modelo" size="15" style="height:260px;font-size: 14px"> 
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-4" style="display:none;">
                                <div id="cont-categorias" class="category-column menu-anio" hidden>
                                    <select name="car-anio" id="car-anio" size="15" style="height:260px;font-size: 14px"> 
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div id="cont-categorias" class="category-column menu-publicar" hidden>
                                    <img src="/MercadoLibre-2.0/public/img/ok.png" alt="publicar" style="width: 80px;height: 80px;display: -webkit-box;margin: 30px 80px 0px 80px;">
                                    <p>¡Listo!</p>
                                    <button type="submit" id="btn-continuar" class="btn-azul">Continuar</button>
                                </div>
                            </div>
                          </div>
                        </div>
                    </form>
                </div>
        @elseif($tipoCategoria=="INMU") 
                <ol id="ruta_venta" style="text-decoration: none;list-style: none;    text-align: left;margin: 0px;padding: 0px;margin-left: 15px;"> 
                    <li>Inmuebles</li>
                </ol>
                <div class="col-md-3 hub-card syi-hub__image--res" style="cursor: auto !important;height:300px !important;">
                        <span class="hub-car-titulo" data-reactid="24">Inmuebles</span>
                        <span class="syi-hub__image syi-hub__image--res" data-reactid="25"> </span>
                </div> 
                <form id="frmCategoria" name="frmCategoria" action="{{route('descripcion')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                    <input type="hidden" name="tipoVenta" id="tipoVenta" value="INMU">
                    <div class="wrapper">
                        <div class="scrooller">
                            <div id="cont-categorias" class="category-column">
                                <input type="text" name="tipo" id="tipo" value="vehiculos" hidden>
                                <select name="categoria" id="categoria" size="15" style="height:260px;font-size: 14px"> 
                                </select>
                            </div>
                            <div id="cont-categorias" class="category-column menu-marcas">
                                <select name="car-marca" id="car-marca" size="15" style="height:260px;font-size: 14px"> 
                                </select>
                            </div>
                            <div id="cont-categorias" class="category-column menu-publicar">
                                <img src="/MercadoLibre-2.0/public/img/ok.png" alt="publicar" style="width: 80px;height: 80px;display: -webkit-box;margin: 30px 80px 0px 80px;">
                                <p>¡Listo!</p>
                                <button type="submit" id="btn-continuar" class="btn-azul">Continuar</button>
                            </div>
                        </div>
                    </div> 
                </form>
        @elseif($tipoCategoria=="SERV") 
                <ol id="ruta_venta" style="text-decoration: none;list-style: none;    text-align: left;margin: 0px;padding: 0px;margin-left: 15px;"> 
                    <li>Servicios</li>
                </ol>
                <div class="col-md-3 hub-card syi-hub__image--srv" style="cursor: auto !important;height:300px !important;">
                        <span class="hub-car-titulo" data-reactid="28">Servicios</span>
                        <span class="syi-hub__image syi-hub__image--srv"> </span>
                </div>
                <form id="frmCategoria" name="frmCategoria" action="{{route('descripcion')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                    <input type="hidden" name="tipoCategoria" id="tipoCategoria" value="SERV">
                    <div class="wrapper">
                        <div class="scrooller">
                            <div id="cont-categorias" class="category-column">
                                <input type="text" name="tipo" id="tipo" value="vehiculos" hidden>
                                <select name="categoria" id="categoria" size="15" style="height:260px;font-size: 14px"> 
                                </select>
                            </div>
                            <div id="cont-categorias" class="category-column menu-marcas">
                                <select name="car-marca" id="car-marca" size="15" style="height:260px;font-size: 14px"> 
                                </select>
                            </div>
                            <div id="cont-categorias" class="category-column menu-publicar">
                                <img src="/MercadoLibre-2.0/public/img/ok.png" alt="publicar" style="width: 80px;height: 80px;display: -webkit-box;margin: 30px 80px 0px 80px;">
                                <p>¡Listo!</p>
                                <button type="submit" id="btn-continuar" class="btn-azul">Continuar</button>
                            </div>
                        </div>
                    </div> 
                </form>
        @endif
            
        </nav>
    @endif
    </div>

   <p class="syi-terms-conditions" data-reactid="39">Asegúrate de que tu publicación cumpla con las <a href="https://ayuda.mercadolibre.com.mx/ayuda/Politicas-de-Publicacion_1011" target="_blank">Políticas de Mercado Libre</a>.</p> 
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
{!! Html::script('js/venderJS.js') !!}  
@stop