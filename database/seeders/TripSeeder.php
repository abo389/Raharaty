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
                "image_link" => 'https://s3-alpha-sig.figma.com/img/47f1/c27c/f937bd2041f53c6be27a0ab05d6e5fb0?Expires=1736726400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=IWV4~cUlY832wT1f1ZzMyBmxGaPypdxHXKD1EArZ6aVonMz56UNA4MmNuVcyCzJkdFdfBqFWi19WJxUTL3rWVCM1NzUlJdhqI5lh1fJzpaHhV68Dr6VXvH05kQbprnVBEe9OZVWQ3PThjNV-qYVRqDdTZGznJeqPA3U2EbrqUJ8BVUquMB5Wris7k6veXSCL1-73BvPgOOwj35yO-AXtiQutptbcHBCVn9xxQULv59RY9xpmrkt8JH-E-0GY4jQ8DenOzNJkz41pIO7n~DQp3Ixgo5fT5h4o3Hg8Ya9uESbGh6tChOGyPSVBUhenWodXDZEMt6exRrfLnEH-dAjoZg__',
                "city" => 'اسطنبول',
                "day_num" => '5',
                "cost" => '1500'
            ],
            [
                "image_link" => 'https://s3-alpha-sig.figma.com/img/55bd/f8a5/4105c492b21062d6d9b6a423915b2087?Expires=1736726400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=jY2CL-u6OPihPcvCBg2gVhoXh85h5o-NDEkgqguZQNozUC12vYRNRS1hEJfMBlpFu~G6-XVF83~SI3FgQEYZamgSjRIB7CJ~Fo1e0yCtoTWo5spj~s~oa2i7W3kXWUii1E~m8lX6EVzvONMmYWMSao4-d-dqDsHbLFcLRB~RFE~ongXXpEsN7p802Jx0QxFpPQ8hrwP6BC4iNOU3jXHs~xl9YoaKmosz-8361VtClabDtUSgq~AOIw5om1CZp8Fh1Kku7jUQXuqyxBRBlFJLo11B2lvQ02~7ejLB2L3hXVQsFMSfgXMCqs~sWifq0vNtRnK7PeT8nSEkqln~cAjmvQ__',
                "city" => 'دبي',
                "day_num" => '3',
                "cost" => '2500'
            ],
            [
                "image_link" => 'https://s3-alpha-sig.figma.com/img/a283/6142/931b2a24ce57a874391912e9b764dd25?Expires=1736726400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=dB4ZrIw0P3OWTXVKYmdXMbulvN~hbWM70yhcFlmfb6NPS3K~WG6RrQfPHuAOk-U8Ku7zqmVkSczu2dIrfcPxXIP53zwG7MPh4k125MGRLuYFUE4jzSLj6wx-gN~f7vvct2ijhWsqeORf3oJsY-4WsDyP~Ol3mmQh442hsLjyEiFFOmLzfeOMqT9NeswkMaaOfSBLpf5UQp-YrrC0sMD22QT-~juUdjrWMyabqqim0IN3B0r5d9oA5HnPwbMGzJM3oTovQpBqh-MEqFLCm8Y-PhmGdKiekfvtsWyrlBn4jrxqSe1N2e4LldO1cSomlBqb9UxwIR~r4ioUMrzynFVmYQ__',
                "city" => 'القاهرة',
                "day_num" => '3',
                "cost" => '1250'
            ],
            [
                "image_link" => 'https://s3-alpha-sig.figma.com/img/9f21/d0a9/e2bcf92d6fa9f81b6be74d93d652acf8?Expires=1736726400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=BnK0PRoxtCiGBhjG6ADhoefnrsw0kbMcEqLD6vR92lAAtICNihtHy~oPN5UhumAjNDzs74YcFnpDr1exX9~ga3uvIRiu0bkyBZow9300bHmNuDrkXDfKO-2Clao5Rcmpvt5xS4c-ZIv00U6YtvRfcxAFDsxDjhxNrBvCYyH3RCWjGRsiIjntY58u1xIAg4zDcau10NGnbRdYgCektVzEkyM2OILor7mO6vH9614Is~Te-bJQmzcBsPWUCYi75Z5dq3LPClNq8RQZCnhJQ-RBIotIUCCwr~JAeGNN1MQgq3yaWpmZsV-FVBEm1jAuKXlvT~5RxYvkVAYZlweVLLPhgA__',
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
