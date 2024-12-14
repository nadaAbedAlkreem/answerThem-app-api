<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected $model = User::class;

    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->userName(),
            'full_name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail() . rand(1, 10000),
            'phone' => $this->faker->unique()->phoneNumber().rand(1, 10000),
            'image' => "https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Basketball.png",
            'country' => $this->faker->country(),
            'lang' => $this->faker->randomElement(['en', 'ar']),
            'email_verified_at' => now(),
            'password' => bcrypt(123456789), // change as necessary
            'provider' => null,
            'provider_id' => null,
            'fcm_token' => Str::random(20),
            'created_at' => $this->faker->dateTimeBetween('-3 months', 'now'), // Custom timestamp

            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
