<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pages extends Model
{
    use HasFactory,Loggable,SoftDeletes;
    protected $table = 'pages';
    protected $fillable = [
        'page_title',
        'meta_keywords',
        'meta_description',
        'url_slug',
        'is_active',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public $timestamps = true;
}
