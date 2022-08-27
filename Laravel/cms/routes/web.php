<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
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

Route::get('home', /*[HomeController::class,*/'HomeController@showWelcome'/*]*/);

Route::get('about', [AboutController::class, 'showDetails']);

Route::get('profile/{name}', 'Profile@showProfile');
Route::get('/', function () {
//    return 'welcome home';
    return view('welcome');
});

//Route::get('about', function (){
//    return 'About Content';
//});
Route::get('about/directions', function (){
   return 'direction go here';
});
Route::any('submit-form', function (){
   return 'Process Form';
});
//Route::get('important/{theSubject}', function ($theSubject){
//    return $theSubject. ' content goes here';
//});

Route::get('about/{theSubject}', [AboutController::class, 'showSubject']);

Route::get('about/classes/{theSubject}', function ($theSubject){
    return " Content on $theSubject";
});

Route::get('about/classes/{theArt}/{thePrice}', function ($theArt, $thePrice){
    return "the product : $theArt and $thePrice";
});
Route::get('where', function (){
   return Redirect::route('directions');
});
