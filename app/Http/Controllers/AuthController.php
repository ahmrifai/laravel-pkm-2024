<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('login');
    }

    public function forgotPassword() {
        return view('forgot-password');
    }

    public function authentication(Request $request)
    {
        dd('oke');
    }
}
