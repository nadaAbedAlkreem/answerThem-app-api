<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{

    use HasFactory, SoftDeletes;

    protected $fillable = ['name_ar', 'name_en', 'user_id'];
    protected $dates = ['deleted_at'];



    // A team belongs to a user (creator)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A team can participate in multiple challenges
//    public function challenges()
//    {
//        return $this->hasMany(Challenge::class, 'team1_id');
//    }

    // A team can be challenged by other teams
//    public function challengesReceived()
//    {
//        return $this->hasMany(Challenge::class, 'team2_id');
//    }
    public function teamMembers()
    {
        return $this->hasMany(TeamMember::class, 'team_id');
    }

}
