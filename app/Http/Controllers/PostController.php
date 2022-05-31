<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function store(Request $request){
        // dd($request->all());

        $user = $request->user();

        $post = new Post;
        $post -> caption = $request-> caption; 

        if($request->hasFile('postImages')){
            // dd($request->all());
            foreach($request->file('postImages') as $postImage){
            // $postImage = $request -> file('postImage');
            // dd($postImage);
            $extension = $postImage->getClientOriginalExtension();
            $filename = time().Str::random(2).'.'.$extension;
            // $postImage->move('/images/uploads/PostImage/',$filename);
            Image:: make($postImage)->save(public_path('images/uploads/PostImage/'.$filename));

            $post-> postImage = $filename;   //storing the value
            }
        }
        $user->post()->save($post);

        return redirect()->back();
    }


}
