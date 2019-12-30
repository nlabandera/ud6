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

Route::get('/','WelcomeController@index')->name('welcome');

Route::resource('posts','PostController');
Auth::routes();

Route::put('/user/{user}/updateUserRole','AdminController@updateUserRole')->name('updateUserRole')->middleware('admin');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home','AdminController@index')->name('admin')->middleware('admin');

//Route::get('/home','EditorController@index')->name('editor')->middleware('role:editor');

