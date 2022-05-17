<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function logReg(){
        return view ('auth.logReg');
    }

    // public function registration(){
    //     return view ('auth.logReg');
    // }

    public function registerUser(Request $request){

        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mobOrMail' => 'required | min:10 | max:25 | unique:users',
            'password' => 'required | min:6 | max:12',
            'month' => 'required',
            'day' => 'required',
            'year' => 'required',
            'gender' => 'required',
        ]);


        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'mobOrMail' => $request->mobOrMail,
            'password' => Hash::make($request->password),            
            'month' => $request->month,
            'day' => $request->day,
            'year' => $request->year,
            'gender' => $request->gender,
        ]);
        
        
        if ($user){
            return back()->with('success','You have registered successfully');
        }else {
            return back()->with('fail', 'Something Wrong');
        }



        
    }

    public function loginUser(Request $request){
        $request->validate([
            'mobOrMail' => 'required | min:10 | max:25',
            'password' => 'required | min:6 | max:12',
        ]);

        $user = User::where('mobOrMail', '=', $request->mobOrMail)->first();
        
        if ($user){
            if(Hash::check($request->password, $user->password)){
                $request-> session()->put('loginId', $user->id);
                // return redirect('dashboard');
                return redirect('facebook');
            }else{
                return back()->with('fail', 'Password Does not matches.');
            }
        }else{
            return back()->with('fail', 'This mobile or email is not registered');
        }
    }

    // public function dashboard(){
    //     $data = array();
    //     if(Session::has('loginId')){
    //         $data = User::where('id', '=', Session::has('loginId'))->first();
    //     }
    //     return view('dashboard', compact('data'));  
    // }

    public function facebook(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=', Session::get('loginId'))->first();
        }

        // dd($data);
        return view('facebook', ['data'=>$data]);
    }

   

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/');
        }
    }
}
