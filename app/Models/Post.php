<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'title','comment','user_id'
    ];
    protected $nullable =[
        'music_date','movie_date'
    ];

    protected $primaryKey = "id";
//  hasManyはここから
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function likes()
    {
        return $this->hasMany('App\Models\Like');
    }

    public function preservations()
    {
        return $this->hasMany('App\Models\Preservation');
    }

    public function musics()
    {
        return $this->hasMany('App\Models\Music');
    }

    public function movies()
    {
        return $this->hasMany('App\Models\Movie');
    }

    public function writes()
    {
        return $this->hasMany('App\Models\Write');
    }

    public function voices()
    {
        return $this->hasMany('App\Models\Voice');
    }
//  belongsToMany
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
//  berongsToはここから
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
