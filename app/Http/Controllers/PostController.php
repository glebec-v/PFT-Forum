<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Picture;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return redirect('categories');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::lists('name', 'id');
        return view('posts.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //dd($request->get('category_id'));
        $post = new Post([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'code' => $request->get('code'),
            'parent_id' => $request->get('parent_id'),
            'category_id' => $request->get('category_id'),
            'child' => $request->get('child'),
            'user_id' => $request->get('user_id')
        ]);
        $post->save();

        $pictures = $request->file('images');

        if (!is_null($pictures[0])) {

            $destinationPath = storage_path('images');
            foreach($pictures as $image) {
                $imageFileName = 'img_' . str_random(20) . '_' . $post->user_id; // todo решение спорное, однако пока так
                if ($image->isValid()) {
                    $image->move($destinationPath, $imageFileName);
                }
                $picture = new Picture(['link' => $imageFileName]);
                $post->pictures()->save($picture);
            }
        }

        // привязка авторизованного пользователя к создаваемому посту
        // $forumpost = new Post($request->all());
        // Auth::user()->posts()->save($forumpost);

        // Todo отработать осмысленный редирект, так как пост может создаваться тремя разными способами
        return redirect('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $forumpost = Post::findOrFail($id);
        return view('posts.show')->with('forumpost', $forumpost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $forumpost = Post::findOrFAil($id);
        return view('posts.edit')->with('forumpost', $forumpost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $forumpost = Post::findOrFAil($id);
        $forumpost->update([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'code' => $request->get('code')
        ]);
        return view('posts.show')->with('forumpost', $forumpost);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $parent = Post::find($id)->parent_id;
        if ($parent == 0) {
            $comments = Post::threadByComments($id)->get();
            if (count($comments) > 1)
                return redirect('categories')->with(
                    'message', 'Это стартовое сообщение в ветке и оно не может быть удалено'
                );
            // todo добавить возможность удаления корневого сообщения с перемещением существующей ветки
        }// родительский пост, берем все комментарии к нему
        else
            $comments = Post::threadByComments($parent)->get(); // один из комментариев,
                                                                // берем комментарии по родительскому
        if (count($comments) == 2) {
            $startPost = $comments->first();
            $startPost->child = false;
            $startPost->save();
        }

        Post::destroy($id);
        // TODO не удаляет фалы картинок с диска, только имена из БД. Нужен чистильщик
        return redirect('categories')->with('message', 'Ваше сообщение было удалено');
    }
}
