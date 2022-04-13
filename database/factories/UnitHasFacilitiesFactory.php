<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Unit;
use App\Models\UnitFacilities;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UnitHasFacilities>
 */
class UnitHasFacilitiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'unit_id' => Unit::all()->random()->id,
            'facility_id' => UnitFacilities::all()->random()->id,
            'created_at' => Carbon::now()->addHour()
        ];
    }
}
