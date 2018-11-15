<?php

namespace App\Http\Controllers\Compra;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;  
use Validator;
use Auth;
use Redirect;
use App\Articulos;
use App\Carrito;


class CompraController extends Controller
{
 
    
    public function metodoPago(Request $request)
    {
        return view('confirmarCompra.metodoPago');
    }

    public function compTarjeta(Request $request)
    {
        return view('confirmarCompra.complementarTarjeta');
    }

    public function dondeRecibir(Request $request)
    {
    	return view('confirmarCompra.dondeRecibir');
    }

    public function confiCompra(Request $request)
    {
    	return view('confirmarCompra.confiCompra');
    }   
}