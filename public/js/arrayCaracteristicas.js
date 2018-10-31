var caracteristicas = new Array();
function aggCaracteristica(id){
	if($('#'+id).is(':checked')){
		caracteristicas.push('"'+id+'"');
		$('#arrayCaracteristicas').val(caracteristicas);
	}
}
$('input[type="checkbox"]').on('change', function(e){
	aggCaracteristica(this.id);
});

//Aparecer form de Productos
$('#ve_mas').click(function(){
	$('#frmProducto').show();
});