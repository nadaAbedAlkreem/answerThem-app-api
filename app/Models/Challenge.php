<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Challenge extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name_game' ,
        'team1_id',
        'team2_id',
        'user1_id',
        'user2_id',
        'category_id' ,
        'number_of_questions',
        'time_per_question',
        'status'
    ];
    protected $dates = ['deleted_at'];

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

     public function user2()
    {
        return $this->belongsTo(User::class, 'user2_id');
    }

    // A challenge can have many questions
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($question) {
            // Soft delete related friend requests
            $question->Question()->each(function ($question) {
                $question->delete(); // Soft delete sent requests
            });

        });
    }
    public function result()
    {
        return $this->hasOne(Result::class , 'challenge_id');
    }
}
