<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function login(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials, true) == true){
            if($request->remember){
                Cookie::queue('userEmail', "$request->email", 120);
                Cookie::queue('userPassword', "$request->password", 120);
            }
            if(Auth::user()->role == 'admin'){
                return redirect()->route('home_admin');
            }else{
                return redirect()->route('home_customer');
            }
        }else{
            return redirect()->back()->withErrors([
                'email' => 'Invalid Credentials! Log In with Registered Email and Password',
                'password' => 'Invalid Credentials! Log In with Registered Email and Password'
            ]);
        }
    }

    public function logout(){
        Auth::logout();
        Cookie::queue(Cookie::forget('userEmail'));
        Cookie::queue(Cookie::forget('userPassword'));
        return redirect()->route('home_guest');
    }

    public function register_logic(Request $request){
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|',
            'gender' => 'required',
            'date_of_birth' => 'required|date_format:Y-m-d|before:-' . 13 . ' years',
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'remember_token' => NULL
        ]);

        return redirect()->route('login_page')->with('success', 'Registration successful, please log in');
    }
}
