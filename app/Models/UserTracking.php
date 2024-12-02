<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTracking extends Model
{
    protected  $table = 'user_tracking';
    protected $fillable = [
        'user_id'  ,
        'app_entries_count',
        'play_count',
        'win_count',
        'loss_count' ,
        'create_at'
    ];
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
