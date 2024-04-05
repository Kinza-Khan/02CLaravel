<?php

use App\Http\Controllers\MyFirstContrller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('contactttt',function(){
    return view('contact');
});
Route::get('about',function(){
    return view('about');
});

Route::get('users',[MyFirstContrller::class,'userData']);


Route::get('register',function(){
    return view('register');
});
Route::post('register',[MyFirstContrller::class,'subData']);
Route::get('order',function(){
    return view('orders');
});
Route::post('order',[MyFirstContrller::class,'insertData']);
Route::get('select2',[MyFirstContrller::class,'selectData']);