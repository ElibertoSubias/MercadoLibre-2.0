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
use App\Direcciones;


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


    public function nuevaTarjetacre(Request $request)
    {
        
        return view('confirmarCompra.nuevaTarjetaCredito');
    }

    public function dondeRecibir(Request $request)
    {
        if(Direcciones::where([['idUser' , '=', auth()->user()->id], ['envio', '=', 1 ]])->exists())
        {
          $domicilio = Direcciones::where([['idUser' , '=', auth()->user()->id], ['envio', '=', 1 ]])->get();


    	 $urlImagen = $request->idUser."/".$request->idPublicacion; 
         return view('confirmarCompra.dondeRecibir')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'domicilio'=>$domicilio,'urlImagen'=>$urlImagen]);
         }else{
            return view ('confirmarCompra.elegirFormaRecivir');
         } 
    }

}