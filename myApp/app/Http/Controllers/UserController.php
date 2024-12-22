<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUserName(){
        return "Saurabh";
    }
    function getName($name){
        // return "My name is ".$name;
        return view('username',['name'=>$name]);
    }
}

