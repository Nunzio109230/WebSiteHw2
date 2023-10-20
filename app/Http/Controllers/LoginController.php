<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;

class LoginController extends BaseController
{

    public function preview()
    {
        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        return view('preview');
    }

    public function login()
    {
        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error');
        return view('login')->with('error', $error);
    }

    public function do_login()
    {
        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        
        if(strlen(request("username"))==0 || strlen(request("password"))==0 )
        {
            Session::put("error", "campi_vuoti");
            return redirect("login")->withInput();
        }
        
        $user = User::where('username', request('username'))->first();
        if(!$user || !password_verify(request('password'), $user->pass))
        {
            Session::put('error', 'credenziali_non_valide');
            return redirect('login')->withInput();
        }

        Session::put('user_id', $user->id);
        return redirect('home');
    }

    public function do_logout()
    {
        Session::flush();
        return redirect("login");
    }
}