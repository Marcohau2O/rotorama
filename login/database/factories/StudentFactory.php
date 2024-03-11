<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_student' => $this->faker->name(),
            'lastname_student' => $this->faker->lastName(),
            'id_student' => $this->faker->randomNumber(4),
            'birthday' => $this->faker->date(),
            'comments' => $this->faker->sentence(40)
        ];
    }
}
