<?php

class Speaker extends \Eloquent {
	protected $fillable = ['name', 'organisation', 'image', 'user_id'];

    protected $table = 'speakers';

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag', 'speakers_tags');
    }

    public function speakerReviews()
    {
        return $this->hasMany('SpeakerReview');
    }
}