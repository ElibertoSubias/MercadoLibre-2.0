<?php

namespace App\Http\Controllers;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Http\Request;
use App\Articulos;

class BuscarController extends Controller
{
    public function buscarPublicaciones(Request $request)
    {
    	if ($request->ajax()) { 
    		$datos = Articulos::where([['titulo', 'like', '%'.$request->consulta.'%'],'estadoPublicacion'=>1])->get(); 
    		$aux="";
    		foreach ($datos as $key => $value) {
    			$aux = $aux."<li><a href='resultados?busqueda=".$request->consulta."&categoria=".$value->categoria."'>".$value->titulo."</a></li>"; 
    		}
    		return $aux;
    	} 
    }
    public function listarResultados(Request $request){
        try {  
            $datos = Articulos::where([['titulo', 'like', '%'.$request->busqueda.'%'], 'estadoPublicacion'=>1])->get(); 
            return view('listarResultados')->with('datos',$datos);
 
        } catch (Exception $e) {
            return "Error en la consulta de productos";
        }
        //return $request->busqueda;
        
    }
}
