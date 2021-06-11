<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voice extends Model
{
    use HasFactory;
    protected $table = 'voices';
    public $timestamps = false;
    protected $nullable = ['voice_date','post_id'];
    public function psot()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
