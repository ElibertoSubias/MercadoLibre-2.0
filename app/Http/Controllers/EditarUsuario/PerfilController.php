<?php

namespace App\Http\Controllers\EditarUsuario;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use Session;
use Redirect;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Direciones;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      	$usuario=User::find( auth()->user()->id);
        return view('perfil.create',compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfil.create');
    }
    
     public function cambiarNombreAp(Request $request)
    {

         if ($request->ajax()) {
                $usuario = User::find($request->id);
                $usuario->nombre = $request->nombre;
                $usuario->apellido = $request->apellido;
                $usuario->save(); 
                $idUsuario = $usuario->getKey(); 
                return response()->json([
                    "res" => $idUsuario 
              
             ]); 
            }     
    }
	
	 public function agregarTelefono(Request $request)
    {
            if ($request->ajax()) {
                $usuario = User::find($request->id);
                $usuario->telefono = $request->telefono;
                $usuario->telefono2 = $request->telefono2;
                $usuario->save(); 
                $idUsuario = $usuario->getKey(); 
               
                 return response()->json([
                    "res" => $idUsuario 
              
             ]); 
            }    
    }
    
    public function agregarDocumento(Request $request)
    {
       $datos = $request->tipo . " " . $request->dato;
       if ($request->ajax()) {
                $usuario = User::find($request->id);
                $usuario->documento = ($datos);///QQuieres a tipo o a Dato
                $usuario->save(); 
                $idUsuario = $usuario->getKey(); 
               
                 return response()->json([
                    "res" => $idUsuario 
             ]); 
        }     
    }

 
     public function agregarDomicilio(Request $request)
    {
       return 'entro';
        $user = Auth::user(); 
      

        $Direccion->calle=$request->calle;
        $Direccion->iduser+$user;
        $Direccion->numeroEx=$request->numeroEx;
        $Direccion->numeroInt=$request->numeroInt;
        $Direccion->entrecalles=$request->entrecalles;
        $Direccion->referencia=$request->referencia;
        $Direccion->codigopostal=$request->codigopostal;
        $Direccion->asentamiento=$request->asentamiento;
        $Direccion->municipio=$request->municipio;
        $Direccion->estado=$request->estado;
        $Direccion->save();
       
    } 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
