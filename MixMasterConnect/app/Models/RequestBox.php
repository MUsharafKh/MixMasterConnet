<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestBox extends Model
{
    use HasFactory,Loggable,SoftDeletes;
    protected $table = 'request_boxes';
    protected $fillable = [
        'dj_id',
        'event_name',
        'activated_from',
        'expired_at',
        'max_songs',
        'event_description',
        'is_closed',
        'pin_code',
        'cover_photo',
        'current_song',
        'play_list_url',
        'ratings',
        'is_active',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public $timestamps = true;
    public function djData(){
        return $this->belongsTo(Djs::class,'dj_id');
    }
}
