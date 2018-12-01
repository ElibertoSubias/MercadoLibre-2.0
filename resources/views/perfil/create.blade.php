@extends('layouts.master')

@section('content')  
{!! Html::style('css/verStyle.css') !!} 
{!! Html::style('css/menuStyle.css') !!} 
{!! Html::style('css/publiStyle.css') !!} 
{!! Html::style('css/stylePerfil.css') !!}
    {!! Html::script('js/jquery-3.3.1.min.js') !!}

<script type="text/javascript">
    function openventana()
    {
        document.getElementById('openModal1').style.display = 'block';
    }

    function openventana2()
    {
        document.getElementById('openModal2').style.display = 'block';
    }
    function openventana3()
    {
        document.getElementById('openModal3').style.display = 'block';
        if (document.getElementById('lblTel').Text =="_") {
        
            $('#formTel').css({"height": "200px"});
            $('#GuardarTel').css({"margin-top": "-50px"});
            $('#ocultarTelLeyenda').css({"visibility":"hidden"});
            $('#ocultarTel').css({"visibility":"hidden"});

        }else{
            
            $('#ocultarTelLeyenda').css({"visibility":"visible"});
            $('#ocultarTel').css({"visibility":"visible"});
        } 
    }
    function closeventana()
    {
        $(".ventana").slideUp("fast");
    }
    function btnCambiarnombreAP(){
          var id = $("#id").val();
          var nombre = $("#nombre").val();
          var apellido = $("#apellido").val();
          var route = "cambiarnombre";
          var token = $("#token").val();
          var bandera="0";
             if(nombre === "")
            { 
                bandera="1";  
                 $('#alertMsjinputNombre').css({"visibility":"visible"});     
                $('#nombre').css({"border-color":"#ff5a5f"}); 
            }else{
                $('#alertMsjinputNombre').css({"visibility":"hidden"});  
            }

            if(apellido === "")
            {   
                bandera="1";   
                 $('#alertMsjinputApellido').css({"visibility":"visible"}); 
                $('#apellido').css({"border-color":"#ff5a5f"}); 
            }else{
                 $('#alertMsjinputApellido').css({"visibility":"hidden"}); 
            }


            if(bandera==="0")
            {
              $.ajax({
                url: route,
                headers: {'X-CSRF-TOKEN': token},
                type: 'POST',
                dataType: 'json',
                data: { apellido: apellido, id: id, nombre:nombre} 
                }).done(function(data) {  
                  if (data.res!=1 && data.res!=0){
                  location.href ="perfil";
                  }else if(data.res==1){  
                    $("#lblCorreoExistente").empty();
                    $("#lblCorreoExistente").append(data.email);
                  }
                });
            }
        }
        
        function guardarDocumento(){
        
    

          var id = $("#id").val();
          var dato = $("#dato").val();
          var tipo = $('#documento').val();
          var route = "agregardocumento";
          var token = $("#token").val();
          var bandera="0";
          
            if(dato === "")
            { 
                bandera="1";  
                 $('#alertMsjinputDato').css({"visibility":"visible"});     
                $('#nombre').css({"border-color":"#ff5a5f"}); 
            }else{
                $('#alertMsjinputDato').css({"visibility":"hidden"});  
            }
            if(bandera==="0")
            {
              $.ajax({
                url: route,
                headers: {'X-CSRF-TOKEN': token},
                type: 'POST',
                dataType: 'json',
                data: { dato: dato, id:id, tipo: tipo} 
                }).done(function(data) {  
                  if (data.res!=1 && data.res!=0){
                    location.href ="perfil";
                  }
                });
            }
        }

            function agregarTel(){
          var id = $("#id").val();
          var telefono = $("#telefono").val();
          var telefono2= $("#telefono2").val();
          var route = "agregartelefono";
          var token = $("#token").val();
          var bandera="0";
             if(telefono === "")
            { 
                bandera="1";  
                 $('#alertMsjinputTelefono').css({"visibility":"visible"});     
                $('#telefono').css({"border-color":"#ff5a5f"}); 
            }else{
                $('#alertMsjinputTelefono').css({"visibility":"hidden"});  
            }

            if(bandera==="0")
            {
              $.ajax({
                url: route,
                headers: {'X-CSRF-TOKEN': token},
                type: 'POST',
                dataType: 'json',
                data: { telefono: telefono,telefono2: telefono2, id: id} 
                }).done(function(data) {
                  if (data.res!=1 && data.res!=0){
                    location.href ="perfil";
                  }else if(data.res==1){  
                    $("#lblCorreoExistente").empty();
                    $("#lblCorreoExistente").append(data.email);
                  }
                });
            }
        }
