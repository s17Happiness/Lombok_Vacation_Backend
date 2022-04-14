<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;
use Carbon\Carbon;
class UnitSeeder extends Seeder
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
                'property_id' => 1,
                'unit_name' => "Luxury",
                'unit_picture' => 'https://picsum.photos/300/300?nocache='. microtime(),
                'unit_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", 
                'total_unit' => 2,
                'price' => 200000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 2,
                'unit_name' => "Premium",
                'unit_picture' => 'https://picsum.photos/300/300?nocache='. microtime(),
                'unit_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                'total_unit' => 3,
                'price' => 300000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 3,
                'unit_name' => "Standar",
                'unit_picture' => 'https://picsum.photos/300/300?nocache='. microtime(),
                'unit_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                'total_unit' => 4,
                'price' => 400000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 4,
                'unit_name' => "Large",
                'unit_picture' => 'https://picsum.photos/300/300?nocache='. microtime(),
                'unit_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                'total_unit' => 1,
                'price' => 500000,
                'created_at' => Carbon::now()->addHour()
            ],

        ];

        Unit::insert($data);
    }
}
