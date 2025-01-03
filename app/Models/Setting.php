<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use HasFactory , SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'key',
        'value',
        'description' ,
        'base_term'  ,
        'lang',
        'type',
        'remember_token'

    ];

}
