<?php

class AuthController extends \BaseController {

    public function getLogin() {
        return View::make('login');
    }

    public function getRegister() {
        return View::make('register');
    }

    public function getLogout() {
        Auth::logout();
        
        return Redirect::to('/');
    }

    public function userAuth() {
        $email = Input::get('email');
        $password = Input::get('password');

        if (Auth::attempt(array('email' => $email, 'password' => $password))) {
            return Redirect::to('/');
        }

        return Redirect::to('/');
    }

    public function userRegister() {
        return Redirect::to('/');
    }
}
