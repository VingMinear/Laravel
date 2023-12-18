<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('home', [HomeController::class,'index']);
Route::get('about',[AboutController::class,'about']);
Route::get('contact',[ContactController::class,'contact']);
Route::get('register',[RegisterController::class,'register']);
Route::post('register/save',[RegisterController::class,'save']);
Route::redirect('/','/home');

Route::get('/table/{num}',function($num){
    echo $num;
});
// Route::view("/home","homepage",["name"=>"Nea SS5"]);
