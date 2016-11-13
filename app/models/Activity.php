<?php

class Activity extends \Eloquent {
	protected $fillable = ['title','description','url', 'user_id', 'image_url'];

    protected $table = 'activities';

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag', 'activities_tags');
    }
}