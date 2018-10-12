@extends('layouts.masterRegistro')

@section('content')  
{!! Html::style('css/descripStyle.css') !!}  
<div style="margin: 30px auto 20px;max-width: 1220px;background-color: #fff;border: 1px solid #e2e2e2;border-radius: 5px;height:auto;display: inline-block; ">
    <div style="" class="cont-ruta">
    	<ol class="syi-ui-wizard__breadcrumb syi-ui-wizard__step--4" data-reactid="7" style="display: block;list-style: none;    overflow: hidden;padding: 0;margin: 0 0 30px;">
    		<li class="syi-ui-wizard__step syi-ui-wizard__step--current" data-reactid="8"><span data-reactid="9"><a href="{{ URL::previous() }}">Elige qué quieres publicar</a></span></li>
    		<li class="syi-ui-wizard__step" data-reactid="10" style="font-weight: 700;color: #333;border-bottom: 0"><span data-reactid="11">Describe tu producto</span></li>
    		<li class="syi-ui-wizard__step" data-reactid="12"><span data-reactid="13">Ingresa precio y cantidad</span></li>
    		<li class="syi-ui-wizard__step" data-reactid="14"><span data-reactid="15">Confirma tu publicación</span></li>
    	</ol>
    </div>
    <div style="position: relative;">
            <div style="width: 100%;height: 100%;text-align: left;margin:20px;">
                <form method="post" id="upload_form" enctype="multipart/form-data" action="{{route('precio')}}"> 
                    <div class="row col-md-12">
                        <input type="hidden" name="idPublicacion" id="idPublicacion" value="{{ $idPublicacion }}">
                        <input type="hidden" name="idUser" id="idUser" value="{{ auth()->user()->_id }}">
                        <input type="hidden" name="categoria" id="categoria" value="{{ $categoria }}">
                        <input type="hidden" name="tipo" id="tipo" value="{{ $tipo }}">
                        <input type="hidden" name="marca" id="marca" value="{{ $marca }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                        <fieldset id="categoriaSeleccionada">
                            <legend>Categorías</legend>
                            <h3 style="text-transform: capitalize;">{{ $tipo }}</h3>
                            <p>Autos, Motos y Otros > {{ $categoria }} > <strong>{{ $marca }}</strong> <a href="{{ URL::previous() }}">Modificar</a></p>
                        </fieldset>                    
                    </div>
                    <div class="row col-md-12" style="margin-top:10px;">
                        <fieldset id="grupoFotos">
                            <legend>Ingrese fotos de su vehículo</legend>
                            <p><b>¡Tu vehículo es el protagonista!</b> No incluyas logos, banners, textos promocionales, bordes ni marcas de agua.</p> 
                            <h6>Arrastra tus fotos para ordenarlas.</h6>
                            <div class="row col-md-12">
                                <div class="picture-uploader  picture-uploader-motors ">
                                    <input type="hidden" id="allPictures" name="allPictures" data-allpictures="" value="[]">
                                    <input type="hidden" name="execution" value="e1s2" id="execution">
                                    <noscript>
                                        <div class="ch-box-icon ch-box-info">
                                            <i class="ch-icon-info-sign"></i>
                                            Estás viendo un cargador de fotos básico porque tu navegador está desactualizado. <strong>Para tener una mejor experiencia, actualiza la versión de tu navegador.</strong>
                                        </div>
                                    </noscript>
                                    <div class="picture-uploader-preview " id="picture-uploader-preview" style="position: relative;z-index: 1;">
                                        <ul>
                                            
                                                {{ csrf_field() }}
                                                        <input type="file" name="select_file" id="select_file" class="btn-car" /> 
                                                <li data-picture-status="no" class="off" id="clickimg1" onclick="clickbtn(id)"> 
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                    <p class="picture-uploader-principal">Foto principal</p>
                                                </li> 
                                                
                                            
                                                <li data-picture-status="off" id="clickimg2" onclick="clickbtn(id)">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                            
                                                <li data-picture-status="off">
                                                    <p class="picture-uploader-add">Agregar</p>
                                                    <div class="picture-uploader-controls">
                                                        <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">x</span></a>
                                                    </div>
                                                </li>
                                        <li data-picture-status="off"><p class="picture-uploader-add">Agregar</p><div class="picture-uploader-controls"><a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">Borrar</span></a></div></li></ul>
                                    </div>
                                    <div id="html5_1cpaullo31ni1nbioqm1s7f2mk3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 1024px; height: 0px; overflow: hidden; z-index: 0;"><input id="html5_1cpaullo31ni1nbioqm1s7f2mk3" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/jpeg,.JPG,.JPEG,image/gif,.GIF,image/png,.PNG,.webp">
                                    </div>
                                </div>
                            </div> 
                        </fieldset>
                    </div> 
                    <div class="row col-md-12">
                        <fieldset>
                            <legend>Ingresa un video</legend>
                            <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;margin-left: 30px;"><p>Link de YouTube</p></div>
                            <div class="col-md-4">
                                <input class="form-control col-md-4" type="text" name="videoURL" id="videoURL">
                                <span>Ingresa el link de tu video de YouTube.</span>
                            </div>
                        </fieldset>
                    </div>
                    <div class="row col-md-12">
                        <fieldset>
                            <legend>Ubicación de tu vehículo</legend>
                            <span>* Datos obligatorios</span>  
                                <div>
                                    <div class="ch-form">
                                        <label class="lblUbicacion">Estado:*</label>
                                        <select name="estado" id="estado">
                                            <option value="">Selecciona un estado</option>  
                                        </select>
                                    </div> 
                                    <div class="ch-form">
                                        <label class="lblUbicacion">Municipio:*</label>
                                        <select name="municipio" id="municipio">
                                            <option value="">Selecciona un municipio</option>
                                        </select>  
                                    </div>
                                    <div class="ch-form">
                                        <label class="lblUbicacion">Colonia:*</label>
                                        <select name="colonia" id="colonia">
                                            <option value="">Selecciona una colonia</option>
                                            <option value="Fracc.Los Angeles">Fracc.Los Angeles</option>}
                                            option
                                        </select>
                                    </div> 
                                </div>
                        </fieldset>
                    </div>
                    <div class="row col-md-12">
                        <fieldset>
                            <legend>Datos de contacto</legend>
                            <span style="margin-bottom:10px;">El teléfono será mostrado en tu publicación.</span>
                            <span>* Datos obligatorios</span>  
                                <div class="row">
                                    <div class="ch-form">
                                        <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;margin-left: 30px;"><label class="lblUbicacion">Teléfono:*</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-control col-md-2" type="text" name="telefono" id="telefono"> 
                                        </div>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="ch-form">
                                        <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;width: 131.5px;"><p>Horario de contacto:</p>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-control col-md-2" type="text" name="horarioContacto" id="horarioContacto"> 
                                        </div>
                                    </div> 
                                </div>
                        </fieldset>
                    </div>
                    <div class="row col-md-12">
                        <fieldset>
                            <legend>Describe tu vehículo</legend>
                            <span>* Datos obligatorios</span>  
                                <div class="row">
                                    <div class="ch-form">
                                        <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;margin-left: 30px;"><label class="lblUbicacion">Modelo:*</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-control col-md-2" type="text" name="modelo" id="modelo"> 
                                        </div>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="ch-form">
                                        <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;margin-left: 30px;"><label class="lblUbicacion">Año:*</label>
                                        </div>
                                        <div class="col-md-2">
                                            <select name="anio" id="anio">
                                                <option value="">Elejir</option>
                                                <option value="1994">1994</option>
                                            </select>
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="ch-form">
                                        <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;margin-left: 30px;"><label class="lblUbicacion">Puertas:*</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-control col-md-2" type="text" name="numPuertas" id="numPuertas"> 
                                        </div>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="ch-form">
                                        <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;margin-left: 30px;"><label class="lblUbicacion">Kilometros:*</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-control col-md-2" type="text" name="kilometros" id="kilometros"><p style="    display: flex;margin-top: 10px;">km</p> 
                                        </div>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="ch-form"> 
                                        <div class="col-md-1" style="text-align: right;padding: 0px;margin: 0px;margin-top: 8px;width: 131.5px;"><p>Color:</p>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-control col-md-2" type="text" name="color" id="color">
                                        </div>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="ch-form"> 
                                        <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;width: 131.5px;"><p>Tipo de Combustible:</p>
                                        </div>
                                        <div class="col-md-4"> 
                                            <select style="margin-top: 5px;" name="FUEL_TYPE" id="FUEL_TYPE" class="" data-validate-type="list">
                                                <option value="">Elegir</option>
                                                <option class="attribute-list-option" value="60406">Diesel</option>
                                                <option class="attribute-list-option" value="64051">Eléctrico</option>
                                                <option class="attribute-list-option" value="64364">Gasolina</option>
                                                <option class="attribute-list-option" value="61257">Híbrido</option>
                                                <option class="attribute-list-option" value="1233789">Híbrido/Gasolina</option>
                                            </select>
                                        </div>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="ch-form"> 
                                        <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;width: 131.5px;"> 
                                        </div>
                                        <div class="col-md-4" style="font-size: 13px;color: blue;margin: 15px 0 20px 0px;"> 
                                            <label>Menos especificaciones</label>
                                        </div>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="ch-form">
                                        <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;margin-left: 30px;"><p style="text-align: right;">Motor:</p>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-control col-md-2" type="text" name="motor" id="motor"> 
                                        </div>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="ch-form">
                                        <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;margin-left: 30px;"><p style="text-align: right;">Dirección:</p>
                                        </div>
                                        <div class="col-md-2">
                                            <select name="STEERING" id="STEERING" class="" data-validate-type="list">
                                                <option value="">Elegir</option>
                                                <option class="attribute-list-option" value="370873">Asistida</option>
                                                <option class="attribute-list-option" value="370874">Hidráulica</option>
                                                <option class="attribute-list-option" value="370875">Mecánica</option>
                                            </select>
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="ch-form">
                                        <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;margin-left: 30px;"><p style="text-align: right;">Transmición:</p>
                                        </div>
                                        <div class="col-md-2">
                                            <select name="TRANSMISSION" id="TRANSMISSION" class="" data-validate-type="list">
                                                <option value="">Elegir</option>
                                                <option class="attribute-list-option" value="370876">Automática</option>
                                                <option class="attribute-list-option" value="370877">Manual</option>
                                                <option class="attribute-list-option" value="370878">Secuencial</option>
                                                <option class="attribute-list-option" value="378323">Semi-automática</option>
                                            </select>
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="ch-form">
                                        <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;margin-left: 30px;"><p style="text-align: right;">Versión:</p>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-control col-md-2" type="text" name="version" id="version"> 
                                        </div>
                                    </div>  
                                </div> 
                                <div class="row">
                                    <h4 class="attributes-section-title">Confort</h4>
                                    <div class="ch-g1-4">
                                        <ul class="ch-form-options ch-box-list ch-leftcolumn">
                                            <li class="ch-form-row">
                                                <input type="checkbox" name="HAS_AIR_CONDITIONING" id="HAS_AIR_CONDITIONING" class="">
                                                <label for="HAS_AIR_CONDITIONING" class="">Aire acondicionado</label>
                                            </li>
                                            <li class="ch-form-row">
                                                <input type="checkbox" name="HAS_AMFM_RADIO" id="HAS_AMFM_RADIO" class="">
                                                <label for="HAS_AMFM_RADIO" class="">AM/FM</label>
                                            </li>
                                            <li class="ch-form-row">
                                                <input type="checkbox" name="HAS_ELECTRIC_MIRRORS" id="HAS_ELECTRIC_MIRRORS" class="">
                                                <label for="HAS_ELECTRIC_MIRRORS" class="">Espejos eléctricos</label>
                                            </li>
                                            <li class="ch-form-row">
                                                <input type="checkbox" name="HAS_LEATHER_UPHOLSTERY" id="HAS_LEATHER_UPHOLSTERY" class="">
                                                <label for="HAS_LEATHER_UPHOLSTERY" class="">Tapizado de cuero</label>
                                            </li>
                                            <li class="ch-form-row">
                                                <input type="checkbox" name="HAS_SLIDING_ROOF" id="HAS_SLIDING_ROOF" class="">
                                                <label for="HAS_SLIDING_ROOF" class="">Techo corredizo</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <h4 class="attributes-section-title">Seguridad</h4>
                                    <div class="ch-g1-4">
                                        <ul class="ch-form-options ch-box-list ch-leftcolumn">
                                            <li class="ch-form-row">
                                                <input type="checkbox" name="HAS_AIR_CONDITIONING" id="HAS_AIR_CONDITIONING" class="">
                                                <label for="HAS_AIR_CONDITIONING" class="">Alarma</label>
                                            </li>
                                            <li class="ch-form-row">
                                                <input type="checkbox" name="HAS_AMFM_RADIO" id="HAS_AMFM_RADIO" class="">
                                                <label for="HAS_AMFM_RADIO" class="">Faros antinieblas delanteros</label>
                                            </li>
                                            <li class="ch-form-row">
                                                <input type="checkbox" name="HAS_ELECTRIC_MIRRORS" id="HAS_ELECTRIC_MIRRORS" class="">
                                                <label for="HAS_ELECTRIC_MIRRORS" class="">Apoya cabeza en asientos traseros</label>
                                            </li>
                                            <li class="ch-form-row">
                                                <input type="checkbox" name="HAS_LEATHER_UPHOLSTERY" id="HAS_LEATHER_UPHOLSTERY" class="">
                                                <label for="HAS_LEATHER_UPHOLSTERY" class="">Faros antinieblas traseros</label>
                                            </li> 
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <h4 class="attributes-section-title">Exterior</h4>
                                    <div class="ch-g1-4">
                                        <ul class="ch-form-options ch-box-list ch-leftcolumn">
                                            <li class="ch-form-row">
                                                <input type="checkbox" name="HAS_AIR_CONDITIONING" id="HAS_AIR_CONDITIONING" class="">
                                                <label for="HAS_AIR_CONDITIONING" class="">Paragolpes pintados</label>
                                            </li>
                                            <li class="ch-form-row">
                                                <input type="checkbox" name="HAS_AMFM_RADIO" id="HAS_AMFM_RADIO" class="">
                                                <label for="HAS_AMFM_RADIO" class="">Soporte para rueda de auxilio</label>
                                            </li>
                                            <li class="ch-form-row">
                                                <input type="checkbox" name="HAS_ELECTRIC_MIRRORS" id="HAS_ELECTRIC_MIRRORS" class="">
                                                <label for="HAS_ELECTRIC_MIRRORS" class="">Limpia/lava luneta</label>
                                            </li> 
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <h4 class="attributes-section-title">Exterior</h4>
                                    <div class="ch-g1-4">
                                        <ul class="ch-form-options ch-box-list ch-leftcolumn">
                                            <li class="ch-form-row">
                                                <input type="checkbox" name="unicoDueno" id="unicoDueno" class="">
                                                <label for="unicoDueno" class="">Único dueño</label>
                                            </li> 
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="ch-form">
                                        <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;margin-left: 30px;"><label class="lblUbicacion">Titulo:*</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input class="form-control col-md-12" type="text" name="titulo" id="titulo"> 
                                            <span>Restan 60 caracteres.</span>
                                        </div>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="ch-form col-md-1" > 
                                    </div>
                                    <div class="col-md-11" style="width: 90%;">
                                        <div class="desc-message-warning">
                                            <div class="desc-message-warning__text classifieds">
                                                <h3 class="desc-message-warning__title">Completa tu descripción sin agregar datos de contacto</h3>
                                                <div class="desc-message-warning__content">
                                                    <p>
                                                        No incluyas teléfonos, e-mails, direcciones ni sitios web en la descripción ni en el título.
                                                    </p>
                                                    <p>
                                                        Las publicaciones que tengan datos de contacto en esas secciones aparecerán más abajo en los resultados de búsquedas.
                                                    </p>

                                                </div>
                                            </div>

                                            <div class="desc-message-warning__image">
                                                <img src="https://http2.mlstatic.com/secure/sell/1.0.0/syi-fixing.svg">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="ch-form">
                                            <div class="col-md-1" style="padding: 0px;margin: 0px;margin-top: 8px;margin-left: 30px;"><p style="text-align: right;">Descripción:</p>
                                            </div>
                                            <div class="col-md-10"> 
                                                <textarea placeholder="Escribe tu descripción" name="descripcion" rows="10" class="desc-textarea form-control addMarginIzquierdaInput"></textarea>
                                            </div>
                                        </div>  
                                    </div> 
                                </div>
                        </fieldset>
                    </div>
                    <div class="row col-md-12" id="footer-descripcion"> 
                        <input type="submit"  class="btn-azul" name="des-continuar2" id="btn-continuar2" value="Continuar" style="font-size: 18px;padding: 6px 12px;margin-top:0px">
                        <a href="{{ URL::previous() }}" title="">Volver</a>
                    </div>
                </form>
            </div>
    </div> 
</div> 
<footer role="contentinfo" class="nav-footer" style="    margin-top: 5rem;">
    <div class="nav-bounds">
        <div class="nav-footer-info-wrapper">
            <div class="nav-footer-primaryinfo">
                <small class="nav-footer-copyright">Copyright ©&nbsp;1999-2018 DeRemate.com de México S. de R.L. de C.V.</small>
                <nav class="nav-footer-navigation">
                    <a href="http://www.mercadolibre.com/empleos">Trabaja con nosotros</a>
                    <a href="https://www.mercadolibre.com.mx/ayuda/terminos-y-condiciones-uso-del-sitio_2090">Términos y condiciones</a>
                    <a href="https://www.mercadolibre.com.mx/ayuda/Aviso-de-privacidad_1167">Políticas de privacidad</a><a href="https://www.mercadolibre.com.mx/ayuda">Ayuda</a>
                </nav>
            </div>
        </div> 
    </div>
</footer> 
@stop