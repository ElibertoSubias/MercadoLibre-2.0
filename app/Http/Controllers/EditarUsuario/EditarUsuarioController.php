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
use App\Direcciones;

class EditarUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('perfil/editarusuario.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('perfil/editarusuario.create');
    }
     public function cambiarUsuario(Request $request)
    {
    
        if ($request->ajax()) { 

            if(!User::where('alias', '=', $request->alias)->exists()){ 
                $usuario = User::find($request->id);
                $usuario->alias = $request->alias;
                $usuario->save(); 
                $idUsuario = $usuario->getKey(); 
                return response()->json([
                    "res" => $idUsuario,
                    "alias" => $request->alias
                ]); 
            }else{
                return response()->json([
                    "res" => 1,
                    "alias" => $request->alias
                ]);
            }  
        }
  
    }
 public function agregarDomicilio(Request $request)
    {
    
       $id = Auth::id();
        $Direccion = new Direcciones;
        $Direccion->calle=$request->calle;
        $Direccion->contacto=$request->Contacto;
        $Direccion->iduser=$id;
        $Direccion->telefono=$request->Telefono;
        $Direccion->numeroEx=$request->NumExt;
        $Direccion->numeroInt=$request->NumInt;
        $Direccion->entrecalles=$request->EntreCalles;
        $Direccion->referencia=$request->Referencias;
        $Direccion->codigopostal=$request->CodigoPostal;
        $Direccion->asentamiento=$request->asentamiento;
        $Direccion->municipio=$request->Municipio;
        $Direccion->estado=$request->Estado;
        $Direccion->save();
         return response()->json([
                    "res" => 10
                ]);
       
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
