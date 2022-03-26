<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillables = [
        'name',
        'image1',
        'image2',
        'image3',
        'image4',
        'brief',
        'stock',
        'price',
        'description',
    ];
    

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }
}
