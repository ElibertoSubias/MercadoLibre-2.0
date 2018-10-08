<?php

namespace App\Http\Controllers;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \App\User;
use \Crypt;

class CrearCuentaController extends Controller
{
    public function crearCuenta(Request $request)
    {
    	if ($request->ajax()) { 

            if(!User::where('email', '=', $request->email)->exists()){ 
                $usuario = new User;
                $usuario->nombre = $request->nombre;
                $usuario->apellido = $request->apellido;
                $usuario->email = $request->email;
                $usuario->alias = "01".$request->nombre;
                $usuario->password = Hash::make($request->clave);
                $usuario->save(); 
                $idUsuario = $usuario->getKey();
                //return redirect()->action('FrontController@index');
                return response()->json([
                    "res" => $idUsuario,
                    "nombre" => $request->nombre,
                    "apellido" => $request->apellido,
                    "email" => $request->email
                ]); 
            }else{
                return response()->json([
                    "res" => 1,
                    "nombre" => $request->nombre,
                    "apellido" => $request->apellido,
                    "email" => $request->email
                ]);
            }  
        } 
    }
}
