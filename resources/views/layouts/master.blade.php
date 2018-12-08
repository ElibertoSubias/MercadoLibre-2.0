<!DOCTYPE html> 
<html class="" lang="es-MX" data-site="MLM" data-country="MX" data-device="desktop"><head prefix=""><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	@yield('titulo') 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	{!! Html::style('css/bootstrap.css') !!}  
	<meta http-equiv="cleartype" content="on">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  
	<link rel="shortcut icon" href="https://http2.mlstatic.com/resources/frontend/commons-frontend/ui-dist/images/components/navigation/ML/favicon.ed1a7e19.ico">
	<link rel="apple-touch-icon" href="https://http2.mlstatic.com/resources/frontend/commons-frontend/ui-dist/images/components/navigation/ML/60x60-precomposed.0e169836.png">
	<link rel="apple-touch-icon" sizes="76x76" href="https://http2.mlstatic.com/resources/frontend/commons-frontend/ui-dist/images/components/navigation/ML/76x76-precomposed.f30c8ccd.png">
	<link rel="apple-touch-icon" sizes="120x120" href="https://http2.mlstatic.com/resources/frontend/commons-frontend/ui-dist/images/components/navigation/ML/120x120-precomposed.23b6a445.png">
	<link rel="apple-touch-icon" sizes="152x152" href="https://http2.mlstatic.com/resources/frontend/commons-frontend/ui-dist/images/components/navigation/ML/152x152-precomposed.7ffb5147.png"> 
	<link rel="preload" href="https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-600.woff2" as="font" type="font/woff2" crossorigin="true"> 
	<link rel="preload" href="https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-300.woff2" as="font" type="font/woff2" crossorigin="true"> 
	<link rel="preload" href="https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-400.woff2" as="font" type="font/woff2" crossorigin="true">
	<link rel="stylesheet" type="text/css" href="css/estado/bundle__menu_ML_mobile_plus.0a6809da.css" media="(max-width: 1023px)">
	<link rel="stylesheet" type="text/css" href="css/estado/bundle__menu_ML_desktop_plus.b18ef91a.css" media="(min-width: 1024px)">    
	<!-- Mobile viewport optimization http://goo.gl/b9SaQ -->
	<meta name="HandheldFriendly" content="True"> 
    <meta name="theme-color" content="#fff059"> 
	<link href="css/estado/chico-mesh.min.css" media="screen" rel="stylesheet"> 
	<link rel="stylesheet" href="css/estado/bundle__large-cc11468da7.gz.css"> 
    <meta name="layout" content="summary/summaryLayout">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 
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
        
		@font-face {
			font-family: 'Proxima Nova';
			font-weight: 600;
			font-style: normal;
			font-display: swap;
			src: url('https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-600.eot');
			src: url('https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-600.eot?#iefix') format('embedded-opentype'),
				url('https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-600.woff2') format('woff2'),
				url('https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-600.woff') format('woff'),
				url('https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-600.ttf') format('truetype');
		}

		@font-face {
			font-family: 'Proxima Nova';
			font-weight: 300;
			font-style: normal;
			font-display: swap;
			src: url('https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-300.eot');
			src: url('https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-300.eot?#iefix') format('embedded-opentype'),
				url('https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-300.woff2') format('woff2'),
				url('https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-300.woff') format('woff'),
				url('https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-300.ttf') format('truetype');
		}

		@font-face {
			font-family: 'Proxima Nova';
			font-weight: 400;
			font-style: normal;
			font-display: swap;
			src: url('https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-400.eot');
			src: url('https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-400.eot?#iefix') format('embedded-opentype'),
				url('https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-400.woff2') format('woff2'),
				url('https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-400.woff') format('woff'),
				url('https://http2.mlstatic.com/ui/webfonts/v4.0.0/proxima-nova/proxima-nova-400.ttf') format('truetype');
		} 
		.menu__chevron {
			right: 235px !important;
		}
	</style>   
    
	<!-- HTML5 support -->
	<!--[if lt IE 9]>
		<script src="https://http2.mlstatic.com/secure/org-img/ch/tools/html5shiv/html5shiv.js"></script>
	<![endif]-->
	
 
