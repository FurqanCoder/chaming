<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    
    protected $fillable = [
        'user_id',
        'checkout_id',
        'suntotal',
        'shipping',
        'coupon_code',
        'discount',
        'grand_total',
        'payment_method',
    ];
}
