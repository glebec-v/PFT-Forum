@extends('layouts.master')
@section('content')
    @if ($comments->count() > 0)
        <ul>
            @foreach($comments as $post)
                <li>
                    @if ($post->child)
                        {{ $post->title }}
                    @else
                        {{ $post->title }}
                    @endif
                </li>
            @endforeach
        </ul>
    @endif

@stop