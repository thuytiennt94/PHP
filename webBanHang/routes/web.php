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

//Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index']);

//Route::get('/', function (){
//   //return view('front.index');
//    return \App\Models\User::all();
//});
//Route::get('/', function (){
//    //return view('front.index');
//    return \App\Models\Product::all();
//});
Route::get('/', function (){

    return \App\Models\Brand::find(1)->products;
});
