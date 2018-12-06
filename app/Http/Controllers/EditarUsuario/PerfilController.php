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
use Intagono\Openpay\Openpay; 
use App\Direcciones;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get();
        $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678'); 

        $customer = $openpay->customers->get(auth()->user()->idCustomer);
        $findDataRequest = array( 
                'offset' => 0,
                'limit' => 5);
        $cardList = $customer->cards->getList($findDataRequest);

      	$usuario=User::find( auth()->user()->id);
        $domicilios=Direcciones::where(['idUser'=>auth()->user()->id])->get();   
        return view('perfil.create',compact('direccion','usuario','domicilios','cardList'));
    }

    public function dalateCard(Request $request)
    {
        $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678'); 
        $customer = $openpay->customers->get(auth()->user()->idCustomer);
        $card = $customer->cards->get($request->idCard);
        $card->delete();
        return redirect('perfil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('perfil.create');
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

}
