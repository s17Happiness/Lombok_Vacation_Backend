<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\UnitFacilities;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitFacilitiesSeeders extends Seeder
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
                'facility_name' => "parking",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'facility_name' => "gym",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'facility_name' => "pool",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'facility_name' => "jacuzzi",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'facility_name' => "spa",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'facility_name' => "waterheater",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'facility_name' => "ac",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'facility_name' => "shampoo",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'facility_name' => "soap",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'facility_name' => "hairdryer",
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'facility_name' => "handblower",
                'created_at' => Carbon::now()->addHour()
            ],
        ];
        DB::table('unit_facilities')->insert($data);
    }
}
