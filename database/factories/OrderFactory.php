<?php

namespace Database\Factories;

use App\Models\Price;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $lt = [200,0,0,0,450,234,0,0,0,51,60];
        $super_ecto_100_price = Price::orderByDesc('id')->first()->super_ecto_100;
        $super_ecto_price = Price::orderByDesc('id')->first()->super_ecto;
        $premium_price = Price::orderByDesc('id')->first()->premium;
        $regular_price = Price::orderByDesc('id')->first()->regular;
        $diesel_price = Price::orderByDesc('id')->first()->diesel;
        $super_ecto_100 = $lt[array_rand($lt)];
        $super_ecto = $lt[array_rand($lt)];
        $premium = $lt[array_rand($lt)];
        $regular = $lt[array_rand($lt)];
        $diesel = $lt[array_rand($lt)];
        $sum = $super_ecto_100_price * $super_ecto_100 +  $super_ecto *  $super_ecto_price + $premium * $premium_price + $regular * $regular_price + $diesel * $diesel_price;
        $sum_liter = $super_ecto_100 + $super_ecto + $premium + $regular + $diesel;

        return [
            'user_id' => 1,
            "super_ecto_100" => $super_ecto_100,
            "super_ecto" => $super_ecto,
            "premium" => $premium,
            "regular" => $regular,
            "diesel" => $diesel,
            "super_ecto_100_price" => $super_ecto_100_price,
            "super_ecto_price" => $super_ecto_price,
            "premium_price" => $premium_price,
            "regular_price" => $regular_price,
            "diesel_price" => $diesel_price,
            'sum' => $sum,
            'sum_liter' => $sum_liter,
            'order_info' => "შეკვეთა მუშავდება",
            'order_type' => "საწვავი",
        ];
    }
}
