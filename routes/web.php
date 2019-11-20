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

Route::get('/', 'DefaultController@loadHome');

Route::get('/sent', 'DefaultController@sent');

Route::get('/home', 'DefaultController@loadHome') -> name('home');

Route::get('/menu', 'DefaultController@loadMenu') -> name('menu');

Route::get('/products','DefaultController@loadProducts') -> name('products');

Route::get('/productdetail','DefaultController@loadProductDetails') -> name('productdetail');

Route::get('/checkout','DefaultController@loadCheckOut') -> name('checkout');

Route::get('/aboutus','DefaultController@loadAboutUs') -> name('aboutus');

Route::get('/contact','DefaultController@loadContact') -> name('contact');

Route::get('/error404','DefaultController@loadError404') -> name('error404');

Route::get('/cart','DefaultController@loadCart') -> name('cart');

Route::get('/charimage','DefaultController@loadCharImage');

Route::get('/commingsoon', 'DefaultController@loadCommingSoon') -> name('commingsoon');

Route::get('/createcake', 'ProductController@loadPostForm') -> name('createcake');
