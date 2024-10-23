<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FriendRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('friend_requests')->insert([
            [
                'sender_id' => 1, // Assuming user with ID 1 exists
                'receiver_id' => 2, // Assuming user with ID 2 exists
                'status' => 'pending',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sender_id' => 2,
                'receiver_id' => 3,
                'status' => 'accepted',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sender_id' => 3,
                'receiver_id' => 1,
                'status' => 'declined',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more friend request entries as needed
        ]);
    }
}
