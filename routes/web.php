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



Auth::routes();

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('admin/posts', 'Admin\\PostsController');

Route::resource('Customers','CustomerController');

Route::resource('Rulers','RulerController');

Route::resource('Helps','HelpController');
Route::resource('Users','UserController');

Route::get('/edit','CustomerController@edit');