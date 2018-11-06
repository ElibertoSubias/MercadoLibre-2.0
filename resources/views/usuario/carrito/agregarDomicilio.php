@extends('layouts.master')

@section('content')
{!! Html::style('css/styleDomicilio.css') !!}
<header role="banner" class="nav-header">
        <div class="nav-bounds nav-bounds-with-cart ">
        

        
            
            
                
                
                    <a class="nav-logo" href="//www.mercadolibre.com.mx/">
                        Mercado Libre México - Donde comprar y vender de todo
                    </a>
                
            
        
            

        
            
            

                <input type="checkbox" id="nav-header-menu-switch">
                <div class="nav-header-menu-wrapper">
                    
                    <label for="nav-header-menu-switch" aria-controls="nav-header-menu">
                        <span class="hamburger-top-bread"></span>
                        <span class="hamburger-patty"></span>
                        <span class="hamburger-bottom-bread"></span>
                    </label>
                    
                    
                    
                    <nav id="nav-header-menu">
                    
                        
                        
                            
    <div class="nav-header-user">
        
        <label for="nav-header-user-switch"><a href="https://myaccount.mercadolibre.com.mx/summary" class="nav-header-user-myml"><span class="nav-header-avatar-user" data-js="user-menu:nav-header-avatar-user"><i class="nav-icon-user"></i></span><span class="nav-header-username">Luis Enr...</span><span class="nav-header-username-chevron"></span></a></label>
        <input type="checkbox" id="nav-header-user-switch">
        <nav class="nav-header-user-layer user-menu--hidden user-menu">
  <div class="user-menu__main">
    
<div class="user-menu__user-info-outer-container">
  <div class="user-menu__user-info-inner-container">

    <div class="user-menu__user-badge">
      <div class="user-menu__user-badge-image">
        
    
    <div class="user-menu__loyalty-components">
      
  <svg class="user-menu__user-progress user-menu--level-2" viewBox="0 0 100 100">
      <path class="base" stroke-linecap="round" stroke-width="3" stroke="#eee" fill="none" d="M50 10
          a 40 40 0 0 1 0 80
          a 40 40 0 0 1 0 -80">
      </path>
      <path class="progress" stroke-linecap="round" stroke-width="3" percentage="60" stroke-dasharray="45,999" fill="none" d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80"></path>
  </svg>

    </div>
  
    
  <form data-js="user-menu:avatar-form" method="POST" action="//www.mercadolibre.com.mx/menu/user/picture" enctype="multipart/form-data" class="user-menu__avatar-form">
    <label class="user-menu__avatar-label">
      <span class="user-menu__avatar-text">Subir foto</span>
      <span data-js="user-menu:avatar-icon"><svg class="user-menu__user-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 68 68"><defs><circle id="a" cx="22.706" cy="22.706" r="22.706"></circle></defs><g fill="none" fill-rule="evenodd"><circle cx="34" cy="34" r="34" fill="#EEE"></circle><g transform="translate(11 9)"><mask id="b" fill="#fff"><use xlink:href="#a"></use></mask><path fill="#BBB" fill-rule="nonzero" d="M23.011 62.588c-8.466 0-15.329-6.863-15.329-15.329 0-8.466 6.863-15.33 15.33-15.33 8.465 0 15.328 6.864 15.328 15.33 0 8.466-6.863 15.33-15.329 15.33zm0-1.419c7.682 0 13.91-6.228 13.91-13.91s-6.228-13.91-13.91-13.91-13.91 6.228-13.91 13.91 6.228 13.91 13.91 13.91z" mask="url(#b)"></path></g><path fill="#BBB" fill-rule="nonzero" d="M34.062 33.311a6.971 6.971 0 0 0 0-13.942v1.419a5.552 5.552 0 1 1 0 11.104v1.42z"></path><path fill="#BBB" fill-rule="nonzero" d="M34.009 37.233c-6.046 0-10.947-4.9-10.947-10.946 0-6.046 4.901-10.947 10.947-10.947 6.045 0 10.946 4.901 10.946 10.947 0 6.045-4.9 10.946-10.946 10.946zm0-1.419a9.527 9.527 0 1 0 0-19.055 9.527 9.527 0 0 0 0 19.055z"></path><path fill="#EEE" d="M41.056 15.442l2.817 2.816-3.755 3.755-2.816-2.816z"></path></g></svg></span>
      <img data-js="user-menu:avatar-picture" hidden="" class="user-menu__avatar-picture">
      <input data-js="user-menu:avatar-control" name="file" type="file" class="user-menu__avatar-control" accept="image/jpeg,.jpg,image/gif,.gif,image/png,.png,.jpeg,image/webp,.webp">
    </label>
  </form>

  
      </div>

      <p class="user-menu__user-badge-title">¡Hola, Luis Enrique!</p>

      <p class="user-menu__user-badge-email">Nivel 2 - Aficionado</p>

      

    </div>

  </div>

  <a href="https://myaccount.mercadolibre.com.mx/summary" class="user-menu__primary-action ui-button ui-button--primary" data-id="my-account" rel="nofollow">
    Mi cuenta
  </a>
