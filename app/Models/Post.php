<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Post extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function post_tags()
    {
        return $this->hasMany(Post_tag::class);
    }
    
    public function likes()
    {
        return $this->hasMany(like::class);
    }
    
    public function post_images()
    {
        return $this->hasMany(Post_image::class);
    }
   
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    

}
