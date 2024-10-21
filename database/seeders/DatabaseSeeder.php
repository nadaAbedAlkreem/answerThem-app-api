<?php

namespace Database\Seeders;

use App\Models\Friend;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FriendRequest;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Create users
        $user1 = User::create([
            'name' => 'User One',
            'full_name' => 'User One Full',
            'email' => 'userone@example.com',
            'password' => bcrypt('password'), // Ensure you hash passwords
            'image' => 'path/to/user1-image.jpg', // Provide a default image path

        ]);

        $user2 = User::create([
            'name' => 'User Two',
            'full_name' => 'User Two Full',
            'email' => 'usertwo@example.com',
            'password' => bcrypt('password'), // Ensure you hash passwords
            'image' => 'path/to/user1-image.jpg', // Provide a default image path

        ]);

        // Create a friend request
        $friendRequest = FriendRequest::create([
            'sender_id' => $user1->id,
            'receiver_id' => $user2->id,
            'status' => 'accepted', // Change to 'accepted' to auto-add as friends
        ]);

        // Automatically accept friend requests and add to friends list
        $this->acceptFriendRequests();
    }

    protected function acceptFriendRequests()
    {
        // Get all accepted friend requests
        $acceptedRequests = FriendRequest::where('status', 'accepted')->get();

        foreach ($acceptedRequests as $request) {
            // Check if friendship already exists
            if (!Friend::where('user_id', $request->sender_id)->where('friend_id', $request->receiver_id)->exists()) {
                // Create friendship for both users
                Friend::create([
                    'user_id' => $request->sender_id,
                    'friend_id' => $request->receiver_id,
                ]);
            }

            if (!Friend::where('user_id', $request->receiver_id)->where('friend_id', $request->sender_id)->exists()) {
                Friend::create([
                    'user_id' => $request->receiver_id,
                    'friend_id' => $request->sender_id,
                ]);
            }

            // Optionally delete the request after accepting
            $request->delete();
        }
    }
}
