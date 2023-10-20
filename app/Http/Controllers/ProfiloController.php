<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
use App\Models\Album;
use File;

class ProfiloController extends BaseController
{
    public function profilo()
    {
        if(Session::get('user_id')==null)
        {
            return redirect('login');
        }
        $user = User::find(Session::get('user_id'));
        return view('profilo')->with('username', $user->username);
    }

    public function add_img_profile(Request $request)
    {
        $user= User::find(Session::get('user_id'));
        if($request->file('file')->getSize()!==0){
            if($request->file('file')->getSize()>7000000){
                echo("La dimensione dell'immagine è troppo grande");
            }
            else{
                $up=$request->file('file')->storeAs('upload/'.$user->username,$request->file("file")->getClientOriginalName());
                if(!$up){
                    echo("Errore nel caricamento del file");
                }
                else{
                    $user->img="upload/".$user->username."/".$request->file("file")->getClientOriginalName();
                    $user->save();
                    return view("profilo")->with('username', $user->username);
                }
            }
            
        }
    }

    public function remove_img_profile()
    {   
        $user= User::find(Session::get('user_id'));
        $file_path = storage_path("/app/".$user->img);
        unlink($file_path);
        $user->img = null;
        $user->save();
        return redirect("profilo");
    }

    public function remove_account(){
        $user= User::find(Session::get('user_id'));
        $albums=array();
        foreach ($user->albums()->get() as $album) {
            array_push($albums, $album->id);
        }
        for($i=0;$i<(count($albums));$i++){
            $id=$albums[$i];
            $albumm=Album::where("id",$id)->first();
           if($albumm->users()->count()>1){
                foreach($albumm->users()->get() as $prova)
                $prova->pivot->where("user_id",$user->id)->where("album_id",$albumm->id)->delete();
                
            }else if($albumm->users()->count()==1){
                foreach($albumm->users()->get() as $provas)
                $provas->pivot->where("user_id",$user->id)->where("album_id", $albumm->id)->delete();
                $albumm->delete();
            }
            
        }
        $file_path = storage_path("/app/upload/".$user->username);
        File::deleteDirectory($file_path);
        $user->delete();
        
        return redirect("logout");
    }   
}