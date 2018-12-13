@extends('layouts.master')
@section('titulo')
	<title>Mensajes - MercadoLibre</title>	
	<link href="css/mensajes/messaging.267b838b.css" rel="stylesheet" type="text/css">
@stop
@section('content') 
<main role="main" id="root-app">
	<div data-reactroot="">
		<div class="messaging">
			<div class="container" style="padding: 0px;margin: auto;width: 95%;">
				<div class="messaging-content">
					<div class="messaging-content__main">
						<div>
							<div class="cancel-breadcrumb">
								<ul class="andes-breadcrumb">
									<li class="andes-breadcrumb__item">
										<a class="andes-breadcrumb__link" href="{{route('historialComp')}}">Compras</a>
										<div class="andes-breadcrumb__chevron">
											<svg xmlns="http://www.w3.org/2000/svg" width="6" height="8">
												<path fill="none" stroke="#666" d="M1 0l4 4-4 4"></path>
											</svg>
										</div>
									</li>
									<li class="andes-breadcrumb__item">  
										<form class="andes-breadcrumb__link" action="{{route('detalleCompra')}}" method="post" accept-charset="utf-8">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                                    
                                                    <input type="hidden" name="codigoCompra" value="{{$datosCompra->codigoCompra}}">
                                                    
                                                      <button type="submit" style="background: none;border: none;float: none;" data-input-id="go_to_order" class="andes-breadcrumb__link">
                                                            Detalle de la compra
                                                        </button>
                                       </form> 
										<div class="andes-breadcrumb__chevron">
											<svg xmlns="http://www.w3.org/2000/svg" width="6" height="8">
												<path fill="none" stroke="#666" d="M1 0l4 4-4 4"></path>
											</svg>
										</div>
									</li>
									<li class="andes-breadcrumb__item">
										<span class="andes-breadcrumb__label">
											<?php
												$fechaCompra = $datosCompra->created_at;
												$newDate = date("d/M/Y h:m", strtotime($fechaCompra)); 
											?>
											Mensajes de la compra #{{$datosCompra->codigoCompra}} - {{$newDate}}
										</span>
									</li>
								</ul>
							</div>
							<div class="messaging-alerts"></div>  
						</div>
						<div class="sc-messaging"><div class="sc-messaging-resource">
							<div class="sc-messaging-resource__link">
								<img src="images/{{$datosVendedor->_id}}/{{$datosArticulo->idPublicacion}}/{{$datosArticulo->urlPrincipal}}" alt="#" class="sc-messaging-resource__link-img">
								<span class="sc-messaging-resource__link-txt">
									{{$datosArticulo->titulo}}
								</span>
							</div>
						</div>
					<div>
					<div class="sc-messaging-messages" id="cont_scroll"><div class="sc-messages">
						<?php 
							setlocale(LC_ALL,"es_ES"); 
						?>
					@isset($msjs)
						@foreach ($msjs as $msj)
						@if($msj['idEmisor']==auth()->user()->_id)
						<div>      
							<?php   
								//Incrementando 2 dias
								$mod_date = strtotime($msj['created_at']); 
								$dia = date("d",$mod_date);	
								$mes = strftime("%B");
								$tiempo = date("H:i",strtotime($msj['created_at']));  
							 ?>
							 @isset($anterior)
							 	@if($newDate==$anterior)
							 	@else
							 		<div class="message-date">{{$dia}} de {{$mes}}</div>
							 	@endif
							 @endisset
							 @empty($anterior)
							 	<div class="message-date">{{$dia}} de {{$mes}}</div>
							 @endempty
							<?php $anterior = $newDate; ?>
							<div class="message-line"><div class="message-line__message">
								<div class="message-line__message-box message-line__message--sender">
									<strong class="title"></strong>
									<div class="text">{{$msj['cuerpoMsj']}}</div>
									<div class="time">
										<span class="time__tick time__tick--read">
											<svg xmlns="http://www.w3.org/2000/svg" width="13" height="11" viewBox="0 0 24 14">
												<g fill="none" fill-rule="evenodd">
													<path fill="#3483FA" fill-rule="nonzero" d="M18.188 1.453L11.625 7.97l-1.453-1.453L16.734 0l1.453 1.453h.001zM22.547 0L24 1.453 11.625 13.781 5.906 8.016l1.407-1.454 4.312 4.266L22.547 0zM0 8.016l1.5-1.454 5.719 5.766-1.453 1.453L0 8.016z" opacity=".805"></path>
													<path d="M0-6h24v24H0z"></path>
												</g>
											</svg>
											</span>
											<span class="time__timestamp">{{$tiempo}}</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						@else
						<div>
							<?php   
								//Incrementando 2 dias
								$mod_date = strtotime($msj['created_at']); 
								$dia = date("d",$mod_date);	
								$mes = strftime("%B");
								$tiempo = date("H:i",strtotime($msj['created_at']));  
							 ?>
							 @isset($anterior)
							 	@if($newDate==$anterior)
							 	@else
							 		<div class="message-date">{{$dia}} de {{$mes}}</div>
							 	@endif
							 @endisset
							 @empty($anterior)
							 	<div class="message-date">{{$dia}} de {{$mes}}</div>
							 @endempty
							<?php $anterior = $newDate; ?> 
							<div class="message-line">
								<div class="message-line__message">
									<div class="message-line__message-box message-line__message--receiver message-line__message--orders">
										@if($datosVendedor->_id==auth()->user()->_id)
											<strong class="name">{{$nomComprador}}</strong>
										@else
											<strong class="name">{{$msj['nomVendedor']}}</strong>
										@endif 
										<strong class="title"></strong>
										<div class="text">{{$msj['cuerpoMsj']}}</div>
										<div class="time">
											<span class="time__timestamp">{{$tiempo}}</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endif
						@endforeach 
					@endif
					</div>
				</div>
				<div id="base_pie"></div>
				<div class="sc-messaging-controls">
					<form action="{{route('enviarMjs')}}" method="post" accept-charset="utf-8"> 
						<div class="controls">
							<div class="controls__contentupload">
								<div class="contentupload">
									<div class="messagewrapper">
										<div class="messagewrapper__text">
											<textarea onkeyup="validarCampoMsj(this.id)" name="msjCuerpo" id="msjCuerpo" class="messagewrapper__text-write" placeholder="Escribí tu mensaje a Felipe" style="height: 17px;    box-sizing: unset;border-radius:0px;box-shadow: none;    font: -webkit-pictograph;margin:0px;font: 400 13.3333px Arial;	    font-style: normal;font-variant-ligatures: normal;font-variant-caps: normal;font-variant-numeric: normal;font-variant-east-asian: normal;font-weight: 400;font-stretch: normal;font-size: 13.3333px;line-height: normal;font-family: Arial;" required></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="controls__actions">
								<div class="actions">
									<div class="actions__send">
										<!-- <button type="button" class="andes-button andes-button--filled actions__send-btn andes-button--small andes-button--disabled" disabled=""> -->
											<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
											<input type="hidden" name="idCompra" value="{{$datosCompra->_id}}">
											<button type="submit" class="andes-button andes-button--filled actions__send-btn andes-button--small" disabled="">
											<span class="andes-button__content">Enviar</span>
										</button>
									</div>
									<div class="actions__attach">
										<div class="sc-messaging-attachment">
											<div class="sc-messaging-attachment__input attachment">
												<div class="attachment__drop" aria-disabled="false" style="position: relative;">
													<input type="file" accept="application/xml,text/xml,image/png,image/jpeg,application/pdf,text/plain,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel" multiple="" autocomplete="off" style="position: absolute; top: 0px; right: 0px; bottom: 0px; left: 0px; opacity: 1e-05; pointer-events: none;">
												</div>
												<button class="attachment__action" type="button">
													<svg class="attachment__action-icon" xmlns="http://www.w3.org/2000/svg" width="19" height="21" viewBox="0 0 19 21">
														<path fill="#666" fill-rule="nonzero" d="M17.232 19.662a3.75 3.75 0 0 1-5.294-.185L1.512 8.297a4.783 4.783 0 0 1 .236-6.752A4.783 4.783 0 0 1 8.5 1.78l7.45 7.584-.95.887-7.451-7.585a3.482 3.482 0 0 0-4.915-.172 3.481 3.481 0 0 0-.171 4.915l10.426 11.18c.92.987 2.47 1.041 3.456.123.987-.92 1.04-2.47.12-3.457L8.5 7a1.416 1.416 0 0 0-1.998-.07c-.57.53-.394 1.446-.326 1.522 1.249 1.401 2.961 3.231 5.138 5.491l-.951.887a1123.34 1123.34 0 0 1-5.041-5.204 2.718 2.718 0 0 1 .295-3.647 2.717 2.717 0 0 1 3.835.133l7.965 8.256a3.75 3.75 0 0 1-.185 5.294z"></path>
													</svg>
												</button>
											</div>
										</div>
									</div>
									<div class="actions__menu">
										<div class="sc-messaging-menu">
											<button class="sc-messages-menu sc-messages-menu-button-circle sc-messages-menu-button-circle" type="button">
												<svg class="sc-messages-menu__dots" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 35">
													<g fill="#333" fill-rule="evenodd">
														<path d="M4 7.838c2.21 0 4-1.754 4-3.919C8 1.755 6.21 0 4 0S0 1.755 0 3.92c0 2.164 1.79 3.918 4 3.918z"></path>
														<ellipse cx="4" cy="17.458" rx="4" ry="3.919"></ellipse>
														<ellipse cx="4" cy="30.998" rx="4" ry="3.919"></ellipse>
													</g>
												</svg>
											</button>
											<ul class="menu-items">
												<li class="menu-items-item">
													<a href="https://myaccount.mercadolibre.com.mx/messaging/orders/1792854722/v2" class="menu-items-item--action">
														<span class="menu-items-item--action-text">Bloquear mensajes</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="messaging-sidebar">
	<div class="messaging-sidebar__main">
		<div class="messaging-user">
			<ul class="messaging-user__items">
				<li class="messaging-user__items-item">
					@if($datosVendedor->_id==auth()->user()->_id)
						{{$nomComprador}}
					@else
						{{$datosVendedor->nombre}} {{$datosVendedor->apellido}}
					@endif
				</li>
				<li class="messaging-user__items-item">
					<a class="link" href="#">VENTASIG (1525 puntos)</a>
				</li>
				<li class="messaging-user__items-item">{{$datosCompra->codigoCompra}}<!-- --> </li>
			</ul>
		</div>
		<div class="messaging-item-order">
			<div class="messaging-order">
				<div class="messaging-order-title title">
					@if($datosVendedor->_id==auth()->user()->_id)
						<h3 class="title-msg">Vendiste</h3>
					@else
						<h3 class="title-msg">Compraste</h3>
					@endif
				</div>
				<?php
					
					$fechaCompra = $datosCompra->created_at;
					$newDate = date("d-m-Y", strtotime($fechaCompra)); 
					//Incrementando 2 dias
					$mod_date = strtotime($newDate."+ 2 days");

					$dia = date("d",$mod_date);	
					$mes = strftime("%B");
				?>
				<h2 class="messaging-order__status messaging-order__status--info">Entregado</h2>
				<p class="messaging-order__subtitle">Llegó el {{$dia}} de {{$mes}}.</p>
			</div>
			<div class="messaging-items">
				<div class="messaging-item"><div class="messaging-item_image">
					<a target="_blank">
						<img src="images/{{$datosVendedor->_id}}/{{$datosArticulo->idPublicacion}}/{{$datosArticulo->urlPrincipal}}" alt="" width="70" height="70">
					</a>
				</div>
				<div class="messaging-item_info">
					<div class="messaging-item_info-dots">
						<a>{{$datosArticulo->titulo}} Envio Gratis</a>
						<!--<span>Color PLATA</span>-->
						<span>$ {{$datosCompra->precio}}.00 x {{$datosCompra->cantidad}} unidad<?php ($datosCompra->cantidad>1)?'es':''?></span>
					</div>
				</div>
				<div class="messaging-item_menu">
					<div class="pack-menu">
						<div class="ui-menu-wrapper ui-menu-wrapper--position-lt">
							<a class="ui-menu-icon">
								<svg class="ui-icon ui-icon--menu" width="8" height="35" viewBox="0 0 8 35" xmlns="http://www.w3.org/2000/svg">
									<g fill="#CCC" fill-rule="evenodd">
										<path d="M4 7.838c2.21 0 4-1.754 4-3.919C8 1.755 6.21 0 4 0S0 1.755 0 3.92c0 2.164 1.79 3.918 4 3.918z"></path>
										<ellipse cx="4" cy="17.458" rx="4" ry="3.919">
											
										</ellipse>
										<ellipse cx="4" cy="30.998" rx="4" ry="3.919"></ellipse>
									</g>
								</svg>
							</a>
							<div class="ui-menu ui-menu--invisible">
								<li>
									<a href="http://ayuda.mercadolibre.com.mx/ayuda/purchases/options?order=1792854722" class="ui-menu__option" target="_self">Necesito ayuda</a>
								</li>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pack-actions">
				
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</main>
{!! Html::script('js/jquery-3.3.1.min.js') !!}  
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/cargaMensajes.js') !!} 
{!! Html::script('js/validaciones.js') !!} 
@stop