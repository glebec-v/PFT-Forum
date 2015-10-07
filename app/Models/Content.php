<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable =[
        'body',
        'code',
        'post_id'
    ];
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
