<?php

/**
 * Created by PhpStorm.
 * User: Katie
 * Date: 13/11/2016
 * Time: 09:13
 */
class CalendarController extends BaseController {
    
    public function showEvents($time)
    {
        $events = Calendar::all();
        return View::make('event', ["events" => $events, "newTime" => $time]);
    }

    public function newEvent()
    {
        $data['title'] = Input::get('title');
        $data['description'] = Input::get('description');
        $data['time'] = Input::get('time');
        $data['date'] = Input::get('date');
        $data['user_id']= 1;
        //var_dump($data);
        Calendar::create($data);
        return Redirect::to("/");
    }
}