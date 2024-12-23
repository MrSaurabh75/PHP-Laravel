<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class newController extends Controller
{
    function getAdmin($fruit){
        return view('home',['fruit'=>$fruit]);
    }
    function viewExistance(){
        if(View::exits('login')){
            return view('login');
        }
        else{
            return "No View About!";
        }
    }
}
