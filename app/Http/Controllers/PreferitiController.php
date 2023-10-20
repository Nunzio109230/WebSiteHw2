<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;


class PreferitiController extends BaseController
{
    public function preferiti()
    {
        if(Session::get('user_id')==null)
        {
            return redirect('login');
        }
        $user = User::find(Session::get('user_id'));
        return view('preferiti')->with('username', $user->username);
    }

    public function like_album()
    {
        $user = User::find(Session::get('user_id'));
        return $user->albums()->get();
    }
}