<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;  // Added Notifiable trait for notifications

    protected $primaryKey = 'sl_no';  // Define primary key
    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'email', 'password', 'phone_number', 'role', 'forgot_password_token'
    ];

    // Automatically generate a unique user_id when a new user is created
    protected static function booted()
    {
        static::creating(function ($user) {
            if (empty($user->user_id)) {
                $user->user_id = Str::uuid()->toString();  // Generate a unique user_id using UUID
            }
        });
    }

    // Optional: you can add any additional methods related to user authentication
}
