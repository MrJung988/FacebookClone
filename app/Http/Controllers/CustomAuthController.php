<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Post;

class CustomAuthController extends Controller
{
    

    public function check(){
        if(Auth::check()){
            $posts = Post::all();
            return view('facebook', ['showPost'=>$posts]);
        }
            return view('auth.logReg');
    }


    public function registerUser(Request $request){
        // var_dump(request()->all());
        // return request()->all();
        $attributes = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mobOrMail' => 'required | min:10 | max:25 | unique:users',
            'password' => 'required | min:6 | max:12',
            'month' => 'required',
            'day' => 'required',
            'year' => 'required',
            'gender' => 'required',
        ]);

        // dd('Successfully validated!');

        User::create($attributes);
                
        if ($attributes){
            return redirect('/')->with('success','Your account has been created.');
        }else {
            return redirect('/')->with('fail', 'Something Wrong');
        }
        
    }

    public function loginUser(Request $request){
        $attributes = $request->validate([
            'mobOrMail' => 'required | min:10 | max:25',
            'password' => 'required | min:6 | max:12',
        ]);

        // dd('hl');
        if (Auth::attempt($attributes)) {
            return redirect()->route('authCheck')->with('success','You have registered successfully');
        }else{
            return back()->with('fail', 'You have to enter valid details.');
        }
    }
   

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
        
        return redirect(route('authCheck'));
        // return redirect('/')->with('success', 'You're logged out!);
    }
}