<body class="  ML" style=""> 
	<input type="checkbox" id="nav-header-menu-switch"> 
	<header role="banner" class="nav-header" data-siteid="MLM">
		<div class="nav-bounds nav-bounds-with-cart  nav-bounds-with-cp"> 
			<a class="nav-logo" href="{{route('dashboard')}}">
				Mercado Libre México - Donde comprar y vender de todo
			</a> 
			<div class="nav-header-menu-wrapper">
				<nav id="nav-header-menu-mobile" class="nav-header-menu-mobile-logged"> 
					
					<div id="nav-header-menu-mobile-content">  
						@isset(auth()->user()->_id)
						<div id="nav-header-menu-mobile-user-info" class="nav-header-menu-mobile-with-loyalty">
						    <form id="nav-header-mobile-avatar-form" method="POST" action="#" enctype="multipart/form-data">
						        <label for="nav-header-mobile-avatar-upload">
						            
						                <svg viewBox="0 0 100 100">
						                    <path stroke-linecap="round" stroke-width="3" stroke="#eee" fill="none" d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80"></path>
						                    <path class="nav-header-mobile-loyalty-level-1" stroke-linecap="round" stroke-width="3" stroke-dasharray="223,999" fill="none" d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80"></path>
						                </svg> 

									<img id="nav-header-mobile-user-avatar" class="" src="svg/user.svg" width="20" height="20">

						            <input id="nav-header-mobile-avatar-upload" name="file" type="file" accept="image/jpeg,.jpg,image/gif,.gif,image/png,.png,.jpeg,image/webp,.webp">
						        </label>
						    </form>
						    <div id="nav-header-user-greetings">¡Hola, {{auth()->user()->nombre}}!</div>
						    <div id="nav-header-user-mail-or-level">Nivel 1 - Inicial</div> 
						</div> 
						@endisset
				        <ul> 
				        	@isset(auth()->user()->_id)
		                    <li>
		                        <a href="{{route('perfil')}}">
		                            <i class="nav-icon-my-account-mobile"></i>
		                            <p>
		                                Mi cuenta
		                                
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-points-mobile"></i>
		                            <p>
		                                Mercado Puntos
		                                
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="{{route('historialComp')}}">
		                            <i class="nav-icon-purchases-mobile"></i>
		                            <p>
		                                Tus compras
		                                
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-notifications-mobile"></i>
		                            <p>
		                                Notificaciones
		                                
		                                    <span class="nav-header-notifications-badge"></span>
		                                
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-bookmarks-mobile"></i>
		                            <p>
		                                Favoritos
		                                
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-history-mobile"></i>
		                            <p>
		                                Tu historial
		                                
		                            </p>
		                        </a>
		                    </li> 
				        </ul> 
				        <ul> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-categories-mobile"></i>
		                            <p>
		                                Categorías 
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-points-discounts-mobile"></i>
		                            <p>
		                                Descuentos Mercado Puntos
		                                
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-supermercado"></i>
		                            <p>
		                                Supermercado 
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-stores-mobile"></i>
		                            <p>
		                                Tiendas oficiales 
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-deals-mobile"></i>
		                            <p>
		                                Ofertas de la semana 
		                            </p>
		                        </a>
		                    </li> 
		                    @endisset
		                    @empty(auth()->user()->_id)
		                    <li>
			                        <a href="{{route('crearcuentapersonal')}}">
			                            <i class="nav-icon-create-account-mobile"></i>
			                            <p>
			                                Crear cuenta 
			                            </p>
			                        </a>
			                    </li> 
		                    	<li>
			                        <a href="{{route('autenticar')}}">
			                            <i class="nav-icon-logout-mobile"></i>
			                            <p>
			                                Ingresar 
			                            </p>
			                        </a>
			                    </li>  
		                    @endempty
				        </ul> 
				        <ul> 
		                    <li>
		                        <a href="{{route('vender')}}">
		                            <i class="nav-icon-vender-mobile"></i>
		                            <p>
		                                Vender
		                                
		                            </p>
		                        </a>
		                    </li> 
		                    <li>
		                        <a href="#">
		                            <i class="nav-icon-help-mobile"></i>
		                            <p>
		                                Ayuda
		                                
		                            </p>
		                        </a>
		                    </li> 
		                    <li> 
		                        <a href="{{route('logout')}}" data-id="logout" rel="nofollow">
		                        	<i class="nav-icon-help-mobile"></i>
							     	<p>Salir</p>
							    </a>
		                    </li> 
		                    
				        </ul> 
				        <ul> 
		                    <li>
		                        <a href="#" id="nav-header-menu-download-mobile" data-os="">
		                            <i class="nav-icon-download-mobile"></i>
		                            <p>
		                                ¡Compra y vende con la app!
		                                
		                            </p>
		                        </a>
		                    </li> 
				        </ul> 
					</div> 
				</nav> 
				<label for="nav-header-menu-switch" aria-controls="nav-header-menu">
					<span class="hamburger-top-bread"></span>
					<span class="hamburger-patty"></span>
					<span class="hamburger-bottom-bread"></span>
				</label> 
				<nav id="nav-header-menu">  	 
				    @isset(auth()->user()->_id)
				    <div class="nav-header-user"><label for="nav-header-user-switch" tabindex="4" onmouseover="abrirMenu()" id="userswitch"><a href="#" class="nav-header-user-myml"><span><span class="nav-header-avatar-user" data-js="user-menu:nav-header-avatar-user"><img height="20" width="20" src="svg/user.svg" srcset="https://mla-s2-p.mlstatic.com/754093-MLA28045465991_082018-G.jpg 2x" class="nav-header-avatar-user-img" alt="{{auth()->user()->nombre}}{{auth()->user()->apellido}}"></span><span class="nav-header-username">{{auth()->user()->nombre}}</span><span class="nav-header-username-chevron"></span></span></a></label><input type="checkbox" id="nav-header-user-switch"><nav class="nav-header-user-layer user-menu" onmouseleave="cerrarMenu()" style="right: -224.813px;display: none;">
				    	
    <div class="user-menu__main2" style="display: none;">
      
