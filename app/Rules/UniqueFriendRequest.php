<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\FriendRequest; // Assuming your FriendRequest model is named FriendRequest

class UniqueFriendRequest implements Rule
{
    protected $senderId;
    protected $receiverId;

    public function __construct($senderId, $receiverId)
    {
        $this->senderId = $senderId;
        $this->receiverId = $receiverId;
    }

    public function passes($attribute, $value)
    {
        return !FriendRequest::where('sender_id', $this->senderId)
            ->where('receiver_id', $this->receiverId)
            ->exists();
    }

    public function message()
    {
        return __('messages.friend_request_exists'); // You can customize this message
    }
}
