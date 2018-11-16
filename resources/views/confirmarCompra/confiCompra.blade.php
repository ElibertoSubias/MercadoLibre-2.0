@extends('layouts.masterLogin')

@section('content')
{!! Html::style('css/styleConfiCompra.css') !!}

<main role="main">
	<div class="cart-main-container cart-main-container--aside-present">
		<!--////////////////////////////////////////////=LADO IZQUIERDO=///////////////////////////////////////////-->
		<div id="app-container" class="cart-content">
			<section class="review">
				<article class="review" data-component="review">
					<div class="review-header">
						<header class="cart-header">
							<div class="step-title   ">
								<h2 class="cart-title--primary ">Revisa y confirma tú compra</h2>
							</div>
						</header>
					</div>
					<div class="review-content">
						<div class="review-content__shipping">
							<h3 class="block-title">Detalle del envío</h3>
							<!--///////////////////////////////////////////////=C.P.=/////////////////////////////////////////////-->
							<div data-id="hero-address" class="hero hero-address  ">
								<div class="hero__wrapper">
									<div class="hero__table-row">
										<div class="hero__icon" data-js="hero-icon">
											<span class="ui-badge ui-badge--small ">
												<svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--map-pin ui-badge__icon ui-badge__icon--medium">
													<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--map-pin">
														<svg id="ui-icon--map-pin" viewBox="0 0 50 70" width="100%" height="100%">
															<path d="M25.61 0C11.179 0 0 10.955 0 24.138 0 42.875 25 70 25.61 70 25 70 50 42.875 50 24.138 50 10.955 38.821 0 25.61 0zm0 33.793c-5.659 0-9.756-4.055-9.756-8.448 0-5.6 4.097-9.655 9.756-9.655 4.439 0 8.536 4.055 8.536 9.655 0 4.393-4.097 8.448-8.536 8.448z" fill="#3483FA" fill-rule="evenodd">																
															</path>
														</svg>
													</use>
												</svg>
											</span>
										</div>
										<div class="hero__main-content" data-js="hero-main-content">
											<div class="hero__main-content-wrapper">
												<div class="hero__info" data-js="hero-info">
													<h3 data-id="hero-address-title" class="hero__info-title">C.P. 00000</h3>
													<span data-id="hero-address-subtitle" class="hero__info-subtitle ">
														........... ..... .. ........... ........... ........ ......................
													</span>
												</div>
												<div class="hero__action" data-js="hero-action">
													<form data-js="change-address" method="post">
														<button data-js="next-step" data-input-id="nextStepAddressChange" class=" hero__action-button u-link" type="submit" name="nextStepAddressChange" value="nextStepAddressChange">
															Enviar a otra dirección
														</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--///////////////////////////////////////////////=C.P.=/////////////////////////////////////////////-->
							<!--//////////////////////////////////////////////////=Llegada=//////////////////////////////////////-->
							<div data-id="hero-shipping" class="hero hero-shipping  ">
								<div class="hero__wrapper">
									<div class="hero__table-row">
										<div class="hero__icon" data-js="hero-icon">
											<span class="ui-badge ui-badge--small ">
												<svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--shipping-default ui-badge__icon ui-badge__icon--medium">
													<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--shipping-default">
														<svg id="ui-icon--shipping-default" viewBox="0 0 46 34" width="100%" height="100%">
															<path d="M33 6h7l6 7v15h-4a6 6 0 1 1-12 0H16a6 6 0 1 1-12 0H0V3.997A4.002 4.002 0 0 1 3.997 0H33v6zm3 25a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-26 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM33 9v7h10v-1l-5-6h-5z" fill="#3483FA" fill-rule="evenodd"></path>
														</svg>
													</use>
												</svg>
											</span>
										</div>
										<div class="hero__main-content" data-js="hero-main-content">
											<div class="hero__main-content-wrapper">
												<div class="hero__info" data-js="hero-info">
													<h3 data-id="hero-shipping-title" class="hero__info-title">Llega entre .. y ..  de .............</h3>
													<span data-id="hero-shipping-subtitle" class="hero__info-subtitle ">Estándar a domicilio</span>
												</div>
												<div class="hero__action" data-js="hero-action">
													<form data-js="change-shipping" method="post">
														<button data-js="next-step-shipping-options" data-input-id="nextStepAddressChange" class=" hero__action-button u-link" type="submit" name="nextStepAddressChange" value="nextStepAddressChange">
															Modificar
														</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--//////////////////////////////////////////////////=Llegada=//////////////////////////////////////-->
						</div>
						<div class="review-content__payment">
							<h3 class="block-title">Detalle del pago</h3>
							<div class="payment-hero-container" data-component="payment-hero-container">
								<ul>
									<!--<li class="badge-type-selection__list-item ui-list__item">-->
									<div data-id="hero-payments" class="hero1 hero-payments  ">
										<div class="hero__wrapper">
											<div class="hero__table-row">
												<div class="hero__icon" data-js="hero-icon">
													 <span class="ui-badge ui-badge--small ">
													 	<span class="ui-badge__icon ui-badge__icon--payment-logo">
													 		<i class="payment-icon payments-cho_badge _debvisa-cho_badge"></i>
													 	</span>
													 </span>
												</div>
												<div class="hero__main-content" data-js="hero-main-content">
													<div class="hero__main-content-wrapper">
														<div class="hero__info" data-js="hero-info">
															<h3 data-id="hero-payments-title" class="hero__info-title">Visa Débito terminada en  5048</h3>
															<span data-id="hero-payments-subtitle" class="hero__info-subtitle ">
																Pagas 1x

																<span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
																	<meta itemprop="price" content="18999">
																	<span class="price-tag-symbol" itemprop="priceCurrency">$</span>
																	<span class="price-tag-fraction">0</span>
																	<span class="price-tag-decimal-separator"></span>
																	<span class="price-tag-cents">00</span>
																</span>
															</span>
														</div>
														<div class="hero__action" data-js="hero-action">
															<form data-js="change-payment" data-payment="fa7c4548-b3e8-4dff-b2be-de432ed79763" method="post">
																<button data-js="" data-input-id="" class=" hero__action-button1 u-link" type="submit" name="nextStepPayments" value="nextStepPayments">
																	Modificar
																</button>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--</li>-->
								</ul>
							</div>
						</div>
					</div>
				</article>
			</section>
		</div>
		<!--////////////////////////////////////////////=LADO IZQUIERDO=///////////////////////////////////////////-->

		<!--/////////////////////////////////////////////=LADO DERECHO=////////////////////////////////////////////-->
		<!--////////////////////////////////////////////////DATOS//////////////////////////////////////////////////////-->
		<div id="aside-container"  class="cart-aside">	
			<div class="pintar">
				<div data-component="aside"  >
					<aside class="cart-aside__content cart-aside__content--item cart-aside--fixed" data-aside="target">
						<div class="overview-component__item u-block-center">
							<span class="ui-badge1 ui-badge--small1 ui-badge--picture item__image--circular">
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
									<br>
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
												<span class="price-tag-symbol1 price-tag-symbolTotal" itemprop="priceCurrency">$</span>
												<span class="price-tag-fraction price-tag-symbolTotal1">0</span>
												<span class="price-tag-decimal-separator"></span>
												<span class="price-tag-cents1">00</span>
											</span>
									</div>
								</div>
							</div>
						</div>
						<form class="overview-component__form" method="post" data-js="confirm-form">
							<button class="overview-component__action-button ui-button ui-button--primary" data-id="overview-action" data-js="" type="submit">
								<span class="aside-button__progress-bar"></span>
								<span class="aside-button__text">Confirmar compra</span>
								<span class="aside-button__icon">
									<svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--dots ui-badge__icon">
                            			<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--dots"></use>
                        			</svg>
                        			<svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--success ui-badge__icon">
			                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--success"></use>
			                        </svg>
			                        <svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--success ui-badge__icon">
			                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--success"></use>
			                        </svg>
			                        <svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--error ui-badge__icon">
			                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--error"></use>
			                        </svg>
								</span>
							</button>
						</form>
					</aside>
				</div>
			</div>	
		</div>
		<!--////////////////////////////////////////////////DATOS//////////////////////////////////////////////////////-->
		<!--/////////////////////////////////////////////=LADO DERECHO=////////////////////////////////////////////-->
	</div>
</main>

@stop