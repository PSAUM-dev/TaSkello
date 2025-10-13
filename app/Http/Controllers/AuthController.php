<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function signinPage () {
        return view("auth.signin");
    }

    public function signupPage () {
        return view("auth.signup");
    }
    
    public function login(Request $request) {

        $validatedData = $request->validate([
            "email"=> "required|email",
            "password"=> "required|string|min:8"
        ]);

        if (Auth::attempt($validatedData, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }

        return redirect()->back()->with('error', 'auth');

    }
    
}
