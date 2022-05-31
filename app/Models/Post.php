<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Like;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'caption',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    // public function like($user= null, $liked = true){
    //     $this->likes()->updateOrCreate([
    //         'user_id' => $user ? $user->id : auth()->id(),
    //     ], [
    //         'liked' => $liked,
    //     ]);
    // }

    // public function isLikedBy(User $user){
    //     return (bool) $user->likes
    //         ->where('post_id)', $this->id)
    //         ->where('liked', true)
    //         ->count();
    //     // $user->likes()->where('user_id', $user->id)->extists();
    // }

    // public function scopeWithLikes(Builder $query){
    //     $query->leftJoinSub(
    //         'SELECT post_id, sum(liked) likes, sum(!liked) dislikes FROM likes group by post_id',
    //         'likes',
    //         'likes.post_id',
    //         'posts.id'
    //     );        
    // }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function isAuthUserLikedPost(){
        return $this->likes()->where('user_id',  auth()->id())->exists();
     }
}
