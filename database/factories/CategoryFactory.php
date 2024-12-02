<?php

namespace Database\Factories;
use App\Models\Category;
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

        // Decide the level and parent_id
        $level = self::$counter % 3 + 1; // Cycles through levels 1, 2, 3
        $parent_id = 0; // Default for top-level categories (level 1)

        // If not top-level, assign a valid parent_id
        if ($level > 1) {
            $parentLevel = $level - 1; // Parent should be one level above
            $parent_id = Category::where('level', $parentLevel)->inRandomOrder()->value('id') ?? 0;
        }

        self::$counter++; // Increment the counter for next call

        return [
            'name_ar' => $arabicFaker->unique()->word . rand(1, 10000),
            'name_en' => $this->faker->unique()->word . rand(1, 10000),
            'description_ar' => $arabicFaker->sentence,
            'description_en' => $this->faker->sentence,
            'rating' => $this->faker->randomFloat(2, 0, 5),
            'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Basketball.png',
            'parent_id' => $parent_id,
            'level' => $level,
            'famous_gaming' => self::$counter % 2, // Alternating 0 and 1
        ];
    }

}
