<?php

namespace Database\Factories;

use App\Models\Plant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Plant>
 */
class PlantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'location' => $this->faker->address(),
            'online_since' => $this->faker->date(),
            'output' => $this->faker->randomFloat(2, 0, 1000),
            'energy_storage' => $this->faker->boolean(),
            'agripv' => $this->faker->boolean(),
            'parcels' => $this->faker->numberBetween(1, 100),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
