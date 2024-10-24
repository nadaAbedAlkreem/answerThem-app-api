<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model
{
    use SoftDeletes ;

    protected $fillable = [
        'sender_id',
        'title',
        'description'
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }



}
