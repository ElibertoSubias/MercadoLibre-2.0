@extends('layouts.master')

@section('content')  
{!! Html::style('css/verStyle.css') !!} 
{!! Html::style('css/menuStyle.css') !!} 
{!! Html::style('css/publiStyle.css') !!} 



<style type="text/css">
    #A_1 {
    border-collapse: collapse;
    box-shadow: rgba(71, 98, 116, 0.6) 0px 1px 6px 0px inset;
    color: rgb(71, 98, 116);
    display: inline-block;
    height: 12px;
    text-align: right;
    text-decoration: none solid rgb(71, 98, 116);
    text-shadow: rgba(255, 255, 255, 0.75) 0px 1px 1px;
    text-size-adjust: 100%;
    width: 112.063px;
    column-rule-color: rgb(71, 98, 116);
    perspective-origin: 65.0313px 12px;
    transform-origin: 65.0313px 12px;
    caret-color: rgb(71, 98, 116);
    background: rgb(122, 182, 220) linear-gradient(rgb(162, 201, 225), rgb(122, 182, 220)) repeat scroll 0% 0% / auto padding-box border-box;
    border: 1px solid rgb(121, 168, 199);
    border-radius: 4px 4px 4px 4px;
    font: normal normal 400 normal 12px / 12px Arial, Helvetica, sans-serif;
    list-style: none outside none;
    margin: 5px 0px;
    outline: rgb(71, 98, 116) none 0px;
    padding: 5px 8px;
}/*#A_1*/
<<<<<<< HEAD
=======

>>>>>>> f6491eba1d7f961859a3ab449894fb4232dba7d1
.price, .price.light {
    font-size: 13px;
    color: #900;
    font-weight: 700;
    margin-right: 5px;
}
<<<<<<< HEAD
=======

>>>>>>> f6491eba1d7f961859a3ab449894fb4232dba7d1
.mfOrders {
    padding: 8px ;
    height: 40px;
    border-top: 1px solid #e9e9e9;
    background-color: #f7f7f7;
}
<<<<<<< HEAD
=======



