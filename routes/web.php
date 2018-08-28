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

Route::get('/', 'PagesController@home')->name('home');

Route::get('/index.html', function () {return redirect('/');});

Route::get('/home', function () {return redirect('/');});

Route::get('/about.html', function () {return view('about');})->name('about');

Route::get('/archive.html', function () {return view('archive');})->name('archive');
Route::get('/contact.html', function () {return view('contact');})->name('contact');

Route::get('blog/{post}','PostsController@show')->name('posts.show');


Route::group(['prefix' => 'admin', 'middleware' => 'auth' ], function(){
	Route::get('/', 'PagesController@index')->name('dashboard');
	Route::get('posts', 'Admin\PostsController@index')->name('posts');
	Route::get('posts/create', 'Admin\PostsController@create')->name('posts.create');
	Route::post('posts/store', 'Admin\PostsController@store')->name('posts.store');
	Route::get('posts/edit/{post}', 'Admin\PostsController@edit')->name('posts.edit');
	Route::put('posts/update/{post}', 'Admin\PostsController@update')->name('posts.update');
	Route::delete('posts/delete/{post}', 'Admin\PostsController@destroy')->name('posts.delete');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

