<?php

namespace App\Http\Controllers\Auth;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use Session;
use Redirect;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use \Crypt;

class LoginController extends Controller
{
    //Aplicando middleware solo para el metodo showLoginForm
    //Asi que solo podemos entrar al login si estamos NO autenticados
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function showLoginForm(Request $request)
    {
        return view('auth.validarPassword')->with('email', $request->input('email')); 
    }

    public function login(Request $request)
    {
        if ($request->password) {
            $this->validate($request, [
            'login' => 'required|string',
            'password' => 'required|string'
            ]);
            

            $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL)?'email':'alias';

            $request->merge([$login_type => $request->input('login')]);


            if(Auth::attempt($request->only($login_type, 'password')))
            {
                return redirect()->route('dashboard');
            } 
            return back()->withErrors(['password' => trans('auth.failed')])
            ->withInput(request(['login']));
        }
        return view('auth.validarPassword')->with('email', $request->login);

    }

    public function logout() 
    {
        Auth::logout();
        return redirect('/');
    }

    public function username()
    {
        return 'alias';
    }
}
