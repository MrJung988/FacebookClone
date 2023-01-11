<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPassword extends Controller
{
    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function resetPassword()
    {
        return view('auth.reset-password');
    }
}
