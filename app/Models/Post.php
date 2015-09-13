<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'user_id' // TODO this is temporary!!!
    ];

    public function scopeThreadByCategory($query, $category_id)
    {
        return $query->where('category_id', $category_id);
    }
    public function scopeThreadByComments($query, $commentedPost_id)
    {
        return $query->where('parent_id', $commentedPost_id)->orWhere('id', $commentedPost_id);
    }

    public function content()
    {
        return $this->hasOne('App\Models\Content');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function pictures()
    {
        return $this->hasMany('App\Models\Picture');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
