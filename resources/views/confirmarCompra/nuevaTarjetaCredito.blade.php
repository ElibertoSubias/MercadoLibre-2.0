@extends('layouts.master')

@section('content')
{!! Html::style('css/styleDomicilio.css') !!}  

<div id="app-container" class="cart-content"><div><div data-component="new-card" class="new-card__component">
            <div class="step-title   ">
                <h2 class="cart-title--primary ">
                       ¿Cómo quieres pagar?
                </h2>
        
        
            </div>
        <div data-component="hero"><div class="hero-container">
<div data-id="hero-" class="hero hero-  ">
    <div class="hero__wrapper">
        <div class="hero__table-row">
                <div class="hero__icon" data-js="hero-icon">
                    <span class="ui-badge ui-badge--small ">
                                    <svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--credit_card ui-badge__icon ui-badge__icon--medium">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--credit_card"></use>
                                    </svg>
                    </span>
                </div>

            <div class="hero__main-content" data-js="hero-main-content">
                <div class="hero__main-content-wrapper">
                    <div class="hero__info" data-js="hero-info">
                            <h3 data-id="hero--title" class="hero__info-title">
                                    Tarjeta de crédito
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

            <div class="step-title   ">
                <h2 class="cart-title--primary ">
                       Ingresa una nueva tarjeta
                </h2>
        
        
            </div>


    <div class="new-card__panel" data-spinner="scope">
        <div class="new-card__section-wrapper">

            <section class="card-form-container" data-js="card-form-container"><div><form class="ui-form ui-form--multiple-inputs" data-js="form-container" novalidate="">
    <div data-js="form-sections-container"><div id="uniqueSection" class="ui-form__section"><fieldset class="ui-form__fieldset">
            <div class="ui-row ui-panel--raised">
                <div class="form-inner__wrapper">
                        <div class="form-input__container" data-js="form-input-container"><div class=""><div class="ui-form__row ui-form__row--tel    ui-form__row-container--card_number " data-js="form-row">
                <input id="cardNumber" name="card_number" type="tel" class="ui-form__input" data-js="form-input" data-input-id="cardNumber" required="true" maxlength="19" minlength="12" pattern="^([0-9 ]+)+$" autocomplete="cc-number" spellcheck="false" data-hj-masked="data-hj-masked">
                
                    <label class="ui-form__label ui-form__label--cardNumber" for="cardNumber">
                      Número de tarjeta<span class="ui-form__optional">
                      
                    </span>
                    
                    </label>
                
                <span class="ui-form__status-bar"></span>


            <div data-js="validation-message-cardNumber" class="ui-form__message ">
                
            </div>
        </div></div><div class=""><div class="ui-form__row ui-form__row--text    ui-form__row-container--cardholder_name " data-js="form-row">
                <input id="ownerName" name="cardholder_name" type="text" class="        ui-form__input
                
                
                " data-js="form-input" data-input-id="ownerName" required="true" maxlength="70" minlength="5" pattern="^[A-Za-zÀ-Ÿà-ÿ ,.']+$" autocomplete="cc-name" spellcheck="true" autocapitalize="words">
                
                    <label class="ui-form__label ui-form__label--ownerName" for="ownerName">
                      Nombre y apellido<span class="ui-form__optional">
                      
                    </span>
                    
                    </label>
                
                <span class="ui-form__status-bar"></span>


            <div data-js="validation-message-ownerName" class="ui-form__message ">
                Tal cual esté impreso en la tarjeta
            </div>
        </div></div><div class=""><div class="ui-form__row ui-form__row--tel    ui-form__row-container--expiration_date " data-js="form-row">
                <input id="expirationDate" name="expiration_date" type="tel" class="        ui-form__input
                
                
                " data-js="form-input" data-input-id="expirationDate" required="true" maxlength="9" minlength="5" pattern="^(0[1-9]|1[0-2])( )?\/( )?([2][0]\d{2}|\d{2})$" pastdate="" validdate="" autocomplete="cc-exp" spellcheck="false">
                
                    <label class="ui-form__label ui-form__label--expirationDate" for="expirationDate">
                      Fecha de expiración<span class="ui-form__optional">
                      
                    </span>
                    
                    </label>
                
                <span class="ui-form__status-bar"></span>


            <div data-js="validation-message-expirationDate" class="ui-form__message ">
                MM/AA
            </div>
        </div></div><div class=""><input type="hidden" id="expiration_month" name="expiration_month" class="
            
            " data-js="form-input" data-input-id="expiration_month" required="true" maxlength="2" minlength="2" pattern="^[0-9]+$" autocomplete="cc-exp-month" spellcheck="false"></div><div class=""><input type="hidden" id="expiration_year" name="expiration_year" class="
            
            " data-js="form-input" data-input-id="expiration_year" required="true" maxlength="4" minlength="4" pattern="^[0-9]+$" autocomplete="cc-exp-year" spellcheck="false"></div><div class=""><div class="ui-form__row ui-form__row--tel    ui-form__row-container--security_code " data-js="form-row">
                <input id="securityCode" name="security_code" type="tel" class="        ui-form__input
                
                
                " data-js="form-input" data-input-id="securityCode" required="true" maxlength="4" minlength="3" pattern="^[0-9]+$" autocomplete="off" spellcheck="false" data-hj-masked="data-hj-masked">
                
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
            
            " data-js="form-input" data-input-id="tokenList"></div><div class=""></div><div class=""><input type="hidden" id="nextStepPayments" name="nextStepPayments" class="
            
            " data-js="form-input" data-input-id="nextStepPayments"></div></div>
                        <div class="card__container" data-js="card-container"><div class="ui-cards-container"><div data-component="ui-cards">
    <div data-js="ui-credit-card-component"><div class="new-card__container--view"><div id="ui-card" class="ui-card">
                <!-- Rotate -->
                <div id="ui-card__rotate" class="ui-card__rotate">
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
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                </div>
                            </div>
                        </div>
                        <!-- Number -->
                        <div class="ui-card__row">
                            <div class="ui-card__col-4">
                                <div id="ui-card__number" data-hj-masked="data-hj-masked" class="ui-card__number ui-card__number-4-4-4-4">
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                </div>
                            </div>
                        </div>
                        <div class="ui-card__row">
                            <!-- Name -->
                            <div class="ui-card__col-3">
                                <span id="ui-card__name" class="ui-card__name" data-title="Nombre y apellido"></span>
                            </div>
                            <!-- Expiration date -->
                            <div class="ui-card__col-1">
                                <div id="ui-card__expiration" class="ui-card__expiration">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
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
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
                                    <span class="ui-card__point"></span>
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
<div class="overview-component__item u-block-center">
                <span class="ui-badge ui-badge--small ui-badge--picture item__image--circular">
                        <img class="badge__product-icon picture-image" src="./Mercado Libre México - Donde comprar y vender de todo_files/D_NQ_NP_667770-MLM27193457963_042018-Z.jpg" srcset="https://http2.mlstatic.com/D_NQ_NP_667770-MLM27193457963_042018-Z.jpg" alt="Tarjeta Usb Antena Wifi 150mbps 802.11n/g/b Redes + Potente" data-object-fit="cover">
                </span>
                <h3 class="overview-component__item-title">
                    Tarjeta Usb Antena Wifi 150mbps 802.11n/g/b Redes + Potente
                </h3>
                      <span class="overview-component__item-quantity-text">Cantidad: 1</span>
            </div>
</div></div>


@stop