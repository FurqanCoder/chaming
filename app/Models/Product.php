<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'cate_id',
        'subcate_id',
        'title',
        'slug',
        'description',
        'thumbnail',
        'gallery',
        'video',
        'sku',
        'stock',
        'price',
        'discount',
        'start_date',
        'end_date',
        'offer',
        'details',
        'detail_img',
        'how',
        'ing_name',
        'ing_weight',
        'status',
        'tags',
        ];
        protected $table = "products";
}
