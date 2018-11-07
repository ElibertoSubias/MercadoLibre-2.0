@extends('layouts.master')

@section('content')
{!! Html::style('css/styleDomicilio.css') !!}   
                
                <iframe id="addressFrame" class="addresses-iframe" src="https://addresses.mercadolibre.com.mx/listAddresses?confirmation_url=_parent" width="100%" frameborder="0" seamless="" scrolling="no" style="height: 313px;">
                
                </iframe>
            
						
            
        

        <a href="#" id="modalSeller" style="display:none" aria-label="ch-modal-5"></a>
        <a href="#" id="modalDeleteInfo" style="display:none" aria-label="ch-modal-6"></a>

    </form>