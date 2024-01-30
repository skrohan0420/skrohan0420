<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;
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
    return view('welcome');
});


Route::get('/hello', function () {
    return view('hello');
});

Route::get('/html', function () {
    return "<h1>html</h1>";
});


Route::view('/new_method','new_method');


Route::get('/post', function () {
    return view('hello');
});




// -----------------------------------------------------------
// || the ? mark in route name is for the param being optional
// -----------------------------------------------------------

Route::get('/user/{id?}', function (string $id = null) {
    if($id){
        return "<h1>user id : ". $id."</h1>";
    }else{
        return "no id found";
    }
});


Route::get('/user/{id?}/data/{data_id?}', function (string $id = null, string $data_id = null) {
    if($id){
        return "<h1>user id : ". $id."</h1><h2>".$data_id."</h2>";
    }else{
        return "no id found";
    }
});

// ------------------------------------------------------------------------
// ||========= laravel route constrains ==========||
// localhost/user/10        --------> whereNumber('id')
// localhost/user/name      --------> whereAlpha('name')
// localhost/user/name10    --------> whereAlphaNumeric('name')
// localhost/user/song      --------> whereIn('category',['movie','song'])
// localhost/user/@10       --------> where('id', '[@0-9]+')
// ------------------------------------------------------------------------

Route::get('/num/{id}', function (string $id) {
    if($id){
        return "<h1>user id : ". $id."</h1>";
    }else{
        return "no id found";
    }
})->whereNumber('id');

Route::get('/alpha/{id}', function (string $id) {
    if($id){
        return "<h1>user id : ". $id."</h1>";
    }else{
        return "no id found";
    }
})->whereAlpha('id');


Route::get('/alphaNum/{id}', function (string $id) {
    if($id){
        return "<h1>user id : ". $id."</h1>";
    }else{
        return "no id found";
    }
})->whereAlphaNumeric('id');


Route::get('/category/{id}', function (string $id) {
    if($id){
        return "<h1>user id : ". $id."</h1>";
    }else{
        return "no id found";
    }
})->whereIn('id',['movie','song']);



Route::get('/regx/{id}', function (string $id) {
    if($id){
        return "<h1>user id : ". $id."</h1>";
    }else{
        return "no id found";
    }
})->where('id','[@0-9]+');


Route::get('/user/{id}/name/{name}', function (string $id, string $name) {
    if($id){
        return "<h1>user id : ". $id."</h1><b>". $name."</b>";
    }else{
        return "no id found";
    }
})->whereNumber('id')->whereAlpha('name');



// ==============================================
// Named Routes

Route::get('/', function () {
  
    return view('welcome');
   
});

Route::get('/home', function () {
  
    return view('home');
   
});

Route::get('/about', function () {
    return view('about'); 
})->name('about');

Route::get('/postssss', function () {
    return view('post'); 
})->name('post');

// ====================================
// route redirect

Route::redirect('/about','/post', 301);



// ====================================
// route groups

Route::prefix('page')->group(function(){

    Route::get('/id', function () {
        return "/id";
    });
    Route::get('/details', function () {
        return "/details";
    });
    Route::get('/post/details', function () {
        return "/post/details";
    });
});


// ====================================
// 404 route

Route::fallback(function(){

    return "404 not found";

});

// ====================================
// js in blade

Route::get('/test', function () {


    return view('test',[
                    'user'=>'rohan',
                    'script' => '<script>console.log("hi")</script>'
                ]);
});



Route::get('/blog', [PageController::class, 'showBlog'])->name('blog ');

Route::controller(PageController::class)->group(function(){
    Route::get('/page',  'showHome')->name('home');
    Route::get('/users/{id}', 'showUser')->name('users');
});

Route::get('/tst', TestingController::class);
?>