<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->FirstName(),
            'surname' => $this->faker->unique()->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'group_id' => $this->faker->numberBetween(1,6),

        ];
    }
}
