<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
 class Notification extends Model
{
    use HasFactory;




    public static function updateDeviceToken(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'fcm_token' => 'required|string',
        ]);

        // Find the user associated with the token
        $user = User::find($request->user_id);
        if ($user) {
            $user->update(['fcm_token' => $request->fcm_token]);
            return ['message' => 'Device token updated successfully'];
        }

        return ['message' => 'User not found'];

    }
}