<div class="user-menu__user-info-outer-container">
  <div class="user-menu__user-info-inner-container">

    <div class="user-menu__user-badge">
      <div class="user-menu__user-badge-image">
        
    
    <div class="user-menu__loyalty-components">
      
  <svg class="user-menu__user-progress user-menu--level-1" viewBox="0 0 100 100">
      <path class="base" stroke-linecap="round" stroke-width="3" stroke="#eee" fill="none" d="M50 10
          a 40 40 0 0 1 0 80
          a 40 40 0 0 1 0 -80">
      </path>
      <path class="progress" stroke-linecap="round" stroke-width="3" percentage="60" stroke-dasharray="223,999" fill="none" d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80"></path>
  </svg>

    </div>
  
    
  <form data-js="user-menu:avatar-form" method="POST" action="#" enctype="multipart/form-data" class="user-menu__avatar-form">
    <label class="user-menu__avatar-label">
      <span class="user-menu__avatar-text">Cambiar foto</span>
      false
      <img data-js="user-menu:avatar-picture" src="svg/user.svg" srcset="https://mla-s2-p.mlstatic.com/754093-MLA28045465991_082018-G.jpg 2x" class="user-menu__avatar-picture">
      <input data-js="user-menu:avatar-control" name="file" type="file" class="user-menu__avatar-control" accept="image/jpeg,.jpg,image/gif,.gif,image/png,.png,.jpeg,image/webp,.webp">
    </label>
  </form>

  
      </div>

      <p class="user-menu__user-badge-title">¡Hola, {{auth()->user()->nombre}}!</p>

      <p class="user-menu__user-badge-email">Nivel 1 - Inicial</p>

      <p class="user-menu__loyalty-goal">Te faltan 12 puntos para ser Aficionado</p>

    </div>

  </div>

  <a href="{{route('estado')}}" class="user-menu__primary-action ui-button ui-button--primary" data-id="my-account" rel="nofollow">
    Mi cuenta
  </a>
