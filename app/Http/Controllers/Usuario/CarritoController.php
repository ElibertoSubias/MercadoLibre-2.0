<?php

namespace App\Http\Controllers\Usuario;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;  
use Validator;
use Auth;
use Redirect;
use App\Articulos;
use App\Carrito;
use App\Urlimagenes;

class CarritoController extends Controller
{
    public function index()
    {	
    	$articulos = Carrito::where('idUser' , '=', auth()->user()->id)->get();
    	$i=0;
        $p=0;
        $articulo= array();
        foreach ($articulos as $id) {
    	array_push($articulo,  Articulos::where('_id' , '=', $id->idPublicacion)->get());
    	   
          // $articulo= Articulos::where('_id' , '=', $id->idPublicacion)->get();
           $p=$p+1;
           $i=$id->precio + $i;	
           
    	}
        $totalArticulos= count($articulo);

    return view('usuario.carrito.carrito',compact('articulo', 'totalArticulos', 'i') );
    //return $articulo;
      //  return $p;
    }


    public function agregarCarrito()
    {
    	return view('usuario.carrito.carrito');
    }


    // public function showAllPublicaciones() 
    // {
    //     $articulos = Carrito::where(['idUser' , '=', auth()->user()->id])->get();
          
    //       $Finalizados = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 3]])->get();
    //       $pausados = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 2]])->get();
    //        $activos = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 1]])->get();
          

    //     $totalActivos = count($activos);
    //     $totalPausados = count($pausados);
    //     $totalFinalizados = count($Finalizados); 
        
        

    //     return view('usuario.menu.adminPublicaciones',compact('articulos', 'totalActivos','totalFinalizados', 'totalPausados' ) ); 
    // }
}
