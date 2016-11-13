<?php

class SpeakersController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showSpeakers()
	{
        $speakers = Speaker::all();
		return View::make('speakers', ["speakers"=>$speakers]);
	}

    public function showReviews($speaker_id)
    {
        $trip = Speaker::find($speaker_id);
        $reviews = $trip->speakerReviews;
        return View::make('reviews', ['return'=> 'speakers','content' => $trip, 'reviews' => $reviews]);
    }
}
