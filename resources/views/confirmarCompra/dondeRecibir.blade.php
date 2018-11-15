@extends('layouts.masterLogin')

@section('content')
{!! Html::style('css/styleDondeRecibir.css') !!}

<main role="main">
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
															<div class="hero__info" data-js="hero-info">
																<h3 data-id="hero-shipping-title" class="hero__info-title">C.P. </h3>
																<span data-id="hero-shipping-subtitle" class="hero__info-subtitle">
																	.............. .. ........... ............... #0000 ..... .. .................
																</span>
															</div>
															<div class="hero__action" data-js="hero-action">
																<form data-js="show-addresses" method="post">
																	<button data-js="next-step" data-input-id="nextStepAddressChange" class=" hero__action-button u-link" type="submit" name="nextStepAddressChange" value="nextStepAddressChange">
																		Eviar a otra dirección
																	</button>
																</form>
															</div>
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
								<form method="post">
									<input data-js="payment-type" type="hidden" name="paymentMethodId" value="debvisa">	
									<input data-js="payment-type-card-id" type="hidden" name="cardId" value="248131622">
									
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
								<form method="form">									
									<input data-js="payment-type-id" type="hidden" name="paymentMethodId" value="master">	
									<input data-js="payment-type-card-id" type="hidden" name="cardId" value="242584257">
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
								<form method="post">
									<input data-js="payment-type" type="hidden" name="paymentMethodId" value="debvisa">	
									<input data-js="payment-type-card-id" type="hidden" name="cardId" value="248131622">
									
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

		<!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->

<!--////////////////////////////////////////////////////DATOS///////////////////////////////////////////////////////-->
<div id="aside-container"  class="cart-aside">	
	<div class="pintar">
		<div data-component="aside"  >
			<aside class="cart-aside__content cart-aside__content--item cart-aside--fixed" data-aside="target">
				<div class="overview-component__item u-block-center">
					<span class="ui-badge ui-badge--small ui-badge--picture item__image--circular">
						<img src="">
					</span>
					<h3 class="overview-component__item-title">........</h3>
					<span class="overview-component__item-quantity-text">........</span>
				</div>
				<div class="overview__table-container">
					<div class="overview-component__amounts">
						<div class="overview-component__table">
							<div class="overview-component__row">
								<div data-id="overview-items-quantity" class="overview-component__column">Producto</div>
								<dir data-id="overview-items-price" class="overview-component__column">
									<span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
										<meta itemprop="price" content="18999">
										<span class="price-tag-symbol" itemprop="priceCurrency">$</span>
										<span class="price-tag-fraction">0</span>
										<span class="price-tag-decimal-separator"></span>
										<span class="price-tag-cents">00</span>
									</span>
								</dir>
							</div>
							<div class="overview-component__row">
								<div class="overview-component__column">Envío</div>
								<div data-id="overview-shipping-amount" class="overview-component__column">
									<span class="price-free1 u-text--green">Gratis</span>
								</div>
							</div>
						</div>						
					</div>
					<div class="overview-component__total">
						<div class="overview-component__table">
							<div class="overview-component__column">Total:</div>
							<div class="overview-component__column">
								<span class="price-tag" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
										<meta itemprop="price" content="18999">
										<span class="price-tag-symbol price-tag-symbolTotal" itemprop="priceCurrency">$</span>
										<span class="price-tag-fraction price-tag-symbolTotal1">0</span>
										<span class="price-tag-decimal-separator"></span>
										<span class="price-tag-cents1">00</span>
									</span>
							</div>
						</div>
					</div>
				</div>
			</aside>
		</div>
	</div>	
</div>//
<!--////////////////////////////////////////////////////DATOS///////////////////////////////////////////////////////-->

		<!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
	</div>
	<!--/////////////////////////////////////////////PANTALLA COMPLETA/////////////////////////////////////////////-->
</main>
@stop