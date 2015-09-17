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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $category = Category::lists('name', 'id');
        return view('posts.create')->with('category', $category);
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
        /*
        $pictures = new Picture([
            'link' => $request->get('link'),
            'link_small' => $request->get('title')
        ]);
        */
        $post->save();
        $post->content()->save($content);
        //$post->pictures()->save($pictures);

        // привязка авторизованного пользователя к создаваемому посту
        // $forumpost = new Post($request->all());
        // Auth::user()->posts()->save($forumpost);

        dd($post->toArray());
        dd($content->toArray());
        return redirect('/');
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
        //
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
        //
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
