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
                <form method="post" action="nuevodomicilio">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                  <input type="hidden" name="idPaquete" value="{{$idPaquete}}">
                  <input type="hidden" name="titulo" value="{{$titulo}}" id="titulo"> 
                  <input type="hidden" name="precio" value="{{$precio}}">
                  <input type="hidden" name="urlImagen" value="{{$urlImagen}}">
                 
                  <input  type="submit" name="enviar" class="ui-button "  data-input-id="nextStepSendToMyAddress" value="Enviar a mi domicilio"   style="background-color: rgba(52,131,250,.8);color: #fff;    min-width: 300px; display: inline-block; width: 18%;font-weight: 400;font-size: 18px; border-radius: 5px; height: 40px; margin: 8s%; padding-top: 4px" >
                </form>
                   
          <br>
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