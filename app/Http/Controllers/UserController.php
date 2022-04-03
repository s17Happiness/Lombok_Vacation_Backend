<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/add-property')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function store(){
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'no_hp' => 'required'
        ]);
        $user = User::create(request(['name', 'email', 'password', 'no_hp']));

        auth()->login($user);

        return redirect()->to('/add-property');
    }

    public function updateProfileView(){
        $title = "Edit Profile";
        return view('updateProfile', compact('title'));
    }

    public function dashboardView(){
        $title = "Dashboard";
        return view('dashboard',compact('title'));
    }

    public function updateProfile(Request $request){
        $this->validate(request(), [
            'name' => 'nullable',
            'email' => 'nullable',
            'no_hp' => 'nullable'
        ]);

        $user = User::find($request->user()->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_hp = $request->no_hp;

        $user->save();

        return redirect()->to('/update-profile');
    }
}
