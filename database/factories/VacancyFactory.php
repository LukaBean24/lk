<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => [
                'en' => $this->faker->sentence(4),
                'ge' => 'ქართულად: ' . $this->faker->sentence(4)
            ],
            'slug' => [
                'en' => $this->faker-> paragraph(5),
                'ge' => 'ქართულად: ' . $this->faker->paragraph(5)
            ],
            'body' => [
                'en' => $this->faker-> paragraph(30),
                'ge' => 'ქართულად: ' . $this->faker->paragraph(30)
            ]
        ];
    }
}