</script>   

<div class="col-md-12" style="padding: 0px;background: whitesmoke;"> 
    <div class="col-md-2" style="padding: 0px;">
        <div class="menu-wrapper" style="padding: 0px;">
        <input type="checkbox" id="myml-menu-toggle" checked="true" disabled="">
        <nav class="myml-nav" role="complementary">
            <div class="myml-nav__container">
                <section class="myml-nav__section myml-nav__section--toggle">
                    <div class="myml-nav__section-heading">
                        <img src="img/icon_menu.png" alt="" style="width: 25px;height: 25px;margin-left: 15px;margin-right: 15px;">
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
                            <a id="myml-nav__menu-item-purchases" class="myml-nav__menu-item " href="{{route('historialComp')}}">
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
                        <input class="myml-nav__section-toggle-trigger" type="checkbox" id="myml-menu-section-toggle-my_sales"'="">
                        <span class="myml-nav__section-heading myml-nav__section-heading--has-items"> 
                            <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--my_sales" data-tooltip="Ventas">
                                <svg viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.889 3.893a.498.498 0 0 1 .131.338v2.137c0 .954-.867 1.693-1.9 1.693-.548 0-1.05-.208-1.4-.546-.35.338-.85.546-1.399.546-.548 0-1.05-.208-1.4-.546-.35.338-.851.546-1.4.546-.548 0-1.05-.208-1.4-.546-.349.338-.85.546-1.399.546-.548 0-1.05-.208-1.4-.546-.35.338-.85.546-1.4.546C.89 8.061.024 7.322.024 6.368v-1.79l.047-.21 1.516-3.264a.5.5 0 0 1 .449-.29l11.01-.103a.5.5 0 0 1 .455.284l1.389 2.898zm-.869.501l-1.284-2.68-10.376.098-1.337 2.877v1.68c0 .363.387.692.9.692s.9-.33.9-.693a.5.5 0 1 1 1 0c0 .364.386.693.9.693.512 0 .899-.33.899-.693a.5.5 0 1 1 1 0c0 .364.387.693.9.693s.9-.33.9-.693a.5.5 0 1 1 1 0c0 .364.386.693.899.693s.9-.33.9-.693a.5.5 0 1 1 1 0c0 .364.386.693.9.693.512 0 .9-.33.9-.693V4.394zm-.555 9.572l.02-6.406a.5.5 0 1 1 1 .003l-.024 7.403H.561V7.462a.5.5 0 0 1 1 0v6.504h11.904zm-9.529-2.551a.5.5 0 0 1 0-1h7.3a.5.5 0 0 1 0 1h-7.3z" fill="#999"></path>
                                </svg>
                            </label> 
                            <label for="myml-menu-section-toggle-my_sales" class="myml-nav__section-title">Ventas</label>
                        </span> 

                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-publications" class="myml-nav__menu-item" href="{{route('publicaciones')}}">
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
                        <input class="myml-nav__section-toggle-trigger" type="checkbox" id="myml-menu-section-toggle-config" checked="true">
                        <span class="myml-nav__section-heading myml-nav__section-heading--has-items"> 
                            <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--config" data-tooltip="Configuración">
                                <svg viewBox="0 0 15 14" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.183 9h1.34V5h-1.34c-.07-.2-.15-.39-.24-.59l.94-.95-2.82-2.82-.95.94c-.2-.09-.39-.17-.59-.24V0h-4v1.34c-.2.07-.39.15-.59.24l-.95-.94-2.82 2.82.94.95c-.09.2-.17.39-.24.59H.523v4h1.34c.07.2.15.398.24.59l-.94.95 2.82 2.82.95-.94c.192.09.39.17.59.24V14h4v-1.34c.2-.07.398-.15.59-.24l.95.94 2.82-2.82-.94-.95c.09-.192.17-.39.24-.59zm-.57 1.54l-1.55 1.55-.77-.76-.57.27a4.4 4.4 0 0 1-.5.21l-.6.21v1.08h-2.2V12l-.6-.21a4.4 4.4 0 0 1-.5-.21l-.57-.27-.77.76-1.55-1.53.76-.77-.27-.57a4.4 4.4 0 0 1-.21-.5l-.19-.6h-1.1V5.9h1.1l.21-.6a4.4 4.4 0 0 1 .21-.5l.27-.57-.76-.77 1.53-1.55.77.76.57-.27a4.4 4.4 0 0 1 .5-.21l.6-.19V.9h2.2V2l.6.21c.17.06.338.13.5.21l.57.27.77-.76 1.55 1.55-.76.77.27.57c.08.162.15.33.21.5l.21.6h1.08v2.2h-1.1l-.21.6a4.4 4.4 0 0 1-.21.5l-.27.57.78.75zM7.523 4.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm0 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" fill="#999"></path>
                                </svg>
                            </label>
                            <label for="myml-menu-section-toggle-config" class="myml-nav__section-title">Configuración</label>
                        </span>
                        <div class="myml-nav__section-list">
                            <a id="myml-nav__menu-item-my_details" class="myml-nav__menu-item myml-nav__menu-item--active" href="{{route('perfil')}}">
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
            
        </label><!-- 
        {!! Html::script('js/menuJS.js') !!}  -->
    </div>
    </div>
    <div class="col-md-10 cont_sub_cont">
        <div class="col-md-12 textIzquierda" style="    margin-left: 10px;background-color:white;width: 99%;">
            <h2 class="typo">Mis Datos</h2>
        </div>
        <div class="col-md-12 cont_principal_perfil" style="background: white;    margin-left: 10px;padding-bottom: 100px;width: 99%;    padding-left: 4.2%;">  

                <div class="row" style="text-align: right;padding: 0px;    margin-left: 1%;">
                    <div class="col-md-6" style="border-bottom: 1px dotted rgb(221, 221, 221);margin: 0px 0px 20px;padding: 0px;"> 
                        <p class="H3_1" style="float: left;">Datos de la cuenta</p>
                        <a href="#" title="Necesito ayuda" >Necesito ayuda</a>
                    </div>
                </div> 
                <div class="row cont_descrip_info">
                    <div class="col-md-2 cont_titulos">
                        <div class="row descrip_info">
                            Usuario
                        </div>
                        <div class="row descrip_info">
                            Email
                        </div>
                        <div class="row descrip_info">
                            Clave
                        </div>
                    </div>
                    <div class="col-md-10 cont_datos">
                        <div class="row descrip_info_content">
                            {{ auth()->user()->alias }}<a href="editarusuario"> Modificar</a>
                        </div>
                        <div class="row descrip_info_content">
                            {{ auth()->user()->email }}<a href="editarcorreo"> Modificar</a>
                        </div>
                        <div class="row descrip_info_content">
                            ********<a href=editarpassword> Modificar</a>
                        </div>
                    </div>
                </div>  
                <div class="row" style="text-align: right;padding: 0px;    margin-left: 1%;">
                    <div class="col-md-6" style="border-bottom: 1px dotted rgb(221, 221, 221);margin: 0px 0px 20px;padding: 0px;"> 
                        <p class="H3_1" style="float: left;">Datos personales</p>
                        <a href="#" title="Necesito ayuda" >Necesito ayuda</a>
                    </div>
                </div> 
                <div class="row cont_descrip_info">
                    <div class="col-md-2 cont_titulos">
                        <div class="row descrip_info">
                            Nombre y apellido
                        </div>
                        <div class="row descrip_info">
                            documentos
                        </div>
                        <div class="row descrip_info">
                            Teléfono
                        </div>
                    </div>
                    <div class="col-md-10 cont_datos">
                        <div class="row descrip_info_content">
                            {{ auth()->user()->nombre }} {{$usuario->apellido}}<a href="javascript:openventana()"> Modificar</a>
                        </div>
                        <div class="row descrip_info_content">
                            <?php if($usuario->documento=="_"){}else{echo $usuario->documento;}?><a href="javascript:openventana2()"> Agregar</a>
                        </div>
                        <div class="row descrip_info_content"> 
                            <?php if($usuario->telefono=="_"){}else{echo "<label id='lblTel'>".$usuario->telefono."</label>";}?> 
                            <?php if($usuario->telefono2=="_"){}else{echo '<label style="margin-left: 2px; margin-right: 100px; font-size: 12px; text-align: right;" id="tel">/'.$usuario->telefono2.'</label>';}?>   
                            <a href="javascript:openventana3()"> Agregar</a>
                        </div>
                    </div>
                </div> 
                <div class="row" style="text-align: right;padding: 0px;    margin-left: 1%;">
                    <div class="col-md-6" style="border-bottom: 1px dotted rgb(221, 221, 221);margin: 0px 0px 20px;padding: 0px;"> 
                        <p class="H3_1" style="float: left;">Tarjetas de crédito</p>
                        <a href="#" title="Necesito ayuda" >Necesito ayuda</a>
                    </div>
                </div> 
                <div class="row cont_descrip_info">  
                    @isset($cardList) 
                        @foreach($cardList as $card) 
                            <div class="col-md-6 divisorCajas">
                                <div id="cont_card" class="row descrip_info_content" style="margin-left: 3px;margin-bottom:0px">
                                    Terminada en <?php echo mb_substr($card->card_number,-4); ?> <a id="{{$card->id}}" title="Eliminar" style="float: right;cursor: pointer;">Eliminar</a>
                                </div>
                                <div class="row descrip_info_content cardsDetails">
                                    {{$card->bank_name}}
                                </div>
                                <div class="row descrip_info_content cardsDetails"> 
                                    Vencimineto: {{$card->expiration_month}}/{{$card->expiration_year}}
                                </div> 
                            </div>
                            <!-- Modal -->
  <div class="modal fade in" id="modalBorrarTarj_{{$card->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 40%;height: auto;top: 25%;">
      <div class="modal-content" style="margin: auto;">
        <div class="modal-header" style="border-bottom: 0px;padding-bottom:0px;">
          <div class="col-md-12">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="col-md-12">
            <div class="ui-icon--content" style="width: 50px;margin: 0 auto;">
                <svg viewBox="0 0 16 16" id="ui-icon--question-blocked" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><g fill="none" fill-rule="evenodd"><circle fill="#F57819" transform="rotate(-180 8 8)" cx="8" cy="8" r="8"></circle><path fill="#FFF" d="M7 3h1.882l-.235 5.176H7.235z"></path><ellipse fill="#FFF" cx="7.941" cy="10.941" rx=".941" ry=".941"></ellipse></g></svg>
            </div>
          </div> 
        </div>
        <div class="modal-body" style="border-bottom: 0px;padding: 0px 50px 30px;padding: 0px;">
            <div>
                <section class="ui-list ui-list--modal addresses-selection" data-component="address-selection">
                    <div data-component="address-list">
                        <h2 style="font-size: 20px;">¿Quieres eliminar la tarjeta terminada en <?php echo mb_substr($card->card_number,-4); ?> ?</h2>
                    </div>
                </section>
            </div>
        </div>
        <div class="modal-footer" style="text-align: left;padding: 30px;border-top: 0px;padding-top: 10px;">
            <div><div class="modal-footer-action addresses-actions" data-component="addresses-actions"  style="text-align: center;">
                <form action="{{route('dalateCard')}}" method="post" id="frmDalete_{{$card->id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                    <input type="hidden" name="idCard" value="{{$card->id}}">
                    <input type="hidden" name="card_number" value="{{$card->card_number}}">
                    <input type="submit" id="btnDeleteCard" class="ch-btn deleteCardBtn" value="Eliminar">
                    <a id="close_modal" href="#" data-dismiss="modal">Cancelar</a>
                </form>
                
            </div>
            </div>
        </div> 
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
                        @endforeach
                    @endisset 
                    @empty($cardList)
                    @endempty
                </div>  
                <div class="row" style="text-align: right;padding: 0px;    margin-left: 1%;">
                    <div class="row col-md-6" style="float: none;border-bottom: 1px dotted rgb(221, 221, 221);margin: 0px 0px 20px;padding: 0px;"> 
                        <p class="H3_1" style="float: left;">Domicilios</p>
                        <a href="#" title="Necesito ayuda" >Necesito ayuda</a>
                    </div>  
                    @isset($domicilios) 
                        @foreach($domicilios as $domicilio)
                            <div class="row col-md-6" style="float:none;border-bottom: 1px dotted rgb(221, 221, 221);margin: 0px 0px 20px;padding: 0px;"> 
                                <ul class="ml-addresses__list"> 
                                    <li class="ml-addresses__list-item">
                                        <div class="ml-addresses-data">
                                            <dl>
                                                <dt>Direccion:</dt>
                                                <dd class="ml-addresses-data__item ml-addresses-data__item--strong">
                                                    {{$domicilio->calle}} {{$domicilio->numeroEx}} 
                                                    @if($domicilio->numeroInt!=null)
                                                        {{$domicilio->numeroInt}}
                                                    @else 
                                                        SN 
                                                    @endif
                                                </dd>
                                                <dt>Datos Adicionales:</dt>
                                                <dd class="ml-addresses-data__item">{{$domicilio->entrecalles}}  </dd>

                                                <dt>Referencias:</dt>
                                                <dd class="ml-addresses-data__item">{{$domicilio->referencia}}</dd>

                                                <dt>Localidad:</dt>
                                                <dd class="ml-addresses-data__item">{{$domicilio->estado}} ({{$domicilio->codigopostal}}), {{$domicilio->municipio}}</dd>
                                            </dl> 
                                        </div>
                                        <div class="ml-addresses-tags">  
                                        </div> 
                                        <div class="ml-addresses-actions visible"> 
                                            <div class="mymlDropdownMassiveActions massive secondary ch-dropdown" id="primerMenu" onclick="mostrarPrimerMenu(this)">
                                                <p class="itemsSecondaryActionsContainer ch-dropdown-trigger ch-dropdown-ico ch-btn-skin ch-btn-small ch-points-ltlb ch-user-no-select" style="height: 25px;margin:5px;">
                                                <span class="ico itemsSecondaryActionsIcn"><i style="width: 20px;margin-top: -3px;padding-top: 0px;height: 20px;margin-left: -5px;" class="ch-icon-cog"></i></span></p>
                                                <ul id="primerMenuUL" class="ch-dropdown-content ch-hide ch-points-ltlb" role="menu" aria-hidden="true" style="position: absolute;left: -180%;top: 85.9%;z-index: 1;overflow: hidden;border-radius: 5px 5px 5px 5px;    -webkit-box-shadow: 2px 2px 2px hsla(0,0%,39%,.2);box-shadow: 2px 2px 2px hsla(0,0%,39%,.2);border: 1px solid #dedede;    text-align: left;color: black">
                                                    <a role="menuitem"></a> 
                                                    <li class="masiveActionOption cannot reactivate" style="padding: 3px;">    <a href="{{route('irAModificarDireccion', ['id' => $domicilio->_id])}}"" style="padding:0px;margin:0px;"><p style="color: black;padding-bottom: 5px;">Modificar</p></a>                                
                                                    </li>
                                                    <li class="masiveActionOption cannot finalize" style="padding: 3px;">    <a href="" style="padding:0px;margin:0px;"><p style="color: black;padding-bottom: 5px;">Usar para compras</p></a>
                                                    </li> 
                                                    <li class="masiveActionOption cannot finalize" style="margin-bottom:10px;    padding: 3px;">    <a href="{{route('eliminarDomicilio', ['idElemneto' => $domicilio->_id])}}" style="padding:0px;margin:0px;"><p style="color: black;padding-bottom: 5px;">Eliminar</p></a>
                                                    </li> 
                                                </ul>
                                            </div> 
                                            <div class="ch-popover ch-dropdown ch-box-lite ch-hide" role="checkbox" style="width: auto; height: auto; position: absolute; z-index: 1012; right: 0;">
                                                <div class="ch-popover-content">
                                                    <menu label="Links" class=""> 
                                                        <li>
                                                            <a href="#" target="_parent">Modificar</a></li> 
                                                        <li>
                                                            <a href="#" target="_parent">Usar para compras</a>
                                                        </li> 
                                                    </menu>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="ml-addresses-subaction" id="subaction_container">
                                            <input class="ml-addresses-subaction__checkbox" type="checkbox" id="toggleVisibleCheckbox" value="false">
                                            <label class="ml-addresses-subaction__checkbox-label" for="toggleVisibleCheckbox">
                                                Quiero que mis compradores reciban mi domicilio junto con mis datos de contacto.
                                            </label>
                                            <span class="ch-loading-small ch-hidden"></span> 
                                        </div> 
                                    </li>      
                                </ul> 
                            </div> 
                        @endforeach
                        
                        <div class="row" style="text-align:left;padding-left: 15px;">
                                <a href="{{route('agregarDomicilio')}}">Agregar domicilio</a>
                        </div>
                    @endisset 
                    @empty($domicilios)
                        <div class="row col-md-6" style="float:none;border-bottom: 1px dotted rgb(221, 221, 221);margin: 0px 0px 20px;padding: 0px;"> 
                            <div class="row" style="text-align:left;padding-left: 15px;">
                                    <a href="agregarDomicilio">Agregar domicilio</a>
                            </div>
                        </div>
                    @endempty
                    
                </div>    
        </div>
    <div> 
