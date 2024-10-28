<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Challenge extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'team1_id',
        'team2_id',
        'user1_id',
        'user2_id',
        'number_of_questions',
        'time_per_question',
        'status'
    ];

    // A challenge belongs to team 1
    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }

    // A challenge belongs to team 2
    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id');
    }

    // A challenge belongs to user 1
    public function user1()
    {
        return $this->belongsTo(User::class, 'user1_id');
    }

    // A challenge belongs to user 2
    public function user2()
    {
        return $this->belongsTo(User::class, 'user2_id');
    }

    // A challenge can have many questions
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
