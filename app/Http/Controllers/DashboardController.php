<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	//Solo dejar pasar a los usuarios Autenticados
	public function __construct()
	{
		$this->middleware('auth');
	}
    public function index()
    {
    	return view('dashboard');
    }
}
