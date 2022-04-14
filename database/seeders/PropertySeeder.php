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
        //
        $data = [
            [
                'user_id' => 2,
                'property_name' => "Golden Palace",
                'area' => "mataram", // password
                'type' => "hotel",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 2,
                'property_name' => "Villa Kami",
                'area' => "lombok barat", // password
                'type' => "villa",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 2,
                'property_name' => "aruna",
                'area' => "lombok timur", // password
                'type' => "cottage",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'user_id' => 2,
                'property_name' => "svarga",
                'area' => "lombok utara", // password
                'type' => "guest_house",
                'created_at' => Carbon::now()->addHour()
            ],
        ];

        Property::insert($data);
    }
}
