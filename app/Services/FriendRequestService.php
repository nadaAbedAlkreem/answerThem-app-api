<?php

namespace App\Services;


use App\Models\FriendRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class FriendRequestService
{
    public function acceptFriendRequest($requestId)
    {
        // Start a database transaction
        DB::beginTransaction();
        try {
            // Find the friend request
            $friendRequest = FriendRequest::findOrFail($requestId);

            // Check if the friend request is still pending
            if ($friendRequest->status !== 'pending') {
                return response()->json(['message' => 'Friend request already processed.'], 400);
            }

            // Update the friend request status
            $friendRequest->status = 'accepted';
            $friendRequest->save();

            // Add to friends list
            $friend = User::find($friendRequest->receiver_id); // Get the receiver (friend)
            if (!$friend->friends()->where('friend_id', $friendRequest->sender_id)->exists()) {
                $friend->friends()->attach($friendRequest->sender_id); // Add sender to receiver's friends
            }

            // Add the receiver as a friend to the sender as well
            $sender = User::find($friendRequest->sender_id);
            if (!$sender->friends()->where('friend_id', $friendRequest->receiver_id)->exists()) {
                $sender->friends()->attach($friendRequest->receiver_id);
            }

            // Delete the friend request
            $friendRequest->delete();

            // Commit the transaction
            DB::commit();

            return response()->json(['message' => 'Friend request accepted successfully.'], 200);
        } catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollBack();
            return response()->json(['message' => 'An error occurred.'], 500);
        }
    }

}
