function eliminar(id){
  var _id = id;

  var route = "/MercadoLibre-2.0/public/eliminarcarrito";
  var token = $("#token").val();



  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    data: { _id: _id} 
    }).done(function(data) {  
      
      $('#totalArticulos').html("Carrito (" +data.totalArticulos + ")");
       $('#subtotal').html("" +data.subtotal+ "");
         $('#totalneto').html("" +data.subtotal+ "");
       

      $('#contenedor_articulos').html("");
      $.each(data.articulo, function(i, item) {
        var articulo = "<article class='item'>   <div data-region='item-loading'> </div><figure class='item__image item__image--dimmer'><img src='/MercadoLibre-2.0/public/images/"+item[0].idUser+"/"+item[0].idPublicacion+"/"+item[0].urlPrincipal+"' width='80' height='80px' style='margin-bottom: -25px'></figure>                    <div class='item__information'>                        <div class='u-float-left item__description'>                        <h2 class='item__title' itemprop='name'>"+item[0].titulo+"<a class='item__title--link' href='https://articulo.mercadolibre.com.mx/MLM-572083257-playera-polo-club-america-nike-utileria-original-mediana-_JM?variation=22751685920' itemprop='url'></a>                        </h2>                            <div class='item__information-main u-clearfix'><p class='item__information-detail item__payment-installments  u-float-left '><span class='item__payment-installments__label'>Hasta 3 meses sin interés</span></p>                                <p class='item__information-detail item__shipping-info  u-float-left ' style='display: contents;'>                                    <svg viewBox='0 0 100 100' role='presentation' class='ui-icon ui-icon--shipping-outline '>                                        <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#ui-icon--shipping-outline'></use>                                    </svg>                                  <span class='item__shipping-info__label'>Envío gratis</span>                                </p>                            </div>                            <ul class='item__action-menu'>                                    <li>                                        <a data-action='buy-item' class=' item__action-menu-link ' href='/gz/checkout/cart/buy?items=MLM572083257-Q1-VAR22751685920&amp;destination_type=address_id&amp;destination_value=902260096&amp;unchecked=false&amp;context=cart_item&amp;siteId=MLM'>Comprar ahora</a>                                    </li>                                    <li>                                        <form data-action='save-for-later' action='/gz/cart/saved/item' method='POST'>                                            <input type='hidden' name='id' value='MLM572083257_22751685920'>                                            <input type='submit' class='u-button-reset  u-link item__action-menu-link ' value='Guardar para después'>                                        </form>                                    </li>                                    <li>                                        <form data-action='remove-from-cart' action='/gz/cart/item/delete' method='POST'>                                            <input type='hidden' name='id' value='MLM572083257_22751685920'>                                            <a href='javascript:eliminar()'>Eliminar</a>                                        </form>                                    </li>                            </ul>                        </div>                            <div data-quantity='container' class='ui-quantity-selector u-float-left'>                                <div class='ui-quantity-selector__container'>                                    <form class='u-float-left' action='/gz/cart/item/quantity?id=MLM572083257_22751685920' method='POST'>                                        <input data-quantity='pop' type='submit' value='-' class='u-button-reset ui-quantity-selector__button' name='pop' disabled=''>                                    </form>                                    <input autocomplete='off' data-quantity='input' type='tel' value=' 1' class='u-button-reset ui-quantity-selector__input' name='quantity' disabled='' style='    width: 50px;'>                                   <form class='u-float-left' action='/gz/cart/item/quantity?id=MLM572083257_22751685920' method='POST'>                                        <input data-quantity='push' type='submit' value='+' class='u-button-reset ui-quantity-selector__button' name='push' disabled=''>                                    </form>                                    <div class='cart-inline-loading__quantity-selector' data-region='quantity-loading'></div>                                </div>                                <div data-quantity='error' class='ui-quantity-selector__stock'>Último disponible</div>                            </div>                            <div class='item__price' style='font-size: 32px !important;'>                                    <span class='price-tag item__price-tag' itemprop='offers' itemscope='' itemtype='http://schema.org/Offer'>                                        <meta itemprop='price' content='1,499'>                                        <span class='price-tag-symbol' itemprop='priceCurrency'>$</span>                                        <span class='price-tag-fraction'>"+item[0].precio+"</span>                                    </span>                            <label id='idPublicacion' hidden=''></label>                            </div>                    </div></article>";
        $('#contenedor_articulos').html($('#contenedor_articulos').html() + articulo);
        

        //alert(item[0]);
      });
      // if (data.totalArticulos!=1){
      //   $('#total').reload();
      //   $('#total').html("Carrito ("+data.totalArticulos +")" ); 
      //   $totalArticulos=data.totalArticulos;
      //  // alert($totalArticulos);
      // }
    });
}