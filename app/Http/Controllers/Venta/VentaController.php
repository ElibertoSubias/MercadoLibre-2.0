<?php

namespace App\Http\Controllers\Venta;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
 
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;  
use Validator;
use Auth;
use Redirect;
use App\Articulos;
use App\Carrito;
use App\Urlimagenes;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showPrecio(Request $request)
    {
        return view('vender.precio')->with('objectArticulo',$request);
    }
    
    public function showConfirmar(Request $request)
    {
        return view('vender.confirmar')->with('objectArticulo',$request);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        session_start();
        unset($_SESSION['idPublicacion']);
        $user = Auth::user(); 

        $id = Auth::id();
        $urlPrincipal = Urlimagenes::where('idPublicacion', '=', $request->idPublicacion)->first();  
        $Articulos = new Articulos;
        $Articulos->idUser = $id; 
        $Articulos->titulo = $request->titulo;
        $Articulos->precio = floatval($request->precio);
        $Articulos->moneda = $request->moneda;
        $Articulos->tipoPublicacion = $request->listingTypes;
        $Articulos->estado = $request->estado;
        $Articulos->municipio = $request->municipio;
        $Articulos->colonia = $request->colonia;
        $Articulos->telefono = $request->telefono;
        $Articulos->categoria = $request->categoria;
        $Articulos->modelo = $request->modelo;
        $Articulos->marca = $request->marca;
        $Articulos->anio = $request->anio;
        $Articulos->urlvideo = $request->videoURL;
        $Articulos->numPuertas = $request->numPuertas;
        $Articulos->kilometros = $request->kilometros;
        $Articulos->idPublicacion = $request->idPublicacion;
        $Articulos->descripcion = $request->descripcion; 
        $Articulos->horarioContacto =$request->horarioContacto;
        $Articulos->color = $request->color;
        $Articulos->tipoCombustible = $request->tipoCombustible;
        $Articulos->motor = $request->motor;
        $Articulos->direccionAuto = $request->direccionAuto;
        $Articulos->transmicion = $request->transmicion;
        $Articulos->version = $request->version;
        $Articulos->urlPrincipal = $urlPrincipal->url;
        $Articulos->estadoPublicacion = 1;
        $Articulos->cantidad=0;
        $Articulos->arrayCaracteristicas = $request->arrayCaracteristicas;
        $Articulos->urlPrincipal = $urlPrincipal->url;
        $Articulos->save();
        return Redirect::route('estado',['idPublicacion' => $request->idPublicacion,'user'=>$user]);
    }

     public function agregarCarrito(Request $request)
    {   


             $Carrito = new carrito;
             $Carrito->idUser = auth()->user()->id;
             $Carrito->idPublicacion = $request->post('idPublicacion');
             $Carrito->cantidad = $request->post('cantidad'); 
             $Carrito->precio = $request->post('precio');        
             $Carrito->save();
          
             return  Redirect::route('dashboard');
             //    $idUsuario = $usuario->getKey(); 
               
             //     return response()->json([
             //        "res" => $idUsuario 
              
             // ]); 
            
    }

    public function showEstado(Request $request)
    {
        //Cambiar de idImg a idPublicacion

        $datos = Articulos::where('idPublicacion', '=', $request->idPublicacion)->first();
        $imagen = Urlimagenes::where('idPublicacion', '=', $request->idPublicacion)->first();  
        return view('vender.estadopublicacion')->with("datos",$datos)->with("imagen",$imagen);
    }

    public function showPublicacion(Request $request)
    {
        $user = Auth::user();
        $idUser = $request->user; 

        $datos = Articulos::where(['_id' => $request->id,'idUser'=>$idUser])->first(); 
        if ($datos!="") {
            $imagen = Urlimagenes::where('idPublicacion', '=', $datos->idPublicacion)->first(); 
            return view('vender.verPublicacion')->with('datos',$datos)->with('imagen',$imagen);
        }else{
            return view('dashboard');
        }
        
    }

    public function actualizarCorreo(Request $request)
    {
        //
    } 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
          'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
         ]);
         if($validation->passes())
         {
            $image = $request->file('select_file');
            $new_name = $request->idImg . '.' . $image->getClientOriginalExtension();
            $dir = 'images/'.$request->idUser.'/'.$request->idPublicacion.'/'.$new_name;
            if(file_exists($dir)) //verifica que el archivo existe 
             {  
                unlink($dir); // si es true, llama la función   
             }  
            $image->move(public_path('images/'.$request->idUser.'/'.$request->idPublicacion.'/'), $new_name);
            //Almacenamiento de la URL de la imagen agregada
            $Imagen = new Urlimagenes;
            $Imagen->idPublicacion = $request->idPublicacion;
            $Imagen->url = $new_name;
            $Imagen->tipoImg = $request->idImg;
            $Imagen->save();

          return response()->json([
           'message'   => 'Image Upload Successfully',
           'uploaded_image' => '<img src="../public/images/'.$request->idUser.'/'.$request->idPublicacion.'/'.$new_name.'" class="img-thumbnail" width="300" />',
           'class_name'  => 'alert-success'
          ]);
         }
         else
         {
          return response()->json([
           'message'   => $validation->errors()->all(),
           'uploaded_image' => '',
           'class_name'  => 'alert-danger'
          ]);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showModificarVEHI(Request $request)
    {
        return view('vender.modificarVEHI');
    }

    public function updateVEHI(Request $request)
    {
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
