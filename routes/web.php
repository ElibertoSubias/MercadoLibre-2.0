<?php

/*border-width: 23px 11px;
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
Route::get('/', 'InicioController@index')->name('inicio');
//Agregar middleware para validar si usuario esta autenticado
Route::post('userlogin', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::any('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::any('autenticar', 'InicioController@autenticarEmail')->name('autenticar');
Route::any('validar', 'Auth\LoginController@showLoginForm')->name('validar');
////////Admin////////////
Route::any('validarAdmin', 'Auth\LoginController@showLoginFormAdmin')->name('validarAdmin');
Route::post('loginAdmin', 'Auth\LoginController@loginAdmin')->name('loginAdmin');
Route::any('dashboardAdmin', 'Auth\LoginController@adminDashboard')->name('dashboardAdmin');
/////////////////////////
Route::post('checkemail', 'InicioController@checkEmail')->name('checkemail');

Route::any('admin', 'Auth\LoginController@adminLogin')->name('admin');

//Route::get('crearcuentapersonal', 'InicioController@crearcuentaPersonal')->name('crearcuentapersonal');
//Route::get('crearcuentaempresarial', 'InicioController@crearcuentaEmpresarial')->name('crearcuentaempresarial');

Route::get('crearcuenta-personal', 'CrearCuentaController@showPersonal')->name('crearcuentapersonal');
Route::post('aggcuentapersonal', 'CrearCuentaController@crearcuentaPersonal')->name('aggcuentapersonal');
Route::get('crearcuenta-empresarial', 'CrearCuentaController@showEmpresarial')->name('crearcuentaempresarial');
Route::post('aggcuentaempresarial', 'CrearCuentaController@crearcuentaEmpresarial')->name('aggcuentaempresarial');

Route::get('id={id}&user={user}', 'Venta\VentaController@showPublicacion')->name('verpublicacion');
Route::post('buscar','BuscarController@buscarPublicaciones')->name('buscar');
Route::get('resultados','BuscarController@listarResultados')->name('resultados');

//Middleware para solo dejar pasar a estas rutas a usuarios autenticados
Route::group(['middleware' => 'autenticadoAdmin'], function () {
	Route::get('nuevaCategoria', 'Admin\AddCategoriaController@index')->name('nuevaCategoria');
});
Route::group(['middleware' => 'autenticado'], function () {
	
	Route::any('loadImage', 'Venta\VentaController@store')->name('loadImage'); 
    Route::any('vender', 'VenderProductoController@cargarLista')->name('vender');
    Route::get('perfil', 'EditarUsuario\PerfilController@index')->name('perfil');
    Route::post('cargarCategorias', 'Admin\AddCategoriaController@show')->name('cargarCategorias');
	Route::any('cargarMarcas', 'Admin\AddCategoriaController@showMarcas')->name('cargarMarcas');
	Route::any('cargarModelos', 'Admin\AddCategoriaController@showModelos')->name('cargarModelos');
	Route::any('cargarAnios', 'Admin\AddCategoriaController@showAnios')->name('cargarAnios');
	Route::any('cargarVersiones', 'Admin\AddCategoriaController@showVersiones')->name('cargarVersiones');

	Route::post('guardarCategoria', 'Admin\AddCategoriaController@create')->name('guardarCategoria');
	Route::post('guardarMarca', 'Admin\AddCategoriaController@addMarca')->name('guardarMarca');

	Route::any('categorias', 'Admin\AddCategoriaController@showCategorias')->name('categorias');

	Route::any('descripcion', 'Admin\AddCategoriaController@showDescrip')->name('descripcion');
	Route::any('backdescripcion', 'Admin\AddCategoriaController@backDescrip')->name('backdescripcion');

	Route::post('cambiarnombre', 'EditarUsuario\PerfilController@cambiarNombreAp')->name('cambiarnombre');
	Route::post('agregartelefono', 'EditarUsuario\PerfilController@agregarTelefono')->name('agregartelefono');

	Route::any('editarcorreo', 'EditarUsuario\EditarCorreoController@index')->name('editarcorreo');
	Route::post('cambiarcorreo', 'EditarUsuario\EditarCorreoController@actualizarCorreo')->name('cambiarcorreo');

	Route::any('editarusuario', 'EditarUsuario\EditarUsuarioController@index')->name('editarusuario');
	Route::post('agregardatosdomicilio', 'EditarUsuario\EditarUsuarioController@agregarDomicilio')->name('agregardatosdomicilio');
	Route::post('cambiarusuario', 'EditarUsuario\EditarUsuarioController@cambiarUsuario')->name('cambiarusuario');

	Route::any('editarpassword', 'EditarUsuario\EditarPasswordController@index')->name('editarpassword');
	Route::post('cambiarclave', 'EditarUsuario\EditarPasswordController@actualizarClave')->name('cambiarclave');

	Route::post('agregardocumento', 'EditarUsuario\PerfilController@agregarDocumento')->name('agregardocumento');
	Route::post('articulo/precio', 'Venta\VentaController@showPrecio')->name('precio');
	Route::post('articulo/precioproducto', 'Venta\VentaController@showPrecioPROD')->name('precioPROD');

	Route::post('articulo/confirmar', 'Venta\VentaController@showConfirmar')->name('confirmarventa');

	Route::post('articulo/agregarventa', 'Venta\VentaController@create')->name('agregar');

	Route::any('estadoPublicacion', 'Venta\VentaController@showEstado')->name('estadoPublicacion');

	Route::any('modificarVEHI', 'Venta\VentaController@showModificarVEHI')->name('modificarVEHI');
	Route::any('modificarPublicacion', 'Venta\VentaController@updateVEHI')->name('modificarPublicacion');
	Route::any('delateImg', 'Venta\VentaController@delateImagen')->name('delateImg');

	Route::any('publicaciones', 'Usuario\MenuUsuarioController@showAllPublicaciones')->name('publicaciones');
	Route::any('publicacionesp', 'Usuario\MenuUsuarioController@showAllPublicacionesPausadas')->name('publicacionesp');
	Route::any('publicacionesF', 'Usuario\MenuUsuarioController@showAllPublicacionesFinalizadas')->name('publicacionesF');

	Route::post('cambiarestado', 'Usuario\MenuUsuarioController@editar')->name('cambiarestado');

	Route::any('carrito', 'Usuario\CarritoController@index')->name('carrito');

	Route::any('agregadocarrito', 'Usuario\CarritoController@agregadoCarrito')->name('agregadocarrito');

	Route::any('agregarDomicilio', 'Usuario\MenuUsuarioController@aggDomicilio')->name('agregarDomicilio');
	Route::get('id={id}', 'EditarUsuario\EditarUsuarioController@modificarDomicilioView')->name('irAModificarDireccion');
	Route::post('cambiardireccion', 'EditarUsuario\EditarUsuarioController@cambiarDireccion')->name('cambiardireccion');
	Route::get('idElemneto={idElemneto}', 'EditarUsuario\EditarUsuarioController@eliminarDomicilio')->name('eliminarDomicilio');
	Route::post('modificando', 'EditarUsuario\EditarUsuarioController@modificarDomicilio')->name('modificarDireccion');

	Route::any('agregaralCarrito', 'Usuario\CarritoController@agregarAlCarrito')->name('agregaralCarrito');

	Route::post('eliminarcarrito', 'Usuario\CarritoController@eliminarArticulo')->name('eliminarcarrito');

	Route::post('modificarCantidad', 'Usuario\CarritoController@modificarCantidad')->name('modificarCantidad');

	Route::any('pagoPor', 'Compra\CompraController@metodoPago')->name('pagoPor');
	

	Route::any('agregarTarjPrueba', 'Compra\CompraController@aggTarjPrueba')->name('agregarTarjPrueba');
	Route::post('save_customer_card', 'Compra\CompraController@guardarCard_customer')->name('save_customer_card');


	Route::any('nuevatarjetac', 'Compra\CompraController@nuevaTarjetacre')->name('nuevatarjetac');

	Route::any('complTarjeta', 'Compra\CompraController@compTarjeta')->name('complTarjeta');
	Route::any('form_confirmarCompra', 'Compra\CompraController@confirmCompraView')->name('form_confirmarCompra');
	Route::any('confirmarCompraPrueba', 'Compra\CompraController@confirmCompra')->name('confirmarCompraPrueba');
	
	Route::post('recibirPor', 'Compra\CompraController@dondeRecibir')->name('recibirPor');
	Route::any('historialComp', 'Compra\CompraController@histoCompra')->name('historialComp');
	Route::any('historialVentas', 'Venta\VentaController@historialVentas')->name('historialVentas');

	Route::any('nuevodomicilio', 'Compra\CompraController@nuevoDomicilio')->name('nuevodomicilio');
	Route::post('agregarDomicilio2', 'Compra\CompraController@agregarDomicilio')->name('agregarDomicilio2');


	Route::any('recibirPor', 'Compra\CompraController@dondeRecibir')->name('recibirPor');
	Route::any('sindomicilio', 'Compra\CompraController@dondeRecibir')->name('sindomicilio'); 
	Route::any('agregarcontacto', 'Compra\CompraController@agregarContacto')->name('agregarcontacto');

	Route::any('confirmarComp', 'Compra\CompraController@confiCompra')->name('confirmarComp');

	Route::any('rechazada', 'Compra\CompraController@rechazar')->name('rechazada');
	Route::any('compraExitosa', 'Compra\CompraController@compraExitosa')->name('compraExitosa');

	Route::any('detalleCompra', 'Usuario\MenuUsuarioController@detaCompra')->name('detalleCompra');

	Route::post('dalateCard', 'EditarUsuario\PerfilController@dalateCard')->name('dalateCard');

	Route::any('vistaCuenta', 'Compra\CompraController@vistaEstadoDeCuenta')->name('vistaCuenta');

	Route::any('estado', 'Usuario\MenuUsuarioController@Resumen')->name('estado');	

	Route::post('addComentario', 'Venta\VentaController@addComent')->name('addComentario');

	Route::post('responder', 'Venta\VentaController@responder')->name('responder');

	Route::any('verMensajes', 'Venta\VentaController@verMensajes')->name('verMensajes');

	Route::post('enviarMjs', 'Venta\VentaController@addMensaje')->name('enviarMjs');

	Route::any('preguntas', 'Venta\VentaController@verPreguntas')->name('preguntas');
	
	Route::any('cargarComentarios', 'Venta\VentaController@cargarComentarios')->name('cargarComentarios');

});