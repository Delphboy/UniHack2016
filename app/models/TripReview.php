<?php

class TripReview extends \Eloquent {
	protected $fillable = ['review', 'rating', 'trip_id', 'user_id'];

    protected $table = 'trips_reviews';
}