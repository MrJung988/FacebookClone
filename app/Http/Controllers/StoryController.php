<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class StoryController extends Controller
{
    public function storeStory(Request $request){

        $user = $request->user();

        $story = new Story;
        if($request->hasFile('storyPic')){
            // dd($request->all());
            $storyPic = $request -> file('storyPic');
            $extension = $storyPic -> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            Image:: make($storyPic)->save(public_path('images/uploads/story-photo/'.$filename));

            $story-> storyPic = $filename;
        }
        $user->story()->save($story);

        return redirect()->back();
    }
}
