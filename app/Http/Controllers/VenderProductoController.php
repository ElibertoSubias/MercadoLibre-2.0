<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenderProductoController extends Controller
{
    public function cargarLista()
    {
    	return view('vender.lista');
    }
}
