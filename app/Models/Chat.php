<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Chat extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    
    public function sender()
    {
        return $this->belongTo(User::class, 'sender_id');
    }
    
    public function receiver()
    {
        return $this->belongTo(User::class, 'receiver_id');
    }
}