</div>

    
    <div class="user-menu__shortcuts ">
      
    <a href="https://www.mercadolibre.com.mx/mercadopuntos" data-id="points" rel="nofollow">
      Mercado Puntos
    </a>
  
    <a href="https://myaccount.mercadolibre.com.mx/purchases/list" data-id="purchases" rel="nofollow">
      Compras
    </a>
  
    <a href="https://myaccount.mercadolibre.com.mx/sales/list" data-id="sales" rel="nofollow">
      Ventas
    </a>
  
    <a href="https://myaccount.mercadolibre.com.mx/profile" data-id="personal-info" rel="nofollow">
      Mis datos
    </a>
  
    <a href="https://accountrecovery.mercadolibre.com.mx/collect/userInfo" data-id="security" rel="nofollow">
      Seguridad
    </a>
  
    <a href="https://www.mercadolibre.com/jms/mlm/lgz/logout?go=https://www.mercadolibre.com.mx" data-id="logout" rel="nofollow">
      Salir
    </a>
  
    </div>
  
  </div>
  <div class="user-menu__old">
    
            
            <a tabindex="2" class="option-my-account" href="https://myaccount.mercadolibre.com.mx" rel="nofollow">Mi cuenta</a>
        
            
                
                
                    <a tabindex="3" class="nav-header-user-layer-logout" href="https://www.mercadolibre.com/jms/mlm/lgz/logout" rel="nofollow">Salir</a>
                
            
        
  </div>
  <span class="user-menu__chevron"></span>
</nav>
    </div>

    
        
        
    
    


    


                        
                        
                            
                                
                                <a tabindex="4" href="#" id="notiLink" class="option-notifications notifications-widget" rel="nofollow"><i class="nav-icon-notifications"><span>Notificaciones</span></i><em class="ml-count" style="display:none">0</em></a>
                            
                        

                        
                            
                                
                                    
                                    <a tabindex="5" href="https://myaccount.mercadolibre.com.mx/bookmarks/list" class="option-bookmarks bookmarks-widget modeless-box-trigger" rel="nofollow" aria-owns="modeless-30" aria-haspopup="true" popup-hidden="true"><i class="nav-icon-bookmarks"><span>Favoritos</span></i></a>
                                
                            

                        
                            
                                
                                    <a tabindex="4" class="option-help" href="https://ayuda.mercadolibre.com.mx/ayuda">Ayuda</a>
                                
                            

                    
                            
                                
                                    
                                    <a tabindex="6" href="https://vender.mercadolibre.com.mx" rel="nofollow" class="option-sell nav-header-btn-pub">Vender</a>
                                
                            

                        
                            



                        
                            
                                
                            

                        
                            
                                
                                
                            
                            
                                
                                
                                
                                    

                                
                            
                        
                    </nav>


                
                    <!-- Cuando el carrito esta vacio debe tener la clase "nav-cart-empty", cuando esta lleno "nav-cart-full" -->
                    <a href="https://www.mercadolibre.com.mx/gz/cart" title="Carrito de compras" class="nav-cart nav-cart-full" id="nav-cart"><i class="nav-icon-cart"></i><span class="nav-icon-cart-quantity"><b>2</b></span></a>

                    
                



                </div>
            


        
            
    
    
    

    <form class="nav-search" action="//www.mercadolibre.com.mx/jm/search" method="GET" role="search">
    <input value="" tabindex="1" type="text" class="nav-search-input" name="as_word" max-length="120" autocapitalize="off" autocorrect="off" spellcheck="false" placeholder="Buscar productos, marcas y más..." autocomplete="off">
    
        <button class="nav-search-clear-btn" type="button" title="menu.autocomplete.clear"></button>
        <button class="nav-search-close-btn" type="button" title="menu.autocomplete.close"></button>
    
    
    <button type="submit" class="nav-search-btn">
        <i class="nav-icon-search"><span>Buscar</span></i>
    </button>
    
