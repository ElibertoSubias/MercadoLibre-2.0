@extends('layouts.masterLogin')

@section('content')
{!! Html::style('css/styleDondeRecibir.css') !!}

<main role="main" style="background: #eee;">
	<!--/////////////////////////////////////////////PANTALLA COMPLETA/////////////////////////////////////////////-->
	<div class="cart-main-container cart-main-container--aside-present">
		<div id="app-container" class="cart-content">
			<div>
				<div data-component="single-shipping-selection">
					<div class="single-shipping-selection">
						<div data-component="shipping-context">
							<div>
								<div data-component="shipping-context">
									<div class="cart-header shipping-context ">
										<div class="step-title">
											<h2 class="cart-title--primary">¿Dónde quieres recibirlo?</h2>
										</div>
										<div data-id="hero-shipping" class="hero hero-shipping  hero--contained hero--ellipsis">
											<div class="hero__wrapper">
												<div class="hero__table-row">
													<div class="hero__icon" data-js="hero-icon">
														<span class="ui-badge ui-badge--small">
															<svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--map-pin ui-badge__icon ui-badge__icon--medium">
																<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--map-pin">
																	<svg id="ui-icon--map-pin" viewBox="0 0 50 70" width="100%" height="100%">
																		<path d="M25.61 0C11.179 0 0 10.955 0 24.138 0 42.875 25 70 25.61 70 25 70 50 42.875 50 24.138 50 10.955 38.821 0 25.61 0zm0 33.793c-5.659 0-9.756-4.055-9.756-8.448 0-5.6 4.097-9.655 9.756-9.655 4.439 0 8.536 4.055 8.536 9.655 0 4.393-4.097 8.448-8.536 8.448z" fill="#3483FA" fill-rule="evenodd"></path>
																	</svg>
																</use>
															</svg>
														</span>
													</div>
													<div class="hero__main-content" data-js="hero-main-content">
														<div class="hero__main-content-wrapper">
															@foreach($domicilios as $domicilio)
																@if($domicilio->envio==1)
																	<div class="hero__info" data-js="hero-info">
																		<h3 data-id="hero-shipping-title" class="hero__info-title">C.P. {{$domicilio->codigopostal}} </h3>
																		<span data-id="hero-shipping-subtitle" class="hero__info-subtitle">
																			{{$domicilio->calle}} #{{$domicilio->numeroEx}} {{$domicilio->asentamiento}} -{{$domicilio->referencia}} 
																		</span>
																	</div>
																	<div class="hero__action" data-js="hero-action"> 
																			<button data-js="next-step" data-input-id="nextStepAddressChange" class=" hero__action-button u-link" type="button" name="nextStepAddressChange" value="nextStepAddressChange">
																				Eviar a otra dirección
																			</button>
																		</form>
																	</div>
																@endif
															@endforeach 
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="step-title">
							<h2 class="cart-title--primary">¿Que envío prefieres?</h2>
						</div>

				<!--//////////////////////////////////////////////////////////////////////////////////////////////////////-->
				<article data-js="stored-cards" class="ui-list ui-panel--raised" role="list">
					<div data-js="payments-types" data-stored="true">
						<ul class="badge-type-selection__list">
							<!--/////////////////////////////////////////Estandar Domicilio////////////////////////////////////////-->
							<li class="badge-type-selection__list-item ui-list__item">
								<form method="post" action="{{route('pagoPor')}}">  
									<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
									<input type="hidden" name="idPaquete" value="{{$idPaquete}}">
									<input type="hidden" name="precioEnvio" value="0">
									<input type="hidden" name="titulo" value="{{$titulo}}" id="titulo"> 
									<input type="hidden" name="precio" value="{{$precio}}">
									<input type="hidden" name="urlImagen" value="{{$urlImagen}}">

									<button data-js="payment-type" type="submit" name="paymentType" 
									class="badge-type__button u-button-reset" role="option" value="DEBIT_CARD">
																		        
								        <div class="badge-type__metadata">
							                <h2 class="badge-type-selection__list-title">Estandar a domicilio</h2>
							                <p class="badge-type-selection__list-text">Llega entre el .. y .. de ......</p>
								        </div>
										<span class="cart-package__shipping-price">
						                    <span data-id="shipping-option-price-free" class="price-free   u-link">
						                    	Gratis
						                    </span>						                    
								        </span> 
							    	</button> 
								</form>
							</li>							
							<!--/////////////////////////////////////////Estandar Domicilio////////////////////////////////////////-->
							<!--////////////////////////////////////////Express Domicilio//////////////////////////////////////////-->	
							<li class="badge-type-selection__list-item ui-list__item">
								<form method="post" action="{{route('pagoPor')}}"> 	
								<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
									<input type="hidden" name="idPaquete" value="{{$idPaquete}}"> 
									<input type="hidden" name="titulo" value="{{$titulo}}" id="titulo"> 
									<input type="hidden" name="precio" value="{{$precio}}">
									<input type="hidden" name="urlImagen" value="{{$urlImagen}}">	 
									<input type="hidden" name="precioEnvio" value="110"> 

									<button data-js="payment-type" type="submit" name="paymentType" 
									class="badge-type__button u-button-reset" role="option" value="CREDIT_CARD">										
										<div class="badge-type__metadata">
											<h2 class="badge-type-selection__list-title">Express a domicilio</h2>
											<p class="badge-type-selection__list-text">Llega entre el .. y .. de ......</p>											
										</div>
										<span class="cart-package__shipping-price">
						                    <span data-id="shipping-option-price-free" class="price-free   u-link">
						                    	<p><font color="black">$110</font></p>
						                    </span>						                    
								        </span>
									</button> 
								</form>
								
							</li>
							<!--////////////////////////////////////////Express Domicilio//////////////////////////////////////////-->	
							<!--//////////////////////////////////////////Retiro Sucursal//////////////////////////////////////////-->
							<li class="badge-type-selection__list-item ui-list__item">
								<form method="post" action="{{route('pagoPor')}}"> 
									<input type="hidden" name="idPaquete" value="{{$idPaquete}}"> 
									<input type="hidden" name="titulo" value="{{$titulo}}" id="titulo"> 
									<input type="hidden" name="precio" value="{{$precio}}">
									<input type="hidden" name="urlImagen" value="{{$urlImagen}}">	 
									<input type="hidden" name="precioEnvio" value="0"> 

									<button data-js="payment-type" type="submit" name="paymentType" 
									class="badge-type__button u-button-reset" role="option" value="DEBIT_CARD">
																		        
								        <div class="badge-type__metadata">
							                <h2 class="badge-type-selection__list-title">Retiro en una sucursal</h2>
							                <p class="badge-type-selection__list-text">Llega mañana</p>
								        </div>
										<span class="cart-package__shipping-price">
						                    <span data-id="shipping-option-price-free" class="price-free   u-link">
						                    	Gratis
						                    </span>						                    
								        </span>

							    	</button> 
								</form>
							</li>							
							<!--//////////////////////////////////////////Retiro Sucursal//////////////////////////////////////////-->
						</ul>
					</div>
            	</article>
				<!--//////////////////////////////////////////////////////////////////////////////////////////////////////-->

					</div>
				</div>
			</div>
		</div> 

		<!--////////////////////////////////////////////////////DATOS///////////////////////////////////////////////////////-->
