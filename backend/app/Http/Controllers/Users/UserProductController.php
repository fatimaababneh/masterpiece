<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Image;

class UserProductController extends Controller
{
    protected function index(Request $request){
        $products = Product::all();
        $categories=Category::all();
        return response()->json(['products' => $products, 'categories' => $categories]);
    }
    protected function single(Request $request , $id){   
        $products = Product::find($id);
        $cat_id=$products['cat_id'];
        $categories=Category::find($cat_id);
        return response()->json(['products' => $products, 'categories' => $categories]);
    }
}