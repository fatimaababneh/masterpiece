<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillables = [
        'name',
        'image',
        'brief',
        'description'
    ];
    public function Product(){
        return $this->hasMany('App/Product');
    }
    use HasFactory;
}
