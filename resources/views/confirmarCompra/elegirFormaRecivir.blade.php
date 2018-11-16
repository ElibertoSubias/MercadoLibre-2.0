@extends('layouts.masterLogin')

@section('content')
{!! Html::style('css/elegirRecivir.css') !!}


<div class="shipping-split ui-panel--raised u-block-center">
    <div class="shipping-split-actions">
          <div class="step-title  step-title--full-screen-step ">
              <h2 class="cart-title--primary ">
                     ¿Cómo quieres recibir el producto?
              </h2>
      
      
          </div>
        <div class="split-buttons">
               
                    <a href="agregarDomicilio" type="submit" class="ui-button " data-input-id="nextStepSendToMyAddress" value="nextStepSendToMyAddress" name="nextStepSendToMyAddress" data-js="shipping-method-option" style="background-color: rgba(52,131,250,.8);color: #fff;    min-width: 300px; display: inline-block; width: 18%;font-weight: 400;font-size: 18px; border-radius: 5px; height: 40px; margin: 5%; padding-top: 4px">
                        Enviar a mi domicilio
                    </a>
          <br>
                <a href="#" style="font-size: 16px">Retiro en una sucursal</a>
              
        </div>
    </div>
    <div class="box-hero u-bg-color--yellow u-block-center">
      <div class="new-address__box-image u-bg-color--yellow u-block-center">
          <div class="new-address__box-image-container">
             
          </div>
      </div>
      
    </div>
  </div>



@stop