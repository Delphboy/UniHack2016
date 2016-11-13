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


Route::get('/', function()
{
    $events = Calendar::all();
	return View::make('home', [ 'events' => $events]);
});

Route::get('/register', function()
{
    return View::make('register');
});
Route::get('/login', function()
{
    return View::make('login');
});

Route::get('/trips', 'TripsController@showTrips');

Route::get('/speakers', 'SpeakersController@showSpeakers');

Route::get('/speakers/review/{speaker_id}', 'SpeakersController@showReviews');

Route::get('/activities', 'ActivityController@showActivities');

Route::get('trips/review/{trip_id}', 'TripsController@showReviews');

Route::get('events/{time}', 'CalendarController@showEvents');

Route::post('new/event/', 'CalendarController@newEvent');

//Route::get('/', 'HomeController@showWelcome');
Route::get('/login', 'AuthController@getLogin');
Route::get('/register', 'AuthController@getRegister');
Route::get('/logout', 'AuthController@getLogout');
Route::post('/auth/login', 'AuthController@userAuth');
Route::post('/auth/register', 'AuthController@userRegister');
//>>>>>>> origin/master
