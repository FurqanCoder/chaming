<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $table = 'customer';
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'customer_img',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function validateCredentials($credentials)
    {
        return true; // Always return true to bypass credential validation
    }
}
