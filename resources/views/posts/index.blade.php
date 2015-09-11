@extends('layouts.master')
@section('content')
    <h2>{{ $category }}</h2>
    @if ($posts->count() > 0)
        <ul>
            @foreach($posts as $post)
                <li>
                    @if ($post->child)
                        {!! link_to('posts/comments/'.$post->id, $post->title) !!}
                    @else
                        {{ $post->title }}
                    @endif
                </li>
            @endforeach
        </ul>
    @else
        <p>В этой категории нет постов</p>
    @endif

@stop