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
                "avatar" => 'https://s3-alpha-sig.figma.com/img/22f7/a405/64edb53d6760f1857ebd73a2e94aa859?Expires=1735516800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=L2ADCyFzsHNCmoTtYL9sK~vbg6FpntXmz3XcMuND6XdJy9c1LD3bOIDYhSLWsf9ipCzOgMxQF1L8xqVhF354mm66SbJyVGBaJnXE7z~Nw6NcWkOcu-VYAAfrCPO8YAPBgS-6jFQs3eKwaQ8qk4iCMbCReP~sLqXE~Fw84l6Y87qR97Cas0brGveBrCnxCm~S5D~vadcKNOirLqm6ALCmOtutSSHJvUKcnVrBOxDdh0CO3BR-izIXTe-NTw9WN9-5NswPd5IJClex9ie0hrXobQHcC5AmhcoAq4-exmZLunjxvlmkcg4QjR7E1R6gOOsSzX0w-n3SdOFMU8~Og4G8IA__'
            ],
            [
                "name" => 'ماهر عبداللطيف',
                "stars" => '5',
                "msg" => 'تقدم شركة رحلاتي خدمات مناسبة جداً لرجال الأعمال، هذا ما ساعدني في رحلتي وجعلني اختصر جداً من مشاكل الحجوزات.',
                "avatar" => 'https://s3-alpha-sig.figma.com/img/9e44/55ee/63c4b3d5e73f88ec26182796cd516167?Expires=1735516800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=c8Q65KuBD0V9-nfOy5KHi5zHlwK~sqW5X34Ajcy2HmmqRpkPXQaKu7L45TK6QCZs~p2rWEYQJFZ1pEHdeOPlZMdn7wTAFSjcfJR7qQgbZf~wQDgJ6nDepLoojX-SGYKg44UTxfMHW7465~rI8gw6cdrjz4swACItGLB9jJDigwM7SAsSgqP00wuS7bK1vhVNhocIi3oUQTDVqtsAicTcHvQaAumrRefotgPRr2Gb1zHqDe3XGVEpbjWDxgUPV5a4nIdoeRtZleS110IDqT6bTd4tawxGLNj5x9kRfFMdn2OGbPFp2aEJ3ReIRAcZNXaG3Izq9AsboT~UFT699lqI2A__'
            ],
            [
                "name" => 'أسامة الابيض',
                "stars" => '5',
                "msg" => 'يمكنني القول إنني قمت بقطاء أفضل رحلة عائلة على الإطلاق، كان الفنادق رائعة وخطة السفر ممتازة جداً ومريحة.',
                "avatar" => 'https://s3-alpha-sig.figma.com/img/4fae/f026/6fe6ed9d17557110302bf5cce2d61182?Expires=1735516800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=T~EzzcsH4OUUzFU8lzSzs8GEalofCEEMtKENUO6eCdHl-9brS6QuMl2xvrNxl6g5cr7C5uP723tsZJadOqru1OTpOds2z6oaSdFMn817OBnQ96QF5aIrQnmusGnlxPFHsEN3zsAgSjS~N~nSby94Z4l2-sCW-JqDfwLaf~lZZA~HrSfo4J-i4h0D3pCYiSRobU350qaKN6KXzNJT7p1dV-Kjsq6P6-1t2JNTzL~qWlvpjsEUhDJKjux2QJBKcLbOyaSJxpDHTiw2aqQTY1TGC1CHKpuzjdcRHdpaCcL~iNSx89zLBNzJXEl~YD8HyudTOLWoyGf2mTAsbqiaCNUuCg__'
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
