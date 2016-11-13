<?php

class Activity extends \Eloquent {
	protected $fillable = ['title','description','url', 'user_id'];

    protected $table = 'activities';

    public function user()
    {
        return $this->belongsTo('User');
    }
}