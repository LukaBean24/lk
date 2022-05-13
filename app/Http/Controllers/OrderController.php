<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function fuel_store() {
        $attributes = request()->validate([
            'super_ecto_100' => 'required|integer',
            'super_ecto' => 'required|integer',
            'premium' => 'required|integer',
            'regular' => 'required|integer',
            'diesel' => 'required|integer',
            'sum' => 'required',
            'discount' => 'required',
            'super_ecto_100_price' => 'required',
            'super_ecto_price' => 'required',
            'premium_price' => 'required',
            'regular_price' => 'required',
            'diesel_price' => 'required',
            'sum_liter' => 'required'
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['order_info'] = "შეკვეთა მუშავდება";
        $attributes['order_type'] = "საწვავი";
        Order::create($attributes);
        return redirect('/cabinet')->with('success', "Order has been made successfully");
    }

    public function card_store() {
        $attributes = request()->validate([
            'card' => 'required'
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['order_info'] = "შეკვეთა მუშავდება";
        $attributes['order_type'] = "ბარათი";
        $attributes['sum'] = $attributes['card'] * 5;
        Order::create($attributes);

        return redirect('/cabinet')->with('success', "Order has been made successfully");
    }

    public function block($id) {
        $order = Order::find($id);
        $order->order_info = "შეკვეთა გაუქმებულია";
        $order->save();


        return redirect('/cabinet')->with('success', "Order has been blocked successfully");


    }
}
