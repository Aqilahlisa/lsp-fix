<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\custom\WelcomeController::class, 'welcome'])->name('welcome')->middleware('guest');

Auth::routes();


//rute admin
Route::group(['middleware'=>['auth','admin']], function(){ 

//untuk akses user 
Route::resource('/product', App\Http\Controllers\ProductController::class);
Route::get('product/show/{id}', [App\Http\Controllers\ProductController::class, 'show']);
//delete product
Route::get('product/destroy/{id}',[App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');

});

//rute untuk user customer
Route::group(['middleware'=>['auth','customer']], function(){
    Route::resource('/order', App\Http\Controllers\OrderController::class);

});





//