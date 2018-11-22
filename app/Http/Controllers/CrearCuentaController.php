<?php

namespace App\Http\Controllers;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \App\User;
use \App\Empresas;
use Intagono\Openpay\Openpay; 
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
                $usuario->idCard = null;
                 
                //Crear cuenta al usuario en Openpay
                $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678');
                $customerData = array(
                    'external_id' => null,
                    'name' => $request->nombre,
                    'last_name' => $request->apellido, 
                    'email' => $request->email, 
                    'requires_account' => true);  
                    
                $customer = $openpay->customers->add($customerData);

                if ($customer) {
                    $usuario->save();
                    $idCustomer=$customer->id;
                    $idUsuario = $usuario->getKey();
                    User::where('_id', $idUsuario)->update(['idCustomer'=>$idCustomer], ['upsert' => true]); 
                    return response()->json([
                        "res" => $idUsuario,
                        "nombre" => $request->nombre,
                        "apellido" => $request->apellido,
                        "email" => $request->email
                    ]); 
                } 
                
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
                    $usuario->idCard = null;
                    $Empresa->save(); 
                    $idUsuario = $Empresa->getKey(); 
                    //Crear cuenta al usuario en Openpay
                    $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678');
                    $customerData = array(
                        'external_id' => null,
                        'name' => $request->nombre,
                        'last_name' => $request->apellido, 
                        'email' => $request->email, 
                        'requires_account' => true);  
                        
                    $customer = $openpay->customers->add($customerData);
                    $idCustomer=$customer->id;
                    User::where('_id', auth()->user()->id)->update(['idCustomer'=>$idCustomer], ['upsert' => true]);

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
