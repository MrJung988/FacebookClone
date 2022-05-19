<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    //for profile page layout with value from database as 'pdata'
    public function profile(){
        $profile_data = array();
        if(Session::has('loginId')){
            $profile_data = User::where('id','=', Session::get('loginId'))->first();
        }

        // dd($profile_data);
        return view('profile', ['pdata'=>$profile_data]);
    }


    public function profileUpdate(Request $request){
        // dd($request->all());
        // to update the profile picture
        if($request-> hasFile('profilePic')){
            $profilePic = $request-> file('profilePic');
            $filename = time().'.'.$profilePic->getClientOriginalExtension();
            Image::make($profilePic)->save(public_path('images/uploads/profile-picture/'.$filename));
            
            // @dd($filename);
            $user = Auth::user();
            // $users = User::where('id', Auth::User()->id)->first();
            $user-> profilePic = $filename;
            $user-> save();
        }
            // dd($user);

        return view('profile', ['user'=> Auth::user()]);






        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // $profilePic = time().'.'.$request->profilePic->extension();
        // $request->profilePic->move(public_path('images'), $profilePic);

        // //store $profilePic name in DATABASE from Here

        // return back();        

    }
}
