<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
             throw ValidationException::withMessages([
                'password'=> 'sorry the email or password dont match'
             ]);
        }

        // request()->session()->regenerate(); 
        return redirect('/');
    }

        public function destroy()
    {
        Auth::logout();
        return redirect("/");
        dd("hello");
    }
}
