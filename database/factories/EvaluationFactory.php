<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluation>
 */
class EvaluationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Generates a user and assigns its ID
            'rating' => $this->faker->numberBetween(1, 5), // Random rating between 1 and 5
            'descriptive_evaluation' =>$this->faker->randomElement(['high', 'medium', 'low']), // Random sentence
        ];
    }
}
