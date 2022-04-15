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

    private $code, $response;

    public function __construct(){
        $this->code = 200;
        $this->response = [];
    }

    public function generate_user($user){
        $success['user'] = $user;
        $success['token'] = $user->createToken('lombok_vacation')->accessToken;

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
    // public function login(Request $request)
    // {
    //     $field = $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);
    //     if($request->remember_token){
    //         $data = User::where('email', $request->email)->where('remember_token', $request->remember_token)->first();

    //         if(is_null($data)){
    //             $user = User::create([
    //                 'name' => $request->name,
    //                 'email' => $request->email,
    //                 'remember_token' => $request->remember_token,
    //                 'role' => $request->role,
    //                 'email_verified_at' => Carbon::now(),
    //             ]);
    //         } else if(Auth::loginUsingId($data->id)){
    //             $user = Auth::user();
    //         }

    //         $this->response = $this->generate_user($user);
    //     } else if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    //         $user = Auth::user();
    //         $this->response = $this->generate_user($user);
    //     } else {
    //         $this->code = 401;
    //     }

    //     return Api::apiRespond($this->code, $this->response);
    // }
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return response()->json([
                'email' => $request->email,
            ]);
        }

        return response()->json([
            'email' => $request->email,
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
        //
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
        //
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
