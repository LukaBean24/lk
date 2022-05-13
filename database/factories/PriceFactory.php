<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'super_ecto_100' => "4.25",
            'super_ecto' => "4.10",
            'premium' => "3.97",
            'regular' => "3.77",
            'diesel' => "4.35",
        ];
    }
}
