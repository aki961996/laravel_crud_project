<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsersModel>
 */
class UsersModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('secret'), // Set a default dummy password
            'date_of_birth' => $this->faker->date(),
            'status' => $this->faker->randomElement([0, 1]), // Generates either 0 or 1
        ];
    }
}
