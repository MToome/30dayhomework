<?php

namespace App\Http\Controllers;

use App\Models\User;
;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
        // validate
        $attributes = request()-> validate([
            'firstname' =>['required'],
            'lastname' =>['required'],
            'email' =>['required', 'email'],
            'password' =>['required', Password::min(6), 'confirmed'], // password_confirmation
        ]);

        // create the user
        $user = User::create($attributes);

        // login
        Auth::login($user);

        // redirect somewhere
        return redirect('/jobs');
    }
}
