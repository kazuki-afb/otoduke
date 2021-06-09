<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;
    protected $table = 'musics';
    public $timestamps = false;
    protected $fillable = [
        'music_date','post_id',
    ];
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
