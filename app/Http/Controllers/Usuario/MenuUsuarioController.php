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
        //
    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    } 

    public function detalleCompra(Request $request)
    {
      return view('usuario.menu.detaCompra');
    }

    public function aggDomicilio()
    {
      return view('usuario.menu.agregarDomicilio');
    }

    public function showAllPublicaciones() 
    {
        $articulos = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 1]])->get();
          
          $Finalizados = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 3]])->get();
          $pausados = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 2]])->get();
           $activos = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 1]])->get();
          

        $totalActivos = count($activos);
        $totalPausados = count($pausados);
        $totalFinalizados = count($Finalizados); 
        
        

        return view('usuario.menu.adminPublicaciones',compact('articulos', 'totalActivos','totalFinalizados', 'totalPausados' ) ); 
    }

   

    public function showAllPublicacionesPausadas() 
    {
        $articulos = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 2]])->get();
           $Finalizados = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 3]])->get();
          $pausados = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 2]])->get();
           $activos = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 1]])->get();
          

        $totalActivos = count($activos);
        $totalPausados = count($pausados);
        $totalFinalizados = count($Finalizados);
        return view('usuario.menu.adminPublicaciones',compact('articulos', 'totalActivos','totalFinalizados', 'totalPausados') );
    
    }

    public function showAllPublicacionesFinalizadas() 
    {
        $articulos = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 3]])->get();
           $Finalizados = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 3]])->get();
          $pausados = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 2]])->get();
           $activos = Articulos::where([['idUser' , '=', auth()->user()->id] ,['estadoPublicacion', '=', 1]])->get();
          

        $totalActivos = count($activos);
        $totalPausados = count($pausados);
        $totalFinalizados = count($Finalizados);
        return view('usuario.menu.adminPublicaciones',compact('articulos', 'totalActivos','totalFinalizados', 'totalPausados') );
    
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