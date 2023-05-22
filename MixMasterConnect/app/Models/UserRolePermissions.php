<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRolePermissions extends Model
{
    use HasFactory,Loggable,SoftDeletes;
    protected $table = 'user_role_permissions';
    protected $fillable = [
        'role_id',
        'module_id',
        'module_code',
        'md_group',
        'is_enable',
        'can_create',
        'can_update',
        'can_view',
        'can_delete',
        'can_approve',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public $timestamps = true;
}
