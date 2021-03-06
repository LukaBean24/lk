<?php

namespace Database\Seeders;

use App\Models\Active;
use App\Models\Discount;
use App\Models\Notification;
use App\Models\Order;
use App\Models\Post;
use App\Models\Price;
use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Price::factory()->create();
        User::factory()->create();
        Discount::factory()->create();
        Post::factory(4)->create();
        Vacancy::factory(2)->create();
        Notification::factory(1)->create();
        Order::factory(15)->create();
        Active::factory()->create();
    }
}
