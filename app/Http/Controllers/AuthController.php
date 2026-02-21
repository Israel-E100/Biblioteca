<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function LoginForm(){
        return view('auth.login');
    }

    public function register(){
        $validateData = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
        ]);
        $user = \App\Models\User::create([
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'password' => bcrypt($validateData['password']),
        ]);
        auth()->login($user);
        return redirect()->route('home');
    }

    public function login(){
        $credentials = request()->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
    }
        return back()->withErrors([
            'email' => 'Las credenciales no son correctas.',
        ]);
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
