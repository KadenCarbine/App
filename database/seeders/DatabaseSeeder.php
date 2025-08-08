<?php

namespace Database\Seeders;

use App\Models\Fitness;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::factory(10)->create();

        Fitness::factory()->create([
            'weight' => 225.6
        ]);
        Fitness::factory(200)->create();
    }
}
