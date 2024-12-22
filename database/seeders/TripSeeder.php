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
                "image_link" => 'https://s3-alpha-sig.figma.com/img/47f1/c27c/f937bd2041f53c6be27a0ab05d6e5fb0?Expires=1735516800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=INgSoKx5561-jr90C0ivhjr28zM4dpj3zLNzT11vfEIWD7STpdisOxULu5sZmIP1ZisBSK9VLotmDgBK6w~UD4w69s3erEXljyKJ7Ju8hBwN1xQS7Ih8YGSz48i5Da4-dVMTkVbsRCHMSGiATt3iJE-kABXWNiX3j1oTT62m8rM2gJiVkSCUyKaBe3-Uidj2NGNeRl3YzzxDvmIsNULT~vjKZe0l-k1mU2ltaa-uMcjkIuDSAv98NyqoypyA2umAFSQF78TIKXnGPy69aPcIgtv1yb~SqcYUpE8Oqvp0zsbqhezUXpDjAvpr3-kAzjteq3JbErtwDzkl0Kgk0KuSGg__',
                "city" => 'اسطنبول',
                "day_num" => '5',
                "cost" => '1500'
            ],
            [
                "image_link" => 'https://s3-alpha-sig.figma.com/img/55bd/f8a5/4105c492b21062d6d9b6a423915b2087?Expires=1735516800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=FKzNmiJLfDXwAeMUZnksT3Lf~tyb4oAIZ19-lP5xqzJnNOKZ3ns955~DiW~lzeTHrzzgwc6TKV1noOI7XpIZodwwrtBuaCmydoiak4eMULluZcmni4SJ7P9NINOyfit8oTm6q6E7qvysr-TxZR3tufz5ekxbuRd95dDtsjxmlPRxpcQaLaKvWFM1SnWxZtVpBHlWMDxBI9CSbTWyF-30hKecKo0vsKHxACUuTtL79rJ~RqNXPArEX40KXG-pNGvB2wz0N4rBWiu55UuV8IrzCHlbJmqXl50FfKyIK1loP0HTQbSg7DcjLQJLvJ4Ub6Ucbd1YtRQJZ8IVx~U503PoXA__',
                "city" => 'دبي',
                "day_num" => '3',
                "cost" => '2500'
            ],
            [
                "image_link" => 'https://s3-alpha-sig.figma.com/img/a283/6142/931b2a24ce57a874391912e9b764dd25?Expires=1735516800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=WzYPvBsZdSTXGa~vaL7IAEnGsP7pxlPLqRWht9jmbIADNeeSf2KaY9nGXDMxK0qLZdyhx3F2WW6OV~9h7JJ8px0reJ3J~jbJ7bagCg9acEQo-sWtQvzI8AIR-DPLQ2rOGUjKePo2eQ2fFyGMPlZxUb2kIwFeb4ka7NcFAJoGFEkg3ef85gJp5olrTGsjaLzbN48bXAj3GUkANFM4BzAwnvHp3nFeeaGUdsomyyu4W6MA7eeyxpgiPiz3dngDOcrLm~16ycmBTJ~LjkV5uxqqP5W6WbuUk0GKl9mz-Jx7qy0bEt0EV3EOZ~tzY7PqfivMyxxWGwUr768GarcYrAi6CA__',
                "city" => 'القاهرة',
                "day_num" => '3',
                "cost" => '1250'
            ],
            [
                "image_link" => 'https://s3-alpha-sig.figma.com/img/9f21/d0a9/e2bcf92d6fa9f81b6be74d93d652acf8?Expires=1735516800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=je82dmCdSvKRHtz9m3lfS~5PUacx7dMdcnPNDF3U970TgYZhXMd4Jd3ldvLa5Pea~m6D9tEdHBSMhJttd7-wR4HqIg8Du4-PYQJLOiRl8oAzzACb9fbwlpSOrAsTbVz4YIZ874yB20MASUtkKc3TCRcZBKTB0MdXlG62fmlTuDQ3Ei3h7RbSqL2mHzq775xiSeg3n6tb21iART2MFbWrcI5GfYz2avTuZjk0~F9DG64uKInr~Df3Z4yQ5b0F8qk96aUuqb2AfpAV21S4-VkgQsFp4nuk6tAMbHgbNDxn08P0E92rspaYqvjye6VsJE0SIviQIgnd07w0AWrN-ci26g__',
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
