<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{

    protected $fillable = [
        'team_id',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // foreign key
    }

    // Define the relationship with the Team model
    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id'); // foreign key
    }
    public function challengesAsTeam1()
    {
        return $this->hasMany(Challenge::class, 'team1_id'); // Challenges where this team member is team 1
    }

    public function challengesAsTeam2()
    {
        return $this->hasMany(Challenge::class, 'team2_id'); // Challenges where this team member is team 2
    }





}