<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Pagescontroller extends Controller
{
    //
    public function login(){
        return view('login');  
    }

    public function register(){
        return view('home.registration');  
    }


}
