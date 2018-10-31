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
    
        $articulo= array();
        foreach ($articulos as $id) {
        $aux = Articulos::where('_id' , '=', $id->idPublicacion)->get();
    	array_push($articulo, $aux[0]);
    	   
           $i=$id->precio + $i;	
           
    	} 
        $totalArticulos= count($articulo);
    return view('usuario.carrito.carrito',compact('articulo', 'totalArticulos', 'i','articulos') );
    
    }

    public function agregarAlCarrito(Request $request)
    {    
        $Carrito = new Carrito;
        $Carrito->idUser = auth()->user()->id;
        $Carrito->idPublicacion = $request->idPublicacion;
        $Carrito->cantidad = $request->cantidad; 
        $Carrito->precio = $request->precio;        
        $Carrito->save();
        $urlImagen = $request->idUser."/".$request->idPublicacion; 
        return view('usuario.carrito.agregadocarrito')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$urlImagen]);            
    }

    public function agregadoCarrito()
    {
    	return view('usuario.carrito.agregadoCarrito');
    }

    public function eliminarArticulo(Request $request)
    {
         if ($request->ajax()) {  
            $articulo = Carrito::where('idPublicacion', '=' , $request->_id);
            $articulo->delete();
            $articulos = Carrito::where('idUser' , '=', auth()->user()->id)->get();
            $i=0;
    
            $articulo= array();
            foreach ($articulos as $id) {
            array_push($articulo,  Articulos::where('_id' , '=', $id->idPublicacion)->get());
           
            $i=$id->precio + $i; 
           
            }
            $totalArticulos= count($articulo);

            return response()->json([
                    "articulo" => $articulo,
                    "totalArticulos" => $totalArticulos,
                    "tipoMensaje" => "Ajax"
                ]);
        }

        
        
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


    public function modificarCantidad(Request $request)
    {   
        $aux = Articulos::where('_id' , '=', $request->idPublicacion)->get();
        //Codigo para incrementar o disminuir la cantidad en la colecccion de carrito
        if ($request->caracter == "+") {
            //Codigo de sumar 1
            if ($aux[0]->cantidad > 1) {
                //Incrementar
                //1. HAcer una update al registro con el $request->idRegistro
                $total = $request->cantidadArticulos+1;
                //Actualizar $total en el campo cantidad
                $datos = Carrito::where('_id', $request->idRegistro)->update(['cantidad' => $total]);
                return response()->json([
                    "cantidadArticulos" => $total
                ]);
            }
        }else{
            //Codigo de decrementar
        }
        return "Error ningun caracter...";    
    }
}
