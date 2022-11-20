<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // $credentials = ['email' => $request->email, 'password' => $request->password];
        // $credentials = $request->only('email', 'password');
        // $credentials = $attributes;
        // dd($credentials);

        if (Auth::attempt($attributes)) {
            return redirect(RouteServiceProvider::HOME)->with('success', 'You are now logged in.');
        }

        // attempt == ini yang sulit dibawah

        // $user = User::whereEmail($request->email)->first();
        // if ($user) {
        //     if (Hash::check($request->password, $user->password)) {
        //         Auth::login($user);

        //         return redirect('/')->with('success', 'You are now logged in.');
        //     }
        // }

        throw ValidationException::withMessages([
            'email' => 'Your provide credentials does not match our records.',
        ]);
    }
}
