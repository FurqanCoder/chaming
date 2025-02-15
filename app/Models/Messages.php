<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;
    protected $table ='messages';
    protected $fillable = [
       'room_id',
       'sender_id',
       'receiver_id',
       'message',
    ];
}
