<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TaskFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'long_description' => $this->faker->text(500),
            'is_completed' => $this->faker->boolean,
        ];
    }
}
