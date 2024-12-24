<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invitation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['sender_id', 'receiver_id', 'challenge_id', 'status'];
    protected $dates = ['deleted_at'];

    // An invitation belongs to the sender
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // An invitation belongs to the receiver
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    // An invitation belongs to a challenge
    public function challenge()
    {
        return $this->belongsTo(Challenge::class);
    }
    public function scopeWithActiveChallenges($query)
    {
        return $query->whereHas('challenge', function ($q) {
            $q->where('status', 'ongoing')->orWhere('status', 'pending');
        });
    }
}
