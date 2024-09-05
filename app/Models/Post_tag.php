<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Post_tag extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
    
}