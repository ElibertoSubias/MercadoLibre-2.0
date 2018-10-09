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
Route::post('cargarMarcas', 'Admin\AddCategoriaController@showMarcas')->name('cargarMarcas');

Route::post('guardarCategoria', 'Admin\AddCategoriaController@create')->name('guardarCategoria');
Route::post('guardarMarca', 'Admin\AddCategoriaController@addMarca')->name('guardarMarca');

Route::post('vehiculos', 'Admin\AddCategoriaController@showCategorias')->name('vehiculos');

Route::post('descripcion', 'Admin\AddCategoriaController@showDescrip')->name('descripcion');

