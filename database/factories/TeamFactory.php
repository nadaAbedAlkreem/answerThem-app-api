<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $arabicFaker = FakerFactory::create('ar_SA');
        $englishFaker = $this->faker;
        return [
            'name_ar' => $arabicFaker->word,
            'name_en' =>  $this->faker->word,
            'user_id' => User::factory(),
        ];
    }
}
