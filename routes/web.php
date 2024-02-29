<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\RegisterController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\CustomController;
use App\Http\Controllers\backend\AdminController;
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
    Route::get('/admin/create-room','createRoom');
    Route::get('/admin/edit-room/{id}','edit')->name('room.edit');
    Route::get('/admin/billing','billing');
    Route::post('/admin/create-room/save', 'save');
    Route::get('/admin/delete-room/{id}', 'deleteRoom')->name('room.delete');
});
Route::controller(CustomController::class)->group(function(){
    Route::get('/custom','index');

});

Route::post('register/save',[RegisterController::class,'save']);
Route::redirect('/','/admin');

Route::get('/table/{num}',function($num){
    echo $num;
});
// Route::view("/home","homepage",["name"=>"Nea SS5"]);
