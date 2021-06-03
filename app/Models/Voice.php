<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voice extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function psot()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
