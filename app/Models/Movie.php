<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movies';
    public $timestamps = false;
    protected $nullable = [
        'movie_date','post_id'
    ];
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
