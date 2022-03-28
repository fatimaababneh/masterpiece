<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        $order = new Order();
        $order->total_price = $request['total_price'];
        $order->phone_number = $request['phone_number'];
        $order->note = $request['note'];
        $order->city = $request['city'];
        $order->address = $request['address'];
        $order->user_id = $request['user_id'];
        $order->full_name = $request['full_name'];
        $order->save();
        $cart = $request['cart'];
        $newestOrder = $order->id;
        foreach ($cart as $item) {
            $orderitem = new OrderItem();
                $orderitem->order_id = $newestOrder;
                $orderitem->product_id=$item["id"];
                $orderitem->quantity=$item["quantity"];
                $orderitem->price=$item["price"];
            $orderitem->save();
          }

        return "order added succesfully";
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
    
    }

    public function register(Request $request)
    {

    }
    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}