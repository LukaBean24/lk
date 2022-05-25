<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
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
                'ge' => "ქართულად" . $this->faker->sentence(8)
            ],
            'slug' => [
                "en" => $this->faker->sentence(4),
                "ge" => "ქართულად" . $this->faker->sentence(8)
            ],
            'body' => [
                "en" => $this->faker->paragraph(50),
                "ge" => "ქართულად" . $this->faker->paragraph(50)
            ],
            "link" => str_replace(" ", "-",$this->faker->sentence(8)),
            'thumbnail' => 'thumbnails/oXgBpIT10ztx0ptwi91uPrcmp3NB6r1ygBFNdXhT.jpg'
        ];
    }
}
