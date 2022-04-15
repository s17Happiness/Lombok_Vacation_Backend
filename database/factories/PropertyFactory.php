<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
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
            'user_id'=> User::all()->random()->id,
            'property_name' => $this->faker->word,
            'area' => $this->faker->randomElement(['lombok barat','lombok timur','lombok utara', 'lombok tengah', 'gili', 'mataram']),
            'type' => $this->faker->randomElement(['villa','hotel','guest_house','cottage']),
            'created_at' => Carbon::now()->addHour()
        ];
    }
}