</form>

    
  
  





            

            
    <div class="nav-menu">
        
        
            <div>
                <ul class="nav-menu-list">
                    
                        
                        <li class="nav-menu-categories">
                            
<nav class="nav-categs" data-js="nav-categs" hidden="">
  <section class="nav-categs-departments" data-js="nav-categs-departments"></section>
  <section class="nav-categs-detail" data-js="nav-categs-detail" hidden=""></section>
</nav>
<a href="https://www.mercadolibre.com.mx/categories.html" class="nav-menu-categories-link" rel="nofollow" data-js="nav-menu-categories-trigger">Categorías</a>
                        </li>
                        
                        
                            
                            
                        
                    
                        
                        <li class="nav-menu-item">
                            <a href="https://ofertas.mercadolibre.com.mx/ofertas-de-la-semana" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Ofertas de la semana</a>
                        </li>
                        
                        
                    
                        
                        <li class="nav-menu-item">
                            <a href="https://www.mercadolibre.com.mx/tiendas-oficiales" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Tiendas oficiales</a>
                        </li>
                        
                        
                    
                        
                        <li class="nav-menu-item">
                            <a href="https://www.mercadolibre.com.mx/gz/home/navigation" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Tu historial</a>
                        </li>
                        
                        
                    
                        
                        <li class="nav-menu-item">
                            <a href="https://myaccount.mercadolibre.com.mx/purchases/list" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Tus compras</a>
                        </li>
                        
                        
                    
                        
                        <li class="nav-menu-item">
                            <a href="https://vender.mercadolibre.com.mx" class="nav-menu-item-link" rel="nofollow" data-js="nav-menu-item-trigger">Vender</a>
                        </li>
                        
                        
                    
                </ul>
            </div>
        
    </div>



            
            
                
            

            



            
    <a href="https://www.mercadolibre.com.mx/tutoriales" class="exhibitor__picture">
        <img src="https://http2.mlstatic.com/resources/deals/exhibitors_resources/mlm-menu-desktop-notification-picture-bac19f68-93e0-419d-b07c-eec78d1ab4e2.png" title="Tutoriales">
    </a>



            
            
            
            
        </div>
    </header>
