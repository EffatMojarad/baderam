<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // if success login
            if (Auth::user()->role == 1)
                return redirect('/admin');
            else
                return redirect('/dashboard');
        }
        // if failed login
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}