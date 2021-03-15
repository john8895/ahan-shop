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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/about', function () {
//    return view('welcome');
//});
//Route::get('/news', function () {
//    return view('welcome');
//});
//Route::get('/products', function () {
//    return view('welcome');
//});
//Route::get('/contact', function () {
//    return view('welcome');
//});
//Route::get('/post/{id}/{name}', function ($id, $name) {
//    return "This post id is " . $id . " " . $name;
//});
//
//Route::get('admin/posts/examples', array('as'=>'admin.home', function(){
//    $url = route('admin.home');
//    return "This url is " . $url;
//}));

//Route::get('/post/{id}', '\App\Http\Controllers\PostsController@index');

//Route::get('resource', '\app\Http\Controllers\PostsController');

Route::resource('post', '\App\Http\Controllers\PostsController');
