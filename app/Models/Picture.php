<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable =['link'];
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
