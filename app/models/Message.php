<?php

class Message extends \Eloquent {
	protected $fillable = ['message', 'user_id_from', 'user_id_to'];

    protected $table = 'message';
}