<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
 class Notification extends Model
{
    use HasFactory  , SoftDeletes;
      protected $fillable = [
         'type',
         'sender_id',
         'receiver_id',
         'data', // Assuming you want to keep this for additional JSON data
         'read_at',
     ];

     /**
      * Define the relationship with the User model for sender.
      */
     public function sender()
     {
         return $this->belongsTo(User::class, 'sender_id');
     }

     /**
      * Define the relationship with the User model for receiver.
      */
     public function receiver()
     {
         return $this->belongsTo(User::class, 'receiver_id');
     }

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
