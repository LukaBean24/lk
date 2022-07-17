<?php

namespace App\Http\Controllers;

use App\Models\Active;
use App\Models\Order;
use App\Models\Price;
use App\Models\User;
use Carbon\Carbon;
class AdminController extends Controller
{
    public function index() {
        $sum = [];
        if (request('search')) {
            $users = User::where('customer_name', 'like', '%' . request('search') . '%')
            ->orWhere('customer_last', 'like', '%' . request('search') . '%')
            ->orWhere('customer_id', 'like', '%' . request('search') . '%')
            ->orWhere('company_name', 'like', '%' . request('search') . '%')->get();

            $orders = [];
            foreach($users as $user) {
                foreach ($user->orders as $order) {
                    $orders[] = $order;
                }
            }
        } elseif(request('start_date') && request("end_date")) {
            $orders = Order::whereBetween('created_at', [request('start_date'), request('end_date')])->orderByDesc('created_at')->get();
            $sum = [
                'sum_liter' => Order::whereBetween('created_at', [request('start_date'), request('end_date')])->sum('sum_liter'),
                'sum_invoice' => Order::whereBetween('created_at', [request('start_date'), request('end_date')])->count(),
                'sum_pending' => Order::whereBetween('created_at', [request('start_date'), request('end_date')])->where('order_info', 'შეკვეთა მუშავდება')->count(),
                'sum_made' => Order::whereBetween('created_at', [request('start_date'), request('end_date')])->where('order_info', 'საწვავი ასახულია')->orWhere('order_info', 'ბარათი დამზადებულია')->count(),
                'sum_blocked' => Order::whereBetween('created_at', [request('start_date'), request('end_date')])->where('order_info', 'შეკვეთა გაუქმებულია')->count(),
                'sum_money' => Order::whereBetween('created_at', [request('start_date'), request('end_date')])->where('order_info', 'საწვავი ასახულია')->orWhere('order_info', 'ბარათი დამზადებულია')->sum('sum')
            ];
        }
        elseif(request('start_date') && !request("end_date")) {
            $orders = Order::whereDate('created_at', request('start_date'))->orderByDesc('created_at')->get();
            $sum = [
                'sum_liter' => Order::whereDate('created_at', request('start_date'))->sum('sum_liter'),
                'sum_invoice' => Order::whereDate('created_at', request('start_date'))->count(),
                'sum_pending' => Order::whereDate('created_at', request('start_date'))->where('order_info', 'შეკვეთა მუშავდება')->count(),
                'sum_made' => Order::whereDate('created_at', request('start_date'))->where('order_info', 'საწვავი ასახულია')->orWhere('order_info', 'ბარათი დამზადებულია')->count(),
                'sum_blocked' => Order::whereDate('created_at', request('start_date'))->where('order_info', 'შეკვეთა გაუქმებულია')->count(),
                'sum_money' => Order::whereDate('created_at', request('start_date'))->where('order_info', 'საწვავი ასახულია')->orWhere('order_info', 'ბარათი დამზადებულია')->sum('sum')
            ];
        }
        else {
            $orders = Order::whereDate('created_at', Carbon::today())->orderByDesc('created_at')->get();
            $sum = [
                'sum_liter' => Order::whereDate('created_at', Carbon::today())->sum('sum_liter'),
                'sum_invoice' => Order::whereDate('created_at', Carbon::today())->count(),
                'sum_pending' => Order::whereDate('created_at', Carbon::today())->where('order_info', 'შეკვეთა მუშავდება')->count(),
                'sum_made' => Order::whereDate('created_at', Carbon::today())->where('order_info', 'საწვავი ასახულია')->orWhere('order_info', 'ბარათი დამზადებულია')->count(),
                'sum_blocked' => Order::whereDate('created_at', Carbon::today())->where('order_info', 'შეკვეთა გაუქმებულია')->count(),
                'sum_money' => Order::whereDate('created_at', Carbon::today())->where('order_info', 'საწვავი ასახულია')->orWhere('order_info', 'ბარათი დამზადებულია')->sum('sum')
            ];
        }



        return view('admin.index', [
            'prices' => Price::latest()->first(),
            'orders' => $orders,
            'sum' => $sum,
            'active' => Active::first()->orders_is_active
        ]);
    }

    public function active()
    {
        $active = Active::first();
        $active->orders_is_active = 'true';
        $active->save();

        return redirect()->back()->with('success', 'შეკვეთები ჩართულია');
    }
    public function passive()
    {
        $active = Active::first();
        $active->orders_is_active = 'false';
        $active->save();

        return redirect()->back()->with('success', 'შეკვეთები გამორთულია');
    }
}
