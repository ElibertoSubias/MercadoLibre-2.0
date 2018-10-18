<?php

namespace App\Http\Controllers;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \App\User;
use \App\Empresas;
use \Crypt;

class CrearCuentaController extends Controller
{
    public function showPersonal()
    {
        return view('usuario.crear_cuenta_personal');
    }
    public function showEmpresarial()
    {
        return view('usuario.crear_cuenta_empresarial');
    }
    public function crearcuentaPersonal(Request $request)
    {
    	if ($request->ajax()) { 

            if(!User::where('email', '=', $request->email)->exists()){ 
                $usuario = new User;
                $usuario->nombre = $request->nombre;
                $usuario->apellido = $request->apellido;
                $usuario->email = $request->email;
                $usuario->telefono = "_";
                $usuario->telefono2 = "_";
                $usuario->documento = "_";
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
    public function crearcuentaEmpresarial(Request $request)
    {
        if ($request->ajax()) { 

            if(!User::where('email', '=', $request->email)->exists()){ 
                if(!Empresas::where('email', '=', $request->email)->exists()){
                    $Empresa = new Empresas;
                    $Empresa->rfc = $request->rfc;
                    $Empresa->razonSocial = $request->razonSocial;
                    $Empresa->email = $request->email;
                    $Empresa->telefono = "_";
                    $Empresa->telefono2 = "_";
                    $Empresa->documento = "_";
                    $Empresa->alias = "01".$request->rfc;
                    $Empresa->password = Hash::make($request->clave);
                    $Empresa->save(); 
                    $idUsuario = $Empresa->getKey(); 
                    return response()->json([
                        "res" => $idUsuario,
                        "rfc" => $request->rfc,
                        "razonSocial" => $request->razonSocial,
                        "email" => $request->email
                    ]); 
                }else{
                    return response()->json([
                    "res" => 1,
                    "rfc" => $request->rfc,
                        "razonSocial" => $request->razonSocial,
                    "email" => $request->email,
                    "msj" => "email en uso"
                ]);
                }
            }else{
                return response()->json([
                    "res" => 1,
                    "rfc" => $request->rfc,
                    "razonSocial" => $request->razonSocial,
                    "email" => $request->email,
                    "msj" => "email en uso"
                ]);
            }  
        } 
    }
}
