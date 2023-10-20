<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;
use App\Models\Album;

class CommunityController extends BaseController
{

    public function community()
    {
        if(Session::get('user_id')==null)
        {
            return redirect('login');
        }
        $user = User::find(Session::get('user_id'));
        return view('community')->with('username', $user->username);
    }

    public function getUsers(){
        $users=User::all();
        return $users;
    }
    public function like_album_usr($user)
    {   $user = urlencode($user);
       if($users=User::where("username", $user)->first()){
        $users=User::where("username", $user)->first();
        return $users->albums()->get();
    }
        else return ["error"=>"nessun utente trovato"];
    }
}