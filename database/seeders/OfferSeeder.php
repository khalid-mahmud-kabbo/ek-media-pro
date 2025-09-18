<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


DB::table('offers')->insert([
    'offer_id' => "1671789-lZ2kToJFfVYWxuk6",
    'name' => "Playfame",
    'image_url' => "https://main-p.agmcdn.com/j45HhneL.jpg",
    'click_url' => "https://notik.me/api-redirect?token=eyJpdiI6InZhL2FraUFLYnpaS1p6bGsxVm1FYlE9PSIsInZhbHVlIjoiVGUrYUNzMEJpY1FwMTdCOXlCYTNnaDc3aTVGWXpCSUFrcjhzSUtESUF5SGIzejVmTnhWaHlWeitWVUlsSjE5RU9EZlMzTTVZQXI3cnZsd3cwOURlZGJ6VnExdkd0cDVUc0hIRXA3WXRqYzBwUFEwK1B6VVMzNFBza1dhZWRIWGNoWHduaVdNN2xFRm9SSHNETHArUnBWM243cUU4QThlbzF4YlhVdTNtODlIZmhkcU82YmVxVjdQN29XMlI2RnJncU03Y2lYYm1Ya0x1VEZxeW1uSFRIM3Y0TzNlTURROFhVQkdrR21RTVZPbHIrZWV1K3RodWtvY0NoNDZPUDk2UjZKZWE4SzhxTzdib21SOEJVRVQ2d0E9PSIsIm1hYyI6IjYwNGZkNmZjZDRmODAwMGFjOWNmZDIyYWRmMWZiY2NiODE3ODBiMmY4NDU5MzI1YWE5NzYzNGQ2Yjk0NTI2YTYiLCJ0YWciOiIifQ==&user_id=yCumzO_1OPOEI2oom_[user_id]",
    'categories' => json_encode(["Offers", "CPE"]),
    'country_code' => json_encode(["US"]),
    'devices' => json_encode(["mobile", "tablet"]),
    'platforms' => json_encode(["all"]),
    'os' => json_encode(["ios"]),
    'android_os_version_min' => null,
    'android_os_version_max' => null,
    'ios_os_version_min' => null,
    'ios_os_version_max' => null,
    'description1' => "Must be installing Playfame app for the first time ...",
    'description2' => "Dive into the dazzling world of PlayFame, your one-stop app for free online slots games and electrifying social gaming experiences.",
    'description3' => "",
    'payout' => 25.2,
    'events' => json_encode([
        [
            "id" => "c07f45ba-a80d-4045-b0e4-9846209bc531",
            "name" => "Install",
            "payout" => 0,
            "params" => [
                "data" => [
                    ["param" => "user_id", "desc" => "Unique user identifier", "value" => "12345"],
                    ["param" => "device", "desc" => "User device type", "value" => "iPhone 14"]
                ]
            ]
        ],
        [
            "id" => "614159f0-b90d-41c3-8cc8-bce743514807",
            "name" => "Make a purchase between $4 and $9",
            "payout" => 0,
            "params" => [
                "data" => [
                    ["param" => "amount", "desc" => "Purchase amount", "value" => "5.99"],
                    ["param" => "currency", "desc" => "Currency type", "value" => "USD"]
                ]
            ]
        ]
    ])
]);

    }
}
