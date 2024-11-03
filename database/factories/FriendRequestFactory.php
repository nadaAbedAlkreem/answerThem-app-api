<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FriendRequest>
 */
class FriendRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['pending', 'accepted', 'declined']);

        return [
            'sender_id' => User::factory(5),
            'receiver_id' => User::factory(5),
            'status' => $status,
            'deleted_at' => $status === 'accepted' || $status === 'declined' ? now() : null, // Set deleted_at if accepted or declined

        ];
    }
}
