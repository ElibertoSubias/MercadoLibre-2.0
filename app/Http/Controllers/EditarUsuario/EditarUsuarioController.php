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
    public function modificarDomicilioView(Request $request)
    {
        $domicilio = Direcciones::where(['_id'=>$request->id,'idUser'=>Auth::id()])->get();
        $direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get();
        return view("usuario.menu.modificarDomicilio")->with(['domicilio'=>$domicilio,'direccion'=>$direccion]);
    }
    public function eliminarDomicilio(Request $request)
    { 
        $domicilio = Direcciones::where(['_id'=>$request->idElemneto])->delete();
        return redirect("perfil");
    }
    public function modificarDomicilio(Request $request)
    {  
        $datos = Direcciones::where(['_id'=>$request->idDomicilio,'idUser'=>Auth::id()])->update([ 
            'calle' => $request->inputCalle,
            'contacto' => $request->inputContacto,
            'idUser' => Auth::id(),
            'telefono' => $request->inputTelefono,
            'numeroEx' => $request->inputNumExt,
            'numeroInt' => $request->inputNumInt,
            'entrecalles' => $request->inputEntreCalles,
            'referencia' => $request->inputReferencias,
            'codigopostal' => $request->inputCodigoPostal,
            'asentamiento' => $request->inputAcentamiento,
            'municipio' => $request->inputMunicipio,
            'estado' => $request->inputEstado

        ]);
        return redirect("perfil");
    }

    public function cambiarDireccion(Request $request)
    {  
        $viejo =Direcciones::where([['idUser' , '=', auth()->user()->id], ['envio', '=', 1 ]])->update([ 
           
            'envio' => 0

            ]);
         $datos = Direcciones::where(['_id'=>$request->id,'idUser'=>Auth::id()])->update([ 
           
            'envio' => 1

            ]);
                $domicilios = Direcciones::where(['idUser' => auth()->user()->id])->get();

          return view('confirmarCompra.dondeRecibir')->with(['precio'=>$request->precio,'titulo'=>$request->titulo,'domicilios'=>$domicilios,'urlImagen'=>$request->urlImagen,'idPaquete'=>$request->idPublicacion]);
    }




    public function agregarDomicilio(Request $request)
    {
    
       $id = Auth::id();
        if(Direcciones::where([['idUser' , '=', auth()->user()->id], ['envio', '=', 1 ]])->exists()){
        $Direccion = new Direcciones;
        $Direccion->calle=$request->Calle;
        $Direccion->contacto=$request->Contacto;
        $Direccion->idUser=$id;
        $Direccion->telefono=$request->Telefono;
        $Direccion->numeroEx=$request->NumExt;
        $Direccion->numeroInt=$request->NumInt;
        $Direccion->entrecalles=$request->EntreCalles;
        $Direccion->referencia=$request->Referencias;
        $Direccion->codigopostal=$request->CodigoPostal;
        $Direccion->asentamiento=$request->Asentamiento;
        $Direccion->municipio=$request->Municipio;
        $Direccion->estado=$request->Estado;
        $Direccion->envio=0;

        $Direccion->save();
         return response()->json([
                    "res" => 10
                ]);
       }else{
         $Direccion = new Direcciones;
        $Direccion->calle=$request->Calle;
        $Direccion->contacto=$request->Contacto;
        $Direccion->idUser=$id;
        $Direccion->telefono=$request->Telefono;
        $Direccion->numeroEx=$request->NumExt;
        $Direccion->numeroInt=$request->NumInt;
        $Direccion->entrecalles=$request->EntreCalles;
        $Direccion->referencia=$request->Referencias;
        $Direccion->codigopostal=$request->CodigoPostal;
        $Direccion->asentamiento=$request->Asentamiento;
        $Direccion->municipio=$request->Municipio;
        $Direccion->estado=$request->Estado;
        $Direccion->envio=1;

        $Direccion->save();
         return response()->json([
                    "res" => 10
                ]);
       }
    }  
}
