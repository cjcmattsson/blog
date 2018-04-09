<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    public function login()
    {
      $email = request()->get('email');
       $password = request()->get('password');
       if (Auth::attempt(['email' => $email, 'password' => $password])) {
           return redirect()->intended('/');
       }
       return back()->withErrors('Wops');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
