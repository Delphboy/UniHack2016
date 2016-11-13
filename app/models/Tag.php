<?php

class Tag extends \Eloquent {
	protected $fillable = ['tag', 'color'];

    protected $table = 'tags';

    public function trips()
    {
        return $this->belongsToMany('Trip');
    }


    public function speakers()
    {
        return $this->belongsToMany('Speaker');
    }

}