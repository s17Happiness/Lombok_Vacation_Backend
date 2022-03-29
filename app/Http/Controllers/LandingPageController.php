<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function loginButton() {
        return view('login');
    }
    public function registerButton() {
        return view('register');
    }
}
