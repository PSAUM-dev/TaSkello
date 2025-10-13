<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
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
            "password"=> "required|string|min:6"
        ]);

        if (Auth::attempt($validatedData, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }

        return redirect()->back()->with('error', 'auth');

    }

    public function register(Request $request) {
        
        //dd($request->all());

        // S'il n'a pas accepté les conditions de using
        if (!isset($request->conditions)) {
            return redirect()->back()->with('error','conditions.false');
        }

        $validatedData = $request->validate([
            'name'=> 'required|string|max:255',
            'email'=> 'required|email',
            'password'=> 'required|confirmed|min:6'
        ]);
        
        $newUser = User::create([
            'name'=> $validatedData['name'],
            'email' => $validatedData['email'],
            'password'=> Hash::make($validatedData['password'])
        ]);

        Auth::login($newUser);

        return redirect()->route('dashboard');
    }

    public function logout (Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
    
}
