<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create() {

        return view('auth.login');
    }

    public function store() {

       //Validate
      $attributes = request()->validate([
        'email' => ['required'],
        'password' => ['required'],
       ]);

       //Attempt to login the user
       if(!Auth::attempt($attributes)) {
          throw ValidationException::withMessages([
            'email' => ['Sorry, credentials do not match.']
          ]);
       }

       //regenerate session token
       request()->session()->regenerate();

       //redirect
       return redirect('/jobs');
    }

    public function destroy() {

      Auth::logout();

      return redirect('/');
   }
}
