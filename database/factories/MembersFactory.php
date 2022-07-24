<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Members>
 */
class MembersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
    return [
        'name' => $this->faker->name,
        'email' => $this->faker->safeemail,
        'phone' => "+45 " . Str::random(8),
        'description' => $this->faker->text,
    ];
    }
}
