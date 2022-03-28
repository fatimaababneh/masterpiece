<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function check(Request $request)
    {
        $order = Order::create([
            'address'->$request->address,
            'full_name' => $request->full_name,
            'user_id' => $request->user_id,
            'phone_number' => $request->phone_number,
            'total_price' => $request->total_price,
            'city' => $request->city,
            'phone_number' => $request->user_id,
        ]);
        return "order added succesfully";
       
    }
}
