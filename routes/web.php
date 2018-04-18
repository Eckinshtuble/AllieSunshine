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

Route::get('calendar', function (){
    return view('calendar/calendar');
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
Route::get('whatsnew', 'BlogPostController@index');

Route::group(['middleware' => 'App\Http\Middleware\Admin'], function() {
    Route::get('whatsnew/create', 'BlogPostController@create');
    Route::get('whatsnew/{blog_post}/edit', 'BlogPostController@edit');
    Route::patch('whatsnew/{blog_post}', 'BlogPostController@update');
    Route::delete('whatsnew/{blog_post}', 'BlogPostController@destroy');
});

Route::post('whatsnew', 'BlogPostController@store');
Route::get('whatsnew/{blog_post}', 'BlogPostController@show');


//Auth Routes
Auth::routes();

Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');