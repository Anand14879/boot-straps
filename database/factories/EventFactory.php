<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
            //
            return [
                'location' => $this->faker->address,
                'time' => $this->faker->dateTimeBetween('now', '+7 days'),
                'eventName' => $this->faker->sentence(3),
                'eventCost' => $this->faker->randomFloat(2, 10, 1000),
                // Add more fields as needed
            ];
        
    }
}