<div id="aside-container"  class="cart-aside">	
	<div class="pintar">
		<div data-component="aside"  >
			<aside class="cart-aside__content cart-aside__content--item cart-aside--fixed" data-aside="target">
				<div class="overview-component__item u-block-center">
					<span class="ui-badge ui-badge--small ui-badge--picture item__image--circular">
						<img src="images/{{$urlImagen}}/principal.jpg" style="width: 100%; margin-top: 6px" alt="" title="" > 

					</span>
					<h3 class="overview-component__item-title">{{$titulo}}</h3>
					<span class="overview-component__item-quantity-text" style="color:  blue">Cantidad: 1 </span>
				</div>
				<div class="overview__table-container">
					<div class="overview-component__amounts">
						<div class="overview-component__table">
							<div class="overview-component__row">
								<div data-id="overview-items-quantity" style="text-align: left;" class="overview-component__column">
									Producto
								</div>
								<div data-id="overview-items-price" class="overview-component__column" style="text-align: right;">
									<span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
										<meta itemprop="price" content="18999">
										<span class="price-tag-symbol" itemprop="priceCurrency">$</span>
										<span class="price-tag-fraction">{{$precio}}</span>
										<span class="price-tag-decimal-separator"></span>
										<span class="price-tag-cents">00</span>
									</span>
								</div>
							</div>
							<div class="overview-component__row">
								<div class="overview-component__column" style="    text-align: left;">Envío</div>
								<div data-id="overview-shipping-amount" class="overview-component__column">
									<span class="price-free1 u-text--green" style="margin-right:0px;">Gratis</span>
								</div>
							</div>
						</div>	
						<div class="overview-component__total">
							<div class="overview-component__table">
								<div class="overview-component__column" style="    text-align: left;width: 30%;">Total:</div>
								<div class="overview-component__column">
									<span class="price-tag" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
											<meta itemprop="price" content="18999"> 
											<span class="price-tag-fraction ">${{$precio}}</span> 
											<span class="price-tag-cents">00</span>
										</span>
								</div>
							</div>
						</div>					
					</div> 
				</div>
			</aside>
		</div>
	</div>	
