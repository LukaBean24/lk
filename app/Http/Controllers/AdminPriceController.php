<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Price;
use Illuminate\Http\Request;

class AdminPriceController extends Controller
{
    public function index() {
        return view('admin.prices.prices', [
            'price' => Price::latest()->first(),
            'prices' => Price::all(),
            'discounts' => Discount::all()->first()
        ]);
    }

    public function storePrices() {
        $attributes = request()->validate([
            'super_ecto_100' => 'required',
            'super_ecto' => 'required',
            'premium' => 'required',
            'regular' => 'required',
            'diesel' => 'required'
        ]);

        Price::create($attributes);

        return redirect('/admin/prices')->with('success', 'ფასები წარმატებით შეიცვალა');
    }

    public function storeDiscounts() {

        $attributes = request()->validate([
            'discount1' => 'required',
            'discount2' => 'required',
            'discount3' => 'required',
            'discount4' => 'required',
            'discount5' => 'required',
        ]);

        Discount::latest()->first()->update($attributes);

        return redirect('/admin/prices')->with('success', 'ფასდაკლებები წარმატებით შეიცვალა');

    }
}
