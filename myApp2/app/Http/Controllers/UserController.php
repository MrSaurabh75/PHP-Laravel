<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUserName(){
        $name = "Saurabh";
        $users = ['Pravin','Adarsh','Saurabh','Sushant','Sahil'];
        return view('home',['name'=>$name,'users'=>$users]);
    }
}
