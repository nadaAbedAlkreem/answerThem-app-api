<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evaluation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'rating' , 'descriptive_evaluation'];
    protected $dates = ['deleted_at'];

    public function usersEvaluation()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
