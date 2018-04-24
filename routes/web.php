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



Route::get('/', 'PagesController@index');
Route::get('login', 'PagesController@login')->name('login')->middleware('guest');

Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');

Route::get('posts/{id}', 'PostsController@show')->name('posts.show');
Route::get('posts/{id}/edit', 'PostsController@edit')->name('posts.edit')->middleware('auth');
Route::put('posts/{id}', 'PostsController@update')->name('posts.update');
