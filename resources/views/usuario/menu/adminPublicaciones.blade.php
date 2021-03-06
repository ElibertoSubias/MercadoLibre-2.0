@extends('layouts.master')
@section('titulo')
    <title>Publicaciones - MercadoLibre</title>    
@stop
@section('content')  
{!! Html::style('css/verStyle.css') !!} 
{!! Html::style('css/menuStyle.css') !!} 
{!! Html::style('css/publiStyle.css') !!} 

<script type="text/javascript">
    
    function finalizar(publicacio, estad){
         // var dato = $("#dato").val();
          var token = $("#token").val();
          var route = "cambiarestado";
          var publicacion = publicacio;
          var estado = estad;
        
         
              $.ajax({
                url: route,
                headers: {'X-CSRF-TOKEN': token},
                type: 'POST',
                dataType: 'json',
                data: { publicacion: publicacion, estado:estado} 
                }).done(function(data) {  
                    location.reload();
                });
          }
          function activar(){
          
            $('#pausadas').css({"font-weight": "600", "color": "#333"});
            
          }
          function marcarTodo(){
           
            var checked = false;
          
            if(checked == false) {
            $('.settings').prop('checked', true);
            checked = true;
            } else {
            $('.settings').prop('checked', false);
            checked = false;
            }
           
          } 
