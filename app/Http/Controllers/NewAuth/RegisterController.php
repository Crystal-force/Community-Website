<?php

namespace App\Http\Controllers\NewAuth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;


class RegisterController extends Controller
{
    
    public function index() {
        return view('auth\register');
    }

    
    public function register(Request $request) {

        $registered = User::where('email', $request['email'])->first();
        
        if($registered != null) {
            return response()->json(['data'=>'0']);
        }
       
        $new_user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        auth()->login($new_user);
        
        return response()->json(['data' => '1']);
    }
}
