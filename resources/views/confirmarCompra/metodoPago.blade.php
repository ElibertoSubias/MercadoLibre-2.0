@extends('layouts.masterAutenticado')
@section('content')
{!! Html::style('css/styleMetPago.css') !!}
<!--<h2 class="cart-title--primary ">¿Cómo quieres pagar?</h2>-->

<div class="cart-main-container cart-main-container--aside-present">
                <div id="app-container" class="cart-content"><div>
<section data-component="select-type-payment">
    <div class="badge-type-selection">
                 <div class="step-title   ">
                     <h2 class="cart-title--primary ">
                            ¿Cómo quieres pagar?
                     </h2>
             
             
                 </div>


                <h3 class="block-title">Medios sugeridos</h3>
            <article data-js="stored-cards" class="ui-list ui-panel--raised panel-stored-cards" role="list" aria-label="¿Cómo quieres pagar?">
                <div data-js="payments-types" data-stored="true"><ul class="badge-type-selection__list"><li class="badge-type-selection__list-item ui-list__item"><form method="post">
        <input data-js="payment-type-id" type="hidden" name="paymentMethodId" value="debvisa">
        <input data-js="payment-type-card-id" type="hidden" name="cardId" value="248131622">
    <button data-js="payment-type" type="submit" name="paymentType" class="badge-type__button u-button-reset" role="option" value="DEBIT_CARD">
        <span class="ui-badge ui-badge--small">
                    <span class="ui-badge__icon ui-badge__icon--payment-logo">
                        <i class="payment-icon payments-cho_badge _debvisa-cho_badge"></i>
                    </span>
        </span>
        <div class="badge-type__metadata">
                <h2 class="badge-type-selection__list-title">Terminada en 5048
                </h2>
                <p class="badge-type-selection__list-text">
                                
                </p>
        </div>
    </button>
</form>
</li><li class="badge-type-selection__list-item ui-list__item"><form method="post">
        <input data-js="payment-type-id" type="hidden" name="paymentMethodId" value="master">
        <input data-js="payment-type-card-id" type="hidden" name="cardId" value="242584257">
    <button data-js="payment-type" type="submit" name="paymentType" class="badge-type__button u-button-reset" role="option" value="CREDIT_CARD">
        <span class="ui-badge ui-badge--small">
                    <span class="ui-badge__icon ui-badge__icon--payment-logo">
                        <i class="payment-icon payments-cho_badge _master-cho_badge"></i>
                    </span>
        </span>
        <div class="badge-type__metadata">
                <h2 class="badge-type-selection__list-title">Terminada en 2289
                </h2>
                <p class="badge-type-selection__list-text">
                                <span class="u-text--green">Hasta 18 meses
                        sin intereses</span>
                </p>
        </div>
    </button>
</form>
</li></ul></div>
            </article>

                <h3 class="block-title">Otros medios</h3>
            <article class="ui-list ui-panel--raised" data-js="payments-types" data-stored="false" role="list" aria-label="¿Cómo quieres pagar?"><ul class="badge-type-selection__list"><li class="badge-type-selection__list-item ui-list__item"><form method="post">
    <button data-js="payment-type" type="submit" name="paymentType" class="badge-type__button u-button-reset" role="option" value="CREDIT_CARD">
        <span class="ui-badge ui-badge--small">
                            <svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--credit_card ui-badge__icon ui-badge__icon--medium">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--credit_card"></use>
                            </svg>
        </span>
        <div class="badge-type__metadata">
                <h2 class="badge-type-selection__list-title">Tarjeta de crédito
                </h2>
                <p class="badge-type-selection__list-text">
                                <span class="u-text--green">Hasta 12 meses
                        sin intereses</span>
                </p>
        </div>
    </button>
</form>
</li><li class="badge-type-selection__list-item ui-list__item"><form method="post">
    <button data-js="payment-type" type="submit" name="paymentType" class="badge-type__button u-button-reset" role="option" value="DEBIT_CARD">
        <span class="ui-badge ui-badge--small">
                            <svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--debit_card ui-badge__icon ui-badge__icon--medium">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--debit_card"></use>
                            </svg>
        </span>
        <div class="badge-type__metadata">
                <h2 class="badge-type-selection__list-title">Tarjeta de débito
                </h2>
        </div>
    </button>
</form>
</li><li class="badge-type-selection__list-item ui-list__item"><form method="post">
        <input data-js="payment-type-id" type="hidden" name="paymentMethodId" value="mercadopagocard">
    <button data-js="payment-type" type="submit" name="paymentType" class="badge-type__button u-button-reset" role="option" value="PREPAID_CARD">
        <span class="ui-badge ui-badge--small">
                    <span class="ui-badge__icon ui-badge__icon--payment-logo">
                        <i class="payment-icon payments-cho_badge _mercadopagocard-cho_badge"></i>
                    </span>
        </span>
        <div class="badge-type__metadata">
                <h2 class="badge-type-selection__list-title">Tarjeta Mercado Pago
                </h2>
        </div>
    </button>
</form>
</li><li class="badge-type-selection__list-item ui-list__item"><form method="post">
    <button data-js="payment-type" type="submit" name="paymentType" class="badge-type__button u-button-reset" role="option" value="TICKET">
        <span class="ui-badge ui-badge--small">
                            <svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--ticket ui-badge__icon ui-badge__icon--medium">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--ticket"></use>
                            </svg>
        </span>
        <div class="badge-type__metadata">
                <h2 class="badge-type-selection__list-title">Efectivo en puntos de pago
                </h2>
                <p class="badge-type-selection__list-text">
                                7-Eleven, BBVA Bancomer, Citibanamex y Otros
                </p>
        </div>
    </button>
</form>
</li><li class="badge-type-selection__list-item ui-list__item"><form method="post">
    <button data-js="payment-type" type="submit" name="paymentType" class="badge-type__button u-button-reset" role="option" value="BANK_TRANSFER">
        <span class="ui-badge ui-badge--small">
                            <svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--bank_transfer ui-badge__icon ui-badge__icon--medium">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--bank_transfer"></use>
                            </svg>
        </span>
        <div class="badge-type__metadata">
                <h2 class="badge-type-selection__list-title">Transferencia electrónica
                </h2>
        </div>
    </button>
</form>
</li></ul></article>
    </div>
</section>
</div></div>
                
                    <div id="aside-container" class="cart-aside"><div><div data-component="aside">
    <aside class="cart-aside__content cart-aside__content--item cart-aside--fixed" data-aside="target">
            <div class="overview-component__item u-block-center">
                <span class="ui-badge ui-badge--small ui-badge--picture item__image--circular">
                        <img class="badge__product-icon picture-image" src="./Mercado Libre México - Donde comprar y vender de todo2_files/D_NQ_NP_667770-MLM27193457963_042018-Z.jpg" srcset="https://http2.mlstatic.com/D_NQ_NP_667770-MLM27193457963_042018-Z.jpg" alt="Tarjeta Usb Antena Wifi 150mbps 802.11n/g/b Redes + Potente" data-object-fit="cover">
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
</div></div>
                
            </div>
@stop