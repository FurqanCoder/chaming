<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;
    protected $table = 'custmer_addresses';
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'email',
        'country',
        'city',
        'state',
        'zip',
        'address'
    ];

    public function user() {    
        return $this->belongsTo(Customer::class);
        }
    
}
