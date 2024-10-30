<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTrackingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_tracking')->insert([
            [
                'user_id' => 1,
                'app_entries_count' => 10,
                'play_count' => 5,
                'win_count' => 3,
                'loss_count' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
