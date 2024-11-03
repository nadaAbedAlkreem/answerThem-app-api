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
        'category_id' ,
        'number_of_questions',
        'time_per_question',
        'status'
    ];

    // A challenge belongs to team 1
    public function teamMember1()
    {
        return $this->belongsTo(TeamMember::class, 'team_member1_id'); // foreign key in the challenges table
    }

    public function teamMember2()
    {
        return $this->belongsTo(TeamMember::class, 'team_member2_id'); // foreign key in the challenges table
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id'); // foreign key in the challenges table
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
