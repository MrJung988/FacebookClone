<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOTP;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ForgotPasswordController extends Controller
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

    public function otpSendToEmail(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'mobOrMail' => 'required | exists:users'
        ]);

        $otp = rand(100000, 999999);
        // dd($otp);

        DB::table('password_resets')->insert([
            'email' => $request->mobOrMail,
            'token' => $otp,
            'created_at' => Carbon::now()
        ]);

        $username = $request->username;

        Mail::send('mail.message', compact('username', 'otp'), function ($message) use ($request) {
            $message->from('mrjung416@gmail.com');
            $message->to($request->mobOrMail);
            $message->subject('Reset Password Notification');
        });

        return view('auth.otp-verify')->with('success', 'OTP send successfully');
    }

    public function otpVerify(Request $request)
    {
        // dd($request->all());
        $opt = $request->validate([
            'otp' => 'required'
        ]);
    }
}
