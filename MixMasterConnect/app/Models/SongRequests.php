<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class SongRequests extends Model
{
    use HasFactory,Loggable,SoftDeletes;
    protected $table = 'song_requests';
    protected $fillable = [
        'request_box_id',
        'song_name',
        'song_url',
        'votes',
        'is_active',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public $timestamps = true;
}
