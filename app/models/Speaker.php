<?php

class Speaker extends \Eloquent {
	protected $fillable = ['name', 'organisation', 'image', 'user_id'];

    protected $table = 'speakers';
}