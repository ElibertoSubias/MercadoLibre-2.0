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
use App\Direcciones;
use App\Empresas;
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
        $login_type = filter_var($request->login, FILTER_VALIDATE_EMAIL)?'email':'alias';

        $request->merge([$login_type => $request->login]);

        if(User::where([$login_type => $request->login])->where('userType', '!=', 0)->exists()){ 
            return view('auth.validarPassword')->with('login', $request->login);
        }else{
            return back();
        }
    }

    public function showLoginFormAdmin(Request $request)
    {
        if(User::where(['email' => $request->login,'userType'=>0])->exists() || User::where(['alias' => $request->login,'userType'=>0])->exists()){
            return view('auth.validarPassword')->with(['login'=>$request->login, 'loginType'=>'admin']);
        }else{
            return back();
        }
    }

    public function adminLogin(Request $request)
    {
        return view('autenticar.autenticarEmail')->with(['loginType'=>'admin']);
    }

    public function login(Request $request)
    {
        if ($request->password) {
            $this->validate($request, [
            'login' => 'required|string',
            'password' => 'required|string'
            ]);
            

            $login_type = filter_var($request->login, FILTER_VALIDATE_EMAIL)?'email':'alias';

            $request->merge([$login_type => $request->login]);


            if(Auth::attempt($request->only($login_type, 'password')))
            { 
                if (auth()->user()->userType==0) {
                    return redirect()->route('dashboardAdmin');
                }else{
                    $direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get();
                    return redirect('dashboard')->with(['direccion'=>$direccion]); 
                } 
            }else{
                return redirect('auth.validarPassword')->with('login', $request->login);
            }
        }
        return view('auth.validarPassword')->with('login', $request->login);
    } 

    public function adminDashboard(Request $request)
    {
        if (isset(auth()->user()->userType)) {
            if (auth()->user()->userType!=0) {
                $direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get();
                return redirect('dashboard')->with(['direccion'=>$direccion]); 
            }else{
                return redirect('admin.dashboard');
            }
        }else{
            return redirect('admin.dashboard');
        } 
    }

    public function logout() 
    {
        $direccion = Direcciones::where(['idUser'=>auth()->user()->_id,'envio'=>1])->get();
        Auth::logout();
        return redirect('/')->with(['direccion'=>$direccion]);
    }

    public function username()
    {
        return 'alias';
    }
}
