<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillables = [
        'customer_name',
        'customer_num',
        'address',
        'city',
        'note',
        'total_price',
    ];
    use HasFactory;
}
