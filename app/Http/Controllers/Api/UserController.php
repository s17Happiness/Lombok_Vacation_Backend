<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Api;
class UserController extends Controller
{


    public function generate_user($user){
        $success['user'] = $user;
        $success['token'] = $user->createToken('lombok_vacation')->plainTextToken;

        return $success;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function login(Request $request)
    {
        $request->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $response = $this->generate_user($user);
            return response()->json($response);
        }

        return response()->json([
            'message' => 'email/password salah',
        ]);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'no_hp' => 'required'
        ]);

        $isEmailUsed = User::where("email", $request->email)->get();

        if (count($isEmailUsed) > 0) return response()->json([
            'message' => 'Email sudah digunakan',
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'no_hp' => $request->no_hp,
        ]);

        return response()->json($user);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'name' => 'nullable',
            'email' => 'nullable',
            'no_hp' => 'nullable'
        ]);


        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_hp = $request->no_hp;

        $user->save();

        return response()->json([
            'user' => $user,
            'token' => '',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
