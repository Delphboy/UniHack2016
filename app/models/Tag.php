<?php

class Tag extends \Eloquent {
	protected $fillable = ['tag', 'color'];

    protected $table = 'tags';

    public function trips()
    {
        return $this->belongsToMany('Trip', 'trips_tags');
    }

    public function activities()
    {
        return $this->belongsToMany('Activity', 'activities_tags');
    }

    public function speakers()
    {
        return $this->belongsToMany('Speaker', 'speakers_tags');
    }

}