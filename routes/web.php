<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;

use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function() {
    return "<h1> I am user </h1>";
});

Route::get('/home', function() {
    return "home"; 
});

Route::get('/login', function() {
    return "login"; 
});

Route::get('/post/create', function () {
    $post=new \App\Models\Post;
    $post->title = 'Title..';
    $post->body = 'Some text..';
    $post->save();
});

Route::get('/post', [PostController::class, 'index']);