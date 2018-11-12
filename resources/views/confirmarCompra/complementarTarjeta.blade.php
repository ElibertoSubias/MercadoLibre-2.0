@extends('layouts.master')

@section('content')  
{!! Html::style('css/comTarjeta.css') !!} 

<!--////////////////////////////////////////////////Botones de Pago///////////////////////////////////////////////////-->
<div id="app-container" class="cart-content">
    
    <div>
        <section data-component="select-type-payment">
            <div class="badge-type-selection">
                <div class="step-tile">
                    <h2 class="comoQuieresPagar">Completa tu codigo de seguridad</h2>
                </div>                
                
                <!--////////////////////////////////////////////VIsa-MasterCard/////////////////////////////////////////////-->
                <article data-js="stored-cards" class="ui-list ui-panel--raised" role="list">
                    <div data-js="payments-types" data-stored="true">
                        <ul class="badge-type-selection__list">
                            <!--////////////////////////////////////////////////Visa///////////////////////////////////////////////-->
                            <li class="badge-type-selection__list-item ui-list__item">
                                <form method="post">
                                    <input data-js="payment-type" type="hidden" name="paymentMethodId" value="debvisa"> 
                                    <input data-js="payment-type-card-id" type="hidden" name="cardId" value="248131622">
                                    
                                    <button data-js="payment-type" type="submit" name="paymentType" 
                                    class="badge-type__button u-button-reset" role="option" value="DEBIT_CARD">

                                        <span class="ui-badge ui-badge--small">
                                            <span class="ui-badge__icon ui-badge__icon--payment-logo">
                                                <i class="payment-icon payments-cho_badge _debvisa-cho_badge"></i>
                                            </span>
                                        </span>
                                        <div class="badge-type__metadata">
                                            <h2 class="badge-type-selection__list-title">Terminada en 5048</h2>
                                            <p class="badge-type-selection__list-text"></p>
                                        </div>
                                        <div class="hero__action" data-js="hero-action">
                                            <form data-js="change-payment" method="post">
                                                <button data-js="" data-input-id="nextStepPayments" class=" hero__action-button u-link" type="submit" name="nextStepPayments" value="nextStepPayments">
                                                    Modificar
                                                </button>
                                            </form>
                                        </div>

                                    </button>

                                </form>
                            </li>                           
                            <!--////////////////////////////////////////////////Visa///////////////////////////////////////////////-->
                        </ul>
                    </div>
                </article>
                <!--//////////////////////////////////////////////Otros Medios///////////////////////////////////////////////-->
            </div>            
        </section>        
    </div>  
    <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <!--
        aqui meta el otro div donde va el codigo de seguridad e imagen correspondiente pariente.....
    -->
    <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
</div>
<!--////////////////////////////////////////////////Botones de Pago///////////////////////////////////////////////////-->




<div id="aside-container" class="cart-aside">
    <div>
        <div data-component="aside">
            <aside class="cart-aside__content cart-aside__content--item cart-aside--static" data-aside="target">
                    <div class="overview-component__item u-block-center">
                        <span class="ui-badge ui-badge--small ui-badge--picture item__image--circular">
                                <img class="badge__product-icon picture-image" src="./Mercado Libre México - Donde comprar y vender de todo_files/D_NQ_NP_667770-MLM27193457963_042018-Z.jpg" srcset="https://http2.mlstatic.com/D_NQ_NP_667770-MLM27193457963_042018-Z.jpg" alt="Tarjeta Usb Antena Wifi 150mbps 802.11n/g/b Redes + Potente" data-object-fit="cover">
                        </span>
                        <h3 class="overview-component__item-title">
                            Tarjeta Usb Antena Wifi 150mbps 802.11n/g/b Redes + Potente
                        </h3>
                              <span class="overview-component__item-quantity-text">Cantidad: 1</span>
                    </div>

                <div class="overview__table-container">
                        <div class="overview-component__amounts">
                            <div class="overview-component__table">
                                    <div class="overview-component__row">
                                        <div data-id="overview-items-quantity" class="overview-component__column">
                                            Producto
                                        </div>
                                        <div data-id="overview-items-price" class="overview-component__column">
                                            <span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                <meta itemprop="price" content="18999">
                                                
                                                
                                                <span class="price-tag-symbol" itemprop="priceCurrency">$</span>
                                                <span class="price-tag-fraction">189</span>
                                                    <span class="price-tag-decimal-separator"></span>
                                                    
                                                    <span class="price-tag-cents">99</span>
                                                
                                            </span>
                                        </div>
                                    </div>
                                    <div class="overview-component__row">
                                        <div class="overview-component__column">
                                            Envío
                                        </div>
                                        <div data-id="overview-shipping-amount" class="overview-component__column">
                                                <span class="price-free u-text--green">
                                                            Gratis
                                                </span>
                                        </div>
                                    </div>
                            </div>
                        </div>
                            <div class="overview-component__total">
                                <div class="overview-component__table">
                                    <div class="overview-component__column">
                                        Total
                                    </div>
                                    <div class="overview-component__column">
                                                <span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                    <meta itemprop="price" content="18999">
                                                    
                                                    
                                                    <span class="price-tag-symbol" itemprop="priceCurrency">$</span>
                                                    <span class="price-tag-fraction">189</span>
                                                        <span class="price-tag-decimal-separator"></span>
                                                        
                                                        <span class="price-tag-cents">99</span>
                                                    
                                                </span>
                                    </div>
                                </div>
                            </div>
                </div>
            </aside>
        </div>
    </div>
</div>


@stop
