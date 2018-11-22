window.onload = seleccionarOpcion;
function mostrarPrimerMenu(elemento){  
	if (!$(elemento).find("ul").hasClass('bandera')) {
		$(elemento).find("ul").removeClass("ch-hide"); 
		$(elemento).find("ul").addClass( "bandera" ); 
	}else{
		$(elemento).find("ul").addClass( "ch-hide" ); 
		$(elemento).find("ul").removeClass("bandera");  
	}
}    

//Aparecer form de Productos
$('#ve_mas').click(function(){
	$('#frmProducto').show();
});


function mostrarSegundoMenu(id){ 
	if (!$('#segundoMenu'+id).hasClass('bandera')) { 
		$('#segundoMenu'+id).removeClass("ch-hide"); 
		$('#segundoMenu'+id).addClass( "bandera" ); 
	}else{
		$('#segundoMenu'+id).addClass( "ch-hide" ); 
		$('#segundoMenu'+id).removeClass("bandera");  
	}
}
(function($) {  
    $.get = function(key)   {  
        key = key.replace(/[\[]/, '\\[');  
        key = key.replace(/[\]]/, '\\]');  
        var pattern = "[\\?&]" + key + "=([^&#]*)";  
        var regex = new RegExp(pattern);  
        var url = unescape(window.location.href);  
        var results = regex.exec(url);  
        if (results === null) {  
            return null;  
        } else {  
            return results[1];  
        }  
    }  
})(jQuery); 
var urlFiltros = "";
function seleccionarOpcion(id){  
	if (id=="masRe") { 
		$('.applied-filters').html("<dl><a href='resultados?busqueda="+$.get("busqueda")+"'><dd><h2 class='applied-fliter'><div> Más relevantes </div></h2><div class='close__icon'></div></dd></a></dl>");
		$('.ui-list__item:nth-child(2)').addClass('ui-list__item--selected');
		$('.tituloOpcion').html("Más relevantes");
		//urlFiltros=urlFiltros+"&ORDEN=";
	}else if(id=="menorPre") { 
		$('.applied-filters').html("<dl><a href='resultados?busqueda="+$.get("busqueda")+"'><dd><h2 class='applied-fliter'><div> Menor precio </div></h2><div class='close__icon'></div></dd></a></dl>");
		$('.ui-list__item:nth-child(3)').addClass('ui-list__item--selected'); 
		$('.tituloOpcion').html("Menor precio");
		//urlFiltros=urlFiltros+"&ORDEN=ASC";
	}else if(id=="mayorPre"){ 
		$('.applied-filters').html("<dl><a href='resultados?busqueda="+$.get("busqueda")+"'><dd><h2 class='applied-fliter'><div> Mayor precio </div></h2><div class='close__icon'></div></dd></a></dl>");
		$('.ui-list__item:nth-child(4)').addClass('ui-list__item--selected'); 
		$('.tituloOpcion').html("Mayor precio");
		//urlFiltros=urlFiltros+"&ORDEN=DSC";
	}
} 
function seleccionarCategoria(id){
	if ($('#CATAUTCLA').html()!=null) { 
		$('#CATAUTCLA').remove();
	}else if($('#CATMOT').html()!=null){
		$('#CATMOT').remove();
	}else if ($('#CATAUTCAM').html()!=null) {
		$('#CATAUTCAM').remove();
	}
	if (id=="Autos de Colección") { 
		var filtros = $('.applied-filters').html();
		$('.applied-filters').html(filtros+"<dl id='CATAUTCLA'><a href='resultados?busqueda="+$.get("busqueda")+"'><dd><h2 class='applied-fliter'><div>Autos de Colección</div></h2><div class='close__icon'></div></dd></a></dl>");
	}else if (id=="Motos") { 
		var filtros = $('.applied-filters').html();
		$('.applied-filters').html(filtros+"<dl id='CATMOT'><a href='resultados?busqueda="+$.get("busqueda")+"'><dd><h2 class='applied-fliter'><div>Motos</div></h2><div class='close__icon'></div></dd></a></dl>");
	}else if (id=="Autos y Camionetas") { 
		var filtros = $('.applied-filters').html();
		$('.applied-filters').html(filtros+"<dl id='CATAUTCAM'><a href='resultados?busqueda="+$.get("busqueda")+"'><dd><h2 class='applied-fliter'><div>Autos y Camionetas</div></h2><div class='close__icon'></div></dd></a></dl>");
	}
}

