<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('challenges')->insert([
            [
                'team_member1_id' => 1, // Adjust IDs as needed
                'team_member2_id' => 1,
                'user1_id' => null,
                'user2_id' => null,
                'category_id' => 2, // Make sure this ID corresponds to an existing category
                'number_of_questions' => 25,
                'time_per_question' => 30,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more challenges as needed
        ]);
    }
}
