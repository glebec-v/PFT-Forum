<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostsByCategoryController extends Controller // TODO переименовать в PostsThreadsController
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getThread($category_id) // TODO переименовать в getBytread
    {
        $forumpost = Post::threadByCategory($category_id)->get();
        $category = $forumpost->first()->category->name;
        return view('posts.index')->with([
            'posts' => $forumpost,
            'category' => $category
        ]);
    }

    // TODO дописать getBycomments($id)
}
