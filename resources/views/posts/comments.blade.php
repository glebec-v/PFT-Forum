@extends('layouts.master')
@section('content')
    @if ($comments->count() > 0)
        <ul>
            @foreach($comments as $post)
                <li>
                    @if ($post->child)
                        К этому посту имеются комментарии:
                        {!! link_to('posts/comments/'.$post->id, $post->title) !!}
                        {!! link_to('post/'.$post->id, 'Посмотреть пост') !!}
                    @else
                        {!! link_to('post/'.$post->id, $post->title) !!}
                    @endif
                </li>
            @endforeach
        </ul>
    @endif

@stop