<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller{

    //show login page
    public function showLogin(){
        return view('pages.login');
    }

    //show registration page
    public function showRegister(){
        return view('pages.register');
    }

    //register user
    public function postRegister(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return back()->with('success', 'You have been registered successfully.');
    }

    //login user

    public function logoutUser(){
        Auth::logout();
        return back()->with('success', 'You have been logged out successfully.');
    }

    public function postLogin(Request $request){
        $details = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($details)){
            return redirect()->intended('home');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    //reset password
}
