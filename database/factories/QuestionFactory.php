<?php

namespace Database\Factories;

use App\Models\Answer;
use App\Models\Category;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
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
            'category_id' => Category::factory(5),
            'question_ar_text' => $arabicFaker->sentence,
            'question_en_text' => $this->faker->sentence,
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function ($question) {
             $answers = Answer::factory()->for($question)->count(4)->create();
              $answers->random()->update(['is_correct' => true]);
        });
    }
}
