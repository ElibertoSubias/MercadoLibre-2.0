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
    		$datos = Articulos::where('titulo', 'like', '%'.$request->consulta.'%')->get();
    		$aux="";
    		foreach ($datos as $key => $value) {
    			$aux = $aux."<li><a href='resultados?busqueda=".$value->categoria."'>".$value->titulo."</a></li>"; 
    		}
    		return $aux;
    	} 
    }
    public function listarResultados(Request $request){
        return view('listarResultados')->with('busqueda',$request->busqueda);
    }
}