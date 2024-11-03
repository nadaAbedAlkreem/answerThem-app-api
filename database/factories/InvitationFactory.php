<?php

namespace Database\Factories;

use App\Models\Challenge;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invitation>
 */
class InvitationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'sender_id' => User::factory(5),
            'receiver_id' => User::factory(5),
            'challenge_id' => Challenge::factory(5),
            'status' => $this->faker->randomElement(['pending', 'accepted', 'declined']),
        ];
    }
}
