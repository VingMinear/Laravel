<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\admin\AdminController;
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
// Route::get('product',[ProductController::class,'product']);

Route::controller(ProductController::class)->group(function(){
    Route::get('/product','product')->name('product.product');
    Route::post('/product','calculate')->name('product.calculate');
});
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin','home');
    Route::get('/admin/table','table');
    Route::get('/admin/billing','billing');
});
Route::controller(CustomController::class)->group(function(){
    Route::get('/custom','index');

});

Route::post('register/save',[RegisterController::class,'save']);
Route::redirect('/','/custom');

Route::get('/table/{num}',function($num){
    echo $num;
});
// Route::view("/home","homepage",["name"=>"Nea SS5"]);
