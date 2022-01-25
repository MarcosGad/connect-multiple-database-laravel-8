<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

//--path=
Route::get('/', function () {
    
    //  $users = \App\Models\User2::all();
    //  $users = DB::connection('mysql3')->table('user3s')->get();

     $posts =  DB::table('posts1')->get();
     $posts2 = DB::connection('mysql2')->table('posts2')->get();
     $posts3 = DB::connection('mysql3')->table('posts3')->get();
     $posts = \App\Models\Post3::all();

     return $posts3;

});
