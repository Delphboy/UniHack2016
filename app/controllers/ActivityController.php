<?php

/**
 * Created by PhpStorm.
 * User: Katie
 * Date: 13/11/2016
 * Time: 08:20
 */
class ActivityController extends \BaseController {

    public function showActivities()
    {
        $activities = Activity::all();
        return View::make('activities', ['activities' => $activities]);
    }

}