<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Challenge;
use App\Models\TeamMember;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Challenge>
 */
class ChallengeFactory extends Factory
{

    protected $model = Challenge::class;

    public function definition()
    {

        return [
            'team_member1_id' => TeamMember::factory(5), // Assuming TeamMember has a factory
            'team_member2_id' => TeamMember::factory(5),
            'user1_id' => User::factory(5), // Assuming User has a factory
            'user2_id' => User::factory(5),
            'category_id' => Category::factory(5), // Assuming Category has a factory
            'number_of_questions' => $this->faker->numberBetween(5, 50),
            'time_per_question' => $this->faker->numberBetween(10, 60), // seconds
            'status' => $this->faker->randomElement(['ongoing', 'pending', 'end']),
        ];
    }
}