</div> 
    </div>
</div>

<div id="openModal1" class="ventana">
        <div class="form">
        <form method="post" action="{{route('cambiarnombre')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
            <input type="hidden" name="id" value="{{ auth()->user()->id }}" id="id">
            <table  align="left" style="width: 100%">
                <p style=" font-size: 22px; text-align-last: left;">Modificar nombre y apellidos</p>
                <tr>
                    <td style="padding: 20px 15px 10px 10px">Nombre *</td>
                    <td colspan="2"><input type="text" name="nombre" id="nombre" class="CajaTex" value="{{ auth()->user()->nombre }}" style="width: 130%"></td>
                    <td><input type="" value="Completa este dato." id="alertMsjinputNombre"  style="width: 150px ;margin-left:  40px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden;">
                    </td>
                </tr>
                <tr>
                    <td style="padding: 20px 15px 10px 10px" >Apellido *</td>
                    <td colspan="2"><input type="text"  id="apellido" name="apellido" class="CajaTex" value="{{$usuario->apellido}}" style="width: 130%"  style="width: 200%"></td>
                    <td><input type="" value="Completa este dato." id="alertMsjinputApellido"  style="width: 150px ;margin-left: 40px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden;">
                    </td>
                </tr>
                <tr>
                    
                    <td style="width: 40%; margin-top: 9px">
                    <a href="javascript:btnCambiarnombreAP()" class="boton-azul" style="padding-left: 9PX">Actualizar</a> 
                    <a href="{{route('perfil')}}" style="padding-left: 9PX; color: blue">Cancelar</a></td>
                    
            </tr>
            </table>
    </form>
    </div>
