var formatearPrecio = {
 separador: ",", // separador para los miles
 sepDecimal: '.', // separador para los decimales
 formatear:function (num){
 num +='';
 var splitStr = num.split('.');
 var splitLeft = splitStr[0];
 var splitRight = splitStr.length > 1 ? this.sepDecimal + splitStr[1] : '';
 var regx = /(\d+)(\d{3})/;
 while (regx.test(splitLeft)) {
 splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
 }
 return this.simbol + splitLeft +splitRight;
 },
 new:function(num, simbol){
 this.simbol = simbol ||'';
 return this.formatear(num);
 } 
}
$(document.getElementById('contenedor_articulos')).ready(function() {
	$("label.precioUnitario").each(function(){
	    var precioUnitario = formatearPrecio.new($(this).text());
	    $(this).text(precioUnitario);
	}); 
      var subtotal = formatearPrecio.new($('#subtotal').text());
      var totalneto = formatearPrecio.new($('#totalneto').text());
      
      $('#subtotal').text(subtotal);
      $('#totalneto').text(totalneto);
});
/*$(document.getElementById('searchResults')).ready(function() { 
	var precioUnitario = formatearPrecio.new($('.precioUnitario').text()):
	$('.precioUnitario').text(precioUnitario);
});*/