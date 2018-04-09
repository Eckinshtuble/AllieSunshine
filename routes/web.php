<?php

//Main Routes

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

Route::get('gallery', function (){
    return view('gallery/gallery');
});

Route::get('contact', function (){
    return view('contact/contact');
});

//Blog Routes
Route::resource('whatsnew', 'BlogPostController');


//Auth Routes
Auth::routes();

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');