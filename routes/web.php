<?php

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
	$posts = App\Post::latest('published_at')->get();
    return view('home',compact('posts'));
});

Route::get('/index.html', function () {
    return redirect('/');
});

Route::get('/about.html', function () {
    return view('about');
});

Route::get('/archive.html', function () {
    return view('archive');
});

Route::get('/contact.html', function () {
    return view('contact');
});



