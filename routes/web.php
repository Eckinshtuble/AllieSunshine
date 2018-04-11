<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('homepage/index');
});

Route::get('index', function () {
    return view('homepage/index');
});

Route::get('legacy', function (){
    return view('about-us/about');
});

Route::get('getinvolved', function (){
    return view('get-involved/getinvolved');
});

Route::get('blog', function (){
    return view('blog/blog');
});

Route::get('shop', function (){
    return view('shop/index');
});

Route::get('whatsnew', function (){
    return view('whats-new/whatsnew');
});

Route::get('gallery', function (){
    return view('gallery/gallery');
});

Route::get('contact', function (){
    return view('contact/contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::get('/admin', 'AdminController@index');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

