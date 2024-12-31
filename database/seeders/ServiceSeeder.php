<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                "title" => 'دليل سياحي',
                "description" => 'نقدم لك خدمات الإرشاد السياحي لبناء خطط سفر مميزة',
                "icon_link" => 'icon-1.png'
            ],
            [
                "title" => 'حجوزات فندقية',
                "description" => 'لا تقلق حول مكان إقامتك فنحن نهتم بكامل الحجوزات الخاصة بك',
                "icon_link" => 'icon-2.png'
            ],
            [
                "title" => 'رحلات ميدانية',
                "description" => 'لن تكون إجازتك مملة معنا فهنا الكثير من الخطط والرحلات المختلفة',
                "icon_link" => 'icon-3.png'
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