function seleccionarPrecio(id){
	if ($('#dl1500').html()!=null) { 
		$('#dl1500').remove();
	}else if($('#dl1500-4000').html()!=null){
		$('#dl1500-4000').remove();
	}else if ($('#dl4000').html()!=null) {
		$('#dl4000').remove();
	}
	if (id=="1500") { 
		var filtros = $('.applied-filters').html();
		$('.applied-filters').html(filtros+"<dl id='dl"+id+"'><a href='resultados?busqueda="+$.get("busqueda")+"'><dd><h2 class='applied-fliter'><div> Menor a 1,500 </div></h2><div class='close__icon'></div></dd></a></dl>");
	}else if (id=="1500-4000") { 
		var filtros = $('.applied-filters').html();
		$('.applied-filters').html(filtros+"<dl id='dl"+id+"'><a href='resultados?busqueda="+$.get("busqueda")+"'><dd><h2 class='applied-fliter'><div> Entre a $1500 a $4,000 </div></h2><div class='close__icon'></div></dd></a></dl>");
	}else if (id=="4000") { 
		var filtros = $('.applied-filters').html();
		$('.applied-filters').html(filtros+"<dl id='dl"+id+"'><a href='resultados?busqueda="+$.get("busqueda")+"'><dd><h2 class='applied-fliter'><div> Mas de $4,000 </div></h2><div class='close__icon'></div></dd></a></dl>");
	}
}
$('.sort-by-options-trigger').click(function(){  
	if ($('#id-dropdown__content').attr('style') != null) {
		$('#id-dropdown__content').removeAttr('style');
	}else{
		$('#id-dropdown__content').attr('style', 'display:contents !important;');
	} 
}); 
function filtrar(){ 
	var orden = $('#ORDEN').val();
	var precio = $('#precio').val();
	var categoria = $('#categoria_selected').val();
	var busqueda = $.get('busqueda');
	var route = "resultados";
	var token = $("#token").val(); 
	  $.ajax({
	    url: route,
	    headers: {'X-CSRF-TOKEN': token},
	    type: 'GET',
	    dataType: 'json',
	    data: {orden: orden,precio:precio, busqueda:busqueda, categoria:categoria} 
	    }).done(function(data) {    
	    	$('#searchResults').html("");
	    	$.each(data.articulos, function(i, item) {
	    		//alert(item.idUser); 
	    		var articulosOL = $('#searchResults').html();
	    		$('#searchResults').html(articulosOL + '\
	    			<li class="results-item article grid "> \
                        <div class="rowItem item item--grid item--has-row-logo new" id="MLM645463946">\
                            <div class="item__image item__image--grid"> \
                                <div class="images-viewer" item-url=#" item-id="MLM645463946">\
                                    <div class="carousel" style="overflow: hidden;">\
                                        <div class="ch-carousel-prev ch-carousel-disabled ch-user-no-select" role="button" aria-hidden="true">\
                                            \
                                        </div>\
                                        <div class="ch-carousel-mask ch-carousel-adaptive" role="tabpanel" style="height:209px"> \
                                            <ul class="ch-carousel-list" role="list"> \
                                                <li class="ch-carousel-item" role="listitem" aria-hidden="false" aria-setsize="13" aria-posinset="1" aria-label="page1" style="width: 284px;  margin-right: 0px;"> \
                                                    <a href="verpublicacion?id='+item._id+'&user='+item.idUser+'" class="item-link item__js-link"> \
                                                        <img width="284" height="284" alt="Bmw Z4 Convertible Mt 2003 Autos Puebla" src="images/'+item.idUser+'/'+item.idPublicacion+'/'+item.urlPrincipal+'" class="lazy-load" srcset="images/'+item.idUser+'/'+item.idPublicacion+'/'+item.urlPrincipal+' 2x"> \
                                                    </a> \
                                                </li> \
                                            </ul>\
                                        </div>\
                                        <div class="ch-carousel-next ch-user-no-select" role="button" aria-hidden="false">\
                                            \
                                        </div>\
                                        <div class="ch-carousel-pages ch-user-no-select" role="tablist">\
                                            <span role="tab" aria-selected="true" aria-controls="page1" data-page="1" class="ch-carousel-selected">Page 1</span>\
                                            <span role="tab" aria-selected="false" aria-controls="page2" data-page="2" class="">Page 2</span>\
                                            <span role="tab" aria-selected="false" aria-controls="page3" data-page="3" class="">Page 3</span><span role="tab" aria-selected="false" aria-controls="page4" data-page="4" class="">Page 4</span><span role="tab" aria-selected="false" aria-controls="page5" data-page="5" class="">Page 5</span><span role="tab" aria-selected="false" aria-controls="page6" data-page="6" class="">Page 6</span><span role="tab" aria-selected="false" aria-controls="page7" data-page="7" class="">Page 7</span><span role="tab" aria-selected="false" aria-controls="page8" data-page="8" class="">Page 8</span><span role="tab" aria-selected="false" aria-controls="page9" data-page="9" class="">Page 9</span><span role="tab" aria-selected="false" aria-controls="page10" data-page="10" class="">Page 10</span><span role="tab" aria-selected="false" aria-controls="page11" data-page="11" class="">Page 11</span><span role="tab" aria-selected="false" aria-controls="page12" data-page="12" class="">Page 12</span><span role="tab" aria-selected="false" aria-controls="page13" data-page="13" class="">Page 13</span>\
                                        </div>\
                                    </div> \
                                </div>\
                            </div> \
                            <span class="item-loading__status-bar item-loading__hide"></span><a href="#" class="item__info-link item__js-link "><div class="item__info "><div class="item__price item__price-discount"><span class="price__symbol">$</span> <span class="price__fraction">'+item.precio+'</span></div><div class="item__attrs"> '+item.anio+' | '+item.kilometros+' km</div><h2 class="item__title list-view-item-title"> <span class="main-title">'+item.marca+item.modelo+item.transmicion+item.anio+'</span></h2><div class="item__location">'+item.estado+'</div></div></a><form class="item__bookmark-form" action="#" method="post" id="bookmarkForm"><button type="submit" class="bookmarks favorite " data-id="MLM645463946"><div class="item__bookmark"><div class="icon"></div></div></button><input type="hidden" name="method" value="add"><input type="hidden" name="itemId" value="MLM645463946"></form></div></li>');
			});
	    }); 
}
$('li a').click(function(){  
	$('.ui-list__item').removeClass('ui-list__item--selected'); 
	seleccionarOpcion(this.id);
	$('#ORDEN').val(this.id);
	filtrar();
});
$('#id_price a').click(function(){
	seleccionarPrecio(this.id);
	$('#precio').val(this.id);
	filtrar();
});

