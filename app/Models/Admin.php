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
    protected $fillable = ['name', 'email', 'phone' , 'password'];
    protected $dates = ['deleted_at'];
    protected $guard_name = 'admin'; // تأكد من أن الحارس هنا هو نفسه الحارس المستخدم للدور

    protected $hidden = [
        'password',
     ];

    protected $guarded = [];

    public function isAdmin()
    {
        return $this->hasRole('admin');
    }


}
