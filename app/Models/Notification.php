<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
         $user = Auth::user();
         $request->validate([
              'fcm_token' => 'required|string',
         ]);

         if (!empty($user)) {
               $user->update(['fcm_token' => $request->fcm_token]);
              $user->save();
             return ['message' => 'UPDATE_FCM_TOKEN_SUCCESSFULLY'];
         }

         if(empty($user));
         {
             return ['message' => 'User not found'];

         }


     }


}
