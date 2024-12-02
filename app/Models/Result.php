<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'challenge_id',
        'first_competitor_id',
        'second_competitor_id',
        'score_FC',
        'score_SC',
        'winner_id',
        'is_tie'
    ];
    protected $dates = ['deleted_at'];

    public function firstCompetitor()
    {
        return $this->belongsTo(User::class, 'first_competitor_id');
    }
    public function secondCompetitor()
    {
        return $this->belongsTo(User::class, 'second_competitor_id');
    }
    public function winner()
    {
        return $this->belongsTo(User::class, 'winner_id');
    }

    public function challenge()
    {
        return $this->belongsTo(Challenge::class  , 'challenge_id');
    }

}
