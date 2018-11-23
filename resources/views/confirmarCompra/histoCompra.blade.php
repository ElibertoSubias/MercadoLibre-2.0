@extends('layouts.master')

@section('content')
{!! Html::style('css/styleHistoCompra.css') !!}

<!--///////////////////////////////////////====PANTALLA COMPLETA====//////////////////////////////////////-->
<main role="main">
	<div class="app-wrapper app-wrapper--menu-expanded app-wrapper--menu-expanded-static">
		<!--///////////////////////////////////////====LADO IZQUIERDO====//////////////////////////////////////-->
		<div class="menu-wrapper">
			<!--<input type="checkbox" id="myml-menu-toggle" checked="true" disabled="">-->
			<nav class="myml-nav" role="complementary">
				<div class="myml-nav__container">
					<!--///////////////////////==Mi cuenta==///////////////////////-->
					<section class="myml-nav__section myml-nav__section--toggle">
						<div class="myml-nav__section-heading">
							<span class="myml-nav__section-icon">
								<label class="myml-nav__toggle" for="myml-menu-toggle">
									<span class="myml-nav__ham--top"></span>									
									<span class="myml-nav__ham--middle"></span>
									<span class="myml-nav__ham--bottom"></span>
									<span class="myml-nav__ham--cross"></span>
								</label>
							</span>
							<p class="myml-nav__section-title">
								<span class="myml-nav__user-permalink">Mi cuenta</span>
								<span class="myml-nav__section-subtitle">¡Hola ....!</span>
							</p>
						</div>
					</section>
					<!--///////////////////////==Mi cuenta==///////////////////////-->					
					<!--//////////////////////==R-F-R-C-V-C==/////////////////////-->
					<div class="myml-nav__menu">
						<section class="myml-nav__section ">
							<a href="https://myaccount.mercadolibre.com.mx/summary" class="myml-nav__section-heading">
								<span class="myml-nav__section-icon myml-nav__section-icon--myml_summary" data-tooltip="Resumen">
									<svg viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
										<path d="M1 1v12h12V1H1zm0-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1zm2.5 3.5a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm2.477 0h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1 0-1zM3.5 6.5a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm2.477 0h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1 0-1zM3.5 9.5a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm2.477 0h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1 0-1z" fill="#999"></path>
									</svg>
								</span>
								<p class="myml-nav__section-title1">Resumen</p>
							</a>
						</section>
						<section class="myml-nav__section ">
							<a href="https://myaccount.mercadolibre.com.mx/billing/v2/resume" class="myml-nav__section-heading">
								<span class="myml-nav__section-icon myml-nav__section-icon--billing" data-tooltip="Facturación">
									<svg viewBox="0 0 15 17" xmlns="http://www.w3.org/2000/svg">
										<path d="M13.523 1h-12v14.22l.395-.428a.5.5 0 0 1 .729-.007l.95.99.94-.988a.5.5 0 0 1 .726.001l.93.988.962-.993a.5.5 0 0 1 .723.005l.93.988.964-.993a.5.5 0 0 1 .73.012l.884.978.982-.994a.5.5 0 0 1 .718.008l.437.46V1zM2.293 15.86l-.902.979a.5.5 0 0 1-.868-.339V.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v16a.5.5 0 0 1-.863.344l-.944-.995-.99 1.003a.5.5 0 0 1-.727-.016l-.88-.974-.957.986a.5.5 0 0 1-.723-.005l-.93-.988-.961.993a.5.5 0 0 1-.724-.005l-.926-.984-.937.985a.5.5 0 0 1-.724.002l-.944-.985zm7.365-6.149c0 .864-.558 1.683-1.926 1.791v.81h-.639v-.801c-.927-.063-1.61-.432-2.07-.945l.513-.693c.351.387.882.738 1.557.819V8.73c-.918-.234-1.88-.567-1.88-1.701 0-.927.764-1.62 1.88-1.701V4.5h.64v.837c.746.072 1.34.36 1.79.819l-.53.666a2.23 2.23 0 0 0-1.26-.657V7.92c.935.252 1.925.594 1.925 1.791zM6.14 6.966c0 .432.414.63.954.783v-1.62c-.576.045-.954.369-.954.837zm1.593 3.726c.738-.081 1.008-.522 1.008-.9 0-.513-.44-.72-1.008-.891v1.791z" fill="#999"></path>
									</svg>
								</span>
								<p class="myml-nav__section-title2">Facturación</p>
							</a>
						</section>
						<section class="myml-nav__section ">
							<a href="https://reputacion.mercadolibre.com.mx/myReputation" class="myml-nav__section-heading">
								<span class="myml-nav__section-icon myml-nav__section-icon--reputation" data-tooltip="Reputación">
									<svg viewBox="0 0 16 18" xmlns="http://www.w3.org/2000/svg">
										<path d="M2.653 7.837L.67 5.854A.5.5 0 0 1 .523 5.5v-5a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.146.354l-1.984 1.983a6.5 6.5 0 1 1-10.74 0zm.63-.784A6.482 6.482 0 0 1 8.023 5c1.87 0 3.555.79 4.74 2.053l1.76-1.76V1h-13v4.293l1.76 1.76zM8.023 17a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zm2.286-7.906l.883.812-4.2 4.572-2.41-2.624.883-.811 1.527 1.661 3.317-3.61zM4.023 3.7a.5.5 0 0 1 0-1h8a.5.5 0 0 1 0 1h-8z" fill="#999"></path>
									</svg>
								</span>
								<p class="myml-nav__section-title2">Reputación</p>
							</a>
						</section>
						<section class="myml-nav__section  myml-nav__section--has-active-item">
							<input class="myml-nav__section-toggle-trigger" type="checkbox" id="myml-menu-section-toggle-my_purchases" checked="true" '="">
							<span class="myml-nav__section-heading myml-nav__section-heading--has-items">
								<label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--my_purchases" data-tooltip="Compras">
									<svg viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.466 5.5H2.58l-.933 8H13.4l-.934-8zm-8.443-1v-1a3.5 3.5 0 1 1 7 0v1h2.333l1.167 10h-14l1.167-10h2.333zm1 0h5v-1a2.5 2.5 0 1 0-5 0v1z" fill="#999"></path>
									</svg>
								</label>
							</span>
						</section>
					</div>
					<!--//////////////////////==R-F-R-C-V-C==/////////////////////-->
				</div>
			</nav>
		</div>
		<!--///////////////////////////////////////====LADO IZQUIERDO====//////////////////////////////////////-->
		<!--////////////////////////////////////////====LADO DERECHO====///////////////////////////////////////-->
		<div>
			
		</div>
		<!--////////////////////////////////////////====LADO DERECHO====///////////////////////////////////////-->
	</div>
</main>
<!--///////////////////////////////////////====PANTALLA COMPLETA====//////////////////////////////////////-->

@stop