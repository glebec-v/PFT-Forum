<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostsThreadsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'getCreateNext']);
    }
    /**
     * Показывает полную ветку в выбранной категории
     * @param $category_id
     * @return $this
     */
    public function getThread($category_id)
    {
        $forumpost = Post::threadByCategory($category_id)->get();
        $category = $forumpost->first()->category;
        return view('posts.index')->with(['posts' => $forumpost, 'category' => $category]);
    }

    /**
     * Показывает ветку комментариев
     * @param $id
     * @return $this
     */
    public function getComments($id)
    {
        $comments = Post::threadByComments($id)->get();
        return view('posts.comments')->with('comments', $comments);
    }

    /**
     * Создает новый пост, в случае если он является комментарием или стартовым постом в уже выбранной категории
     * @param $category_id
     * @param int $parent_id
     * @return $this
     */
    public function getCreateNext($category_id, $parent_id)
    {
        if($parent_id == 0) {
            $category = Post::threadByCategory($category_id)->get()->first()->category;
            return view('posts.create')->with('category', $category);
        } else {
            $forumpost = Post::findOrFail($parent_id);
            $forumpost->child = true;
            $forumpost->save();
            return view('posts.create')->with('forumpost', $forumpost);
        }
    }
}
