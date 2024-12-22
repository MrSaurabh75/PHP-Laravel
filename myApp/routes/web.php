<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/anything', function () {
    return view('welcome');
});

Route::get('/about/{name}',function($name){
    // echo $name;
    return view('about',['name'=>$name]);
});

// redirect
// route::redirect('/home','/anything');

// Route::get('/home', function () {
//     return view('home');
// });

// OR

Route::view('/home','home');

// Controller
Route::get('/username',[UserController::class,'getUserName']);
Route::get('/user/{name}',[UserController::class,'getName']);
