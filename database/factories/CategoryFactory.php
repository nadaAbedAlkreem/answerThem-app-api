<?php

namespace Database\Factories;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected static $counter = 0; // Counter to track the current index
    protected static $toggle = true; // Toggle to alternate values

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $arabicFaker = \Faker\Factory::create('ar_SA');
        $famousGamingValue = self::$counter % 2; // 0 for even, 1 for odd
        self::$counter++; // Increment the counter
        $parentValue = self::$toggle ? 0 : rand(1, 10);
        self::$toggle = !self::$toggle;
        return [
            'name_ar' => $arabicFaker->unique()->word. rand(1, 10000),
            'name_en' =>$this->faker->unique()->word. rand(1, 10000),
            'description_ar' => $arabicFaker->sentence,
            'description_en' => $this->faker->sentence,
            'rating' => $this->faker->randomFloat(2, 0, 5),
            'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Basketball.png',
            'parent_id' =>$parentValue ,
            'famous_gaming' => $famousGamingValue,
        ];
    }
}
