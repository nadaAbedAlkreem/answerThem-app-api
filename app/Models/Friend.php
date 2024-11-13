<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Friend extends Model
{
    use HasFactory  , SoftDeletes;

    protected $fillable = [
        'user_id',
        'friend_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the friend of the user.
     */
    public function friend()
    {
        return $this->belongsTo(User::class, 'friend_id');
    }
    public static function getFriends($userId)
    {
        return Friend::where('user_id', $userId)
            ->orWhere('friend_id', $userId)
            ->with(['user', 'friend'])
            ->get()
            ->map(function ($friendship) use ($userId) {
                 return $friendship->user_id == $userId ? $friendship->friend : $friendship->user;
            })
            ->unique('id')
            ->values();
    }


    public static function getFriendsByLimited($userId, $search = '', $limit = 5)
    {
        $query = Friend::where(function ($q) use ($userId) {
            $q->where('user_id', $userId)
                ->orWhere('friend_id', $userId);
        })
            ->with(['user', 'friend']); // eager load user and friend relationships

        // Apply search functionality if provided
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->whereHas('user', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                })
                    ->orWhereHas('friend', function ($q) use ($search) {
                        $q->where('name', 'like', '%' . $search . '%');
                    });
            });
        } else {
            // Apply `is_online = 1` filter for both `user` and `friend`
            $query->whereHas('user', function ($q) {
                $q->where('is_online', 1);
            })
                ->orWhereHas('friend', function ($q) {
                    $q->where('is_online', 1);
                });
        }

         return $query->limit($limit)->get()->map(function ($friendship) use ($userId) {
             return $friendship->user_id == $userId ? $friendship->friend : $friendship->user;
        })
            ->unique('id')
            ->values();
    }










}