</div>

<div id="openModal2" class="ventana">
        <div class="form">
        <form method="post" action="{{route('agregardocumento')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
        <input type="hidden" name="id" value="{{ auth()->user()->id }}" id="id">
        
                <p style=" font-size: 22px; text-align-last: left;">Agrega mi documento</p>
                <div>
                     Documento *
                   
                        <select id="documento" name="documento">
                            <option value="RFC">RFC</option>
                            <option value="CURP">CURP</option>
                            <option value="IFE">IFE</option>
                            <option value="Otro">Otro</option>
                        </select>
                    
                        <input type="text" id="dato" class="CajaTex" style="width: 40%"  style="width: 100%">
                        <input type="" value="Completa este dato." id="alertMsjinputDato"  style="width: 130px ;margin-left: 10px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden;">
                </div>
                <div style="margin-top: 15px; width: 100%">
                    <a href="javascript:guardarDocumento()" name="Cambiar" class="boton-azul" style="margin-top: 1px" >Guardar</a>
                    <a href="javascript:closeventana()" style="color: blue">Cancelar</a>
                </div>
    </form>
    </div>
</div>


<div id="openModal3" class="ventana">
        <div class="form" style="height: 250px" id="formTel">
        <form  method="post" action="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
        <input type="hidden" name="id" value="{{ auth()->user()->id }}" id="id">
            
                
                <p style=" font-size: 22px; text-align-last: left;">Agrega Telefono</p>
                <div style="width: 100%">
                    <label style="margin-right: 10px;  font-size: 13px; ">Telefono * </label> 
                    <input type="number" value="<?php if($usuario->telefono=="_"){echo '';}?>" name="tel" id="telefono" style="width: 25%; padding-left: 2px; margin-left: 30px" class="CajaTex">
                    <input type="" value="Completa este dato." id="alertMsjinputTelefono"  style="width: 130px ;margin-left: 10px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden;">
                </div>  
                <div style="margin-top: 10px;margin-left: 50px; color: #999; width: 93%; font-size: 12px">
                    Código de área + Nº. Ejemplo: (11) 4323-4556.
                </div>

                <div style="width: 100%; visibility: hidden;" id="ocultarTel" >
                      Telefono Alternativo*
                    <input type="number" value="" name="tel" id="telefono2" style="width: 25%" class="CajaTex">
                    <input type="" value="Completa este dato." id="alertMsjinputTelefono"  style="width: 130px ;margin-left: 10px; background-color: #F5B7B1;border: 0.5px solid #CD6155 ; border-radius: 4px; color: #C0392B; padding: 3px; visibility: hidden;">
                </div>  
                <div id="ocultarTelLeyenda" style="margin-top: 15px;margin-left: 50px; color: #999; width: 93%; font-size: 12px">
                    Código de área + Nº. Ejemplo: (11) 4323-4556.
                </div>
                <div style="margin-top: 15px; margin-left: 50px width: 65%" id="GuardarTel">
                     <a href="javascript:agregarTel()" class="boton-azul" style="height: 35px"  >Guardar</a>
                    <a href="javascript:closeventana()" style="color: blue">Cancelar</a>
                </div>  
    </form>
    </div>  
@stop
