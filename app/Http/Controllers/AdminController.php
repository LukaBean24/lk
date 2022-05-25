<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Price;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
            // $sum = [
            //     'sum_liter' => Order::where('customer_name', 'like', '%' . request('search') . '%')
            //                         ->orWhere('customer_last', 'like', '%' . request('search') . '%')
            //                         ->orWhere('customer_id', 'like', '%' . request('search') . '%')
            //                         ->sum('sum_liter'),
            //     'sum_invoice' => Order::where('customer_name', 'like', '%' . request('search') . '%')
            //                             ->orWhere('customer_last', 'like', '%' . request('search') . '%')
            //                             ->orWhere('customer_id', 'like', '%' . request('search') . '%')
            //                             ->orWhere('company_name', 'like', '%' . request('search') . '%')->count(),
            //     'sum_pending' => Order::where('customer_name', 'like', '%' . request('search') . '%')
            //                             ->orWhere('customer_last', 'like', '%' . request('search') . '%')
            //                             ->orWhere('customer_id', 'like', '%' . request('search') . '%')
            //                             ->orWhere('company_name', 'like', '%' . request('search') . '%')
            //                             ->where('order_info', 'შეკვეთა მუშავდება')->count(),
            //     'sum_made' => Order::where('customer_name', 'like', '%' . request('search') . '%')
            //                         ->orWhere('customer_last', 'like', '%' . request('search') . '%')
            //                         ->orWhere('customer_id', 'like', '%' . request('search') . '%')
            //                         ->orWhere('company_name', 'like', '%' . request('search') . '%')
            //                         ->where('order_info', 'საწვავი ასახულია')
            //                         ->orWhere('order_info', 'ბარათი დამზადებულია')->count(),
            //     'sum_blocked' => Order::where('customer_name', 'like', '%' . request('search') . '%')
            //                             ->orWhere('customer_last', 'like', '%' . request('search') . '%')
            //                             ->orWhere('customer_id', 'like', '%' . request('search') . '%')
            //                             ->orWhere('company_name', 'like', '%' . request('search') . '%')
            //                             ->where('order_info', 'შეკვეთა გაუქმებულია')->count(),
            //     'sum_money' => Order::where('customer_name', 'like', '%' . request('search') . '%')
            //                             ->orWhere('customer_last', 'like', '%' . request('search') . '%')
            //                             ->orWhere('customer_id', 'like', '%' . request('search') . '%')
            //                             ->orWhere('company_name', 'like', '%' . request('search') . '%')
            //                             ->where('order_info', 'საწვავი ასახულია')
            //                             ->orWhere('order_info', 'ბარათი დამზადებულია')->sum('sum')
            // ];
        } elseif(request('start_date') && request("end_date")) {
            $orders = Order::whereBetween('created_at', [request('start_date'), request('end_date')])->get();
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
            $orders = Order::whereDate('created_at', request('start_date'))->get();
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
            $orders = Order::whereDate('created_at', Carbon::today())->get();
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
        ]);
    }
}
