<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use HasFactory, SoftDeletes , HasRoles;
    protected $fillable = ['name', 'email', 'phone' , 'password'  , 'category_id'];
    protected $dates = ['deleted_at'];
    protected $guard_name = 'admin';

    protected $hidden = [
        'password',
     ];

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function isAdmin()
    {
        return $this->hasRole('admin');
    }

}
