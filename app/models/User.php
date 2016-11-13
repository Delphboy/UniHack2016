<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    protected $fillable = ['name','email', 'password','university', 'society', 'image'];

    public function speakerReviews()
    {
        return $this->hasMany('SpeakerReview', 'speakers_reviews');
    }
    public function tripReviews()
    {
        return $this->hasMany('TripReview', 'trips_reviews');
    }

    public function calendars()
    {
        return $this->hasMany('Calendar');
    }

    public function activities()
    {
        return $this->hasMany('Activity');
    }

    public function trips()
    {
        return $this->hasMany('Trip');
    }

    public function speakers()
    {
        return $this->hasMany('Speaker');
    }

}
