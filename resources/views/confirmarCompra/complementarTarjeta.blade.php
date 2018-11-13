@extends('layouts.master')

@section('content')  
{!! Html::style('css/comTarjeta.css') !!} 

<div class="cart-main-container cart-main-container--aside-present">
                <div id="app-container" class="cart-content"><div><div data-component="new-card" class="new-card__component">
            <div class="step-title   ">
                <h2 class="cart-title--primary ">
                       Completa tu código de seguridad
                </h2>
        
        
            </div>
        <div data-component="hero"><div class="hero-container">
<div data-id="hero-" class="hero hero-  ">
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
                            <h3 data-id="hero--title" class="hero__info-title">
                                    Visa Débito terminada en 5048
                            </h3>
                    </div>
                            <div class="hero__action" data-js="hero-action">
                                <form data-js="change-payment" method="post">
                                    <button data-js="" data-input-id="nextStepPayments" class=" hero__action-button u-link" type="submit" name="nextStepPayments" value="nextStepPayments">
                                        Modificar
                                    </button>
                                </form>
                            </div>
                </div>
            </div>
        </div>

        <div class="hero__table-row">
            <div class="hero__table-cell"></div> 
            <div class="hero__table-cell">
            </div>
        </div>
    </div>
</div>
</div></div>



    <div class="new-card__panel" data-spinner="scope">
        <div class="new-card__section-wrapper">

            <section class="card-form-container" data-js="card-form-container"><div><form class="ui-form ui-form--multiple-inputs" data-js="form-container" novalidate="">
    <div data-js="form-sections-container"><div id="uniqueSection" class="ui-form__section"><fieldset class="ui-form__fieldset">
            <div class="ui-row ui-panel--raised">
                <div class="form-inner__wrapper">
                        <div class="form-input__container" data-js="form-input-container"><div class=""><input type="hidden" id="cardNumber" name="card_number" class="
                ui-form__input--dirty
            
            " data-js="form-input" data-input-id="cardNumber" value="**** **** **** 5048"></div><div class=""><input type="hidden" id="ownerName" name="cardholder_name" class="
                ui-form__input--dirty
            
            " data-js="form-input" data-input-id="ownerName" value="ERICK LABRADA SANCHEZ"></div><div class=""><input type="hidden" id="expirationDate" name="expiration_date" class="
            
            " data-js="form-input" data-input-id="expirationDate"></div><div class=""><input type="hidden" id="expiration_month" name="expiration_month" class="
            
            " data-js="form-input" data-input-id="expiration_month" required="true" maxlength="2" minlength="2" pattern="^[0-9]+$" autocomplete="cc-exp-month" spellcheck="false"></div><div class=""><input type="hidden" id="expiration_year" name="expiration_year" class="
            
            " data-js="form-input" data-input-id="expiration_year" required="true" maxlength="4" minlength="4" pattern="^[0-9]+$" autocomplete="cc-exp-year" spellcheck="false"></div><div class=""><div class="ui-form__row ui-form__row--tel  ui-form__single-row  ui-form__row-container--security_code " data-js="form-row">
                <input id="securityCode" name="security_code" type="tel" class="ui-form__input                                      ui-form__input--dirty" data-js="form-input" data-input-id="securityCode" required="true" pattern="^[0-9]+$" minlength="3" maxlength="3" autocomplete="off" spellcheck="false" data-hj-masked="data-hj-masked">
                
                    <label class="ui-form__label ui-form__label--securityCode" for="securityCode">
                      Código de seguridad<span class="ui-form__optional">
                      
                    </span>
                    
                    </label>
                
                <span class="ui-form__status-bar"></span>


            <div data-js="validation-message-securityCode" class="ui-form__message ">
                Últimos 3 números en el dorso de tu tarjeta
            </div>
        </div></div><div class=""><input type="hidden" id="first_six_digits" name="first_six_digits" class="
            
            " data-js="form-input" data-input-id="first_six_digits"></div><div class=""><input type="hidden" id="last_four_digits" name="last_four_digits" class="
            
            " data-js="form-input" data-input-id="last_four_digits"></div><div class=""><input type="hidden" id="cardholder" name="cardholder" class="
            
            " data-js="form-input" data-input-id="cardholder"></div><div class=""><input type="hidden" id="id" name="id" class="
            
            " data-js="form-input" data-input-id="id"></div><div class=""><input type="hidden" id="paymentMethodId" name="paymentMethodId" class="
            
            " data-js="form-input" data-input-id="paymentMethodId"></div><div class=""><input type="hidden" id="issuerId" name="issuerId" class="
            
            " data-js="form-input" data-input-id="issuerId"></div><div class=""><input type="hidden" id="tokenList" name="tokenList" class="
            
            " data-js="form-input" data-input-id="tokenList"></div><div class=""><input type="hidden" id="nextStepPayments" name="nextStepPayments" class="
            
            " data-js="form-input" data-input-id="nextStepPayments"></div></div>
                        <div class="card__container" data-js="card-container"><div class="ui-cards-container"><div data-component="ui-cards">
    <div data-js="ui-credit-card-component"><div class="new-card__container--view"><div id="ui-card" class="ui-card ui-card__brand-debvisa ui-card__brand-bancoppel">
                <!-- Rotate -->
                <div id="ui-card__rotate" class="ui-card__rotate ui-card__rotate-back">
                    <!-- Front -->
                    <div class="ui-card__container ui-card__front">
                        <!-- Backgroud -->
                        <div class="ui-card__background"></div>
                        <div class="ui-card__background-overlay"></div>
                        <!-- Logo -->
                        <div class="ui-card__row">
                            <div class="ui-card__col-4 ui-card__logos-container">
                                <div id="ui-card__logo" class="ui-card__logo"></div>
                                <div id="ui-card__logo_bank" class="ui-card__logo-bank"></div>
                            </div>
                        </div>
                        <!-- Security code -->
                        <div class="ui-card__row">
                            <div class="ui-card__col-4">
                                <div id="ui-card__security-front" data-hj-masked="data-hj-masked" class="ui-card__security ui-card__security-front" style="visibility: hidden;">
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point">9</span>
                                    <span class="ui-card__point">8</span>
                                    <span class="ui-card__point">2</span>
                                </div>
                            </div>
                        </div>
                        <!-- Number -->
                        <div class="ui-card__row">
                            <div class="ui-card__col-4">
                                <div id="ui-card__number" data-hj-masked="data-hj-masked" class="ui-card__number ui-card__number-4-4-4-4">
                                    <span class="ui-card__point">*</span>
                                    <span class="ui-card__point">*</span>
                                    <span class="ui-card__point">*</span>
                                    <span class="ui-card__point">*</span>
                                    <span class="ui-card__point">*</span>
                                    <span class="ui-card__point">*</span>
                                    <span class="ui-card__point">*</span>
                                    <span class="ui-card__point">*</span>
                                    <span class="ui-card__point">*</span>
                                    <span class="ui-card__point">*</span>
                                    <span class="ui-card__point">*</span>
                                    <span class="ui-card__point">*</span>
                                    <span class="ui-card__point">5</span>
                                    <span class="ui-card__point">0</span>
                                    <span class="ui-card__point">4</span>
                                    <span class="ui-card__point">8</span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                </div>
                            </div>
                        </div>
                        <div class="ui-card__row">
                            <!-- Name -->
                            <div class="ui-card__col-3">
                                <span id="ui-card__name" class="ui-card__name" data-title="">ERICK LABRADA SANCHEZ</span>
                            </div>
                            <!-- Expiration date -->
                            <div class="ui-card__col-1">
                                <div id="ui-card__expiration" class="ui-card__expiration">
                                    <span>1</span>
                                    <span>2</span>
                                    <span>2</span>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Back -->
                    <div class="ui-card__container ui-card__back">
                        <!-- Backgroud -->
                        <div class="ui-card__background"></div>
                        <div class="ui-card__background-overlay"></div>
                        <!-- Magnetic -->
                        <div class="ui-card__row">
                            <div class="ui-card__col-4">
                                <div class="ui-card__magnetic"></div>
                            </div>
                        </div>
                        <!-- Signature -->
                        <div class="ui-card__row">
                            <div class="ui-card__col-3">
                                <div class="ui-card__signature">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <!-- Security code -->
                            <div class="ui-card__col-1">
                                <div id="ui-card__security-back" data-hj-masked="data-hj-masked" class="ui-card__security ui-card__security-back">
                                    <span class="ui-card__point">2</span>
                                    <span class="ui-card__point">8</span>
                                    <span class="ui-card__point">9</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div></div>
    <div data-js="ui-document-card-component"></div>
</div>
</div></div>
                </div>
            </div>
</fieldset></div></div>
            <div class="ui-form__actions">
                <button data-js="submit-btn" class="ui-button ui-button--primary" type="submit">Continuar</button>
            </div>
</form></div></section>
        </div>
    </div>
</div>
</div></div>
                
                    <div id="aside-container" class="cart-aside"><div><div data-component="aside">
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
</div></div>
                
            </div>

@stop
