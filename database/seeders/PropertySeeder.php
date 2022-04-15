<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;
use Carbon\Carbon;
class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [
                'user_id' => 2,
                'property_name' => "Golden Palace Hotel",
                'area' => "mataram", // password
                'type' => "hotel",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 2,
                'property_name' => "Villa Katamaran",
                'area' => "lombok barat", // password
                'type' => "villa",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 2,
                'property_name' => "Lombok Astoria Cottage",
                'area' => "lombok timur", // password
                'type' => "cottage",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 2,
                'property_name' => "The Kayana Guest House",
                'area' => "lombok utara", // password
                'type' => "guest_house",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 6,
                'property_name' => "The Jayakarta Hotel",
                'area' => "mataram", // password
                'type' => "hotel",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 6,
                'property_name' => "Villa Kami",
                'area' => "lombok barat", // password
                'type' => "villa",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 6,
                'property_name' => "Aruna Cottage",
                'area' => "lombok timur", // password
                'type' => "cottage",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 6,
                'property_name' => "Svarga Guesthouse",
                'area' => "lombok utara", // password
                'type' => "guest_house",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 7,
                'property_name' => "Merumatta Senggigi Hotel",
                'area' => "mataram", // password
                'type' => "hotel",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 7,
                'property_name' => "Villa Grand Senggigi",
                'area' => "lombok barat", // password
                'type' => "villa",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 7,
                'property_name' => "Lombok Garden Cottage",
                'area' => "lombok timur", // password
                'type' => "cottage",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 7,
                'property_name' => "Living Lombok Guest House",
                'area' => "lombok utara", // password
                'type' => "guest_house",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 10,
                'property_name' => "Nusantara Hotel Sembalun",
                'area' => "mataram", // password
                'type' => "hotel",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 10,
                'property_name' => "Villa Montana Premier Senggigi",
                'area' => "lombok barat", // password
                'type' => "villa",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 10,
                'property_name' => "Origin Lombok Cottage",
                'area' => "lombok timur", // password
                'type' => "cottage",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 10,
                'property_name' => "Amarsvati Luxury Guest House",
                'area' => "lombok utara", // password
                'type' => "guest_house",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 11,
                'property_name' => "Jeeva Klui Hotel",
                'area' => "mataram", // password
                'type' => "hotel",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 11,
                'property_name' => "Villa Sheraton Senggigi",
                'area' => "lombok barat", // password
                'type' => "villa",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 11,
                'property_name' => "Illira Lite Praya Cottage",
                'area' => "lombok timur", // password
                'type' => "cottage",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 11,
                'property_name' => "Grand Royal Guest House",
                'area' => "lombok utara", // password
                'type' => "guest_house",
                'created_at' => Carbon::now()->addHour()
            ],
        ];

        Property::insert($data);
    }
}
