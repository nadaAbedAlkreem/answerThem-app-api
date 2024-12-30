<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            [
                'name' => 'Team 1',
                'user_id' => 1, // Creator of the team
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more teams as needed
        ]);
    }
}
