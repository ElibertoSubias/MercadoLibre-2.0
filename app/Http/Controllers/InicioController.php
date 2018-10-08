<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Session;
use Redirect;
use App\User;

class InicioController extends Controller
{
    public function index() {
		return view('inicio');
	}

	public function autenticarEmail()
    {
        return view('autenticar.autenticarEmail');
    }

    public function validarPassword(Request $request)
    {
        return view('autenticar.validarPassword')->with('email', $request->input('email')); 
    }

    public function crearcuenta()
    {
        return view('usuario.crearcuenta');
    }

    public function checkEmail(Request $request)
    {
        if ($request->ajax()) { 

            if(!User::where('email', '=', $request->email)->exists()){  
                //return redirect()->action('FrontController@index');
                return response()->json([
                    "res" => 1, 
                    "msj" => "Revisa tu e-mail o usuario.",
                    "email" => $request->email
                ]); 
            }else{  
                return response()->json([
                    "res" => 200, 
                    "email" => $request->email
                ]);  
            }  
        }else{
            return view('autenticar.validarPassword')->with('email', $request->input('email')); 
        }
    }
}
