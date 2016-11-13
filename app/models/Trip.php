<?php

class Trip extends \Eloquent {
	protected $fillable = ['name', 'url', 'image', 'user_id'];

    protected $table = 'trips';

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function tripReviews()
    {
        return $this->hasMany('TripReview');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }
}