<form name="dataForm" id="dataForm" method="post" action="myData/validateData" class="ch-form myForm" novalidate="novalidate">
        <input type="hidden" name="updateOrigin" id="updateOrigin" value="">
        <input type="hidden" name="updateAddressOrigin" id="updateAddressOrigin" value="">
        <input type="hidden" name="updateAddressProcess" id="updateAddressProcess" value="">


        
            <h2 class="typo">Mis datos</h2>
        

        

        
            <fieldset>
                <div>
                    <h3 class="title title-line">Datos de cuenta
                    
                        <div class="row-vert">
                            <a class="smalla vert" href="javascript:void(0)" onclick="showWidget('Ayuda con datos de mi cuenta', 'account_data' ,968)">Necesito ayuda</a>
                        </div>
                    
                    </h3>
                </div>

                <div class="ch-form-row">
                    <label>Usuario</label>
                    <span>LUISENRIQUEPARRASNCHEZ</span>
                    
                        <a class="smalla" href="https://myaccount.mercadolibre.com.mx/profile/changeNickName">Modificar</a>
                    
                </div>

                <div class="ch-form-row">
                    <label>E-mail</label>
                    <span>luisparra_2496@hotmail.com</span>
                
                    <a class="smalla" href="https://myaccount.mercadolibre.com.mx/profile/changeEmail">Modificar</a>
                    
                </div>

                <div class="ch-form-row">
                    <label>Clave</label>
                    <span>**********</span>
                    <a class="smalla" href="https://accountrecovery.mercadolibre.com.mx/accountrecovery/changePassword">Modificar</a>
                </div>
            </fieldset>
        
        
            <fieldset>
                <div>
                    <h3 class="title title-line">Datos personales
                    
                        <div class="row-vert">
                            <a class="smalla vert" href="javascript:void(0)" onclick="showWidget('Ayuda con mis datos personales', 'personal_data' ,967)">Necesito ayuda</a>
                        </div>
                    
                    </h3>
                </div>
                
                    <div class="ch-form-row">
                        <label>Nombre y apellido</label>
                        
                            <span>Luis Enrique Parra Sánchez</span>
                            
                                <a id="modif_name" class="smalla" href="#" aria-label="ch-modal-3">Modificar</a>
                            
                        
                    </div>
                        <div class="ch-form-row">
                            <label>Documento</label>
                            
                                <a id="add_identification" class="smalla" href="#" aria-label="ch-modal-2">Agregar</a>
                            
                        </div>
                    

<div class="ch-form-row">
	<label>Teléfono:</label>
	<span id="span_phone">
		
		
		
	</span>
	<span id="span_alternative_phone">
		
	</span>
	
		<a id="modif_phone" href="#" aria-label="ch-modal-4">Agregar</a>
	
</div>

                
                

            </fieldset>
        

        





        


        

            

                <fieldset id="cardFieldSet" name="cardFieldSet">
                    <h3 class="title titleCards">Tarjetas de crédito</h3>
                    <ul class="cardContent">
                        
                            <li class="cardsBox" id="cardInfo261517820">
                                <div class="cardsColOne">
                                    
                                        <div class="imgCard">
                                            <img src="http://img.mlstatic.com/org-img/MP3/API/logos/158.gif">
                                        </div>
                                    
                                    <span class="cardMain" id="cardMain_261517820">
                                        Terminada en 8112
                                    </span>

                                    
                                        <p class="cardsDetails">
                                            Bancomer
                                        </p>
                                    

                                    <p class="cardsDetails" id="cardDetails_261517820">Vencimiento: 5/2023</p>

                                </div>

                                <div class="clearCards">
                                    <a href="#" id="deleteCard_261517820" class="smalla deleteCard" aria-label="ch-modal-7">Eliminar</a>
                                </div>

                            </li>
                        
                    </ul>
                    
                        <div class="addressBox" id="withoutCard" style="display:none;">
                    
                    <p>No tienes ninguna tarjeta de crédito.</p>
                </div>
                    <script>
                        function getActualCardsQuantity() {
                            
                            return 1;
                            
                            return 0;
                        }
                        var cardsQuantity = getActualCardsQuantity();
                    </script>

                </fieldset>

            

        


        

            
                
                
                
                    <iframe id="addressFrame" class="addresses-iframe" src="https://addresses.mercadolibre.com.mx/listAddresses?confirmation_url=_parent" width="100%" frameborder="0" seamless="" scrolling="no" style="height: 313px;">
                
                </iframe>
            
						
            
        

        <a href="#" id="modalSeller" style="display:none" aria-label="ch-modal-5"></a>
        <a href="#" id="modalDeleteInfo" style="display:none" aria-label="ch-modal-6"></a>

    </form>