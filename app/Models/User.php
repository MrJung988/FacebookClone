<?php

namespace App\Models;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'mobOrMail',
        'password',
        'month',
        'day',
        'year',
        'gender',
    ];



    public function setPasswordAttribute($password){

        $this-> attributes['password']= bcrypt($password);
    }

    public function post(){
        return $this->hasMany(Post::class);
    }

}
