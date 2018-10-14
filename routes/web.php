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
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::any('autenticar', 'InicioController@autenticarEmail')->name('autenticar');
Route::any('validar', 'Auth\LoginController@showLoginForm')->name('validar');
Route::post('checkemail', 'InicioController@checkEmail')->name('checkemail');


Route::get('crearcuenta', 'InicioController@crearcuenta')->name('crearcuenta');
Route::post('usuario', 'CrearCuentaController@crearCuenta')->name('usuario');

Route::any('vender', 'VenderProductoController@cargarLista')->name('vender');

Route::get('perfil', 'EditarUsuario\PerfilController@index')->name('perfil');

Route::get('nuevaCategoria', 'Admin\AddCategoriaController@index')->name('nuevaCategoria');


Route::post('cargarCategorias', 'Admin\AddCategoriaController@show')->name('cargarCategorias');
Route::any('cargarMarcas', 'Admin\AddCategoriaController@showMarcas')->name('cargarMarcas');
Route::any('cargarModelos', 'Admin\AddCategoriaController@showModelos')->name('cargarModelos');
Route::any('cargarAnios', 'Admin\AddCategoriaController@showAnios')->name('cargarAnios');
Route::any('cargarVersiones', 'Admin\AddCategoriaController@showVersiones')->name('cargarVersiones');

Route::post('guardarCategoria', 'Admin\AddCategoriaController@create')->name('guardarCategoria');
Route::post('guardarMarca', 'Admin\AddCategoriaController@addMarca')->name('guardarMarca');

Route::any('vehiculos', 'Admin\AddCategoriaController@showCategorias')->name('vehiculos');

Route::post('descripcion', 'Admin\AddCategoriaController@showDescrip')->name('descripcion');

Route::post('cambiarnombre', 'EditarUsuario\PerfilController@cambiarNombreAp')->name('cambiarnombre');
Route::post('agregartelefono', 'EditarUsuario\PerfilController@agregarTelefono')->name('agregartelefono');

Route::any('editarcorreo', 'EditarUsuario\EditarCorreoController@index')->name('editarcorreo');
Route::post('cambiarcorreo', 'EditarUsuario\EditarCorreoController@actualizarCorreo')->name('cambiarcorreo');

Route::any('editarusuario', 'EditarUsuario\EditarUsuarioController@index')->name('editarusuario');
Route::post('cambiarusuario', 'EditarUsuario\EditarUsuarioController@cambiarUsuario')->name('cambiarusuario');

Route::any('editarpassword', 'EditarUsuario\EditarPasswordController@index')->name('editarpassword');
Route::post('cambiarclave', 'EditarUsuario\EditarPasswordController@actualizarClave')->name('cambiarclave');

Route::post('agregardocumento', 'EditarUsuario\PerfilController@agregarDocumento')->name('agregardocumento');

Route::post('loadimage', 'Venta\VentaController@store')->name('loadimage'); 

Route::post('articulo/precio', 'Venta\VentaController@showPrecio')->name('precio');

Route::post('articulo/confirmar', 'Venta\VentaController@showConfirmar')->name('confirmarventa');

Route::post('articulo/agregarventa', 'Venta\VentaController@create')->name('agregar');

Route::any('articulo/estado', 'Venta\VentaController@showEstado')->name('estado');

Route::get('id={id}', 'Venta\VentaController@showPublicacion')->name('verpublicacion');

Route::any('publicaciones', 'Usuario\MenuUsuarioController@showAllPublicaciones')->name('publicaciones');

Route::post('buscar','BuscarController@buscarPublicaciones')->name('buscar');