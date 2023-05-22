<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    use HasFactory,Loggable,SoftDeletes;
    protected $table = 'modules';
    protected $fillable = [
        'module_name',
        'icon',
        'module_code',
        'module_group',
        'url_slug',
        'is_active',
        'is_enable',
        'can_create',
        'can_update',
        'can_view',
        'can_delete',
        'can_approve',
        'display_order',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public $timestamps = true;
}