>>>>>>> f6491eba1d7f961859a3ab449894fb4232dba7d1
</style>
<div class="col-md-12" style="padding: 0px;    background: white;"> 
    <div class="col-md-2" style="padding: 0px;">
        <div class="menu-wrapper" style="padding: 0px;">
        <input type="checkbox" id="myml-menu-toggle" checked="true" disabled="">
        <nav class="myml-nav" role="complementary">
            <div class="myml-nav__container">
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
                            <span class="myml-nav__section-subtitle">¡Hola Eliberto!</span>
                        </p>
                    </div>
                </section>
                <div class="myml-nav__menu">
                    <section class="myml-nav__section ">
                        <a href="#z" class="myml-nav__section-heading">
                            <span class="myml-nav__section-icon myml-nav__section-icon--myml_summary" data-tooltip="Resumen">
                                <svg viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1v12h12V1H1zm0-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1zm2.5 3.5a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm2.477 0h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1 0-1zM3.5 6.5a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm2.477 0h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1 0-1zM3.5 9.5a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm2.477 0h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1 0-1z" fill="#999"></path></svg>
                            </span>
                            <p class="myml-nav__section-title">Resumen</p>
                        </a>
                    </section>
                    <section class="myml-nav__section ">
                        <a href="#" class="myml-nav__section-heading">
                            <span class="myml-nav__section-icon myml-nav__section-icon--billing" data-tooltip="Facturación">
                                <svg viewBox="0 0 15 17" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.523 1h-12v14.22l.395-.428a.5.5 0 0 1 .729-.007l.95.99.94-.988a.5.5 0 0 1 .726.001l.93.988.962-.993a.5.5 0 0 1 .723.005l.93.988.964-.993a.5.5 0 0 1 .73.012l.884.978.982-.994a.5.5 0 0 1 .718.008l.437.46V1zM2.293 15.86l-.902.979a.5.5 0 0 1-.868-.339V.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v16a.5.5 0 0 1-.863.344l-.944-.995-.99 1.003a.5.5 0 0 1-.727-.016l-.88-.974-.957.986a.5.5 0 0 1-.723-.005l-.93-.988-.961.993a.5.5 0 0 1-.724-.005l-.926-.984-.937.985a.5.5 0 0 1-.724.002l-.944-.985zm7.365-6.149c0 .864-.558 1.683-1.926 1.791v.81h-.639v-.801c-.927-.063-1.61-.432-2.07-.945l.513-.693c.351.387.882.738 1.557.819V8.73c-.918-.234-1.88-.567-1.88-1.701 0-.927.764-1.62 1.88-1.701V4.5h.64v.837c.746.072 1.34.36 1.79.819l-.53.666a2.23 2.23 0 0 0-1.26-.657V7.92c.935.252 1.925.594 1.925 1.791zM6.14 6.966c0 .432.414.63.954.783v-1.62c-.576.045-.954.369-.954.837zm1.593 3.726c.738-.081 1.008-.522 1.008-.9 0-.513-.44-.72-1.008-.891v1.791z" fill="#999"></path>
                                </svg>
                            </span>
                        <p class="myml-nav__section-title">Facturación</p></a>
                    </section>
                    <section class="myml-nav__section ">
                        <a href="#" class="myml-nav__section-heading">
                            <span class="myml-nav__section-icon myml-nav__section-icon--reputation" data-tooltip="Reputación">
                                <svg viewBox="0 0 16 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.653 7.837L.67 5.854A.5.5 0 0 1 .523 5.5v-5a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.146.354l-1.984 1.983a6.5 6.5 0 1 1-10.74 0zm.63-.784A6.482 6.482 0 0 1 8.023 5c1.87 0 3.555.79 4.74 2.053l1.76-1.76V1h-13v4.293l1.76 1.76zM8.023 17a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zm2.286-7.906l.883.812-4.2 4.572-2.41-2.624.883-.811 1.527 1.661 3.317-3.61zM4.023 3.7a.5.5 0 0 1 0-1h8a.5.5 0 0 1 0 1h-8z" fill="#999"></path>
                                </svg>
                            </span>
                            <p class="myml-nav__section-title">Reputación</p>
                        </a>
                    </section>
                    <section class="myml-nav__section ">
                        <input class="myml-nav__section-toggle-trigger" type="checkbox" id="myml-menu-section-toggle-my_purchases" '="">
                        <span class="myml-nav__section-heading myml-nav__section-heading--has-items"> 
                            <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--my_purchases" data-tooltip="Compras">
                                <svg viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.466 5.5H2.58l-.933 8H13.4l-.934-8zm-8.443-1v-1a3.5 3.5 0 1 1 7 0v1h2.333l1.167 10h-14l1.167-10h2.333zm1 0h5v-1a2.5 2.5 0 1 0-5 0v1z" fill="#999"></path>
                                </svg>
                            </label> 
                            <label for="myml-menu-section-toggle-my_purchases" class="myml-nav__section-title">Compras</label>
                        </span>
                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-favorites" class="myml-nav__menu-item " href="#">
                                <span class="myml-nav__menu-item-text">Favoritos</span>
                            </a>
                        </div>
                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-buyer_questions" class="myml-nav__menu-item " href="#">
                                <span class="myml-nav__menu-item-text">Preguntas</span>
                            </a>
                        </div>
                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-my_quotations" class="myml-nav__menu-item " href="#">
                                <span class="myml-nav__menu-item-text">Cotizaciones</span>
                            </a>
                        </div>
                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-purchases" class="myml-nav__menu-item " href="#">
                                <span class="myml-nav__menu-item-text">Compras</span>
                            </a>
                        </div>
                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-subscriptions" class="myml-nav__menu-item " href="#">
                                <span class="myml-nav__menu-item-text">Suscripciones</span>
                            </a>
                        </div>
                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-auctions" class="myml-nav__menu-item " href="#">
                                <span class="myml-nav__menu-item-text">Subastas</span>
                            </a>
                        </div>
                    </section>
                    <section class="myml-nav__section">
                        <input class="myml-nav__section-toggle-trigger" type="checkbox" id="myml-menu-section-toggle-my_sales" checked="true" '="">
                        <span class="myml-nav__section-heading myml-nav__section-heading--has-items"> 
                            <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--my_sales" data-tooltip="Ventas">
                                <svg viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.889 3.893a.498.498 0 0 1 .131.338v2.137c0 .954-.867 1.693-1.9 1.693-.548 0-1.05-.208-1.4-.546-.35.338-.85.546-1.399.546-.548 0-1.05-.208-1.4-.546-.35.338-.851.546-1.4.546-.548 0-1.05-.208-1.4-.546-.349.338-.85.546-1.399.546-.548 0-1.05-.208-1.4-.546-.35.338-.85.546-1.4.546C.89 8.061.024 7.322.024 6.368v-1.79l.047-.21 1.516-3.264a.5.5 0 0 1 .449-.29l11.01-.103a.5.5 0 0 1 .455.284l1.389 2.898zm-.869.501l-1.284-2.68-10.376.098-1.337 2.877v1.68c0 .363.387.692.9.692s.9-.33.9-.693a.5.5 0 1 1 1 0c0 .364.386.693.9.693.512 0 .899-.33.899-.693a.5.5 0 1 1 1 0c0 .364.387.693.9.693s.9-.33.9-.693a.5.5 0 1 1 1 0c0 .364.386.693.899.693s.9-.33.9-.693a.5.5 0 1 1 1 0c0 .364.386.693.9.693.512 0 .9-.33.9-.693V4.394zm-.555 9.572l.02-6.406a.5.5 0 1 1 1 .003l-.024 7.403H.561V7.462a.5.5 0 0 1 1 0v6.504h11.904zm-9.529-2.551a.5.5 0 0 1 0-1h7.3a.5.5 0 0 1 0 1h-7.3z" fill="#999"></path>
                                </svg>
                            </label> 
                            <label for="myml-menu-section-toggle-my_sales" class="myml-nav__section-title">Ventas</label>
                        </span> 

                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-publications" class="myml-nav__menu-item  myml-nav__menu-item--active" href="#">
                                <span class="myml-nav__menu-item-text">Publicaciones</span>
                            </a>
                        </div>
                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-seller_questions" class="myml-nav__menu-item " href="#">
                                <span class="myml-nav__menu-item-text">Preguntas</span>
                            </a>
                        </div>
                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-myml_sales" class="myml-nav__menu-item " href="#">
                                <span class="myml-nav__menu-item-text">Ventas</span>
                            </a>
                        </div>
                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-my_contacts" class="myml-nav__menu-item " href="#">
                                <span class="myml-nav__menu-item-text">Datos de mis interesados</span>
                            </a>
                        </div>
                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-advertising" class="myml-nav__menu-item " href="#">
                                <span class="myml-nav__menu-item-text">Campaña de publicidad</span>
                            </a>
                        </div>
                    </section>
                    <section class="myml-nav__section ">
                        <input class="myml-nav__section-toggle-trigger" type="checkbox" id="myml-menu-section-toggle-config" '="">
                        <span class="myml-nav__section-heading myml-nav__section-heading--has-items"> 
                            <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--config" data-tooltip="Configuración">
                                <svg viewBox="0 0 15 14" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.183 9h1.34V5h-1.34c-.07-.2-.15-.39-.24-.59l.94-.95-2.82-2.82-.95.94c-.2-.09-.39-.17-.59-.24V0h-4v1.34c-.2.07-.39.15-.59.24l-.95-.94-2.82 2.82.94.95c-.09.2-.17.39-.24.59H.523v4h1.34c.07.2.15.398.24.59l-.94.95 2.82 2.82.95-.94c.192.09.39.17.59.24V14h4v-1.34c.2-.07.398-.15.59-.24l.95.94 2.82-2.82-.94-.95c.09-.192.17-.39.24-.59zm-.57 1.54l-1.55 1.55-.77-.76-.57.27a4.4 4.4 0 0 1-.5.21l-.6.21v1.08h-2.2V12l-.6-.21a4.4 4.4 0 0 1-.5-.21l-.57-.27-.77.76-1.55-1.53.76-.77-.27-.57a4.4 4.4 0 0 1-.21-.5l-.19-.6h-1.1V5.9h1.1l.21-.6a4.4 4.4 0 0 1 .21-.5l.27-.57-.76-.77 1.53-1.55.77.76.57-.27a4.4 4.4 0 0 1 .5-.21l.6-.19V.9h2.2V2l.6.21c.17.06.338.13.5.21l.57.27.77-.76 1.55 1.55-.76.77.27.57c.08.162.15.33.21.5l.21.6h1.08v2.2h-1.1l-.21.6a4.4 4.4 0 0 1-.21.5l-.27.57.78.75zM7.523 4.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm0 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" fill="#999"></path>
                                </svg>
                            </label>
                            <label for="myml-menu-section-toggle-config" class="myml-nav__section-title">Configuración</label>
                        </span>
                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-my_details" class="myml-nav__menu-item " href="#">
                                <span class="myml-nav__menu-item-text">Mis datos</span>
                            </a>
                        </div>
                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-security" class="myml-nav__menu-item " href="#">
                                <span class="myml-nav__menu-item-text">Seguridad</span>
                            </a>
                        </div>
                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-my_emails" class="myml-nav__menu-item " href="#">
                                <span class="myml-nav__menu-item-text">E-mails</span>
                            </a>
                        </div>
                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-search_alerts" class="myml-nav__menu-item " href="#">
                                <span class="myml-nav__menu-item-text">Alertas de búsqueda</span>
                            </a>
                        </div>
                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-eshop" class="myml-nav__menu-item " href="#">
                                <span class="myml-nav__menu-item-text">eShop</span>
                            </a>
                        </div>
                    </section>
                    <div class="myml-menu-advertising"><div class="publi">Publicidad </div> 
                </div>
            </div>
        </nav>
        <label class="myml-nav__overlay" for="myml-menu-toggle">
            
        </label>
        {!! Html::script('css/menuJS.js') !!} 
    </div>
    </div>
    <div class="col-md-10">
        <div class="col-md-12 textIzquierda">
            <h2 class="typo">Publicaciones</h2>
        </div>
        <div class="col-md-12" style="padding-left: 55px;">
            <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Activas ()</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Pausadas ()</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Finalizadas ()</a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
    <div style=" height: 60px; text-align: left; padding: 10px" >
    
        <input type="text" name="" placeholder="Buscar en publicaciones" style="border-radius:  3px;padding: 2px; height: 30px;">
        <button style="border-radius: 5px; background-color: #cce3f7; color:#566573 ; margin-left: 10px; border:1px solid #79a8c7">Buscar</button>
        <label style="margin: 10px">Filtros:</label>
        <a href="">Ninguno</a>
    </div> 
        <table border="all" style="width: 100%">
           
            <thead class="mfOrders" style="height: 50px; padding: 12px">
              <tr> 
                <th style="height: 30px; padding-left: 10px" ><input type="checkbox" name="todo"></th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="2" style="text-align: right; padding: 5px">Publicaciones 1 a 1 de 1 | <a href=""> Con mas venta</a> </th>
                <th> </th>
              </tr>
            </thead>
            <tbody>
              
              @foreach($articulos as $venta)
              <tr>
                <td style="padding-top: 0px"><input type="checkbox" name=""></td>
                <td rowspan="2" width="50xp" >
                   <img src="/MercadoLibre-2.0/public/images/{{ auth()->user()->_id }}/{{$venta->idPublicacion}}/{{$venta->urlPrincipal}}" width="80"  style="padding-top: 10px; margin-right: 8px">
                  </td>
                <td style=" text-align:left;padding-left: 9px ">{{$venta->titulo}}</td>
                <td ></td>
                <td></td>
                <td ><label class="price">{{$venta->precio}}</label> X 1 disponible</td>
                <td>Finaliza en 59 días</td>
              </tr>
               <tr>
                    <td></td>
                    <td colspan=2 style="text-align: left;padding-left: 6px"> {{$venta->tipoPublicacion}}| Merca envios| {{$venta->id}}</td>
                    <td></td>
                    <td></td>
                    <td style="width: 150px; "><a href="" class="" id="A_1" style="height: 25px; width: 100%">Aumentar exposicion</a></td>
              </tr>
              @endforeach
            </tbody>
        </table> 
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
  </div>
        </div>
    <div> 
</div> 
    </div>
</div>
@stop
