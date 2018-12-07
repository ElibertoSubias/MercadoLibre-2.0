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
    	if (auth()->check()) {
    		if (auth()->user()->userType==0) { 
    			return redirect()->route('dashboardAdmin');
    		}else{ 
    			$direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get(); 
                if ($direccion!="[]") {
                    return view('dashboard')->with(['direccion'=>$direccion]);
                }else{
                    return view('dashboard');
                } 
    		}
    	}else{ 
    		return view('dashboard');
	    }
    }
}
