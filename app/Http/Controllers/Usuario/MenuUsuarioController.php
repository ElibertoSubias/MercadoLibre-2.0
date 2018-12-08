<?php
namespace App\Http\Controllers\Usuario;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
 
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;  
use Validator;
use Auth;
use Redirect;
use App\Articulos;
use App\Carrito;
use App\Direcciones;
use Intagono\Openpay\Openpay; 
use App\Compras;
use App\Urlimagenes;
class MenuUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Maximum execution time of 30 seconds exceeded
    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Resumen(Request $request)
    {
      $publicacionesActivas = Articulos::where(['idUser'=>auth()->user()->_id,'estadoPublicacion'=>1])->get();
      $totalPublicacionesActivas = count($publicacionesActivas);
      $publicacionesInactivas = Articulos::where(['idUser'=>auth()->user()->_id,'estadoPublicacion'=>2,'estadoPublicacion'=>3])->get();
      $totalPublicacionesActivas = count($publicacionesActivas);
      $totalPublicacionesInactivas = count($publicacionesInactivas);
      //Consulta que regresa todos los mensajes de las publicaciones que ha realizado el usuario que se encuentren en estado (0=sin respuesta,1=respondido)
      $mensajes = Articulos::where(['idUser'=>auth()->user()->_id,'comentarios.estadoMsj'=>0])->get(['comentarios']);
      
      if ($mensajes!="[]") { 
        $totalMsjSinResponder = count($mensajes[0]); 
      }else{
        $totalMsjSinResponder = 0;
      }
      $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678');
      $direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get();
      $findDataRequest = array( 
          'offset' => 0);

      $customer = $openpay->customers->get(auth()->user()->idCustomer);
        return view('perfil.estado')->with(['total'=>$customer->balance,'direccion'=>$direccion,'mensajes'=>$mensajes,'totalMsjSinResponder'=>$totalMsjSinResponder,'totalPublicacionesActivas'=>$totalPublicacionesActivas,'totalPublicacionesInactivas'=>$totalPublicacionesInactivas]);
    } 

    public function detaCompra(Request $request)
    {
      $item = Compras::where(['codigoCompra'=>$request->codigoCompra])->get(); 

      $openpay = \Openpay::getInstance('mfsrs5u9jmuxn3se2rpp','sk_971f3acd3cd0456299caaf254a316678');
      $customer = $openpay->customers->get(auth()->user()->idCustomer); 
      $charge = $customer->charges->get($item[0]->cargoId);
      
      $domicilioEnvio = Direcciones::where(['_id'=>$item[0]->idDireccionEnvio])->get();
      $direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get();
      return view('usuario.menu.detaCompra')->with(['codigoCompra'=>$request->codigoCompra,'item'=>$item,'direccion'=>$direccion,'domicilioEnvio'=>$domicilioEnvio,'charge'=>$charge]);
    }

    public function aggDomicilio()
    {
      $direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get();
      return view('usuario.menu.agregarDomicilio')->with('direccion');
    }

    public function showAllPublicaciones() 
    {
      $direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get();
        $articulos = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 1]])->get();
          
          $Finalizados = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 3]])->get();
          $pausados = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 2]])->get();
           $activos = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 1]])->get();
          
        $active=1;
        $totalActivos = count($activos);
        $totalPausados = count($pausados);
        $totalFinalizados = count($Finalizados); 
        
        

        return view('usuario.menu.adminPublicaciones',compact('active','direccion','articulos', 'totalActivos','totalFinalizados', 'totalPausados' ) ); 
    }

   

    public function showAllPublicacionesPausadas() 
    {
      $direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get();
        $articulos = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 2]])->get();
           $Finalizados = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 3]])->get();
          $pausados = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 2]])->get();
           $activos = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 1]])->get();
          
        $active=2;
        $totalActivos = count($activos);
        $totalPausados = count($pausados);
        $totalFinalizados = count($Finalizados);
        return view('usuario.menu.adminPublicaciones',compact('active','direccion','articulos', 'totalActivos','totalFinalizados', 'totalPausados') );
    
    }

    public function showAllPublicacionesFinalizadas() 
    {
      $direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get();
        $articulos = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 3]])->get();
           $Finalizados = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 3]])->get();
          $pausados = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 2]])->get();
           $activos = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 1]])->get();
          
        $active="3";
        $totalActivos = count($activos);
        $totalPausados = count($pausados);
        $totalFinalizados = count($Finalizados);
        return view('usuario.menu.adminPublicaciones',compact('active','direccion','articulos', 'totalActivos','totalFinalizados', 'totalPausados') );
    
    }
   
   public function editar(Request $request)
    { 
              if ($request->ajax()) {

                if($request->estado=="1")
                {
                $usuario = articulos::find($request->publicacion); 
                $usuario->estadoPublicacion = 1; 
                $usuario->save(); 
                $idUsuario = $usuario->getKey(); 
                return response()->json([
                    "res" => $idUsuario   
                    ]); 
                }
                if($request->estado=="2")
                {
                $usuario = articulos::find($request->publicacion); 
                $usuario->estadoPublicacion = 2; 
                $usuario->save(); 
                $idUsuario = $usuario->getKey(); 
                return response()->json([
                    "res" => $idUsuario   
                    ]); 
                }
                if($request->estado=="3")
                {
                $usuario = articulos::find($request->publicacion); 
                $usuario->estadoPublicacion = 3; 
                $usuario->save(); 
                $idUsuario = $usuario->getKey(); 
                return response()->json([
                    "res" => $idUsuario   
                    ]); 
                }


            } 
                
    } 
}