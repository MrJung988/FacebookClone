<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class CoverController extends Controller
{
    public function coverPicUpdate(Request $request){
        // dd($request->all());
        //to update cover photo
        if($request-> hasFile('coverPhoto')){
            $coverPic = $request-> file('coverPhoto');
            $filename = time().'.'.$coverPic->getClientOriginalExtension();
            Image::make($coverPic)->save(public_path('images/uploads/cover-photo/'.$filename));

            // dd($filename);
            $user = Auth::user();
            
            $user-> coverPic = $filename;
            $user-> save();
        }
        // dd('hello');

        return back();
    }
}
