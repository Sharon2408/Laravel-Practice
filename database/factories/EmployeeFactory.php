<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'department' => fake()->unique()->safeEmail(),
            'city' => fake()->city(),
            'contact_no' => fake()->phoneNumber(),
            'company_id' => rand(1,3),
            'active' => rand(0,1),
            'created_at' => now(),
            'updated_at' => fake()->time(),
        ];
    }
}