</div>
<!-- Modal -->
  <div class="modal fade in" id="modalDirecciones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 46%;height: auto;">
      <div class="modal-content" style="margin: auto;">
        <div class="modal-header" style="border-bottom: 0px;padding-bottom:0px;">
          <div class="col-md-6">
          	<h1 style="font-size: 25px;padding: 20px;text-align: left;" class="modal-title"><b>Mis direcciones</b></h1>	
          </div>
          <div class="col-md-6" style="padding: 5%;">
          	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
        </div>
        <div class="modal-body" style="border-bottom: 0px;padding: 0px 50px 30px;padding: 0px;">
            <div>
            	<section class="ui-list ui-list--modal addresses-selection" data-component="address-selection">
					<div data-component="address-list">
						<ul class="ui-list__content">
							@foreach($domicilios as $domicilio)
								<li class="ui-list__item ui-list__item--action">	
									<form data-id="address-169359984" action="{{route('cambiardireccion')}}" data-state="selected" data-js="address-form" class="address-box" method="post">
										<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                            			<input type="hidden" name="id" id="id" value="{{$domicilio->_id}}">
                            		    <input type="hidden" name="idPaquete" value="{{$idPaquete}}">
									    <input type="hidden" name="titulo" value="{{$titulo}}" id="titulo"> 
										<input type="hidden" name="precio" value="{{$precio}}">
										<input type="hidden" name="urlImagen" value="{{$urlImagen}}">
						    			<button value="169359984"  data-input-id="addressId" name="addressId" type="submit" role="option" class="ui-list__item-option <?php if($domicilio->envio==1){echo "ui-list__item--selected";} ?> ">
						        		<div class="address-box__address">
								            <span class="address-box__address__zip-code">
								                {{$domicilio->codigopostal}}
								            </span>
							                <p class="address-box__address-info">
							                    {{$domicilio->calle}} {{$domicilio->numEx}} {{$domicilio->numInt}} - {{$domicilio->entrecalles}} - {{$domicilio->referencia}}
							                </p>
							        	</div>
							    		</button>
									</form>
								</li>
							@endforeach 
						</ul>
					</div>
				</section>
            </div>
        </div>
        <div class="modal-footer" style="text-align: left;    padding: 30px;">
      		<div><div class="modal-footer-action addresses-actions" data-component="addresses-actions">
      			<a style="color: #3483fa;font-size:18px;    margin-left: 15px;font-weight: 400;" href="{{route('agregarDomicilio')}}" title="">Agregar nueva dirección</a> 
			</div>
			</div>
      	</div> 
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!--////////////////////////////////////////////////////DATOS///////////////////////////////////////////////////////-->
 
	</div>
	<!--/////////////////////////////////////////////PANTALLA COMPLETA/////////////////////////////////////////////-->
</main>
@stop