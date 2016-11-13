<?php

class Trip extends \Eloquent {
	protected $fillable = ['name', 'url', 'image', 'user_id'];

    protected $table = 'trips';
}