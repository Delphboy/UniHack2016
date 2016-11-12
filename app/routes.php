<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');
Route::get('/auth/login', 'AuthController@getLogin');
Route::get('/auth/register', 'AuthController@getRegister');
Route::get('/auth/logout', 'AuthController@getLogout');
Route::post('/auth/login', 'AuthController@userAuth');
Route::post('/auth/register', 'AuthController@userRegister');
