<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'is_company' => 'false',
            "company_name" => null,
            'customer_name' => 'ლუკა',
            'customer_last' => 'კოჭლოშვილი',
            'customer_id' => '01027078510',
            'email' => 'lkochlo24@gmail.com',
            'phone' => '599683121',
            'is_admin' => 'true',
            "password" => '$2y$10$yrg50oWoq/JOUBbT6lZGGeYSnm1OLAeHrFYWOvCfupN33Ikkc0oAG',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
