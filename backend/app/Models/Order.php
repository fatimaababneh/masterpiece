<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillables = [
        'full_name',
        'phone_number',
        'address',
        'user_id',
        'city',
        'note',
        'total_price',
    ];
    use HasFactory;
}
