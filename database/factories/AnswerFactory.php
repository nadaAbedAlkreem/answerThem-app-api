<?php

namespace Database\Factories;

use App\Models\Question;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $arabicFaker = FakerFactory::create('ar_SA');
        $englishFaker = $this->faker; // defaults to en_US
        return [
            'question_id' => Question::factory(5),
            'answer_text_ar' => $arabicFaker->sentence,
            'answer_text_en' => $this->faker->sentence,
            'is_correct' => false, // 20% chance of being correct
        ];
    }
}
