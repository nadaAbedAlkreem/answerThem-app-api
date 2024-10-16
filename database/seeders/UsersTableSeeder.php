<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'john_doe',
                'full_name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '+123456789',
                'image' => 'john.jpg',
                'country' => 'US',
                'lang' => 'en',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), // Ensure password is hashed
                'provider' => 'local',
                'provider_id' => Str::random(10),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ahmed_saeed',
                'full_name' => 'Ahmed Saeed',
                'email' => 'ahmed@example.com',
                'phone' => '+987654321',
                'image' => 'ahmed.jpg',
                'country' => 'EG',
                'lang' => 'ar',
                'email_verified_at' => now(),
                'password' => Hash::make('password456'),
                'provider' => 'local',
                'provider_id' => Str::random(10),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
