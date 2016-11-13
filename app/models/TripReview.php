<?php

class TripReview extends \Eloquent {
	protected $fillable = ['review', 'rating', 'trip_id', 'user_id'];

    protected $table = 'trips_reviews';

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function trip()
    {
        return $this->belongsTo('Trip');
    }
}