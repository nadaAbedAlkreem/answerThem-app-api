<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notifications')->insert([
            [
                'sender_id' => 1,
                'receiver_id' => 2,
                'type' => 'friend_request',
                'data' => json_encode(['message' => 'You have a new friend request']),
                'read_at' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sender_id' => 2,
                'receiver_id' => 3,
                'type' => 'invitations_request',
                'data' => json_encode(['message' => 'You have been invited to an event']),
                'read_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sender_id' => 3,
                'receiver_id' => 1,
                'type' => 'other',
                'data' => json_encode(['message' => 'This is a custom notification']),
                'read_at' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
