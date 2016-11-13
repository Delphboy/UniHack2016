<?php

class Tag extends \Eloquent {
	protected $fillable = ['tag', 'color'];

    protected $table = 'tags';
}