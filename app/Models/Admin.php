<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'email', 'phone'];
    protected $dates = ['deleted_at'];

    protected $hidden = [
        'password',
     ];

}
