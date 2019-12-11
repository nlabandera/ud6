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
Auth::routes(['verify'=> true]);

Route::get('/home', 'HomeController@index')->name('home');
