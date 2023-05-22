<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Djs extends Model
{
    use HasFactory,Loggable,SoftDeletes;
    protected $table = 'djs';
    protected $fillable = [
        'user_id',
        'name',
        'user_name',
        'email',
        'contact',
        'ratings',
        'profile_img_url',
        'cover_img_url',
        'is_active',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public $timestamps = true;
}
