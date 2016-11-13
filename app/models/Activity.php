<?php

class Activity extends \Eloquent {
	protected $fillable = ['title','description','url', 'user_id'];

    protected $table = 'activities';
}