<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;


class SignupController extends BaseController
{
    public function signup()
    {
        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error');
        return view('signup')->with('error', $error);
    }

    public function check(){
        $user=User::all();
        return $user;
    }

    public function do_signup()
    {
        if( strlen(request("name"))==0 || strlen(request("surname"))==0 ||
            strlen(request("us_name"))==0 || strlen(request("email"))==0 ||
            strlen(request("new_password"))==0 || strlen(request("confirm_new_password"))==0)
        {
            Session::put("error", "campi_vuoti");
            return redirect("signup");
        }

        if(User::where('username', request('us_name'))->first())
        {
            return redirect('signup');
        }
        
        if(strlen(request('new_password'))<8)
        {
            return redirect('signup');
        }
        if(strlen(request('new_password'))>8)
        {
                $checkspecial=false;
                $specialchar = array('!', '"', '?' ,'$', '%', '^', '&' ,'*','(',')' ,'_' ,'-', '+' ,'=' ,'{' ,'[','}' ,']' ,':' ,';' ,'@' ,"'", '~' ,'#' ,'|' ,' \ ','<',',' ,'>' ,'.' ,'?' ,'/');
                for($i=0;$i<(count($specialchar));$i++)
                {
                    if (strpos(request("new_password"),$specialchar[$i])!==false) {
                        $checkspecial=true;
                    }
                }
                $checkmin=false;
                $checkmaiu=false;
                $min= array ('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i','j','k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v','w','x','y','z');
                for($i=0;$i<(count($min));$i++)
                {
                    if (strpos(request("new_password"),$min[$i])!==false) {
                        $checkmin=true;
                    }
                }
                $maiu=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
                for($i=0;$i<(count($maiu));$i++)
                {
                    if (strpos(request("new_password"),$maiu[$i])!==false){
                        $checkmaiu=true;
                    }
                }
                if($checkmin===false || $checkmaiu===false || $checkspecial===false)
                {
                        return redirect('signup');
                }
                
        }
        if(strcmp((request("new_password")), (request("confirm_new_password"))) !== 0) 
        {
            return redirect('signup');       
        }
        if (!filter_var((request("email")), FILTER_VALIDATE_EMAIL)) 
        {
            Session::put('error', 'Email_non_valida');
            return redirect('signup');
        }
        if (User::where('email', request('email'))->first())
        {
            return redirect('signup');
        }
        $currentyear=date("Y");
        $chooseyear=trim(request("yy"));
        if(($currentyear-$chooseyear)<14){
            return redirect('signup');
        }
        
        $user= new User;
        $user->namee = request("name");
        $user->surname = request("surname");
        $user->username= request("us_name");
        $user->email = request("email");
        $user->pass = password_hash(request('new_password'), PASSWORD_BCRYPT);
        $day = request("gg");
        $month = request("mm");
        $year = request("yy");
        $date = $day."/".$month."/".$year;
        $user->data_nascita = $date;
        $user->save();

        Session::put('user_id', $user->id);

        return redirect("home");
    }
}