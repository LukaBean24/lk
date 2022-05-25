<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InvoiceController extends Controller
{
    public function index(Order $order) : View
    {
        return view('invoice',[
            'order' => $order,
            'prices' => Price::latest()->first(),
        ]);
    }
    public function index1(Order $order) : View
    {
        return view('invoice1',[
            'order' => $order,
            'prices' => Price::latest()->first(),
        ]);
    }
}
