<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function logo() {
        return view('landingpage.landing');
    }

    public function loginButton() {
        return view('login');
    }
    public function registerButton() {
        return view('register');
    }
}
