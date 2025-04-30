<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\courses>
 */
class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'instructorID' => $this->faker->numberBetween(1, 10),
            'departmentID' => $this->faker->numberBetween(1, 4),
            'credit' => $this->faker->numberBetween(1, 3),
        ];
    }
}
