<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'discount1' => '0.15',
            'discount2' => '0.17',
            'discount3' => '0.19',
            'discount4' => '0.21',
            'discount5' => '0.23',
        ];
    }
}
