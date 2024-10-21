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














}
