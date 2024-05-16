<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCat extends Model
{
    use HasFactory;
    protected $table = 'subcategory';
    protected $fillable = [
        'user_id',
        'cate_id',
        'name',
        'slug',
        'des',
    ];
}
