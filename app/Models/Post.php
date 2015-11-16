<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'code',
        'user_id', // TODO this is temporary!!!
        'parent_id',
        'category_id',
        'child'
    ];

    public function scopeThreadByCategory($query, $category_id)
    {
        return $query->where('category_id', $category_id)->where('parent_id', 0);
    }
    public function scopeThreadByComments($query, $commentedPost_id)
    {
        return $query->where('parent_id', $commentedPost_id)->orWhere('id', $commentedPost_id);
    }

    public function scopeLastPosts($query, $count)
    {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
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

    public static function countChildren($id)
    {
        $count = 0;
        $thread = Post::threadByComments($id)->get();
        $firstId = $thread->keys()->first();
        $thread->forget($firstId);
        foreach ($thread as $post){
            if ($post->child)
                $count = static::countChildren($post->id) + 1;
            $count++;
        }
        return $count;
    }
}
