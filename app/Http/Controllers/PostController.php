<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function store(Request $request){
        // dd($request->all());

        $user = $request->user();

        $post = new Post;
        $post -> caption = $request-> caption; 

        if($request->hasFile('postImage')){
            $postImage = $request -> file('postImage');
            $extension = $postImage->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            // $postImage->move('/images/uploads/PostImage/',$filename);
            Image:: make($postImage)->save(public_path('images/uploads/PostImage/'.$filename));

            $post-> postImage = $filename;   //storing the value

        }
        $user->post()->save($post);

        return redirect()->back();
    }


}
