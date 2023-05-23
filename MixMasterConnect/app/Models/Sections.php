<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sections extends Model
{
    use HasFactory,Loggable,SoftDeletes;
    protected $table = 'sections';
    protected $fillable = [
        'page_id',
        'display_order',
        'content',
        'is_active',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public $timestamps = true;
    public function pageData(){
        return $this->belongsTo(Pages::class,'page_id');
    }
}
