<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
       $validatedAttribute = request()->validate([
            'first_name'=>[ 'required', 'string', 'min:2', 'max:50'],
            'last_name'=>[ 'required', 'string', 'min:2', 'max:50'],
            'email'=>[ 'required', 'email', 'unique:users,email'],
            'password'=>[ 'required', 'confirmed', Password::min(5)->mixedCase()->numbers()->symbols(),],
        ]);

        $user = User::create($validatedAttribute);

        Auth::login($user);
        return redirect('/');
    }

}
 












            // 'regex:/[a-z]/',      // must contain at least one lowercase letter
            // 'regex:/[A-Z]/',      // must contain at least one uppercase letter
            // 'regex:/[0-9]/',      // must contain at least one digit
            // 'regex:/[@$!%*#?&]/', // must contain a special character
            //'confirmed'            // must match password_confirmation Make sure your form includes a password_confirmation input field with the same name, and Laravel will automatically check that it matches the password.
            // 'unique:users,email'  // How Laravel reads it ====>>>> 'unique : table , column'