$('#id_category a').click(function(){
	seleccionarCategoria(this.id);
	$('#categoria_selected').val(this.id);
	filtrar();
});

function abrirMenuMovil(){
	if ($('#lblMenuFlotante').hasClass("active")==false) { 
		document.getElementById('nav-header-menu-mobile').style.display="block";
		$('#lblMenuFlotante').addClass("active");
		$('.hamburger-top-bread').css("transform","translate(0,8px) rotate(45deg)");
		$('.hamburger-patty').css("display","none");
		$('.hamburger-bottom-bread').css("transform","translate(0,-6px) rotate(-45deg)");
	}
	else{ 
		$('#nav-header-menu-mobile').hide();
		$('#lblMenuFlotante').removeClass("active");
		$('.hamburger-top-bread').css("transform","initial");
		$('.hamburger-patty').css("display","block");
		$('.hamburger-bottom-bread').css("transform","initial");
	} 
} 

$('.gallery').mouseover(function(){
	$('.flickity-prev-next-button').css('display','block');
});
$('.gallery').mouseout(function(){
	$('.flickity-prev-next-button').css('display','none');
});


$('[data-input-id="nextStepAddressChange"]').click(function(){
	$('#modalDirecciones').modal('show');
});

$('#cont_card a').click(function(){ 
	$('#modalBorrarTarj_'+this.id).modal('show');
});