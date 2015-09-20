<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
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
        $categories = Category::lists('name');
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
        $post = new Post([
            'title' => $request->get('title'),
            'parent_id' => $request->get('parent_id'),
            'category_id' => $request->get('category_id'),
            'child' => $request->get('child'),
            'user_id' => $request->get('user_id')
        ]);
        $content = new Content([
            'body' => $request->get('body'),
            'code' => $request->get('code')
        ]);

        // todo может вообще перенести проверку upload картинки в FormRequest???
        $destinationPath = '/home/glebec/forumProfit/img'; // todo временное решение, определиться с местом храниения файлов
        $imageFileName = 'img'.$post->user_id;             // todo временное решение, определиться с порядком именования файлов
        if ($request->file('image')->isValid()){
            $request->file('image')->move($destinationPath, $imageFileName);
        }
        $pictures = new Picture([
            'link' => $destinationPath,
    //  todo добавить преобразование картинки в маленький формат      'link_small' => $request->get('title')
        ]);

        $post->save();
        $post->content()->save($content);
        $post->pictures()->save($pictures);

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
        return view('posts.edit')-with('forumpost', $forumpost);
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
            'title' => $request->get('title')
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
        //
    }
}
