<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'computer_id' => $this->faker->unique()->regexify('PC-[0-9]{4}'),
            'bueronummer' => $this->faker->numberBetween(100, 999) . $this->faker->randomLetter(),
        ];
    }
}
