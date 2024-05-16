<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatusers extends Model
{
    use HasFactory;
    protected $table = 'chatusers';
    protected $fillable = [
        'user_id',
        'status',
    ];
}
