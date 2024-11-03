<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
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
            'type' => $this->faker->randomElement(['friend_request', 'invitations_request', 'other']),
            'data' => json_encode(['message' => $this->faker->sentence]),
            'read_at' => $this->faker->optional()->dateTime(),
        ];
    }
}
