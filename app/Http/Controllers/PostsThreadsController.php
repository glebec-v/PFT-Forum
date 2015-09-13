<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostsThreadsController extends Controller
{
    /**
     * @param $category_id
     * @return $this
     */
    public function getThread($category_id)
    {
        $forumpost = Post::threadByCategory($category_id)->get();
        $category = $forumpost->first()->category->name;
        return view('posts.index')->with([
            'posts' => $forumpost,
            'category' => $category
        ]);
    }

    /**
     * @param $id
     * @return $this
     */
    public function getComments($id)
    {
        $comments = Post::threadByComments($id)->get();
        return view('posts.comments')->with('comments', $comments);
    }
}
