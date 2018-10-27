@extends('layouts.master')

@section('content')  
{!! Html::style('css/verStyle.css') !!} 
{!! Html::style('css/menuStyle.css') !!} 
{!! Html::style('css/publiStyle.css') !!} 
{!! Html::style('css/stylePerfil.css') !!}
    {!! Html::script('js/jquery-3.3.1.min.js') !!}


<div style="background-color: white; width: 100%">

                <input type="submit" value="Ver carrito" click="agregadocarrito" onclick="agregadocarrito" style="font-size: 15px!important;min-width: 0;padding: 12px 16px;border: 1px solid #3483fa; color: white ;background: #3483fa;border-radius: 4px; margin-top: 15px">
                <input type="submit" data-js="vip-action-cart"  value="Comprar Carrito" class="ui-button ui-button--secondary "
                style="font-size: 15px!important;min-width: 0;padding: 12px 16px;border: 1px solid #3483fa;    color: #3483fa;background: none;border-radius: 4px;">
</div>

@stop
