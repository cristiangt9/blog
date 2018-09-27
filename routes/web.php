<?php

/*
|--------------------------------------------------------------------------
| Web Routes Rango
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home')->name('home');
Route::get('/sobre-mi', 'PagesController@about')->name('sobre-mi');
Route::get('/habilidades', 'PagesController@skills')->name('habilidades');
Route::get('/servicios', 'PagesController@services')->name('servicios');
Route::get('/portafolio', 'PagesController@portfolio')->name('portafolio');
Route::get('/blog', 'PagesController@blog')->name('blog');
Route::get('/contactame', 'PagesController@contact')->name('contactame');
Route::get('/mapa-del-sitio', 'PagesController@webmap')->name('mapaweb');

/*portfolio*/
Route::group(['prefix' => 'portafolio'], function(){
	Route::get('flayer-shawarmeria', 'PagesController@shawarmeria_1')->name('flayer_shawarmeria');
	Route::get('menu-shawarmeria', 'PagesController@shawarmeria_2')->name('menu_shawarmeria');
	Route::get('nativos', 'PagesController@nativos')->name('nativos');
	Route::get('aventura', 'PagesController@aventura')->name('aventura');
	Route::get('previfire', 'PagesController@previfire')->name('previfire');
	Route::get('previfire_logo', 'PagesController@previfire_logo')->name('previfire_logo');
});

/*blog */
Route::get('blog/{post}', 'PagesController@show_blog')->name('blog.show');
Route::get('blog/categorias/{category}','CategoriesController@show')->name('categories.show');
Route::get('blog/etiquetas/{tag}','tagsController@show')->name('tags.show');
/*Comment*/
Route::post('comment/{post}/store', 'CommentsController@store')->name('comment.store');

Route::get('/about.html', function () {return view('about');})->name('about');
Route::get('/archive.html', function () {return view('archive');})->name('archive');
Route::get('/contact.html', function () {return view('contact');})->name('contact');

// Route::get('blog/{post}','PostsController@show')->name('posts.show');


/*Admin*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth' ], function(){
	Route::get('/', 'PagesController@index')->name('dashboard');
	Route::get('posts', 'Admin\PostsController@index')->name('posts');
	Route::get('posts/create', 'Admin\PostsController@create')->name('posts.create');
	Route::post('posts/store', 'Admin\PostsController@store')->name('posts.store');
	Route::get('posts/edit/{post}', 'Admin\PostsController@edit')->name('posts.edit');
	Route::put('posts/{post}', 'Admin\PostsController@update')->name('posts.update');
	Route::delete('posts/delete/{post}', 'Admin\PostsController@destroy')->name('posts.delete');
	Route::post('posts/{post}/photos', 'Admin\PhotosController@store')->name('posts.photo.store');
	Route::delete('photos/{photo}', 'Admin\PhotosController@destroy')->name('photos.delete');
});

/*Newsletter*/
Route::post('newsletter/store', 'NewsletterController@store')->name('newsletter.store');
Route::get('newsletter/Verify/{newsletter}', 'NewsletterController@update')->name('newsletter.update');

/*Auth*/
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');


