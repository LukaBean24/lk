<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Order;
use App\Models\Price;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function fuel_view() : View
    {
        return view('fuel-order',[
            'prices' => Price::latest()->first(),
            'discounts' => Discount::latest()->first(),
        ]);
    }
    public function card_view() : View
    {
        return view('card-order');
    }
    public function fuel_store()  :RedirectResponse
    {
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
        return redirect('/cabinet')->with('success', __('order_made'));
    }

    public function card_store() : RedirectResponse
    {
        $attributes = request()->validate([
            'card' => 'required',
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['order_info'] = "შეკვეთა მუშავდება";
        $attributes['order_type'] = "ბარათი";
        $attributes['sum'] = $attributes['card'] * 5;
        if (request()->file('file')) {
            $attributes['personalization'] = request()->file('file')->store('personalization');
        }
        Order::create($attributes);

        return redirect('/cabinet')->with('success', __('order_made'));
    }

    public function block($id) {
        $order = Order::find($id);
        $order->order_info = "შეკვეთა გაუქმებულია";
        $order->save();


        return redirect('/cabinet')->with('success', __("order_canceled"));


    }

    public function uploadPaycheck(Order $order) {
        request()->validate([
            'file' => 'required|mimes:pdf'
        ]);

        $order->update([
            "paycheck" => request()->file('file')->store('paychecks')
        ]);
        $order->save();
        return redirect('/cabinet')->with('success', "Paycheck Has been updated");

    }
}