</div>

      
    <div class="user-menu__shortcuts ">
      
    <a href="{{route('estado')}}" data-id="points" rel="nofollow">
      Mercado Puntos
    </a>
  
    <a href="{{route('historialComp')}}" data-id="purchases" rel="nofollow">
      Compras
    </a>
  
    <a href="{{route('publicaciones')}}" rel="nofollow">
      Ventas
    </a>
  
    <a href="{{route('perfil')}}" data-id="personal-info" rel="nofollow">
      Mis datos
    </a>
  
    <a href="#" data-id="security" rel="nofollow">
      Seguridad
    </a>
  
    <a href="{{route('logout')}}" data-id="logout" rel="nofollow">
      Salir
    </a>
  
    </div>
  
    </div>
    <div class="user-menu__old">
      <a href="#" class="option-my-account" rel="nofollow">Mi cuenta</a><a href="{{route('logout')}}" class="option-logout" rel="nofollow">Salir</a>
    </div> 
  </nav></div>
  <a href="{{route('historialComp')}}" class="option-purchases">Compras</a> 
  <a tabindex="5" href="#" class="option-bookmarks bookmarks-widget modeless-box-trigger" rel="nofollow" aria-owns="modeless-44" aria-haspopup="true" popup-hidden="true"><span class="bookmarks-text">Favoritos</span></a> 
					<a tabindex="4" href="#" id="notiLink" class="option-notifications notifications-widget modeless-box-trigger" rel="nofollow" aria-owns="modeless-94" aria-haspopup="true" popup-hidden="true"><i class="nav-icon-notifications"><span>Notificaciones</span></i><span class="ml-count" style="display: none">0</span></a> 
					<a tabindex="6" href="#" rel="nofollow" class="option-sell nav-header-btn-pub">Vender</a> 
  @endisset
  @empty(auth()->user()->_id)
					<a href="{{route('crearcuentapersonal')}}" class="option-purchases" style="padding-right: 20px !important;">Crear cuenta</a> 
					<a href="{{route('autenticar')}}" class="option-purchases" style="padding-right: 20px !important;border-left: 1px solid rgba(51,51,51,.2);">Ingregar</a>  
					<a href="#" class="option-purchases" style="border-left: 1px solid rgba(51,51,51,.2);padding-right: 20px !important;">Ayuda</a> 
@endempty
				</nav> 
					<!-- Cuando el carrito esta vacio debe tener la clase "nav-cart-empty", cuando esta lleno "nav-cart-full" -->
				<a href="{{route('carrito')}}" title="Carrito de compras" class="nav-cart nav-cart-empty" id="nav-cart">
					<i class="nav-icon-cart"></i>
					<span style="font-size: 16px;position: absolute;top: -25%;right: 18%;"><b>@if($cant_carrito==0) @else{{$cant_carrito}}@endif</b></span>
					<span class="nav-icon-cart-quantity"><b>null</b></span></a> 
				</div> 
				@isset(auth()->user()->_id)
				@isset($direccion[0]->_id)
				<a href="#" class="nav-header-cp-anchor"> 
						Enviar a {{$direccion[0]->contacto}} CP {{$direccion[0]->codigopostal}} 
				</a> 
				@endisset
				@endisset
				<form class="nav-search" action="{{route('resultados')}}" method="GET" role="search" id="buscador-articulos">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
					<input value="" tabindex="1" type="text" class="nav-search-input" name="busqueda" max-length="120" autocapitalize="off" autocorrect="off" spellcheck="false" autocomplete="off" placeholder="Buscar productos, marcas y más..." id="caja_busqueda">

					<button class="nav-search-clear-btn" type="button" title="menu.autocomplete.clear"></button>
					<button class="nav-search-close-btn" type="button" title="menu.autocomplete.close"></button>


					<button type="submit" class="nav-search-btn">
						<i class="nav-icon-search"><span>Buscar</span></i>
					</button>
				</form>
				<div id="resultados" style="z-index: 122222;display: none;border-top: 1px solid #e6e6e6;border-bottom-right-radius: 2px;border-bottom-left-radius: 2px;">
					<ul id="cont-resultado"></ul>
				</div>  
			    <div class="nav-menu"> 
			        <div>
			            <ul class="nav-menu-list"> 
			                <li class="nav-menu-item">
			                	@isset(auth()->user()->_id)
				                	@isset($direccion[0]->_id)
				                    <a class="nav-menu-cp nav-menu-cp-logged" href="#"> 
				                            <span class="nav-menu-cp-send">Enviar a {{$direccion[0]->contacto}}</span> 
				                        <span class="nav-menu-link-cp"> 
				                                CP {{$direccion[0]->codigopostal}}
				                            
				                        </span> 
				                    </a>
				                    @endisset
								@endisset
			                </li> 
			                <li class="nav-menu-categories">
			                    <a href="#" class="nav-menu-categories-link" rel="nofollow" data-js="nav-menu-categories-trigger">Categorías</a>
			                </li> 
			                <li class="nav-menu-item">
			                    <a href="#" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Historial</a>
			                </li> 
			                <li class="nav-menu-item">
			                    <a href="#" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Descuentos exclusivos</a>
			                </li> 
			                <li class="nav-menu-item">
			                    <a href="#" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Ofertas de la semana</a>
			                </li> 
			                <li class="nav-menu-item">
			                    <a href="{{route('vender')}}" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Vender</a>
			                </li> 
			                <li class="nav-menu-item">
			                    <a href="#" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Ayuda</a>
			                </li> 
			            </ul>
			        </div>
			        
			    </div> 
				<a href="#" class="exhibitor__picture">
					<img src="css/estado/mlm-menu-desktop-notification-picture-bac19f68-93e0-419d-b07c-eec78d1ab4e2.png" title="Tutoriales">
				</a> 
			</div>
		</header> 
		
			@yield('content')   
