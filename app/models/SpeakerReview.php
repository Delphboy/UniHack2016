<?php

class SpeakerReview extends \Eloquent {
	protected $fillable = ['review','rating', 'speaker_id','user_id'];

    protected $table = 'speakers_reviews';


    public function user()
    {
        return $this->belongsTo('User');
    }
}