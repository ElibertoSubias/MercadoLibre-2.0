<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Direcciones;

class DashboardController extends Controller
{
	//Solo dejar pasar a los usuarios Autenticados
	public function __construct()
	{
		$this->middleware('auth');
	}
    public function index()
    {
    	$direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get(); 
    	return view('dashboard')->with(['direccion'=>$direccion]); 
    }
}
