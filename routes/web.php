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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth Twitter
Route::get('auth/twitter', 'Auth\AuthController@TwitterRedirect');
Route::get('auth/twitter/callback', 'Auth\AuthController@TwitterCallback');
Route::get('auth/twitter/logout', 'Auth\AuthController@getLogout');

