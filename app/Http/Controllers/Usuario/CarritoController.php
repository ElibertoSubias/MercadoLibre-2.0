<?php

namespace App\Http\Controllers\Usuario;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;  
use Validator;
use Auth;
use Redirect;
use App\Articulos;
use App\Urlimagenes;

class CarritoController extends Controller
{
    public function index()
    {
    	return view('usuario.carrito.carrito');
    }


    public function agregarCarrito()
    {
    	return view('usuario.carrito.carrito');
    }
}
