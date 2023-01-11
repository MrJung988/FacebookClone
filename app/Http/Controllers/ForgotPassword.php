<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ForgotPassword extends Controller
{
    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function searchId(Request $request)
    {
        // dd($request->all());
        $user = User::where('mobOrMail', $request->mobOrMail)->first();

        if ($user) {
            return view('auth.otp-send', compact('user'));
        } else {
            return redirect()->back()->with('fail', 'Your search did not return any results. Please try again with other information.');
        }
    }

    public function otpSend()
    {
        return view('auth.otp-send');
    }

    public function resetPassword()
    {
        return view('auth.reset-password');
    }
}
