@extends('layouts.master')

@section('content')  
{!! Html::style('css/comTarjeta.css') !!} 
<header role="banner" class="nav-header nav-header-pluslite">
        <div class="nav-bounds  ">
        

        
            
            
                
                
                    <a class="nav-logo" href="https://www.mercadolibre.com.mx/">
                        Mercado Libre México - Donde comprar y vender de todo
                    </a>
                
            
        
            

        
            
            
                
                <div class="nav-header-menu-wrapper">
                    
                        <nav id="nav-header-menu-mobile" class="nav-header-menu-mobile-logged">
    
        <div id="nav-header-menu-mobile-content">
    

<div id="nav-header-menu-mobile-user-info" class="nav-header-menu-mobile-with-loyalty">
    <form id="nav-header-mobile-avatar-form" method="POST" action="https://www.mercadolibre.com.mx/menu/user/picture" enctype="multipart/form-data">
        <label for="nav-header-mobile-avatar-upload">
            
                <svg viewBox="0 0 100 100">
                    <path stroke-linecap="round" stroke-width="3" stroke="#eee" fill="none" d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80"></path>
                    <path class="nav-header-mobile-loyalty-level-2" stroke-linecap="round" stroke-width="3" stroke-dasharray="25,999" fill="none" d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80"></path>
                </svg>
            

            
            <i id="nav-header-mobile-user-avatar" class="nav-icon-create-account-mobile"></i>
            

            <input id="nav-header-mobile-avatar-upload" name="file" type="file" accept="image/jpeg,.jpg,image/gif,.gif,image/png,.png,.jpeg,image/webp,.webp">
        </label>
    </form>
    <div id="nav-header-user-greetings">¡Hola, Erick !</div>
    <div id="nav-header-user-mail-or-level">Nivel 2 - Aficionado</div>

</div>

    
    
    
        <ul>
            
                
                    <li>
                        <a href="https://myaccount.mercadolibre.com.mx/">
                            <i class="nav-icon-my-account-mobile"></i>
                            <p>
                                Mi cuenta
                                
                            </p>
                        </a>
                    </li>
                
            
                
                    <li>
                        <a href="https://www.mercadolibre.com.mx/mercadopuntos">
                            <i class="nav-icon-points-mobile"></i>
                            <p>
                                Mercado Puntos
                                
                            </p>
                        </a>
                    </li>
                
            
                
                    <li>
                        <a href="https://myaccount.mercadolibre.com.mx/purchases/list">
                            <i class="nav-icon-purchases-mobile"></i>
                            <p>
                                Tus compras
                                
                            </p>
                        </a>
                    </li>
                
            
                
                    <li>
                        <a href="https://www.mercadolibre.com.mx/gz/notifications/center">
                            <i class="nav-icon-notifications-mobile"></i>
                            <p>
                                Notificaciones
                                
                                    <span class="nav-header-notifications-badge"></span>
                                
                            </p>
                        </a>
                    </li>
                
            
                
                    <li>
                        <a href="https://myaccount.mercadolibre.com.mx/bookmarks/list">
                            <i class="nav-icon-bookmarks-mobile"></i>
                            <p>
                                Favoritos
                                
                            </p>
                        </a>
                    </li>
                
            
                
                    <li>
                        <a href="https://www.mercadolibre.com.mx/gz/home/navigation">
                            <i class="nav-icon-history-mobile"></i>
                            <p>
                                Tu historial
                                
                            </p>
                        </a>
                    </li>
                
            
        </ul>
    
        <ul>
            
                
                    <li>
                        <a href="https://home.mercadolibre.com.mx/categories">
                            <i class="nav-icon-categories-mobile"></i>
                            <p>
                                Categorías
                                
                            </p>
                        </a>
                    </li>
                
            
                
                    <li>
                        <a href="https://www.mercadolibre.com.mx/tiendas-oficiales">
                            <i class="nav-icon-stores-mobile"></i>
                            <p>
                                Tiendas oficiales
                                
                            </p>
                        </a>
                    </li>
                
            
                
                    <li>
                        <a href="https://ofertas.mercadolibre.com.mx/ofertas-de-la-semana">
                            <i class="nav-icon-deals-mobile"></i>
                            <p>
                                Ofertas de la semana
                                
                            </p>
                        </a>
                    </li>
                
            
        </ul>
    
        <ul>
            
                
                    <li>
                        <a href="https://vender.mercadolibre.com.mx/">
                            <i class="nav-icon-vender-mobile"></i>
                            <p>
                                Vender
                                
                            </p>
                        </a>
                    </li>
                
            
                
                    <li>
                        <a href="https://www.mercadolibre.com.mx/ayuda">
                            <i class="nav-icon-help-mobile"></i>
                            <p>
                                Ayuda
                                
                            </p>
                        </a>
                    </li>
                
            
        </ul>
    
        <ul>
            
                
                    <li>
                        <a href="https://www.mercadolibre.com.mx/gz/app">
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
                    
                        
                        
                            

                        
                        

                        
                            

                        
                            
                                
                                    <a tabindex="4" class="option-help" href="https://www.mercadolibre.com.mx/ayuda">Ayuda</a>
                                
                            

                    
                            

                        
                            

                        
                        

                        
    
    
    
    
    



                    </nav>


                



                </div>
        </div>
    </header>
  
@stop
