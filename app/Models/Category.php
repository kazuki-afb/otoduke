<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = "id";
    // hasMany
    // belongsToMany
    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }
}
