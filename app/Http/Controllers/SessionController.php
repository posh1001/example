<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create() {

        return view('auth.login');
    }

    public function store() {

         dd(request()->all());
    }

    public function destroy() {

    dd('User is logged out');
   }
}
