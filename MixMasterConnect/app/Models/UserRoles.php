<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRoles extends Model
{
    use HasFactory,Loggable,SoftDeletes;
    protected $table = 'user_roles';
    protected $fillable = [
        'role_name',
        'code',
        'is_active',
        'remarks',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public $timestamps = true;
}
