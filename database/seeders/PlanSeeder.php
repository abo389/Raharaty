<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                "name" => 'خطة الاقتصادية',
                "price" => '260',
                "description" => 'نقدم لك امكانية زيارة بلدان العالم بأقل التكاليف الممكنة وبأفضل الخدمات',
                "features" => "['بطاقات سفر في الدرجة الاقتصادية','حجز بفندق ثلاث نجوم','وجبات إفطار يومي']"
            ],
            [
                "name" => 'خطة عائلية',
                "price" => '520',
                "description" => 'هذة خطوة مناسبة جدا إذا كنت ترغب في قضاء إجازتك مع العائلة',
                "features" => "['بطاقات سفر في الدرجة الاولى','حجز بفندق أربع نجوم','رحلات ميدانية بشكل يومي']",
            ],
            [
                "name" => 'خطة رجال الاعمال',
                "price" => '850',
                "description" => 'كونك شخص ذو ذوق خاص ستكون هذة الخطة هي ما يناسبك تماما',
                "features" => "['بطاقات سفر بدرجة رجال الأعمال','حجز بفندق خمس نجوم','متابعة خاصة لإحتياجاتك']",
            ],
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
