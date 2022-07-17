<?php

namespace App\Http\Controllers;

use App\Models\Change;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function update() {
        if (explode(",",request('change'))[0] == 'delete') {
            $order = Order::find(explode(",",request('change'))[1]);
            $order->delete();

            return redirect('/admin')->with('success', __('delete_order'));
        }
        if (explode(",",request('change'))[0] == 'fullfill') {
            $order = Order::find(explode(",",request('change'))[1]);
            if ($order->order_type == 'საწვავი') {
                $order->order_info = 'საწვავი ასახულია';
                $order->save();
                Change::create([
                    'user_id' => auth()->user()->id,
                    'order_id' => $order->id
                ]);
            } else {
                $order->order_info = 'ბარათი დამზადებულია';
                $order->save();
                Change::create([
                    'user_id' => auth()->user()->id,
                    'order_id' => $order->id
                ]);
            }

            return back()->with('success', __("status_changed"));

        }
        if (explode(",",request('change'))[0] == 'block') {
            $order = Order::find(explode(",",request('change'))[1]);
            $order->order_info = 'შეკვეთა გაუქმებულია';
            $order->save();
            Change::create([
                'user_id' => auth()->user()->id,
                'order_id' => $order->id
            ]);
            return back()->with('success', __('order_blocked'));
        }
    }
}