<input type="checkbox" id="nav-footer-access-switch" checked="">

<div class="nav-footer-access">
	<label for="nav-footer-access-switch">Más información <i class="nav-icon-chevron-up"></i>
	</label>

	<div class="nav-footer-access-content">
		<div class="nav-bounds  ">
			
				<div class="nav-footer-access-col">

					<h5 class="nav-footer-access-title">Acerca de</h5>
					<ul>
						
							<li><a href="#" target="_self">Mercado Libre</a></li>
						
							<li><a href="#" target="_self">Investor relations</a></li>
						
							<li><a href="#" target="_self">Mapa del sitio</a></li>
						
							<li><a href="https://tendencias.mercadolibre.com.mx/" target="_self">Tendencias</a></li>
						
					</ul>
				</div>
			
				<div class="nav-footer-access-col">

					<h5 class="nav-footer-access-title">Otros sitios</h5>
					<ul>
						
							<li><a href="http://developers.mercadolibre.com/" target="_self">Developers</a></li>
						
							<li><a href="https://www.mercadopago.com.mx/" target="_self">Mercado Pago</a></li>
						
							<li><a href="https://www.mercadoshops.com.mx/" target="_self">Mercado Shops</a></li>
						
							<li><a href="https://envios.mercadolibre.com.mx/" target="_self">Mercado Envíos</a></li>
						
							<li><a href="https://publicidad.mercadolibre.com.mx/" target="_self">Mercado Libre Publicidad</a></li>
						
					</ul>
				</div>
			
				<div class="nav-footer-access-col">

					<h5 class="nav-footer-access-title">Ayuda</h5>
					<ul>
						
							<li><a href="#" target="_self">Comprar</a></li>
						
							<li><a href="{{route('vender')}}" target="_self">Vender</a></li>
						
							<li><a href="#" target="_self">Resolución de problemas</a></li>
						
							<li><a href="#" target="_self">Centro de seguridad</a></li>
						
					</ul>
				</div>
			
				<div class="nav-footer-access-col">

					<h5 class="nav-footer-access-title">Redes sociales</h5>
					<ul>
						
							<li><a href="https://twitter.com/ML_Mexico" target="_blank">Twitter</a></li>
						
							<li><a href="https://www.facebook.com/MercadoLibre" target="_blank">Facebook</a></li>
						
							<li><a href="https://www.youtube.com/user/mercadolibre" target="_blank">YouTube</a></li>
						
					</ul>
				</div>
			
			
				<div class="nav-footer-access-col">
					<h5 class="nav-footer-access-title">Mi cuenta</h5>
					<ul>
					
						
							<li><a rel="nofollow" href="{{route('estado')}}">Resumen</a></li>
							
							<li><a rel="nofollow" href="#">Favoritos</a></li>
							
						
						<li><a rel="nofollow" href="{{route('vender')}}">Vender</a>
						</li>
					</ul>
				</div>
			
		</div>
	</div>
