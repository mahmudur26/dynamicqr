<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'phone',
        'password',
        'organization',
        'designation',
        'registered_on',
        'is_active',
        'is_verified',
        'is_admin',
        'email_verification_token'
    ];
}
