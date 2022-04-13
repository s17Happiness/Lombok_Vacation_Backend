<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Property;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unit>
 */
class UnitFactory extends Factory
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
            'property_id'=> Property::all()->random()->id,
            'unit_name' => $this->faker->word,
            'unit_picture'=> 'https://picsum.photos/300/300?nocache='.microtime(),
            'unit_description' => $this->faker->sentence,
            'total_unit'=> rand(1,20),
            'price' => $this->faker->numberBetween($min = 200000, $max = 1000000),
            'created_at' => Carbon::now()->addHour()
        ];
    }
}
