<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // public $timestamps = false;
    protected $primaryKey = "post_id";
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
