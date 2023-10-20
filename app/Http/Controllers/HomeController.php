<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;
use App\Models\Album;

class HomeController extends BaseController
{
    public function home(){
        if(Session::get('user_id')==null)
        {
            return redirect('login');
        }
        $user = User::find(Session::get('user_id'));
        return view('home')->with('username', $user->username);
    }

    public function search($artist)
    {
        $key="4b4ba893ab7e5e613c245f57bf7e3523";
        $artist = urlencode($artist);
        $url = 'http://ws.audioscrobbler.com/2.0/?method=artist.gettopalbums&artist='.$artist.'&api_key='.$key.'&format=json';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result=curl_exec($curl);
        curl_close($curl);
        return $result;
    }

    public function save()
    {
        $user = User::find(Session::get('user_id'));
        $nome = request("album");
        $artista = request ("artist");
        $img = request("image");
        $playcount = request("playcount");
        $albums=Album::where('nome', $nome)->first();
        if($albums)
        {
            $albums->users()->attach($user);
            return ['Msg' => "Album inserito nei mi piace"];
        }
        $album=new Album;
        $album->nome = $nome;
        $album->artista = $artista;
        $album->img = $img;
        $album->playcount = $playcount;
        $album->save();
        
        
        
        $album->users()->attach($user);
        return ['Msg' => "Album inserito nei mi piace"];
    }

    public function remove()
    {
        $nome = request("album");
        $user = User::find(Session::get('user_id'));
        $album= Album::where("nome", $nome)->first();
        if(count($album->users()->get())>1){
            $album->users()->detach($user);
            return ["Msg"=>"Rimosso dai preferiti"];
        }else if(count($album->users()->get())==1){
            $album->users()->detach($user);
            $album->delete();
            return ["Msg"=>"Rimosso dai preferiti"];
        }
    }

    public function like()
    {
        $user = User::find(Session::get('user_id'));
        return $user->albums()->get();
    }
}  
