<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use HasFactory, SoftDeletes , HasRoles;
    protected $fillable = ['name', 'email', 'phone' , 'password'];
    protected $dates = ['deleted_at'];
    protected $guard_name = 'admin';

    protected $hidden = [
        'password',
     ];
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($admin)
        {
            $admin->category()->detach();
        });
    }
    protected $guarded = [];

    public function category():BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'admin_category');
    }
    public function isAdmin()
    {
        return $this->hasRole('admin');
    }


}