</div>



	<footer role="contentinfo" class="nav-footer">

		

		
			<div class="nav-footer-mobile-links-bounds">
				<div class="nav-footer-mobile-links">
							<a href="{{route('perfil')}}">
								Mi cuenta
							</a>
							<a href="{{route('historialComp')}}">
								Tus compras
							</a>
							<a href="#">
								Tu historial
							</a>
							<a href="#">
								Ofertas de la semana
							</a>						
							<a href="#">
								Favoritos
							</a>
							<a href="#">
								Tiendas oficiales
							</a>
							<a href="#">
								Categorías
							</a>
							<a href="estado">
								Mercado Puntos
							</a>
							<a href="#">
								Ayuda
							</a>						
							<a href="{{route('vender')}}">
								Vender
							</a>
						
					
				</div>
			</div>
		


		<div class="nav-bounds  ">
				<p class="nav-footer-user logged">
					@if(Auth::check())
						<a href="#">
							<img id="" class="nav-footer-avatar-user-img" src="svg/user.svg" width="20" height="20">
							<strong>{{auth()->user()->nombre}}</strong>
						</a>
					@endif
				</p>
			<div class="nav-footer-info-wrapper">
				<div class="nav-footer-primaryinfo" style="height: 100px;">
				
					<small class="nav-footer-copyright" style="text-align: left;color: black;"> 
					<h1><strong>Sitio no oficial de Mercado Libre.</strong></h1> <br>
					Proyecto estudiantil el cual busca emular las características del sitio de Mercado Libre, solo con <b>fines educativos</b>.
					Para ir al sitio oficial de Mercado Libre de click <p style="display: inline-block;"><a style="float: none;    margin-left: 0px;" href="http://www.mercadolibre.com.mx"><b>aquí</b></a></p>.
				</small> 
					
					
					
					<nav class="nav-footer-navigation ">
						
							<a tabindex="1021" href="https://jobs.mercadolibre.com/?locale=es_ES">Trabaja con nosotros</a>
						
						
							<a tabindex="1022" href="https://www.mercadolibre.com.mx/ayuda/terminos-y-condiciones-uso-del-sitio_2090">Términos y condiciones</a>
						
						
							<a tabindex="1023" href="https://www.mercadolibre.com.mx/ayuda/Aviso-de-privacidad_1167">Políticas de privacidad</a>
						
						
							<a tabindex="1024" href="https://www.mercadolibre.com.mx/ayuda">Ayuda</a>
						
						
						
					</nav>
				</div>
				
				
			</div>
			
	            
<div class="nav-footer-downloadapp-wrapper"> 
</div>

			
		</div>
	</footer>   

<div class="modeless-box " role="dialog" id="modeless-94" hidden="" aria-hidden="true">
        <div class="modeless-box-header">Notificaciones</div>
        <div class="modeless-box-container">
            <ul class="modeless-box-list">
                
        <li class="ui-loading ui-loading--inline loading-container">
            <div class="ui-loading__container">
                <svg class="ui-loading__spinner ui-loading__large" viewBox="25 25 50 50">
                    <circle class="ui-loading__spinner-path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
                </svg>
            </div>
            <div class="ui-loading__mask"></div>
        </li>
    
            </ul>
        <div class="modeless-box-scroll-rail" aria-disabled="true"></div><div class="modeless-box-scroll-bar" aria-disabled="true"></div></div>
        
    </div><div class="modeless-box " role="dialog" id="modeless-44" hidden="" aria-hidden="true">
        <div class="modeless-box-header">Favoritos</div>
        <div class="modeless-box-container">
            <ul class="modeless-box-list">
                
        <li class="ui-loading ui-loading--inline loading-container">
            <div class="ui-loading__container">
                <svg class="ui-loading__spinner ui-loading__large" viewBox="25 25 50 50">
                    <circle class="ui-loading__spinner-path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
                </svg>
            </div>
            <div class="ui-loading__mask"></div>
        </li>
    
            </ul>
        <div class="modeless-box-scroll-rail" aria-disabled="true"></div><div class="modeless-box-scroll-bar" aria-disabled="true"></div></div>
        <a href="https://myaccount.mercadolibre.com.mx/bookmarks/list" class="modeless-box-footer" tabindex="-1">Ver todos los favoritos</a>
    </div><div class="sb-suggestions" role="dialog" id="sb-suggestions-1" aria-hidden="true" style="left: 271px; top: 47px; width: 598px; position: absolute;">
  <div class="sb-suggestions__wrapper">
    <ul class="sb-suggestions__list"></ul>
  </div>
  <div class="sb-suggestions__wrapper--additional">
    <ul class="sb-suggestions__list--additional"></ul>
  </div>
