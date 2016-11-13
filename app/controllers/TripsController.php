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
        return View::make('reviews', ['trip' => $trip, 'reviews' => $reviews]);
    }
}