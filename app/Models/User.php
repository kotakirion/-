<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function sender_chats()
    {
        return $this->hasMany(Chat::class, 'sender_id');
    }
    
    public function receiver_chats()
    {
        return $this->hasMany(Chat::class, 'receiver_id');
    }
    
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    
    public function purpose()
    {
        return $this->belongsTo(Purpose::class);
    }
    
    public function university()
    {
        return $this->belongsTo(University::class);
    }
    
    
    

}
