@extends('layouts.master')
@section('titulo')
	<title>Ventas - MercadoLibre</title>	
@stop
@section('content')
{!! Html::style('css/styleHistoCompra.css') !!} 
{!! Html::style('css/historialpublicaciones.css') !!}  
<style>
            @media (max-width:770px){
            	#resultados {
            		width: 100% !important;
            		margin-left: 0px !important;
            	}
            	#resultados a:hover { 
	    
				    display: block;
				    background: rgb(52, 131, 250);
				    
				    color: white;
				    font-weight: 700;
				}
            }
            #resultados a:hover { 
    
			    display: block;
			    background: rgb(52, 131, 250);
			    
			    color: white;
			    font-weight: 700;
			}
            #resultados {
			    display: none;
			    background: #fff;
			    width: 49.9%;
			    height: auto;
			    position: absolute;
			    display: flex;
			    margin-left: 3%;
			    margin-top: -1%;
			    z-index: 1;
			}
			#resultados ul {
			    list-style: none;
			    width: 100%;
			    text-align: left;
			    padding-left: 0px;
			}
			#resultados ul li {
			    width: 100%;
			}
			#resultados a {
			    padding-top: 10px;
			    padding-bottom: 10px;
			    padding-left: 20px;
			    display: block;
			    width: 100%;
			    color: black;
			    text-decoration: none;
			}
            .nav-header{display:block;z-index:110;position:relative}.menu-myml-ads{z-index:101;position:relative}.menu-myml-ads__hide{display:none}.menu-myml-ads__container{-webkit-box-shadow:0 1px 6px 0 rgba(0,0,0,.15);box-shadow:0 1px 6px 0 rgba(0,0,0,.15);background-color:#fff;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;display:-webkit-box;display:-ms-flexbox;display:flex}.menu-myml-ads__container__center{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;position:relative}.menu-myml-ads__container__center__block{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.menu-myml-ads__container__center__block--border{border:1px solid #E0E0E0;-webkit-box-sizing:border-box;box-sizing:border-box}.menu-myml-ads__container--mobile{display:-webkit-box;display:-ms-flexbox;display:flex}.menu-myml-ads__container--desktop,.menu-myml-ads__container__center__text{display:none}.menu-myml-ads__container--mobile .menu-myml-ads__container__center__block{width:320px;height:50px}.menu-myml-ads__container--desktop .menu-myml-ads__container__center__block{width:728px;height:90px}@media (min-width:640px){.menu-myml-ads__container--mobile{display:none}}@media (min-width:800px){.menu-myml-ads__container--desktop{display:-webkit-box;display:-ms-flexbox;display:flex}.menu-myml-ads__container__center__block{margin-bottom:10px;margin-top:10px}.menu-myml-ads__container__center__text{-webkit-transform:translate(-100%,-50%) rotate(180deg);-ms-transform:translate(-100%,-50%) rotate(180deg);transform:translate(-100%,-50%) rotate(180deg);-webkit-writing-mode:vertical-lr;-ms-writing-mode:tb-lr;writing-mode:vertical-lr;position:absolute;padding-left:3px;font-size:10px;display:block;color:grey;top:50%;left:0}}
            .app-wrapper,body{display:-webkit-box;display:-ms-flexbox}.myml-nav__section--toggle .myml-nav__section-title,body{-webkit-box-orient:vertical;-webkit-box-direction:normal}.myml-nav a>*,.myml-nav__overlay{pointer-events:none}.andes-widther{width:256px}.andes-width--25{width:25%;max-width:initial}.andes-width--50{width:50%;max-width:initial}.andes-width--75{width:75%;max-width:initial}.andes-width--100{width:100%;max-width:initial}.andes-width--150{width:150%;max-width:initial}.andes-width--200{width:200%;max-width:initial}body{display:flex;-ms-flex-direction:column;flex-direction:column}[role=main],body{height:auto;min-height:100%}.nav-footer,.nav-header,[role=main]{display:block}.nav-footer,.nav-footer-access,.nav-header{z-index:110;position:relative}.nav-footer-access-content{margin-top:0}.nav-categs-overlay{z-index:109}.app-wrapper{display:flex}.menu-wrapper{width:58px;min-width:58px}.page-wrapper{-webkit-box-flex:1;-ms-flex:1;flex:1;padding-left:20px;padding-right:20px;min-width:0;margin:30px auto 60px;-webkit-box-sizing:content-box;box-sizing:content-box}.page-wrapper__content{max-width:1200px;margin:0 auto}.myml-nav,.myml-nav *,.myml-nav :after,.myml-nav :before{-webkit-box-sizing:border-box;box-sizing:border-box}.myml-nav,.myml-nav__container{width:58px;-webkit-transition:width .25s cubic-bezier(.25,.1,.25,1);-o-transition:width .25s cubic-bezier(.25,.1,.25,1);transition:width .25s cubic-bezier(.25,.1,.25,1)}.myml-nav{background-color:#f5f5f5;height:100vh;min-height:100%;z-index:100;position:relative}.myml-nav__container{font-family:"Proxima Nova",-apple-system,"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;font-size:13px;font-weight:400;-webkit-font-smoothing:antialiased;-webkit-overflow-scrolling:touch;height:100vh;padding-top:30px;overflow-x:hidden;overflow-y:hidden;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;overscroll-behavior:auto contain}.myml-nav__container--active{position:fixed;padding-top:0;top:46px}.myml-nav__menu{padding:1em 0 14em}.myml-nav__section{width:250px}.myml-nav__section--toggle{margin-left:4px}.myml-nav__section--toggle .myml-nav__user-permalink{font-size:16px;font-weight:600;line-height:1.35}.myml-nav__section--toggle .myml-nav__section-heading,.myml-nav__section--toggle .myml-nav__section-icon{-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.myml-nav__section-heading,.myml-nav__section-icon,.myml-nav__section-title{display:-webkit-box;display:-ms-flexbox;display:flex}.myml-nav__section-title{opacity:0}.myml-nav__section-heading{-webkit-box-align:center;-ms-flex-align:center;align-items:center;position:relative}.myml-nav__section-heading--has-items:after,.myml-nav__section-heading--has-items:before{content:'';display:block;width:10px;height:2px;background:#999;position:absolute;cursor:pointer;-webkit-transition:-webkit-transform .2s ease-out;-o-transition:transform .2s ease-out;transition:transform .2s ease-out;transition:transform .2s ease-out,-webkit-transform .2s ease-out;pointer-events:none}.myml-nav__section-heading--has-items:before{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);top:50%;right:32px;margin-top:-1px}.myml-nav__section-heading--has-items:after{-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg);top:50%;right:26px;margin-top:-1px}:checked+.myml-nav__section-heading--has-items:before{-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg)}:checked+.myml-nav__section-heading--has-items:after{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}.myml-nav__section-icon{width:54px;height:51px;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.myml-nav__section-icon>svg{width:20px;height:auto}.myml-nav__toggle{position:relative;left:1px;width:20px;height:20px;-webkit-transition:-webkit-transform .2s ease-out;-o-transition:transform .2s ease-out;transition:transform .2s ease-out;transition:transform .2s ease-out,-webkit-transform .2s ease-out}[class^=myml-nav__ham]{width:20px;height:2px;background-color:#3483fa;position:absolute;left:0;top:9px;opacity:1;-webkit-transition:opacity .2s ease-out;-o-transition:opacity .2s ease-out;transition:opacity .2s ease-out}.myml-nav__ham--top{top:4px}.myml-nav__ham--bottom{top:14px}.myml-nav__ham--cross{-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);opacity:0}.myml-nav__section-list{display:none}:checked~.myml-nav__section-list{display:block}:checked+.myml-nav{width:250px;-webkit-box-shadow:0 0 8px 0 rgba(0,0,0,.5);box-shadow:0 0 8px 0 rgba(0,0,0,.5)}:checked+.myml-nav .myml-nav__container{width:250px;overflow-y:auto}:checked+.myml-nav .myml-nav__toggle{-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)}:checked+.myml-nav .myml-nav__ham--bottom,:checked+.myml-nav .myml-nav__ham--top{opacity:0}:checked+.myml-nav .myml-nav__ham--cross,:checked+.myml-nav .myml-nav__section-title{opacity:1}:not(:checked)+.myml-nav .myml-nav__section-list{display:none}.myml-nav__section-title{-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-flex:1;-ms-flex:1;flex:1;color:#666;cursor:pointer;margin:0}.myml-nav__section--toggle .myml-nav__section-title{-ms-flex-direction:column;flex-direction:column;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;cursor:auto}.myml-nav__section-subtitle{display:block;color:#8c8c8c;line-height:20px;font-size:13px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;width:90%}.myml-nav__section--active .myml-nav__section-title{font-weight:600}.myml-nav__section--active .myml-nav__section-icon path,.myml-nav__section--has-active-item .myml-nav__section-icon path{fill:#3483fa}.myml-nav__menu .myml-nav__section-heading{border-left:4px solid transparent;-webkit-transition:border-color .2s ease-out;-o-transition:border-color .2s ease-out;transition:border-color .2s ease-out;font-size:13px}.myml-nav__menu .myml-nav__section-heading:hover{border-left-color:#3483fa}.myml-nav__menu-item{display:block;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding-left:58px;line-height:30px;-webkit-transition:color 180ms ease-out;-o-transition:color 180ms ease-out;transition:color 180ms ease-out;color:#666}.app-wrapper--menu-expanded :checked+.myml-nav+.myml-nav__overlay,.myml-nav__section-toggle-trigger,[id=myml-menu-toggle]{display:none}.myml-nav .myml-nav__menu-item--active{font-weight:600;color:#333}.myml-nav__menu-item-text{font-size:13px}.myml-nav a{text-decoration:none;color:#666}.myml-nav__overlay{visibility:hidden;opacity:0;z-index:-1;background-color:rgba(0,0,0,.5);position:fixed;top:0;right:0;bottom:0;left:0;-webkit-transition:opacity .3s ease-out;-o-transition:opacity .3s ease-out;transition:opacity .3s ease-out}:checked+.myml-nav+.myml-nav__overlay{visibility:visible;opacity:1;z-index:99;pointer-events:auto}.app-wrapper--menu-expanded .myml-nav{width:250px;-webkit-box-shadow:none;box-shadow:none;z-index:0}.app-wrapper--menu-expanded .page-wrapper{padding-left:0}.app-wrapper--menu-expanded .page-wrapper__content{margin-left:240px}.app-wrapper--menu-expanded :checked+.myml-nav .myml-nav__toggle{-webkit-transform:none;-ms-transform:none;transform:none;cursor:default}.app-wrapper--menu-expanded :checked+.myml-nav .myml-nav__ham--bottom,.app-wrapper--menu-expanded :checked+.myml-nav .myml-nav__ham--top{opacity:1}.app-wrapper--menu-expanded :checked+.myml-nav .myml-nav__ham--cross{opacity:0}.app-wrapper--menu-expanded-static .myml-nav,.app-wrapper--menu-expanded-static .myml-nav__container{height:100%;min-height:100vh;overscroll-behavior:auto}.app-wrapper--menu-expanded .myml-nav__container,.app-wrapper--menu-expanded-static .myml-nav__container{overflow-y:auto}.app-wrapper--menu-expanded.app-wrapper--menu-expanded-static [class^=myml-nav__ham]{background-color:#8c8c8c}@media (min-width:768px){.page-wrapper{padding-left:48px;padding-right:48px;margin:46px auto 60px}.myml-nav__container{padding-top:46px}.myml-nav__container--active{position:fixed;padding-top:0;top:46px}.myml-nav a>*{pointer-events:auto}.myml-nav label{cursor:pointer}.myml-nav__menu-item:focus,.myml-nav__menu-item:hover{color:#3483fa}.myml-nav__menu-tooltip{pointer-events:none;display:inline-block;position:absolute;color:#fff;font-family:"Proxima Nova",-apple-system,"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;font-size:12px;line-height:1;background-color:#333;-webkit-border-radius:2px;border-radius:2px;padding:8px 16px;z-index:101;opacity:0;-webkit-transform:translateX(-54px);-ms-transform:translateX(-54px);transform:translateX(-54px);-webkit-transition:opacity .2s ease-out,-webkit-transform .2s ease-out;-o-transition:transform .2s ease-out,opacity .2s ease-out;transition:transform .2s ease-out,opacity .2s ease-out;transition:transform .2s ease-out,opacity .2s ease-out,-webkit-transform .2s ease-out}.myml-nav__menu-tooltip--open{opacity:1;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0)}:checked~.myml-nav__menu-tooltip{display:none}}@media (min-width:1400px){.page-wrapper{padding-left:0}}@media (min-width:1750px){.app-wrapper--menu-expanded .page-wrapper__content{margin:0 auto}}
        </style> 

        <div class="menu-myml-ads menu-myml-ads__hide">
            <div class="menu-myml-ads__container menu-myml-ads__container--desktop">
                <div class="menu-myml-ads__container__center">
                    <span class="menu-myml-ads__container__center__text">Publicidad</span>
                    <div id="menu-myml-ads__container__center__block" class="menu-myml-ads__container__center__block menu-myml-ads__container__center__block--border" style="display: none;"><div id="google_ads_iframe_/105773011/MLM_MIML_Mi_cuenta/MLM_MIML_Resumen_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/105773011/MLM_MIML_Mi_cuenta/MLM_MIML_Resumen_0" title="3rd party ad content" name="google_ads_iframe_/105773011/MLM_MIML_Mi_cuenta/MLM_MIML_Resumen_0" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" style="border: 0px; vertical-align: bottom;" src="css/estado/saved_resource(3).html"></iframe></div></div>
                </div>
            </div>
        </div>  
        <div class="app-wrapper app-wrapper--menu-expanded app-wrapper--menu-expanded-static"><div class="menu-wrapper"><input type="checkbox" id="myml-menu-toggle" checked="true" disabled=""><nav class="myml-nav" role="complementary"><div class="myml-nav__container"><section class="myml-nav__section myml-nav__section--toggle"><div class="myml-nav__section-heading"><span class="myml-nav__section-icon"><label class="myml-nav__toggle" for="myml-menu-toggle"><span class="myml-nav__ham--top"></span><span class="myml-nav__ham--middle"></span><span class="myml-nav__ham--bottom"></span><span class="myml-nav__ham--cross"></span></label></span><p class="myml-nav__section-title"><span class="myml-nav__user-permalink">Mi cuenta</span><span class="myml-nav__section-subtitle">¡Hola {{auth()->user()->nombre}}!</span></p></div></section><div class="myml-nav__menu"><section class="myml-nav__section  myml-nav__section--active"><a href="https://myaccount.mercadolibre.com.mx/summary" class="myml-nav__section-heading"><span class="myml-nav__section-icon myml-nav__section-icon--myml_summary" data-tooltip="Resumen"><svg viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
    <path d="M1 1v12h12V1H1zm0-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1zm2.5 3.5a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm2.477 0h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1 0-1zM3.5 6.5a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm2.477 0h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1 0-1zM3.5 9.5a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1zm2.477 0h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1 0-1z" fill="#999"></path>
  </svg></span><p class="myml-nav__section-title">Resumen</p></a></section><section class="myml-nav__section "><a href="{{route('estado')}}" class="myml-nav__section-heading"><span class="myml-nav__section-icon myml-nav__section-icon--billing" data-tooltip="Facturación"><svg viewBox="0 0 15 17" xmlns="http://www.w3.org/2000/svg">
    <path d="M13.523 1h-12v14.22l.395-.428a.5.5 0 0 1 .729-.007l.95.99.94-.988a.5.5 0 0 1 .726.001l.93.988.962-.993a.5.5 0 0 1 .723.005l.93.988.964-.993a.5.5 0 0 1 .73.012l.884.978.982-.994a.5.5 0 0 1 .718.008l.437.46V1zM2.293 15.86l-.902.979a.5.5 0 0 1-.868-.339V.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v16a.5.5 0 0 1-.863.344l-.944-.995-.99 1.003a.5.5 0 0 1-.727-.016l-.88-.974-.957.986a.5.5 0 0 1-.723-.005l-.93-.988-.961.993a.5.5 0 0 1-.724-.005l-.926-.984-.937.985a.5.5 0 0 1-.724.002l-.944-.985zm7.365-6.149c0 .864-.558 1.683-1.926 1.791v.81h-.639v-.801c-.927-.063-1.61-.432-2.07-.945l.513-.693c.351.387.882.738 1.557.819V8.73c-.918-.234-1.88-.567-1.88-1.701 0-.927.764-1.62 1.88-1.701V4.5h.64v.837c.746.072 1.34.36 1.79.819l-.53.666a2.23 2.23 0 0 0-1.26-.657V7.92c.935.252 1.925.594 1.925 1.791zM6.14 6.966c0 .432.414.63.954.783v-1.62c-.576.045-.954.369-.954.837zm1.593 3.726c.738-.081 1.008-.522 1.008-.9 0-.513-.44-.72-1.008-.891v1.791z" fill="#999"></path>
  </svg></span><p class="myml-nav__section-title">Facturación</p></a></section><section class="myml-nav__section "><a href="#" class="myml-nav__section-heading"><span class="myml-nav__section-icon myml-nav__section-icon--reputation" data-tooltip="Reputación"><svg viewBox="0 0 16 18" xmlns="http://www.w3.org/2000/svg">
    <path d="M2.653 7.837L.67 5.854A.5.5 0 0 1 .523 5.5v-5a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.146.354l-1.984 1.983a6.5 6.5 0 1 1-10.74 0zm.63-.784A6.482 6.482 0 0 1 8.023 5c1.87 0 3.555.79 4.74 2.053l1.76-1.76V1h-13v4.293l1.76 1.76zM8.023 17a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zm2.286-7.906l.883.812-4.2 4.572-2.41-2.624.883-.811 1.527 1.661 3.317-3.61zM4.023 3.7a.5.5 0 0 1 0-1h8a.5.5 0 0 1 0 1h-8z" fill="#999"></path>
  </svg></span><p class="myml-nav__section-title">Reputación</p></a></section><section class="myml-nav__section "><input class="myml-nav__section-toggle-trigger" type="checkbox" id="myml-menu-section-toggle-my_purchases" '=""><span class="myml-nav__section-heading myml-nav__section-heading--has-items"> <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--my_purchases" data-tooltip="Compras"><svg viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
    <path d="M12.466 5.5H2.58l-.933 8H13.4l-.934-8zm-8.443-1v-1a3.5 3.5 0 1 1 7 0v1h2.333l1.167 10h-14l1.167-10h2.333zm1 0h5v-1a2.5 2.5 0 1 0-5 0v1z" fill="#999"></path>
  </svg></label> <label for="myml-menu-section-toggle-my_purchases" class="myml-nav__section-title">Compras</label></span><div class="myml-nav__section-list"><a id="myml-nav__menu-item-favorites" class="myml-nav__menu-item " href="{{route('historialComp')}}"><span class="myml-nav__menu-item-text">Favoritos</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-buyer_questions" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Preguntas</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-my_quotations" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Cotizaciones</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-purchases" class="myml-nav__menu-item " href="{{route('historialComp')}}"><span class="myml-nav__menu-item-text">Compras</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-subscriptions" class="myml-nav__menu-item " href="https://www.mercadolibre.com.mx/subscriptions/list"><span class="myml-nav__menu-item-text">Suscripciones</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-auctions" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Subastas</span></a></div></section><section class="myml-nav__section "><input class="myml-nav__section-toggle-trigger" type="checkbox" id="myml-menu-section-toggle-my_sales" '=""><span class="myml-nav__section-heading myml-nav__section-heading--has-items"> <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--my_sales" data-tooltip="Ventas"><svg viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
    <path d="M14.889 3.893a.498.498 0 0 1 .131.338v2.137c0 .954-.867 1.693-1.9 1.693-.548 0-1.05-.208-1.4-.546-.35.338-.85.546-1.399.546-.548 0-1.05-.208-1.4-.546-.35.338-.851.546-1.4.546-.548 0-1.05-.208-1.4-.546-.349.338-.85.546-1.399.546-.548 0-1.05-.208-1.4-.546-.35.338-.85.546-1.4.546C.89 8.061.024 7.322.024 6.368v-1.79l.047-.21 1.516-3.264a.5.5 0 0 1 .449-.29l11.01-.103a.5.5 0 0 1 .455.284l1.389 2.898zm-.869.501l-1.284-2.68-10.376.098-1.337 2.877v1.68c0 .363.387.692.9.692s.9-.33.9-.693a.5.5 0 1 1 1 0c0 .364.386.693.9.693.512 0 .899-.33.899-.693a.5.5 0 1 1 1 0c0 .364.387.693.9.693s.9-.33.9-.693a.5.5 0 1 1 1 0c0 .364.386.693.899.693s.9-.33.9-.693a.5.5 0 1 1 1 0c0 .364.386.693.9.693.512 0 .9-.33.9-.693V4.394zm-.555 9.572l.02-6.406a.5.5 0 1 1 1 .003l-.024 7.403H.561V7.462a.5.5 0 0 1 1 0v6.504h11.904zm-9.529-2.551a.5.5 0 0 1 0-1h7.3a.5.5 0 0 1 0 1h-7.3z" fill="#999"></path>
  </svg></label> <label for="myml-menu-section-toggle-my_sales" class="myml-nav__section-title">Ventas</label></span><div class="myml-nav__section-list"><a id="myml-nav__menu-item-publications" class="myml-nav__menu-item " href="{{route('publicaciones')}}"><span class="myml-nav__menu-item-text">Publicaciones</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-seller_questions" class="myml-nav__menu-item " href="{{route('publicaciones')}}"><span class="myml-nav__menu-item-text">Preguntas</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-myml_sales" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Ventas</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-my_contacts" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Datos de mis interesados</span></a></div><div class="myml-nav__section-list"><a id="myml-nav__menu-item-advertising" class="myml-nav__menu-item " href="#"><span class="myml-nav__menu-item-text">Campaña de publicidad</span></a></div></section><section class="myml-nav__section "><input class="myml-nav__section-toggle-trigger" type="checkbox" id="myml-menu-section-toggle-config" '=""><span class="myml-nav__section-heading myml-nav__section-heading--has-items"> <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--config" data-tooltip="Configuración"><svg viewBox="0 0 15 14" xmlns="http://www.w3.org/2000/svg">
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
		                <h1 class="myml-title">Ventas</h1> 
		        		<div class="col-md-10 cont_sub_cont">
	        <div class="col-md-12 textIzquierda" style="background-color:white;width: 99%;">	            
				<!--////////////////////////////////////////====LADO DERECHO====///////////////////////////////////////-->
			<div id="DIV_1"> 
    <div id="DIV_3">
        <div id="DIV_4">
    
        </div>
        <!-- TRACK MELIDATA -->

 
  
        <div id="DIV_16">
                    <div id="DIV_17">
                    </div>
                    <div id="DIV_18">
                        <p id="P_19">
                            Cargando<span id="SPAN_20"></span>
                        </p>
                    </div>
                    <div id="DIV_21">
                    </div>
                    <div id="DIV_22">
                   	
                     <?php
                for($i=0; $i<count($compras); $i++){ 
                    ?> 
                        <div id="DIV_155" style="margin-top: 15px !important; ">
                            <div id="DIV_156">
                                <h2 id="H2_157" style="    margin: 0px !important;">
                                    Enviado
                                </h2>
                              
                            </div>
                            <div id="DIV_159">
                                <div id="DIV_160">
                                     <span id="SPAN_161"><span id="SPAN_162"></span></span>
                              
                                    <ul id="UL_169">
                                        <li id="LI_170">
                                             <a href="/purchases/1291834911/shipments/25954795122/detail" id="A_171">Detalle del envío</a>
                                        </li>
                                        <li id="LI_172">
                                             <a href="http://ayuda.mercadolibre.com.mx/ayuda/purchases/options?order=1291834911" id="A_173">Tengo un problema</a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="DIV_174">
                                    <div id="DIV_175">
                                        <img src="images/{{ $articulos[$i][0]->idUser}}/{{$articulos[$i][0]->idPublicacion}}/{{$articulos[$i][0]->urlPrincipal}}" width="80"  style="margin-bottom: -25px">
                                    </div>
                                    <div id="DIV_178" style="display: contents;">
                                         <a style="display: contents;" href="#" class="A_179">{{$articulos[$i][0]->titulo}}</a>
                                        <div id="DIV_180">
                                            <p id="P_181" class="p-181">
                                                <span id="SPAN_182"></span>
                                                <meta content="219.00" id="META_183" /> <span id="SPAN_184">$</span> <span id="SPAN_185">{{$compras[$i]->precio}}</span>  x {{$compras[$i]->cantidad}} unidad
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="DIV_188">
                                    <ul id="UL_189">
                                        <li id="LI_190">
                                           {{$nombresCompradores[$i]}} 
                                        </li> 
                                        <li id="LI_192">
                                             <form action="verMensajes" method="post"> 
                                             	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                             	<input type="hidden" name="idCompra" value="{{$compras[$i]->_id}}">
                                             	<input type="submit" value="Ver mensajes" style="outline: none;background: none;border: 0px;box-shadow: none;color: blue;">
                                             </form>
                                        </li>
                                    </ul>
                                </div> 
                                <form action="{{route('detalleCompra')}}" method="post" accept-charset="utf-8">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                                    
                                                    <input type="hidden" name="codigoCompra" value="{{$compras[$i]->codigoCompra}}">
                                                    
                                                      <button type="submit" style="background: none;border: none;color: blue;" data-input-id="go_to_order">
                                                            Ver detalle
                                                        </button>
                                       </form> 
                            </div>
                        </div>
                 <?php
                        } 
                    ?> 
                    </div>
                </div>
    </div>
</div>

				</section>
		                        
	                    
	        </div>
	            
	    </section> 
    
	</div></div></div>

	
@stop