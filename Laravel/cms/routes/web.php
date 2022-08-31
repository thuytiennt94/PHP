<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Post;
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

Route::get('home', [HomeController::class,'showWelcome']);

Route::get('about', [AboutController::class, 'showDetails']);

Route::get('profile/{name}', [ProfileController::class, 'showProfile']);
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


Route::get('/insert', function (){
   DB::insert('insert into posts(title,body, is_admin) values (?,?,?)', ['PHP with Laravel', 'Laravel is the best framework!', 0]);
   return 'Done';
});

Route::get('/read', function (){
   $result = DB::select('select * from posts where id = ?', [1]);
//   return $result;
    foreach ($result as $post){
        return $post->body;
    }
});

Route::get('update', function (){
    $update = DB::update('update posts set title = "new title hihi" where id > ?', [1]);
    return $update;
});

Route::get('delete', function (){
   $delete = DB::delete('delete from posts where id = ?', [3]);
   return $delete;
});

Route::get('readAll', function (){
   $posts = Post::all();
   foreach ($posts as $p){
       echo $p->title . " " . $p->body;
       echo "<br>";
   }
});

Route::get('findID', function (){
    $posts = Post::where('id', '>= ',1)
        ->where('title', 'PHP with Laravel')
        ->where('body', 'like', '%Laravel%')
        ->orderBy('id', 'desc')
        ->take(10)
        ->get();
    foreach ($posts as $p){
        echo $p->title ;
        echo "<br>";
    }
});

Route::get('insertORM', function (){
    $p = new Post;
    $p->title = 'update ORM';
    $p->body = 'Insert done ORM';
    $p->is_admin = 1;
    $p->save();
});

Route::get('updateORM', function (){
    $p= Post::where('id',4)->first();
    $p->title = 'update ORM';
    $p->body = 'update done ORM';
    $p->save();
});

Route::get('deleteORM', function (){
    Post::where('id', '>=', 5)
        ->delete();
    echo "done";
});

Route::get('destroyORM', function (){
    Post::destroy(9,11);
});
