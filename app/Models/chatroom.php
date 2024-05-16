<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chatroom extends Model
{
    use HasFactory;
    protected $table = 'chatrooms';
    protected $primaryKey = 'chatroom_id';
    protected $fillable = [
        'user_id',
        'admin_id',
    ];
}