</script>
 
        <div class="menu-myml-ads menu-myml-ads__hide">
            <div class="menu-myml-ads__container menu-myml-ads__container--desktop">
                <div class="menu-myml-ads__container__center">
                    <span class="menu-myml-ads__container__center__text">Publicidad</span>
                    <div id="menu-myml-ads__container__center__block" class="menu-myml-ads__container__center__block menu-myml-ads__container__center__block--border" style="display: none;"><div id="google_ads_iframe_/105773011/MLM_MIML_Mi_cuenta/MLM_MIML_Resumen_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/105773011/MLM_MIML_Mi_cuenta/MLM_MIML_Resumen_0" title="3rd party ad content" name="google_ads_iframe_/105773011/MLM_MIML_Mi_cuenta/MLM_MIML_Resumen_0" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" style="border: 0px; vertical-align: bottom;" src="css/estado/saved_resource(3).html"></iframe></div></div>
                </div>
            </div>
        </div>  
        <div class="app-wrapper app-wrapper--menu-expanded app-wrapper--menu-expanded-static"><div class="menu-wrapper"><input type="checkbox" id="myml-menu-toggle" checked="true" disabled=""><nav class="myml-nav" role="complementary"><div class="myml-nav__container"><section class="myml-nav__section myml-nav__section--toggle"><div class="myml-nav__section-heading"><span class="myml-nav__section-icon"><label class="myml-nav__toggle" for="myml-menu-toggle"><span class="myml-nav__ham--top"></span><span class="myml-nav__ham--middle"></span><span class="myml-nav__ham--bottom"></span><span class="myml-nav__ham--cross"></span></label></span><p class="myml-nav__section-title"><span class="myml-nav__user-permalink">Mi cuenta</span><span class="myml-nav__section-subtitle">¡Hola {{auth()->user()->nombre}}!</span></p></div></section><div class="myml-nav__menu"><section class="myml-nav__section"><a href="https://myaccount.mercadolibre.com.mx/summary" class="myml-nav__section-heading"><span class="myml-nav__section-icon myml-nav__section-icon--myml_summary" data-tooltip="Resumen"><svg viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
    <path d="M1 1v12h12V1H1zm0-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1zm2.5 3.5a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm2.477 0h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1 0-1zM3.5 6.5a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm2.477 0h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1 0-1zM3.5 9.5a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm2.477 0h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1 0-1z" fill="#999"></path>
  </svg></span><p class="myml-nav__section-title">Resumen</p></a></section><section class="myml-nav__section "><a href="{{route('estado')}}" class="myml-nav__section-heading"><span class="myml-nav__section-icon myml-nav__section-icon--billing" data-tooltip="Facturación"><svg viewBox="0 0 15 17" xmlns="http://www.w3.org/2000/svg">
    <path d="M13.523 1h-12v14.22l.395-.428a.5.5 0 0 1 .729-.007l.95.99.94-.988a.5.5 0 0 1 .726.001l.93.988.962-.993a.5.5 0 0 1 .723.005l.93.988.964-.993a.5.5 0 0 1 .73.012l.884.978.982-.994a.5.5 0 0 1 .718.008l.437.46V1zM2.293 15.86l-.902.979a.5.5 0 0 1-.868-.339V.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v16a.5.5 0 0 1-.863.344l-.944-.995-.99 1.003a.5.5 0 0 1-.727-.016l-.88-.974-.957.986a.5.5 0 0 1-.723-.005l-.93-.988-.961.993a.5.5 0 0 1-.724-.005l-.926-.984-.937.985a.5.5 0 0 1-.724.002l-.944-.985zm7.365-6.149c0 .864-.558 1.683-1.926 1.791v.81h-.639v-.801c-.927-.063-1.61-.432-2.07-.945l.513-.693c.351.387.882.738 1.557.819V8.73c-.918-.234-1.88-.567-1.88-1.701 0-.927.764-1.62 1.88-1.701V4.5h.64v.837c.746.072 1.34.36 1.79.819l-.53.666a2.23 2.23 0 0 0-1.26-.657V7.92c.935.252 1.925.594 1.925 1.791zM6.14 6.966c0 .432.414.63.954.783v-1.62c-.576.045-.954.369-.954.837zm1.593 3.726c.738-.081 1.008-.522 1.008-.9 0-.513-.44-.72-1.008-.891v1.791z" fill="#999"></path>
  </svg></span><p class="myml-nav__section-title">Facturación</p></a></section><section class="myml-nav__section "><a href="#" class="myml-nav__section-heading"><span class="myml-nav__section-icon myml-nav__section-icon--reputation" data-tooltip="Reputación"><svg viewBox="0 0 16 18" xmlns="http://www.w3.org/2000/svg">
    <path d="M2.653 7.837L.67 5.854A.5.5 0 0 1 .523 5.5v-5a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.146.354l-1.984 1.983a6.5 6.5 0 1 1-10.74 0zm.63-.784A6.482 6.482 0 0 1 8.023 5c1.87 0 3.555.79 4.74 2.053l1.76-1.76V1h-13v4.293l1.76 1.76zM8.023 17a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zm2.286-7.906l.883.812-4.2 4.572-2.41-2.624.883-.811 1.527 1.661 3.317-3.61zM4.023 3.7a.5.5 0 0 1 0-1h8a.5.5 0 0 1 0 1h-8z" fill="#999"></path>
  </svg></span><p class="myml-nav__section-title">Reputación</p></a></section><section class="myml-nav__section "><input class="myml-nav__section-toggle-trigger" type="checkbox" id="myml-menu-section-toggle-my_purchases" '=""><span class="myml-nav__section-heading myml-nav__section-heading--has-items"> <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--my_purchases" data-tooltip="Compras"><svg viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
    <path d="M12.466 5.5H2.58l-.933 8H13.4l-.934-8zm-8.443-1v-1a3.5 3.5 0 1 1 7 0v1h2.333l1.167 10h-14l1.167-10h2.333zm1 0h5v-1a2.5 2.5 0 1 0-5 0v1z" fill="#999"></path>
  </svg></label> <label for="myml-menu-section-toggle-my_purchases" class="myml-nav__section-title">Compras</label></span><div class="myml-nav__section-list"><a id="myml-nav__menu-item-favorites" class="myml-nav__menu-item " href="{{route('historialComp')}}"><span class="myml-nav__menu-item-text">Favoritos</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-buyer_questions" class="myml-nav__menu-item " href="{{route('preguntas')}}"><span class="myml-nav__menu-item-text">Preguntas</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-my_quotations" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Cotizaciones</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-purchases" class="myml-nav__menu-item " href="{{route('historialComp')}}"><span class="myml-nav__menu-item-text">Compras</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-subscriptions" class="myml-nav__menu-item " href="https://www.mercadolibre.com.mx/subscriptions/list"><span class="myml-nav__menu-item-text">Suscripciones</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-auctions" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Subastas</span></a></div></section><section class="myml-nav__section myml-nav__section--has-active-item"><input class="myml-nav__section-toggle-trigger" type="checkbox" id="myml-menu-section-toggle-my_sales" checked="true"><span class="myml-nav__section-heading myml-nav__section-heading--has-items"> <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--my_sales" data-tooltip="Ventas"><svg viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
    <path d="M14.889 3.893a.498.498 0 0 1 .131.338v2.137c0 .954-.867 1.693-1.9 1.693-.548 0-1.05-.208-1.4-.546-.35.338-.85.546-1.399.546-.548 0-1.05-.208-1.4-.546-.35.338-.851.546-1.4.546-.548 0-1.05-.208-1.4-.546-.349.338-.85.546-1.399.546-.548 0-1.05-.208-1.4-.546-.35.338-.85.546-1.4.546C.89 8.061.024 7.322.024 6.368v-1.79l.047-.21 1.516-3.264a.5.5 0 0 1 .449-.29l11.01-.103a.5.5 0 0 1 .455.284l1.389 2.898zm-.869.501l-1.284-2.68-10.376.098-1.337 2.877v1.68c0 .363.387.692.9.692s.9-.33.9-.693a.5.5 0 1 1 1 0c0 .364.386.693.9.693.512 0 .899-.33.899-.693a.5.5 0 1 1 1 0c0 .364.387.693.9.693s.9-.33.9-.693a.5.5 0 1 1 1 0c0 .364.386.693.899.693s.9-.33.9-.693a.5.5 0 1 1 1 0c0 .364.386.693.9.693.512 0 .9-.33.9-.693V4.394zm-.555 9.572l.02-6.406a.5.5 0 1 1 1 .003l-.024 7.403H.561V7.462a.5.5 0 0 1 1 0v6.504h11.904zm-9.529-2.551a.5.5 0 0 1 0-1h7.3a.5.5 0 0 1 0 1h-7.3z" fill="#999"></path>
  </svg></label> <label for="myml-menu-section-toggle-my_sales" class="myml-nav__section-title">Ventas</label></span><div class="myml-nav__section-list"><a id="myml-nav__menu-item-publications" class="myml-nav__menu-item myml-nav__menu-item--active" href="{{route('publicaciones')}}"><span class="myml-nav__menu-item-text">Publicaciones</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-seller_questions" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Preguntas</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-myml_sales" class="myml-nav__menu-item " href="{{route('historialVentas')}}"><span class="myml-nav__menu-item-text">Ventas</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-my_contacts" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Datos de mis interesados</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-advertising" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Campaña de publicidad</span></a></div></section><section class="myml-nav__section "><input class="myml-nav__section-toggle-trigger" type="checkbox" id="myml-menu-section-toggle-config" '=""><span class="myml-nav__section-heading myml-nav__section-heading--has-items"> <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--config" data-tooltip="Configuración"><svg viewBox="0 0 15 14" xmlns="http://www.w3.org/2000/svg">
    <path d="M13.183 9h1.34V5h-1.34c-.07-.2-.15-.39-.24-.59l.94-.95-2.82-2.82-.95.94c-.2-.09-.39-.17-.59-.24V0h-4v1.34c-.2.07-.39.15-.59.24l-.95-.94-2.82 2.82.94.95c-.09.2-.17.39-.24.59H.523v4h1.34c.07.2.15.398.24.59l-.94.95 2.82 2.82.95-.94c.192.09.39.17.59.24V14h4v-1.34c.2-.07.398-.15.59-.24l.95.94 2.82-2.82-.94-.95c.09-.192.17-.39.24-.59zm-.57 1.54l-1.55 1.55-.77-.76-.57.27a4.4 4.4 0 0 1-.5.21l-.6.21v1.08h-2.2V12l-.6-.21a4.4 4.4 0 0 1-.5-.21l-.57-.27-.77.76-1.55-1.53.76-.77-.27-.57a4.4 4.4 0 0 1-.21-.5l-.19-.6h-1.1V5.9h1.1l.21-.6a4.4 4.4 0 0 1 .21-.5l.27-.57-.76-.77 1.53-1.55.77.76.57-.27a4.4 4.4 0 0 1 .5-.21l.6-.19V.9h2.2V2l.6.21c.17.06.338.13.5.21l.57.27.77-.76 1.55 1.55-.76.77.27.57c.08.162.15.33.21.5l.21.6h1.08v2.2h-1.1l-.21.6a4.4 4.4 0 0 1-.21.5l-.27.57.78.75zM7.523 4.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm0 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" fill="#999"></path>
  </svg></label> <label for="myml-menu-section-toggle-config" class="myml-nav__section-title">Configuración</label></span><div class="myml-nav__section-list"><a id="myml-nav__menu-item-my_details" class="myml-nav__menu-item " href="{{route('perfil')}}"><span class="myml-nav__menu-item-text">Mis datos</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-security" class="myml-nav__menu-item " href="{{route('perfil')}}"><span class="myml-nav__menu-item-text">Seguridad</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-my_emails" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">E-mails</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-search_alerts" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Alertas de búsqueda</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-eshop" class="myml-nav__menu-item " href="https://eshops.mercadolibre.com.mx/eshop"><span class="myml-nav__menu-item-text">eShop</span></a></div></section></div></div></nav><label class="myml-nav__overlay" for="myml-menu-toggle"></label>
            <script>
                // https://www.npmjs.com/package/decouple
                (function(e){if(typeof exports==="object"&&typeof module!=="undefined"){module.exports=e()}else if(typeof define==="function"&&define.amd){define([],e)}else{var n;if(typeof window!=="undefined"){n=window}else if(typeof global!=="undefined"){n=global}else if(typeof self!=="undefined"){n=self}else{n=this}n.decouple=e()}})(function(){var e,n,t;return function i(e,n,t){function r(f,u){if(!n[f]){if(!e[f]){var d=typeof require=="function"&&require;if(!u&&d)return d(f,!0);if(o)return o(f,!0);var a=new Error("Cannot find module '"+f+"'");throw a.code="MODULE_NOT_FOUND",a}var s=n[f]={exports:{}};e[f][0].call(s.exports,function(n){var t=e[f][1][n];return r(t?t:n)},s,s.exports,i,e,n,t)}return n[f].exports}var o=typeof require=="function"&&require;for(var f=0;f<t.length;f++)r(t[f]);return r}({1:[function(e,n,t){"use strict";var i=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}().bind(window);function r(e,n,t){var r,o=false;function f(e){r=e;u()}function u(){if(!o){i(d);o=true}}function d(){t.call(e,r);o=false}e.addEventListener(n,f,false);return f}n.exports=r},{}]},{},[1])(1)});

                (function() {
                    var sectionToggles = document.querySelectorAll('.myml-nav__menu .myml-nav__section-icon');
                    var menuToggleChk = document.querySelector('#myml-menu-toggle');
                    var header = document.querySelector('.nav-header');
                    var appWrapper = document.querySelector('.app-wrapper');
                    var menuWrapper = document.querySelector('.menu-wrapper');
                    var navContainer = document.querySelector('.myml-nav__container');
                    var openByDefault = (document.querySelector('.app-wrapper--menu-expanded')) ? true : false;
                    var toggleClassName = 'app-wrapper--menu-expanded';
                    var inputMenuToggle = document.getElementById('myml-menu-toggle');

                    var brakepoints = {
                    small: '1024',
                    large: '1860'
                    };

                    function fixMenuOnScroll() {
                    var scrollY = window.pageYOffset;
                    var wrapperTop = document.querySelector('.app-wrapper').offsetTop;

                    if (!scrollY) {
                        var d = document, r = d.documentElement, b = d.body;
                        scrollY = r.scrollTop || b.scrollTop || 0;
                    }
                    
                    if (scrollY < wrapperTop) {
                        navContainer.classList.remove('myml-nav__container--active');
                    } else {
                        navContainer.classList.add('myml-nav__container--active');
                    };
                    }

                    function showMenu(){
                    appWrapper.classList.add(toggleClassName);
                    inputMenuToggle.checked = true;
                    inputMenuToggle.disabled = true;
                    }

                    function hideMenu(){
                    appWrapper.classList.remove(toggleClassName);
                    inputMenuToggle.checked = false;
                    inputMenuToggle.disabled = false;
                    }

                    function responsiveMenu() {
                    if (openByDefault) {
                        (window.innerWidth > brakepoints.small) ? showMenu() : hideMenu();
                    } else {
                        (window.innerWidth > brakepoints.large) ? showMenu() : hideMenu();
                    }
                    }

                    !openByDefault && decouple(window, 'scroll', fixMenuOnScroll.bind(this));
                    !openByDefault && fixMenuOnScroll();
                    decouple(window, 'resize', responsiveMenu.bind(this));
                    responsiveMenu();

                    [].forEach.call(sectionToggles, function(toggle) {
                    toggle.addEventListener('click', function(e) {
                        var htmlFore = toggle.nextElementSibling.getAttribute('for');
                        var chk = document.querySelector('#' + htmlFore);
                        
                        if (chk) {
                            if (!menuToggleChk.checked) {
                                chk.checked = true;
                            } else {
                                e.preventDefault();
                                chk.checked = !chk.checked;
                            }
                        }
                    });
                    });

                    var tooltipBaseClass = 'myml-nav__menu-tooltip';
                    [].forEach.call(sectionToggles, function(tooltipEl) {
                    var tTimer;
                    tooltipEl.addEventListener('mouseenter', function(e) {
                        if (menuToggleChk.checked) {
                        return;
                        }

                        var trg = e.target;
                        var tooltip = trg.tooltip;
                        if (!tooltip) {
                        var tooltip = document.createElement('div');
                        tooltip.className = tooltipBaseClass;
                        tooltip.innerHTML = trg.getAttribute('data-tooltip');
                        menuWrapper.appendChild(tooltip);
                        trg.tooltip = tooltip;
                        }

                        tTimer = setTimeout(function() {
                        var triggerCoords = e.target.getBoundingClientRect();
                        var left = triggerCoords.right + 2;
                        var top = (parseInt(triggerCoords.top, 10) + parseInt(triggerCoords.bottom, 10)) / 2 - tooltip.offsetHeight / 2;

                        tooltip.style.left = left + 'px';
                        tooltip.style.top = (top + window.scrollY) + 'px';

                        tooltip.classList.add(tooltipBaseClass + '--open');
                        }, 200);
                    });

                    tooltipEl.addEventListener('mouseleave', function(e) {
                        clearTimeout(tTimer);
                        if (e.target.tooltip) {
                        e.target.tooltip.classList.remove(tooltipBaseClass + '--open');
                        setTimeout(function() {
                            if (e.target.tooltip) {
                            menuWrapper.removeChild(e.target.tooltip);
                            e.target.tooltip = null;
                            }
                        }, 200);
                        }
                    });
                    });
                })();
            </script>
        </div>
        <div class="page-wrapper">
            <div class="page-wrapper__content"> 

                <script type="text/javascript"> 
                    var jsGlobalModel = {
                        bannerPositionAB: 'LEFT'
                    };
                </script> 
                <section id="listContainer" class="container" data-js="data-container"> 
                  <h1 class="myml-title">Publicaciones</h1> 
                        <div class="col-md-10 cont_sub_cont" style="padding-left: 0px;">
            <div class="col-md-12 textIzquierda" style="margin-left: 10px;background-color:white;width: 99%;">   
            
        </div>
        <div class="col-md-12 cont_publicaciones_info" style="padding-left: 0px;">
            <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">


    <li role="presentation"  id="activas" @if($active==1)class="active"@endif><a @if($active==1)
    style="background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0%,#eee),color-stop(100%,#fff));background-image: -webkit-linear-gradient(#eee,#fff 25px);background-image: -moz-linear-gradient(#eee,#fff 25px);background-image: -o-linear-gradient(#eee,#fff 25px);background-image: linear-gradient(#eee,#fff 25px);"
    @endif href="{{action('Usuario\MenuUsuarioController@showAllPublicaciones')}}" >Activas ( {{$totalActivos}} )</a></li>
    <li role="presentation"  id="pausadas" @if($active==2)class="active"@endif><a @if($active==2)style="background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0%,#eee),color-stop(100%,#fff));background-image: -webkit-linear-gradient(#eee,#fff 25px);background-image: -moz-linear-gradient(#eee,#fff 25px);background-image: -o-linear-gradient(#eee,#fff 25px);background-image: linear-gradient(#eee,#fff 25px);"
    @endif href="{{action('Usuario\MenuUsuarioController@showAllPublicacionesPausadas')}}">Pausadas ({{$totalPausados}})</a></li>
    <li role="presentation" id="finalizadas" @if($active==3)class="active"@endif><a @if($active==3)
    style="background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0%,#eee),color-stop(100%,#fff));background-image: -webkit-linear-gradient(#eee,#fff 25px);background-image: -moz-linear-gradient(#eee,#fff 25px);background-image: -o-linear-gradient(#eee,#fff 25px);background-image: linear-gradient(#eee,#fff 25px);"
    @endif href="{{action('Usuario\MenuUsuarioController@showAllPublicacionesFinalizadas')}}" >Finalizadas ({{$totalFinalizados}})</a></li>
  </ul> 
  <div class="tab-content" id="activas" style="">
    <div role="tabpanel" class="tab-pane active" id="home">
    <div style=" height: 60px; text-align: left; padding: 10px" >
     <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="text" name="" placeholder="Buscar en publicaciones" style="border-radius:  3px;padding: 2px; height: 30px;">
        <button style="border-radius: 5px; background-color: #cce3f7; color:#566573 ; margin-left: 10px; border:1px solid #79a8c7">Buscar</button>
        <label style="margin: 10px">Filtros:</label>
        <a href="">Ninguno</a>
    </div> 
        <table border="2" style="width: 100%">
           
            <thead class="mfOrders" style="height: 50px; padding: 12px">
              <tr> 
                <th style="height: 30px; padding-left: 10px" ><input type="checkbox" name="todo"></th>
                <th>
                    <div class="mymlDropdownMassiveActions massive secondary ch-dropdown" id="primerMenu" onclick="mostrarPrimerMenu()">
                        <p class="itemsSecondaryActionsContainer ch-dropdown-trigger ch-dropdown-ico ch-btn-skin ch-btn-small ch-points-ltlb ch-user-no-select" style="height: 25px;margin:5px;">
                            <span class="ico itemsSecondaryActionsIcn"><i style="width: 20px;margin-top: -3px;padding-top: 0px;height: 20px;margin-left: -5px;" class="ch-icon-cog"></i></span>
                        </p>
                        <ul id="primerMenuUL" class="ch-dropdown-content ch-hide ch-points-ltlb" role="menu" aria-hidden="true" style="position: absolute;    left: 8.9%;top: 57.9%;z-index: 1;overflow: hidden;">
                            <a role="menuitem"></a>

                                <li class="masiveActionOption cannot reactivate">                                
                                    <a href="" style="padding:0px;margin:0px"><p>Pausar</p></a>                                
                                </li>
                                <li class="masiveActionOption cannot finalize">                                
                                    <a href="" style="padding:0px;margin:0px"><p>Finalizar</p></a>
                                </li>
                                <li class="masiveActionOption cannot modify_price">                                
                                    <a href="" style="padding:0px;margin:0px"><p>Modificar precio</p></a>
                                </li>
                        </ul>
                    </div> 
               </th>
                <th></th>
                <th></th>
                <th colspan="4" style="text-align: right; padding: 5px">Publicaciones 1 a 1 de 1 | <a href=""> Con mas venta</a> </th> 
              </tr>
            </thead>
            <tbody>
              
              @foreach($articulos as $venta) 
            
              <tr>
                    <td  rowspan="2" style="padding-top: 25px"><input type="checkbox" name="" class="settings"></td>
                    <td rowspan="2" width="50xp" >
                        <img src="images/{{ auth()->user()->_id }}/{{$venta->idPublicacion}}/{{$venta->urlPrincipal}}" width="80"  style="margin-bottom: -25px">
                    </td>
                    <td style="color: blue;font-size: 15px; text-align:left; padding-left: 6px;">
                        <a href="id={{$venta->_id}}&user={{$venta->idUser}}" style="color: blue">{{$venta->titulo}}</a>
                    </td>
                    <td></td>
                    <td></td>
                    <td style="margin-bottom: 20px" ><label class="price">{{$venta->precio}}</label> X 1 disponible</td>
                    <td colspan="2" style="text-align: right;">Finaliza en 59 días</td>
              </tr>
               <tr>
                    <td colspan=2 style="text-align: left;padding-left: 6px;">
                        <div class="row" style="    padding-top: 10px;">
                            <div class="col-md-12">
                                <p style="font-size: 11px;">Publicacion <?php if($venta->tipoPublicacion=="free"){echo "Gratuita";}?><span style="color: #999">| #{{$venta->id}}</span></p>  
                            </div> 
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td colspan="2" style="width: 150px;text-align: right;">
                        <div class="row">
                            <div class="col-md-8" style="margin-top: 7px;">
                                <a href="#" class="A_1" id="{{$venta->idPublicacion}}" style="height: 25px; width: 100%;margin-right: -25px;color: #476274; text-align: center;" onclick="modificarPublicacion(id)">Modificar</a> 
                            </div>
                            <div class="col-md-4">
                                <div id="{{$venta->idPublicacion}}" onclick="mostrarSegundoMenu(id)" class="mymlDropdownMassiveActions massive secondary ch-dropdown">
                                    <p class="itemsSecondaryActionsContainer ch-dropdown-trigger ch-dropdown-ico ch-btn-skin ch-btn-small ch-points-ltlb ch-user-no-select" style="height: 25px;margin:5px;">
                                    <span class="ico itemsSecondaryActionsIcn"><i style="width: 20px;margin-top: -3px;padding-top: 0px;height: 20px;margin-left: -5px;" class="ch-icon-cog"></i></span>
                                    </p>
                                    <ul id="segundoMenu{{$venta->idPublicacion}}" class="ch-dropdown-content ch-hide ch-points-ltlb" role="menu" aria-hidden="true" style="overflow: hidden;    overflow: hidden;
    margin-left: -65px;
    margin-top: -6px;    border-radius: 5px 0px 5px 5px !important;">
                                        <a role="menuitem"></a>
                                        <li class="masiveActionOption cannot reactivate">                                
                                            <a href="javascript:finalizar('{{$venta->id}}', 1)" style="padding:0px;margin:0px"><p style="color: #000;text-align: left;">Reactivar</p></a>                                
                                        </li>
                                        <li class="masiveActionOption cannot reactivate">                                
                                            <a href="javascript:finalizar('{{$venta->id}}', 2)" style="padding:0px;margin:0px"><p style="color: #000;text-align: left;">Pausar</p></a>                                
                                        </li>
                                        <li class="masiveActionOption cannot finalize">                                
                                            <a href="javascript:finalizar('{{$venta->id}}', 3)" style="padding:0px;margin:0px"><p style="color: #000;text-align: left;">Finalizar</p></a>
                                        </li>
                                       
                                    </ul>
                                </div> 
                            </div>
                        </div> 
              </tr>
              <!-- Modal -->
              <div class="modal fade in" id="modalModificarPublicacion_{{$venta->idPublicacion}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="background-color: rgba(0,0,0,0.7);">
                <div class="modal-dialog" style="width: 46%;height: auto;">
                  <div class="modal-content" style="margin: 30% auto;">
                        {!! Html::style('css/updateModal-bc8b96c640.css') !!}  
                        <form action="{{route('modificarPublicacion')}}" class="modifFormClass " name="modifForm" id="modifFormModal" novalidate="novalidate">
                            <fieldset>
                                <input type="hidden" name="idPublicacion" value="{{$venta->_id}}">
                                <input type="hidden" name="idUser" value="{{$venta->idUser}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                <input type="hidden" name="idItem" value="{{$venta->_id}}">
                                <input type="hidden" name="tipoUpdate" value="opcional">
                                <!--
                                Variables: status, buyingMode, cat. ofertas, categId, siteID
                                Programada => muestro fecha activacion
                                Clasificado - sin ofertas (SRV con precio esprecificado) => titulo, precio, telefono
                                Con ofertas actuales o arrastradas (sold_quantity > 0) => No modif titulo    -->
                                <legend> Modificar publicación</legend>
                                <p class="required">* Datos obligatorios</p>
                                <!-- Título -->
                                <p class="ch-form-row">
                                    <label class="required modif-title" for="title">
                                        <span> Título: <em>*</em></span> 
                                    </label>
                                    
                                        <input type="text" id="titulo" value="{{$venta->titulo}}" name="titulo" maxlength="60" class="ch-points-ltrt">
                                    
                                </p>
                                <input type="hidden" id="isRelistingForEver" name="isRelistingForEver" value="false">
                                <!-- Precio --> 
                                <p class="ch-form-row ch-form-row-price-fix"></p>
                                <div class="ch-form-row ch-form-row-price-fix">
                                    <label class="required" for="priceTot">
                                        <span>Precio: <em>*</em></span> 
                                    </label>
                                    <select data-js="currency" id="moneda" name="moneda">
                                        <option value="dolares">U$S</option>
                                        <option value="pesos" selected="">$</option>
                                    </select>
                                    <input type="text" data-js="price" class="allprice ch-points-ltrt" name="precio" id="precio" value="{{$venta->precio}}" size="15">
                                    <span class="error-indicator"></span>
                                    <div class="error"></div>
                                </div>  
                                <input type="hidden" id="isMotors" name="isMotors" value="true"> 
                                <input type="hidden" id="attribute" name="attribute" value="{id=KILOMETERS, name=Kilómetros, value_id=null, value_name=10000 km, value_struct={number=10000, unit=km}, attribute_group_id=FIND, attribute_group_name=Ficha técnica}">
                                <input type="hidden" id="attributeValueName" name="attributeValueName" value="10000"> 
                                <p class="ch-form-row"> 
                                        <label class="required" for="km">
                                            <span>Kilómetros:  <em>*</em></span>
                                        </label> 
                                    <input type="text" id="kilometros" value="{{$venta->kilometros}}" name="kilometros" maxlength="10">
                                </p> 
                                <!-- Teléfono 1-->
                                <div class="ch-form-row telephone-contact">
                                    <label class="required" for="telephone1">
                                        <span>Teléfono:  <em>*</em></span>
                                    </label>
                                    <div class="ui-telephone ui-telephone--with-flag ui-telephone--change-flag ui-telephone--success">
                                        <div class="ui-telephone__number"><div class="ui-telephone__flags"><div class="ui-telephone__selected-flag"><div class="ui-telephone__flag-icon ui-telephone__flag-icon--mx"></div></div><div class="ui-telephone__flags-list"><ul class="ui-telephone__flags-list-ul"><li data-country="mx" class="ui-telephone__flags-list-item"><div class="ui-telephone__flag-icon ui-telephone__flag-icon--mx"></div><span class="ui-telephone__flag-name">México</span><span class="ui-telephone__flag-code">52</span></li></ul></div></div>
                                            <input id="telefono" name="telefono" class="ui-telephone__input ch-points-ltrt" type="tel" required="" value="{{$venta->telefono}}" data-validations="tel-validations" data-country="52" data-country-code="val_tel_country_code1" data-area-code="val_tel_pref" data-number="val_tel1" maxlength="22" placeholder="222 1234567">
                                            
                                            <input type="hidden" name="val_tel_country_code1" id="val_tel_country_code1" data-js="val_tel_country_code1" value="52">
                                            <input type="hidden" name="val_tel_pref" id="val_tel_pref" data-js="val_tel_pref" value="667">
                                            <input type="hidden" name="val_tel1" id="val_tel1" data-js="val_tel1" value="2273320">
                                        <span class="ui-telephone__focus-line"></span></div>
                                        <div class="ui-telephone__validations" data-js="tel-validations"><span class="ui-telephone__validation--success valid is-visible">El teléfono es correcto.</span><span class="ui-telephone__validation--error possible">El número ingresado no es un número de teléfono.</span><span class="ui-telephone__validation--error not-a-number">El número no es válido. Ingresa tu número de teléfono.</span><span class="ui-telephone__validation--error min">Este teléfono tiene menos dígitos de los requeridos.</span><span class="ui-telephone__validation--error invalid-default-number">El teléfono cargado en tu cuenta no es válido. Verifícalo por favor.</span><span class="ui-telephone__validation--error max">Este teléfono excede el máximo de dígitos posible.</span><span class="ui-telephone__validation--error onlyNumbers">Solo puedes ingresar números.</span><span class="ui-telephone__validation--success notMobile">El teléfono es correcto. Revisa que sea un celular y continúa.</span><span class="ui-telephone__validation--error required">Completa este dato.</span><span class="ui-telephone__validation--info zero">Ej.: 222 1234567</span></div>
                                    </div>
                                </div>
                                <!-- Teléfono 2 -->
                                <div class="ch-form-row telephone-contact">
                                    <label for="telephone2">
                                        <span>Teléfono opcional:</span>
                                    </label>
                                    <div class="ui-telephone ui-telephone--with-flag ui-telephone--change-flag">
                                        <div class="ui-telephone__number"><div class="ui-telephone__flags"><div class="ui-telephone__selected-flag"><div class="ui-telephone__flag-icon ui-telephone__flag-icon--mx"></div></div><div class="ui-telephone__flags-list"><ul class="ui-telephone__flags-list-ul"><li data-country="mx" class="ui-telephone__flags-list-item"><div class="ui-telephone__flag-icon ui-telephone__flag-icon--mx"></div><span class="ui-telephone__flag-name">México</span><span class="ui-telephone__flag-code">52</span></li></ul></div></div>
                                            <input id="telephone2" name="telefono2" class="ui-telephone__input ch-points-ltrt" type="tel" value="{{$venta->telefono2}}" data-validations="tel-validations2" data-country="MX" data-country-code="val_tel_country_code2" data-area-code="val_tel_pref2" data-number="val_tel2" maxlength="22" placeholder="222 1234567">
                                            
                                            <input type="hidden" name="val_tel_country_code2" id="val_tel_country_code2" data-js="val_tel_country_code2">
                                            <input type="hidden" name="val_tel_pref2" id="val_tel_pref2" data-js="val_tel_pref2">
                                            <input type="hidden" name="val_tel2" id="val_tel2" data-js="val_tel2">
                                        <span class="ui-telephone__focus-line"></span></div>
                                        <div class="ui-telephone__validations" data-js="tel-validations2"><span class="ui-telephone__validation--success valid">El teléfono es correcto.</span><span class="ui-telephone__validation--error possible">El número ingresado no es un número de teléfono.</span><span class="ui-telephone__validation--error not-a-number">El número no es válido. Ingresa tu número de teléfono.</span><span class="ui-telephone__validation--error min">Este teléfono tiene menos dígitos de los requeridos.</span><span class="ui-telephone__validation--error invalid-default-number">El teléfono cargado en tu cuenta no es válido. Verifícalo por favor.</span><span class="ui-telephone__validation--error max">Este teléfono excede el máximo de dígitos posible.</span><span class="ui-telephone__validation--error onlyNumbers">Solo puedes ingresar números.</span><span class="ui-telephone__validation--success notMobile">El teléfono es correcto. Revisa que sea un celular y continúa.</span><span class="ui-telephone__validation--error required">Completa este dato.</span><span class="ui-telephone__validation--info zero">Ej.: 222 1234567</span></div>
                                    </div>
                                </div>
                                <!-- kilometraje de motors -->
                            </fieldset>
                            <div class="ch-actions">
                                <input type="submit" id="submitForm" class="ch-btn secondary" value="Guardar">
                                <a class="secondary" href="modificarVEHI?itemId={{$venta->_id}}">Modificar más
                                </a>  
                                <a class="btn-secondary" data-dismiss="modal" style="cursor: pointer;text-decoration: none;">Cancelar</a>
                            </div>
                        </form> 
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->  
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
</section>
                                
                        
            </div>
                
        </section> 
    
    </div></div></div>
@stop