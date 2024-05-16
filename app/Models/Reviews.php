<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $table ='reviews';
    // public $timestamps = true;
    protected $fillable = [
        'user_id',
        'product_id',
        'name',
        'email',
        'rating',
        'title',
        'feedback',
        'images',
        'status',
        'reply'
    ];
}
