<?php
/**
 * Created by PhpStorm.
 * User: Katie
 * Date: 13/11/2016
 * Time: 05:50
 */
class TripsController extends BaseController
{
    public function showTrips()
    {
        $tags = Tag::all();
        $trips = Trip::all();
        return View::make('trips', ['tags' => $tags, 'trips' => $trips]);
    }

    public function showReviews($trip_id)
    {
        $trip = Trip::find($trip_id);
        $reviews = $trip->tripReviews;
        return View::make('reviews', ['return'=> 'trips','content' => $trip, 'reviews' => $reviews]);
    }

    public function newReview($trip_id)
    {
        $data['review'] = Input::get('review');
        $data['rating'] = Input::get('rating');
        $data['trip_id'] = $trip_id;
        $data['user_id']= 1;

        Calendar::create($data);
        return Redirect::to("/trips/review/".$trip_id);
    }
}