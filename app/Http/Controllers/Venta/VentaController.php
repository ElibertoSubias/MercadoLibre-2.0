<?php

namespace App\Http\Controllers\Venta;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
 
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;  
use Validator;
use Auth;
use Redirect;
use App\Articulos;
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
        return view('vender.precio')->with(['idPublicacion'=>$request->idPublicacion,'categoria'=>$request->categoria,'tipo'=>$request->tipo,'marca'=>$request->marca,'videoURL'=>$request->videoURL,'estado'=>$request->estado,'municipio'=>$request->municipio,'colonia'=>$request->colonia,'telefono'=>$request->telefono,'modelo'=>$request->modelo,'anio'=>$request->anio,'numPuertas'=>$request->numPuertas,'kilometros'=>$request->kilometros,'titulo'=>$request->titulo]);
    }
    
    public function showConfirmar(Request $request)
    {
        return view('vender.confirmar')->with(['idPublicacion'=>$request->idPublicacion,'categoria'=>$request->categoria,'tipo'=>$request->tipo,'marca'=>$request->marca,'videoURL'=>$request->videoURL,'estado'=>$request->estado,'municipio'=>$request->municipio,'colonia'=>$request->colonia,'telefono'=>$request->telefono,'modelo'=>$request->modelo,'anio'=>$request->anio,'numPuertas'=>$request->numPuertas,'kilometros'=>$request->kilometros,'titulo'=>$request->titulo,'moneda'=>$request->moneda,'precio'=>$request->precio]);
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
        $Articulos = new Articulos;
        $Articulos->idUser = $id; 
        $Articulos->titulo = $request->titulo;
        $Articulos->precio = $request->precio;
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
        $Articulos->save();
        return Redirect::route('estado',['idPublicacion' => $request->idPublicacion]);
    }

    public function showEstado(Request $request)
    {
        //Cambiar de idImg a idPublicacion
        $datos = Articulos::where('idPublicacion', '=', $request->idPublicacion)->first();
        $imagen = Urlimagenes::where('idPublicacion', '=', $request->idPublicacion)->first(); 
        return view('vender.estadopublicacion')->with("datos",$datos)->with("imagen",$imagen);
    }

    public function showPublicacion()
    {
        return view('vender.verPublicacion');
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
          $new_name = $request->idImg .'_'. rand() . '.' . $image->getClientOriginalExtension();
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
    public function show($id)
    {
        //
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