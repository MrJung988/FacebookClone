<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function likePost(Request $request){
        $userId = Auth::user()->id;
        $postId = $request->postId;
        
        $postLike = Like::where('post_id', $postId)->where('user_id',$userId)->first();
        
        if($postLike)
        {
            $postLike->delete();
            $message = 'unliked';
        } 
        
        if(!$postLike)
        {
            $createPost = new Like();
            $createPost->user_id = $userId;
            $createPost->post_id = $postId;
            $createPost->Liked = 1;
            $createPost->save();
            $message = 'liked';
        }

        $totalLikes = Like::where('post_id',$postId)->count();
        
        return response(["messages" => $message, "likes" => $totalLikes]);
          
    }
}