</div>   
				{!! Html::script('js/jquery-3.3.1.min.js') !!}  
				{!! Html::script('js/bootstrap.min.js') !!}  
				{!! Html::script('js/operaciones.js') !!}  
				{!! Html::script('js/script.js') !!}  
				{!! Html::script('js/ubicacion.js') !!}
				{!! Html::script('js/buscador.js') !!} 
				{!! Html::script('js/menusFlotantes.js') !!}
				{!! Html::script('js/modificarPublicacion.js') !!}
				{!! Html::script('js/editCarrito.js') !!}
				{!! Html::script('js/formatearPrecio.js') !!}
				<script> 


(function(win, doc){
  function loadScripts (s) {
    if (!s || !s.length) return;
    s = s.slice(0);
    var h = doc.head || doc.getElementsByTagName('head')[0];
    var cbStack = {};

    for (var i = 0; i < s.length; i++) {
      var c = s[i];
      var t = doc.createElement('script');

      if (typeof c === 'function') {
        t.textContent = '(' + c + ').apply(window);';
      } else {
        t.async = false;
        t.defer = true;
        t.crossOrigin = 'anonymous';

        t.src = c;
        c = t.src;
        cbStack[c] = [];
        while(s[i+1] && typeof s[i+1] === 'function') {
          cbStack[c].push(s[i+1]);
          i++;
        }
        t.onerror = function(err) { 
        }
        t.onload = function(e) {
          cbStack[e.target.src] && cbStack[e.target.src].forEach(function(cb){ (cb).apply(window) });
        }
      }
      h.appendChild(t);
    }
  } 
  var scripts = ["https://http2.mlstatic.com/storage/tag-manager/kenshoo-ktag-mlm.js",function(){
      !function(n,e){n.mitt=e()}(this,function(){function n(n){return n=n||Object.create(null),{on:function(e,t){(n[e]||(n[e]=[])).push(t)},off:function(e,t){n[e]&&n[e].splice(n[e].indexOf(t)>>>0,1)},emit:function(e,t){(n[e]||[]).map(function(n){n(t)}),(n["*"]||[]).map(function(n){n(e,t)})}}}return n});
      window.freya = mitt();
    },"https://http2.mlstatic.com/resources/frontend/statics/ml-widgets/snackbar/v1.0.0/snackbar.js",function(){(function (bus) {
  var pictureUploadInput = document.querySelector('#nav-header-mobile-avatar-upload');
  if (!pictureUploadInput) return;
  var endpoint = document.querySelector('#nav-header-mobile-avatar-form').getAttribute('action');

  var emit = function (event, params) {
    if (!bus || !bus.emit) return;
    bus.emit(event, params)
  };

  var hideLoading = function (show) {
    // TODO
  };

  var showLoading = function (show) {
    // TODO
  };

  var renderNewImg = function (pictureUrl) {
    var imgElementId = 'nav-header-mobile-user-avatar';
    var currentImg = document.querySelector('#' + imgElementId);
    var newImg = document.createElement('img');
    newImg.src = pictureUrl;
    newImg.setAttribute('id', imgElementId);
    currentImg.parentNode.replaceChild(newImg, currentImg);
  };


  var postPicture = function () {
    var xhr = createRequest();
    var formData = new FormData();
    var file = pictureUploadInput.files[0];
    formData.append('file', file, file.name);
    xhr.send(formData);
  };

  pictureUploadInput.addEventListener('change', function () {
    if (pictureUploadInput.files.length > 0) {
      showLoading();
      postPicture();
    }
  });
})(window.freya || window.meli);},function(){

          (function appDownload() {
            function trackEventAppDownloadAnalytics(os, app) {
               if (typeof meli_ga !== 'undefined' && (os ==='android' || os === 'ios')) {
                var osTrack = os.toUpperCase();
                if (app) {
                  app = app.toUpperCase();
                  meli_ga('send', 'event', 'MOBILE-APP-' + osTrack, 'DOWNLOAD-MENU', app);
                } else {
                  meli_ga('send', 'event', 'MOBILE-APP-' + osTrack, 'DOWNLOAD-MENU');
                }
              }
            }
            function handleAppDownload(event) {
               var os = this.getAttribute('data-os'),
                app = this.getAttribute('data-app');
              // track event in analytics
              trackEventAppDownloadAnalytics(os,app);
            } 
          }());
        },"js/user-menu.js",function(){
          (function(win, freya) {
            if (win.UserMenuWidget && freya) {
              new UserMenuWidget({
                mainDomain: 'mercadolibre.com.mx',
                bus: freya,
              });
            }
          })(window, window.freya);
      },"https://http2.mlstatic.com/ui/navigation/modeless-box/3.1.0/modeless-box.js",function(){
      (function WidgetManager() {
        if (freya) {
          var notificationsLink = document.getElementById('notiLink');

          function handleWidgetClose(event, widget) {
            // Close notifications widget
            if (widget !== 'notifications') {
              freya.emit('notifications:hide');
            }

            // Close user menu widget
            if (widget !== 'user-menu') {
              var userMenu = document.getElementById('nav-header-user-switch');
              if (userMenu && userMenu.checked) {
                userMenu.checked = false;
              }
              freya.emit('user-menu:hide');
            }

            // Close bookmarks
            if (widget !== 'bookmarks') {
              freya.emit('bookmarks:hide');
            }

            // Close categories
            if (widget !== 'categories') {
              freya.emit('categories:hide');
            }

            // Close searchbox
            if (widget !== 'searchbox') {
              freya.emit('searchbox:hide');
            }
          };

          function bindNotificationsHandler() {
            notificationsLink.addEventListener('click', function(ev) {
              handleWidgetClose(ev, 'notifications');
            });
          };

          freya.on('user-menu:show:before', function(ev) {
              handleWidgetClose(ev, 'user-menu');
            });
freya.on('categories:show:before', function(ev) {
              handleWidgetClose(ev, 'categories');
            });
freya.on('notifications:show:before', function(ev) {
              handleWidgetClose(ev, 'notifications');
            });
freya.on('bookmarks:show:before', function(ev) {
              handleWidgetClose(ev, 'bookmarks');
            });
        }
      })();
    },"https://http2.mlstatic.com/resources/frontend/statics/ml-widgets/nav-cart/v1.1.5/CartWidget.js",function(){
          
        },"https://http2.mlstatic.com/ui/searchbox/2.2.0/index.js","https://http2.mlstatic.com/resources/frontend/statics/ml-widgets/modal/v1.0.2/modal.js",function(){
    (function () {
      var linkCP = document.querySelector('.nav-menu-cp');
      if (linkCP) {
        linkCP.addEventListener('click', function () { 
        });
      }
    }());
  },"https://http2.mlstatic.com/resources/frontend/statics/ml-widgets/categories/v1.0.9/categories.js",function(){
              (function(win, freya) {
                if (win.CategoriesWidget && freya) {
                  new CategoriesWidget({
                    bus: freya,
                    endpoint: '//www.mercadolibre.com.mx/menu/departments',
                  });
                }
              })(window, window.freya);
            },function(){
      (function () {
        var linkCP = document.querySelector('.nav-header-cp-anchor');
        if (linkCP) {
          linkCP.addEventListener('click', function () {
            if (meli_ga) {
              meli_ga('send', 'event', 'CURRENT_LOCATION', 'NAVIGATION', 'PICK');
            }

            if (melidata) { 
            }
          });
        }
      }());
    },function(){
      (function () {
        var pixels = ["//dejavu.mercadolibre.com/load.gif?","//dejavu.mercadopago.com/load.gif?","//dejavu.mercadoclics.com/load.gif?","//dejavu.mlapps.com/load.gif?", "//dejavu.mercadolibre.com.mx/load.gif?"];
        var regex = /(^|; ?)_d2id=([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})-n($|;)/;
        var matches = document.cookie.match(regex);
        if (matches) {
          var d2id = matches[2];
          for(var img in pixels) {
            var i = new Image();
            i.src = pixels[img]+"_d2id="+d2id
          }
        }
      })();
    },function(){
        (function (win) {
  'use strict'; 
   
})(window);

      },""];
  if (doc.readyState === 'complete') {
    loadScripts(scripts);
  } else {
    win.addEventListener('load', function(){ loadScripts(scripts); });
  }
})(window, document);</script>
</body>
</html>
