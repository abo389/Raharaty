<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Trip;
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
        $this->call([
            TripSeeder::class,
            ServiceSeeder::class,
            PlanSeeder::class,
            TestimonialSeeder::class,
        ]);
    }
}
