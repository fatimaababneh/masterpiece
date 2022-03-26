<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard');
    }
    public function category(){
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }
    public function product(){
        $product = Product::all();
        return view('admin.product.index' , compact('product'));
    }
    public function user(){
        $user = User::all();
        return view('admin.user.index' , compact('user'));
    }
}
