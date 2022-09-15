<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front;
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
Route::get('/', [Front\HomeController::class, 'index']);


Route::prefix('shop')->group(function (){
    Route::get('/product/{id}', [Front\ShopController::class, 'show']);
    Route::post('/product/{id}', [Front\ShopController::class, 'postComment']);

    Route::get('/', [Front\ShopController::class,  'index']);

    Route::get('/{categoryName}', [Front\ShopController::class,  'category']);
});


Route::prefix('cart')->group(function (){
    Route::get('/add/{id}', [Front\CartController::class, 'add']);
    Route::get('/', [Front\CartController::class, 'index']);

    Route::get('delete/{rowId}', [Front\ShopController::class,  'delete']);

    //Route::get('/{categoryName}', [Front\ShopController::class,  'category']);
});




//Route::get('/', function (){
//   //return view('front.index');
//    return \App\Models\User::all();
//});
//Route::get('/', function (){
//    //return view('front.index');
//    return \App\Models\Product::all();
//});

//Route::get('/', function (){
//
//    return \App\Models\Product::find(1)->productImages;
//});

//Route::get('/', function () {
//    return view('front.index');
//});

/*Route::get('/shop/product/{id}', [Front\ShopController::class, 'show']);

Route::post('/shop/product/{id}', [Front\ShopController::class, 'postComment']);*/
