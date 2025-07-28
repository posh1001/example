<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class RegisterUserController extends Controller
{

    public function create() {

        return view('auth.register');

    }

   public function store()
{

    // Validate the request
    $attributes = request()->validate([
        'first_name' => ['required'],
        'last_name' => ['required'],
        'email' => ['required', 'email', 'max:254', 'unique:users,email'],
        'password' => ['required', Password::min(6), 'confirmed'],
    ]);

    // Hash the password before saving
    $attributes['password'] = Hash::make($attributes['password']);

    // Create the user
    $user = User::create($attributes);

    // Log in the user
    Auth::login($user);

    // Redirect to /jobs with success message
    return redirect('/jobs')->with('success', 'Account created and logged in!');
}


}
