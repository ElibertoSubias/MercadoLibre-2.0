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
    	$subtotal=0;
    
        $articulo= array();
        foreach ($articulos as $id) {
        $aux = Articulos::where('_id' , '=', $id->idPublicacion)->get();
    	array_push($articulo, $aux[0]);
    	   
           //$totalNeto=$id->precio * $id->cantidad;
           $subtotal=$id->precio + $subtotal;
           
    	} 
        $totalArticulos= count($articulo);
    return view('usuario.carrito.carrito',compact('articulo', 'totalArticulos', 'subtotal','articulos') );
    
    }

    public function calcularCostos(){
        $articulos = Carrito::where('idUser' , '=', auth()->user()->id)->get();
        $subtotal=0;
    
        $articulo= array();
        foreach ($articulos as $id) {
        $aux = Articulos::where('_id' , '=', $id->idPublicacion)->get();
        array_push($articulo, $aux[0]);
           
           //$totalNeto=$id->precio * $id->cantidad;
           $subtotal=$id->precio + $subtotal;
           
        } 
        $totalArticulos= count($articulo);
        return $subtotal;
    }

    public function agregarAlCarrito(Request $request)
    { 

         if(!Carrito::where([['idUser' , '=', auth()->user()->id] ,['idPublicacion', '=',  $request->idArticulo]])->exists()){ 
            $Carrito = new Carrito;
            $Carrito->idUser = auth()->user()->id;

            $Carrito->idPublicacion = $request->idArticulo;
            $Carrito->cantidad = 1; 
            $Carrito->precio = $request->precio;        
            $Carrito->save();
            $urlImagen = $request->idUser."/".$request->idPublicacion; 
            return view('usuario.carrito.agregadoCarrito')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$urlImagen]);

            }
            else
                {
                $aux=Carrito::where([['idUser' , '=', auth()->user()->id] ,['idPublicacion', '=',  $request->idArticulo]])->get();
                $aux[0]->cantidad;
                $total= $aux[0]->cantidad+1;
                $nprecio=($total * $aux[0]->precio); 
                $datos = Carrito::where([['idUser' , '=', auth()->user()->id] ,['idPublicacion', '=',  $request->idArticulo]])->update(['cantidad' => $total, 'precio' => $nprecio]);
                $urlImagen = $request->idUser."/".$request->idPublicacion; 
                return view('usuario.carrito.agregadoCarrito')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'urlImagen'=>$urlImagen]); 
        }           

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
                    "subtotal" => $i
                ]);
        }    
    }


   

    public function modificarCantidad(Request $request)
    {   
        $aux = Articulos::where('_id' , '=', $request->idPublicacion)->get();
        //Codigo para incrementar o disminuir la cantidad en la colecccion de carrito
        if ($request->caracter == "+") {
            //Codigo de sumar 1
            if ($aux[0]->cantidad > 0) {
                //Incrementar
                //1. HAcer una update al registro con el $request->idRegistro
                $total = $request->cantidadArticulos+1;
                 $nprecio=($total * $aux[0]->precio); 
                //Actualizar $total en el campo cantidad
                $datos = Carrito::where('_id', $request->idRegistro)->update(['cantidad' => $total, 'precio' => $nprecio]);
                $carritoController = new CarritoController;
                $subtotal = $carritoController->calcularCostos();
                return response()->json([
                    "cantidadArticulos" => $total,
                    "cantidadArticulosDisponibles" => $aux[0]->cantidad,
                    'nuevoprecio' => $nprecio,
                    "subtotal" => $subtotal
                ]);
            }
        }else{
            //Codigo de decrementar
            //Codigo de sumar 1
            if ($request->cantidadArticulos > 1) {
                //Incrementar
                //1. HAcer una update al registro con el $request->idRegistro
                $total = $request->cantidadArticulos-1;
                $nprecio=($total * $aux[0]->precio); 
                //Actualizar $total en el campo cantidad
                $datos = Carrito::where('_id', $request->idRegistro)->update(['cantidad' => $total, 'precio' => $nprecio]);
                $carritoController = new CarritoController;
                $subtotal = $carritoController->calcularCostos();
                return response()->json([
                    "cantidadArticulos" => $total,
                    "cantidadArticulosDisponibles" => $aux[0]->cantidad,
                    'nuevoprecio' => $nprecio,
                    "subtotal" => $subtotal
                ]);
            }
        }
        return "Error ningun caracter...";    
    }
}
