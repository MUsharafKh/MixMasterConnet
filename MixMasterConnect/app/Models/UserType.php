<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserType extends Model
{
    use HasFactory,Loggable,SoftDeletes;
    protected $table = 'user_types';
    protected $fillable = [
        'name',
        'remarks',
        'is_active',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public $timestamps = true;
}
