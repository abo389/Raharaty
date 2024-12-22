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
                "icon_link" => 'https://s3-alpha-sig.figma.com/img/91da/98ad/df87fbf9c1c51598faa214456f6d6234?Expires=1735516800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=ecBQ6Hd-6ln5QURGTls7fw6OtXVMlkPab2rcd~RtVNnpBgWl~Xdspua6I0Z86hxqwU-fl8VGKgM~IMkAyFBR9yBr7RNyRL0kRsgR1ZIy8GPFcSfgJ4XIZl99e~IGYjvv1nBlbUbNSmmE2jXstkqlq7UEve-bVW5bItIN~3jfvgFkq~lw~f08OgP4tp4gVattXGHr2L1wEsPg3Xw5nBw7Ql0AHVWFAgqKy7B4EXkv7qg0TAaiHN4J0QM3j2F8cCc~hWCrctD9OEPyhTk7Gr5QHnd4bRPqIM5F42CrT6lKt2Gs8s9GOLzwuOHSEiFSLyu6P-d6f6ljCN3lL0IEJOM8Sw__'
            ],
            [
                "title" => 'حجوزات فندقية',
                "description" => 'لا تقلق حول مكان إقامتك فنحن نهتم بكامل الحجوزات الخاصة بك',
                "icon_link" => 'https://s3-alpha-sig.figma.com/img/0568/1dda/8e63aa35cd2b6a9a4ceb3f13021dbd1c?Expires=1735516800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=VSEO5tP~n11W0q8A~SyuIx989FMJ8SUSAo06jiavSmP2pXssTcI-7m3Mr2e9JE-o5bWPzdCDgiwTWYetgr~Z~7LY-IiOSALfSPSRuFYy9AGpfdbrjLAi-O7HJi0~6T8Vj7Cfw9GvZTmFMd~NjBPEpBrpRij6DnozVCcoRYJN3s2Z8LfsrD~3mOPx-aYd07tUoF-lXVhFOUw9zH4iiHoYQrdGEoYIW4b8SBZPKVRLfX7l0Q3H6OGxaN8ArQMALrVmikd2FMBdw5ybXbA9Sy6xtgBkNOZHE0nwpQLq6V-GJBDzKELCVdJ3iEGIOIk4V~bqznmK1E~81eYTFFNzTxkfEQ__'
            ],
            [
                "title" => 'رحلات ميدانية',
                "description" => 'لن تكون إجازتك مملة معنا فهنا الكثير من الخطط والرحلات المختلفة',
                "icon_link" => 'https://s3-alpha-sig.figma.com/img/a982/a9d8/d8a506554803392278fdc3e112afff46?Expires=1735516800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=F0BOeL7ldKA40xCopnR3FfaaEHFnXA18xMc3nO6yIB8L1TJjRhWkJq2gfKzjH-uO5xO-s7OkBgER2r2sVmLFgPeYMXmBZqboA3RhD4B11zebviNP6gxpLJ5j7xo2spuUUMR3kGxMw6mSSxDThYVy1nOs5me6sKGD3Zxw8HmrHrRfB9jiOHdK66yN6nOQFqANWus38xxHeeEfUG8ikaZLLx5PzkMY6O4TRKOEIglxRuy17dMEAUAuaK4rOisqMySUt~egt-FlgCG3mHsn4W895scPb22-WzrfqStj8TuHlMAeoMAzhbMzUjMLk~3y044Tcz1VDSJGwiAjxSQbwmIpZg__'
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
