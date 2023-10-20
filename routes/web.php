<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\PreferitiController;
use App\Http\Controllers\ProfiloController;

Route::get('/' ,"App\Http\Controllers\LoginController@preview");

Route::get("signup", "App\Http\Controllers\SignupController@signup");
Route::post("signup", "App\Http\Controllers\SignupController@do_signup");
Route::get("checkData", "App\Http\Controllers\SignupController@check");

Route::get("login", "App\Http\Controllers\LoginController@login");
Route::post("login", "App\Http\Controllers\LoginController@do_login");

Route::get("logout", "App\Http\Controllers\LoginController@do_logout");

Route::get("home", "App\Http\Controllers\HomeController@home");
Route::get("search/{search}", "App\Http\Controllers\HomeController@search");
Route::post("save", "App\Http\Controllers\HomeController@save");
Route::post("remove","App\Http\Controllers\HomeController@remove");
Route::get("like", "App\Http\Controllers\HomeController@like");

Route::get("community","App\Http\Controllers\CommunityController@community");
Route::get("users", "App\Http\Controllers\CommunityController@getUsers");
Route::get("search/community/{user}", "App\Http\Controllers\CommunityController@like_album_usr");

Route::get("preferiti", "App\Http\Controllers\PreferitiController@preferiti");
Route::get("content", "App\Http\Controllers\PreferitiController@like_album");

Route::get("profilo", "App\Http\Controllers\ProfiloController@profilo");
Route::post("profilo","App\Http\Controllers\ProfiloController@add_img_profile");
Route::get("profilo/remove", "App\Http\Controllers\ProfiloController@remove_img_profile");
Route::get("delete/account", "App\Http\Controllers\ProfiloController@remove_account");