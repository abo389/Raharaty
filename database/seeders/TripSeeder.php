<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $trips = [
            [
                "image_link" => 'trip-1.png',
                "city" => 'اسطنبول',
                "day_num" => '5',
                "cost" => '1500'
            ],
            [
                "image_link" => 'trip-2.png',
                "city" => 'دبي',
                "day_num" => '3',
                "cost" => '2500'
            ],
            [
                "image_link" => 'trip-3.png',
                "city" => 'القاهرة',
                "day_num" => '3',
                "cost" => '1250'
            ],
            [
                "image_link" => 'trip-4.png',
                "city" => 'الرياض',
                "day_num" => '2',
                "cost" => '1500'
            ]
        ];

        foreach ($trips as $trip) {
            Trip::create($trip);
        }
    }
}
