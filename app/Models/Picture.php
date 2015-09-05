<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
