<?php

class AuthController extends \BaseController {

    public function getLogin() {
        return View::make('login');
    }

    public function getRegister() {
        return View::make('register');
    }

    public function getLogout() {
        return Redirect::to('/');
    }

    public function userAuth() {
        return Redirect::to('/');
    }

    public function userRegister() {
        return Redirect::to('/');
    }
}
