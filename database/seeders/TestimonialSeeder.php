<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                "name" => 'محمد الأحمد',
                "stars" => '5',
                "msg" => 'كانت تجربة مميزة مع خدمات رائعة قضيت أفضل إجازة لي من فترة طويلة, انصح بالتعامل مع شركة رحلاتي بدون تردد.',
                "avatar" => 'avatar-1.png'
            ],
            [
                "name" => 'ماهر عبداللطيف',
                "stars" => '5',
                "msg" => 'تقدم شركة رحلاتي خدمات مناسبة جداً لرجال الأعمال، هذا ما ساعدني في رحلتي وجعلني اختصر جداً من مشاكل الحجوزات.',
                "avatar" => 'avatar-2.png'
            ],
            [
                "name" => 'أسامة الابيض',
                "stars" => '5',
                "msg" => 'يمكنني القول إنني قمت بقطاء أفضل رحلة عائلة على الإطلاق، كان الفنادق رائعة وخطة السفر ممتازة جداً ومريحة.',
                "avatar" => 'avatar-3.png'
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
