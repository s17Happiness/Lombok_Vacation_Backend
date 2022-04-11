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
            return redirect()->intended('/dashboard')
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

        return redirect()->to('/dashboard');
    }

    public function updateProfileView(){
        $title = "Edit Profile";
        return view('updateProfile', compact('title'));
    }

    public function dashboardView(){
        $title = "Dashboard";
        return view('dashboard',compact('title'));
    }
    public function kelolaUserView(){
        $results = User::all();
        $title = "Kelola User";
        return view('kelolaUser', compact('title','results'));
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
    public function updateUser(Request $request, $id){
        $this->validate(request(),[
            'role' => 'required',
        ]);

        $user = User::find($id);
        $user->role = $request->role;
        $user->save();
        return redirect()->back();
    }
    public function show($id)
    {
        //
        return User::find($id);
    }
}
