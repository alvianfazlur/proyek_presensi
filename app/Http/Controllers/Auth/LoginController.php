<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {   
        
        $input = $request->all();
     
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
  
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->type == 'mahasiswa') {
                return redirect()->route('homeMhs');
            }else if (auth()->user()->type == 'dosen') {
                return redirect()->route('homeDosen');
            }else if (auth()->user()->type == 'admin') {
                return redirect()->route('homeAdmin');
             }
        }
          
    }

    public function logout(Request $request)
    {
        Session::flush();
        
        Auth::logout();

        return redirect('/');
    }
}