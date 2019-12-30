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
/*
Route::get('/', function () {
    return view('layouts/app');
});
*/
Route::get('/','WelcomeController@index')->name('welcome');

//autenticacion or correo
//Auth::routes(['verify'=> true]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/posts','PostController@index')->name('posts.index');
Route::get('/post/{id}','PostController@show')->name('posts.show');
Route::get('/post/{id}','PostController@edit')->name('posts.edit');*/

Route::resource('posts','PostController');

//Route::get('/posts/{id}','PostController@show')->name('posts.');

Route::get('/admin','AdminController@index')->name('admin')->middleware('admin');

Route::put('/user/{user}/updateUserRole','AdminController@updateUserRole')->name('updateUserRole')->middleware('admin');

Route::get('/editor','EditorController@index')->name('editor')->middleware('role:editor');

