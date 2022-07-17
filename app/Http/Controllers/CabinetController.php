<?php

namespace App\Http\Controllers;

use App\Models\Active;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CabinetController extends Controller
{
    public function index() : View
    {
        return view('cabinet',
        [
            'orders' => User::find(auth()->id())->orders,
            'active' => Active::first()->orders_is_active
        ]
    );
    }
}
